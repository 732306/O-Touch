
		
	<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Tramitar Pedido</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>">Inicio</a></span> <span>Tramitar Pedido</span></p>
          </div>
        </div>
      </div>
    </div>
		
	<section class="ftco-section">
      <div class="container">
      	<form action="<?php echo base_url();?>checkout/finalizar" method='POST' class="billing-form bg-light p-3 p-md-5">
        <div class="row justify-content-center">
          <div class="col-xl-8 ftco-animate">
							<h3 class="mb-4 billing-heading">Detalles de Pago</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Nombre</label>
	                  <input readonly value="<?php echo $usuario->nombre ?>" type="text" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Apellidos</label>
	                  <input readonly value="<?php echo $usuario->apellidos ?>" type="text" class="form-control" placeholder="">
	                </div>
                </div>

                <div class="w-100"></div>
           		<div class="col-md-12">
	            	<div class="form-group">
	            		<label for="country">Sus Direcciones</label>
	            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select id="direccionesAlmacenadas" name="direccionesAlmacenadas" class="form-control">

		                  	<?php foreach($direcciones as $direccion): ?>
		                  		<option value="<?php echo $direccion->id_dir; ?>"
				                  	<?php if ( 'masculino' === $usuario->genero ) 
				                  		{ echo 'selected';}?>
				                  	><?php echo "".$direccion->calle.
				                  	", ".$direccion->num.
				                  	", ".$direccion->puerta.
				                  	", ".$direccion->ciudad.
				                  	", ".$direccion->cp.
				                  	", ".$direccion->provincia.
				                  	", ".strtoupper($direccion->pais).""


				                  	?> </option>

		                  	<?php endforeach; ?>
	
		                  	
		                  </select>
	                	</div>
	            	</div>
	            </div>

                <div class="col-md-12">
		                <div class="form-group">
		                	<label for="inputCalle">Calle *</label>
		                  	<input name="calle" id="calle" type="text" class="form-control" placeholder="" value="<?php echo $direcciones['0']->calle ?>" required>
		                </div>
	                </div>
	                <div class="w-100"></div>
	                <div class="col-md-6">
		                <div class="form-group">
		                	<label for="inputNumero">Número *</label>
		                  	<input value="<?php echo $direcciones['0']->num ?>" name="numero" id="inputNumero" type="numeric" class="form-control" placeholder="">
		                </div>
	                </div>
	                <div class="col-md-6">
		                <div class="form-group">
		                	<label for="inputPuerta">Puerta *</label>
		                  	<input name="puerta" value="<?php echo $direcciones['0']->puerta ?>" id="inputPuerta" type="text" class="form-control" placeholder="">
		                </div>
	                </div>
	                <div class="w-100"></div>
	                <div class="col-md-6">
		                <div class="form-group">
		                	<label for="inputCiudad">Ciudad *</label>
		                  	<input name="ciudad" value="<?php echo $direcciones['0']->ciudad ?>" id="inputCiudad" type="text" class="form-control" placeholder="" required>
		                </div>
	                </div>
               		<div class="col-md-6">
		            	<div class="form-group">
		                	<label for="inputProvincia">Provincia *</label>
		                  	<input name="provincia" value="<?php echo $direcciones['0']->provincia ?>" id="inputProvincia" type="text" class="form-control" placeholder="" required>
		                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		                <div class="form-group">
		                	<label for="inputCP">CP</label>
		                  	<input name="cp" value="<?php echo $direcciones['0']->cp ?>" id="inputCP" type="numeric" class="form-control" placeholder="">
		                </div>
	              	</div>
	              	<div class="col-md-6">
		                <div class="form-group">
		            		<label for="country">País *</label>
		            		<div class="select-wrap">
			                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                  <select name="pais" id="listaPais" class="form-control">
			                  	<option <?php if ( 'españa' === $direcciones['0']->pais ) 
										    { echo 'selected';} ?> 
										    value="españa">España</option>
			                    <option <?php if ( 'portugal' === $direcciones['0']->pais ) 
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

                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
										<div class="radio">
										  <label class="mr-3"><input type="radio" name="optradio"> Create an Account? </label>
										  <label><input type="radio" name="optradio"> Ship to different address</label>
										</div>
					</div>
                </div>
	            </div>



	          <div class="row mt-5 pt-3 d-flex">
	          	<div class="col-md-6 d-flex">
	          		<div class="cart-detail cart-total bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Total</h3>
	          			<p class="d-flex">
		    						<span>Subtotal</span>
		    						<span><?php echo $this->cart->total();?> €</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Envío</span>
		    						<span>7,00 €</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Descuento</span>
		    						<span>0,00 €</span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Total</span>
		    						<span><?php echo ($this->cart->total()+7); ?> €</span>
		    					</p>
								</div>
	          	</div>
	          	<div class="col-md-6">
	          		<div class="cart-detail bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Método de Pago</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Transferencia</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2">	Tarjeta de Crédito</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" value="" class="mr-2"> He leído y acepto los términos y condiciones.</label>
											</div>
										</div>
									</div>
									<p>
										<<button class="btn btn-primary py-3 px-4" type="submit">Finalizar Pedido</button>
										</p>
								</div>
	          	</div>

	          </div>
          </div> <!-- .col-md-8 -->
        </div>
        </form><!-- END -->
      </div>
    </section> <!-- .section -->

 