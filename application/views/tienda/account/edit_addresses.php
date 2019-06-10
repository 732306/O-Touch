		
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
			          			<h3 class="mb-4">Editar Dirección</h3>	
								<form action="<?php echo base_url();?>account/saveAddress/<?php echo $dir_usuario->id_dir;?>" class="profile-form p-2" method="POST" name="login">
	       	<div class="row align-items-end">
					<div class="col-md-12">
		                <div class="form-group">
		                	<label for="inputCalle">Calle *</label>
		                  	<input name="calle" id="inputCalle" type="text" class="form-control" placeholder="" value="<?php echo $dir_usuario->calle?>" required>
		                </div>
	                </div>
	                <div class="w-100"></div>
	                <div class="col-md-6">
		                <div class="form-group">
		                	<label for="inputNumero">Número *</label>
		                  	<input value="<?php echo $dir_usuario->num?>" name="numero" id="inputNumero" type="numeric" class="form-control" placeholder="">
		                </div>
	                </div>
	                <div class="col-md-6">
		                <div class="form-group">
		                	<label for="inputPuerta">Puerta *</label>
		                  	<input name="puerta" value="<?php echo $dir_usuario->puerta?>" id="inputPuerta" type="text" class="form-control" placeholder="">
		                </div>
	                </div>
	                <div class="w-100"></div>
	                <div class="col-md-6">
		                <div class="form-group">
		                	<label for="inputCiudad">Ciudad *</label>
		                  	<input name="ciudad" value="<?php echo $dir_usuario->ciudad?>" id="inputCiudad" type="text" class="form-control" placeholder="" required>
		                </div>
	                </div>
               		<div class="col-md-6">
		            	<div class="form-group">
		                	<label for="inputProvincia">Provincia *</label>
		                  	<input name="provincia" value="<?php echo $dir_usuario->provincia?>" id="inputProvincia" type="text" class="form-control" placeholder="" required>
		                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		                <div class="form-group">
		                	<label for="inputCP">CP</label>
		                  	<input name="cp" value="<?php echo $dir_usuario->cp?>" id="inputCP" type="numeric" class="form-control" placeholder="">
		                </div>
	              	</div>
	              	<div class="col-md-6">
		                <div class="form-group">
		            		<label for="country">País *</label>
		            		<div class="select-wrap">
			                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                  <select name="pais" id="listaPais" class="form-control">
			                  	<option <?php if ( 'españa' === $dir_usuario->pais ) 
										    { echo 'selected';} ?> 
										    value="españa">España</option>
			                    <option <?php if ( 'portugal' === $dir_usuario->pais ) 
										{ echo 'selected';}?> 
										    value="portugal">Portugal</option>
			                  </select>
		                	</div>
		            	</div>
	                </div>
	                <div class="w-100"></div>
	                <div class="col-md-12">
	                	<div class="form-check">
						  <input class="form-check-input" name="inputPrincipal" type="checkbox" value="1" id="inputPrincipal">
						  <label class="form-check-label" for="inputPrincipal">
						    Usar como mi dirección de envíos por defecto
						  </label>
						</div>
	                </div>

	                <div class="col-md-12 mt-3">
	                <button class="btn btn-primary" type="submit" style="padding: 10px 5px !important; width: 200px; ">Guardar</button>
				</div>
	        </form>
								
							</div>
			          	</div>
			        </div>
          		</div>
        	</div>
      	</div>
    </section> <!-- .section -->

