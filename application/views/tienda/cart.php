

        
        <div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Mi carrito</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>">Inicio</a></span> <span>Carrito</span></p>
          </div>
        </div>
      </div>
    </div>
        
    <section class="ftco-section ftco-cart mt-0">
        <div class="container" >
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="cart-list" id="carrito"></div>
                    </div>
                </div>

                <div class="row justify-content-end" id="resumenCarrito">
                    
                </div>
        </div>
    </section>



<script>
   $(document).ready(function() {

        $('#carrito').load("<?php echo base_url(); ?>cart/load");
        $('#resumenCarrito').load("<?php echo base_url(); ?>cart/loadResumen");

        $(document).on('click','.remove_inventory', function() {
            var id = $(this).attr("id");
            if (confirm("¿Deseas eliminar este complemento del carrito?")) {
                $.ajax({
                    url:"<?php echo base_url(); ?>cart/remove",
                    method:"POST",
                    data:{id:id},
                    success:function(data) {
                        $('#cantidad_carrito').html(data);
                        $('#carrito').load("<?php echo base_url(); ?>cart/load");

                        if(data =='0'){
                            $('#resumenCarrito').hide();
                        }
                        else {
                            $('#resumenCarrito').load("<?php echo base_url(); ?>cart/loadResumen");}
                    }
                });
            } else {
                return false;
            }
        });

        $(document).on('click','.update_inventory', function() {
            var id = $(this).attr("id");
            var cantidad = $('#quantity'+id).val();
            $.ajax({
                url:"<?php echo base_url(); ?>cart/update_qty",
                method:"POST",
                data:{
                    id:id,
                    cantidad:cantidad
                },
                success:function(data) {
                    $('#cantidad_carrito').html(data);
                    $('#carrito').load("<?php echo base_url(); ?>cart/load");

                    if(data =='0'){
                        $('#resumenCarrito').hide();
                    }
                    else {
                        $('#resumenCarrito').load("<?php echo base_url(); ?>cart/loadResumen");}
                }
            });
                        
        });

    });    



</script>