
		
		<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Producto</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>">Inicio</a></span> <span class="mr-2"><a href="<?php echo base_url(); ?>shop/category/<?php echo $articulo->id_cat?>"> <?php echo $articulo->titulo_cat ;?> </a></span> <span>Producto: <?php echo $articulo->titulo ;?></span></p>
          </div>
        </div>
      </div>
    </div>
		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="<?php echo base_url(); ?>assets/images/<?php echo $articulo->url_img; ?>" class="image-popup"><img src="<?php echo base_url(); ?>assets/images/<?php echo $articulo->url_img; ?>" class="img-fluid" alt="<?php echo $articulo->titulo ;?>"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?php echo $articulo->titulo ;?></h3>
    				<p class="price"><span><?php echo $articulo->precio ;?> €</span></p>
    				<p><?php echo $articulo->descripcion;?></p>
    				
						<div class="row mt-4">
							<div class="col-md-4">
								<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                  <select name="" id="" class="form-control">
	                  	<option value="">Small</option>
	                    <option value="">Medium</option>
	                    <option value="">Large</option>
	                    <option value="">Extra Large</option>
	                  </select>
	                </div>
		            </div>
							</div>
							<div class="input-group col-md-4 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
	          	</div>
              <div class="input-group col-md-4 d-flex mb-3">
                <button type="button"
                class="btn-primary btn_add col-md-12"
                data-cod="<?php echo $articulo->cod_art; ?>"
                data-precio="<?php echo $articulo->precio; ?>"
                data-img="<?php echo $articulo->url_img; ?>"
                data-titulo="<?php echo $articulo->titulo; ?>"
                data-descripcion="<?php echo $articulo->descripcion; ?>" 
                >Añadir al carrito</button>
              </div>
          	</div>
              
    			</div>
    		</div>
    	</div>
    </section>
