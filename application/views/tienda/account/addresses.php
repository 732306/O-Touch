
		
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
			          			<h3 class="mb-4">LIBRETA DE DIRECCIONES</h3>	
								<a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#agregarDireccion">Añadir otra dirección</a>
								<div class="">
									<h2 class="account-heading-item mb-5" style="margin-bottom: 0.1rem !important;">DIRECCIONES PREDETERMINADA</h2>
									<?php if (!empty($direcciones)) { ?>
										<div class="row align-items-end">
											<?php foreach($direcciones as $direccion): ?>
												<div class="panel-panel-default">
													<?php if ($direccion->principal == '1') { ?>
														<div class="panel-body">Dirección de envío predeterminada</div>
													<?php }
													else { ?>
														<div class="panel-body">Dirección de envío adicional</div>
													<?php } ?>
														<div class="panel-footer">
															<p><?php echo strtoupper($this->session->username); ?>&nbsp;<?php echo strtoupper($this->session->lastname); ?></p>
												       		<p>C/ <?php echo ucwords($direccion->calle); ?>,&nbsp;Nº<?php echo $direccion->num; ?>&nbsp;<?php echo $direccion->puerta; ?></p>
												       		<p><?php echo ucwords($direccion->ciudad); ?>,&nbsp;<?php echo ucwords($direccion->provincia); ?>,&nbsp;<?php echo $direccion->cp; ?></p>
												       		<p><?php echo ucwords($direccion->pais); ?><i class="edit-btn icon-edit float-right"></i></p>
														</div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php } ?>
								</div>
							</div>
			          	</div>
			        </div>
          		</div>
        	</div>
      	</div>
    </section> <!-- .section -->

<!-- MODAL DIRECCIÓN -->
<div class="modal fade" id="agregarDireccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir dirección</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	       <form action="<?php echo base_url();?>account/addAddress" class="profile-form p-2" method="POST" name="login">
	       	<div class="row align-items-end">
					<div class="col-md-12">
		                <div class="form-group">
		                	<label for="inputCalle">Calle *</label>
		                  	<input name="inputCalle" id="inputCalle" type="text" class="form-control" placeholder="" required>
		                </div>
	                </div>
	                <div class="w-100"></div>
	                <div class="col-md-6">
		                <div class="form-group">
		                	<label for="inputNumero">Número *</label>
		                  	<input name="inputNumero" id="inputNumero" type="numeric" class="form-control" placeholder="">
		                </div>
	                </div>
	                <div class="col-md-6">
		                <div class="form-group">
		                	<label for="inputPuerta">Puerta *</label>
		                  	<input name="inputPuerta" id="inputPuerta" type="text" class="form-control" placeholder="">
		                </div>
	                </div>
	                <div class="w-100"></div>
	                <div class="col-md-6">
		                <div class="form-group">
		                	<label for="inputCiudad">Ciudad *</label>
		                  	<input name="inputCiudad" id="inputCiudad" type="text" class="form-control" placeholder="" required>
		                </div>
	                </div>
               		<div class="col-md-6">
		            	<div class="form-group">
		                	<label for="inputProvincia">Provincia *</label>
		                  	<input name="inputProvincia" id="inputProvincia" type="text" class="form-control" placeholder="" required>
		                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		                <div class="form-group">
		                	<label for="inputCP">CP</label>
		                  	<input name="inputCP" id="inputCP" type="numeric" class="form-control" placeholder="">
		                </div>
	              	</div>
	              	<div class="col-md-6">
		                <div class="form-group">
		            		<label for="country">País *</label>
		            		<div class="select-wrap">
			                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                  <select name="listaPais" id="listaPais" class="form-control">
			                  	<option value="españa">España</option>
			                    <option value="portugal">Portugal</option>
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
				</div>
	        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="login.submit()">Guardar dirección</button>
      </div>
    </div>
  </div>
</div>
 