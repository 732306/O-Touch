
		
	<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Tienda</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>">Inicio</a></span> <span>Tienda</span> 
                <?php if(isset($categoria)) {
                    echo "<span class='mr-2'>:</span>";
                    ?><span class="mr-2"><?php echo $categoria->titulo_cat; ?></span>
                <?php } ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    	
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 col-12 ftco-animate">
              <div class="row mt-5 pt-3 d-flex">
                
                <!-- CARGA MENU LATERAL DE PERFIL -->
                <?php $this->load->view('tienda/layouts/shop_menu'); ?>
                <div class="col-md-9 col-sm-12">
                    <div class="container-fluid">
                        <div class="row">
                            <?php foreach($articulo as $row): ?>
                            <!-- PRODUCTO -->
                            <div class="col-sm-12 col-md-12 col-lg-4 ftco-animate" >
                                <div class="product">
                                    <a href="<?php echo base_url();?>shop/product/<?php echo $row->cod_art; ?>" class="img-prod"><img class="img-fluid" src="<?php echo base_url(); ?>assets/images/<?php echo $row->url_img; ?>" alt="">
                                    </a>
                                    <div class="text py-3 px-3">
                                        <h3><a href="<?php echo base_url();?>shop/product/<?php echo $row->cod_art; ?>"><?php echo $row->titulo; ?></a></h3>
                                        <div class="">
                                            <div class="pricing">
                                                <p class="price"><span class="price-sale">
                                                <?php echo $row->precio; ?>€</span></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="bottom-area d-flex flex-wrap">
                                            <button type="button" 
                                            class="w-100 btn btn-primary btn_add"
                                            data-cod="<?php echo $row->cod_art; ?>"
                                            data-precio="<?php echo $row->precio; ?>"
                                            data-img="<?php echo $row->url_img; ?>"
                                            data-titulo="<?php echo $row->titulo; ?>"
                                            data-descripcion="<?php echo $row->descripcion; ?>" 
                                            ><span>Añadir al carrito</span></button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN PRODUCTO -->
                            <?php endforeach; ?>
                        </div>
                        <!-- PAGINACION -->
                        <div class="row mt-5">
                            <div class="col text-center">
                                <div class="block-27">
                                    <ul>
                                        <li><a href="#">&lt;</a></li>
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&gt;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- FIN PAGINACION -->
                    </div>

    </div>    
    	
</section>

  <script type="text/javascript">
    $(document).ready(function() {
       $(document).on('click', '.btn_add', function(e) {
            var articulo_cod = $(this).data("cod");
            var articulo_precio = $(this).data("precio");
            var articulo_img = $(this).data("img");
            var articulo_titulo = $(this).data("titulo");
            var articulo_descripcion = $(this).data("descripcion");

                $.ajax({
                url:"<?php echo base_url(); ?>cart/add",
                method:"POST",
                data:{
                    articulo_cod:articulo_cod,
                    articulo_img:articulo_img,
                    articulo_titulo:articulo_titulo,
                    articulo_descripcion:articulo_descripcion,
                    articulo_precio:articulo_precio,
                    cantidad:1
                },
                success:function(data) {
                    $('#cantidad_carrito').html(data);
                }
            });
       });
    });
  </script>


