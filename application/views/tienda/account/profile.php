
		
		<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Mi Cuenta</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>">Inicio</a></span> <span>Perfil</span></p>
          </div>
        </div>
      </div>
    </div>
		
	<section class="ftco-section-account">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-12 ftco-animate">
	          <div class="row mt-5 pt-3 d-flex">

	          	<!-- CARGA MENU LATERAL DE PERFIL -->
	          	<?php $this->load->view('tienda/layouts/account_menu'); ?>

	          	<div class="col-md-8 col-sm-12">
	          		<div class="account-intro bg-light p-3 p-md-4">
	          			<h3 class="mb-4">EDITAR INFORMACIÓN DE SU CUENTA</h3>
							<p>Desde "Mi Cuenta" puedes ver un resumen de tus pedidos recientes y actualizar la información de tu cuenta.</p>			
							<div class="">
								<h2 class="account-heading-item mb-5" style="margin-bottom: 0.1rem !important;">MIS DATOS PERSONALES</h2>
								<form action="#" class="profile-form bg-light p-1">
							          	<div class="row align-items-end">
								          		<div class="col-md-6">
									                <div class="form-group">
									                	<label for="">Nombre *</label>
									                  	<input type="text" class="form-control" placeholder="nombre" 
									                  	value="<?php echo $this->session->username; ?>" required>
									                  	
									                </div>
								              	</div>
									            <div class="col-md-6">
									                <div class="form-group">
									                	<label for="">Apellidos *</label>
									                  	<input type="text" class="form-control" placeholder="apellidos" value="<?php echo $this->session->lastname; ?>" required>
									                </div>
								                </div>
							               		<div class="w-100"></div>
							               		<div class="col-md-6">
									            	<div class="form-group">
									            		<label for="country">Género *</label>
									            		<div class="select-wrap">
										                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
										                  <select name="" id="" class="form-control">
										                  	<option value="masculino"
										                  	<?php if ( 'masculino' === $this->session->genero ) 
										                  		{ echo 'selected';}?>


										                  	>Masculino</option>
										                    <option value="femenino" <?php if ( 'femenino' === $this->session->genero ) 
										                  		{ echo 'selected';}?>>Femenino</option>
										                  </select>
									                	</div>
									            	</div>
									            </div>
									            <div class="col-md-6">
									                <div class="form-group">
									                	<label for="">Correo</label>
									                  	<input type="text" class="form-control" value="<?php echo $this->session->email; ?>"placeholder="correo">
									                </div>
								              	</div>
								              	<div class="w-100"></div>
								              	<div class="col-md-6">
									                <div class="form-group">
									                	<label for="">CIF / NIF </label>
									                  	<input type="text" class="form-control" value="<?php echo $this->session->nif; ?>"placeholder="NIF">
									                </div>
								              	</div>
							            </div>
							            <a href="#" class="btn btn-primary" style="padding: 10px 5px !important; width: 200px; ">Guardar</a>
	          					</form><!-- END -->
							</div>
					</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
 