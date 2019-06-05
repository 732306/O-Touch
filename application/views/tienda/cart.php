

        
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
        
    <section class="ftco-section ftco-cart">
        <div class="container" id="carrito">
            <h3 align="center">Tu carrito tiene 0 complemento(s).</h3>
            <img src="<?php echo base_url(); ?>assets/images/carrito.svg" class="rounded mx-auto d-block" style="width: 15%;" alt="...">
        </div>
    </section>


<script>
   $(document).ready(function() {

        $('#carrito').load("<?php echo base_url(); ?>cart/load");

        $(document).on('click','.remove_inventory', function() {
            var cod_art = $(this).attr("id");
            if (confirm("¿Deseas eliminar este complemento del carrito?")) {
                $.ajax({
                    url:"<?php echo base_url(); ?>cart/remove"
                    method:"POST",
                    data:{cod_art:cod_art},
                    success:function(data) {
                        alert("Complemento eliminado correctamente del carrrito!");
                        //$('#carrito').html(data);
                    }
                });
            } else {
                return false;
            }
        });

    });    



</script>