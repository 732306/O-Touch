
		
	<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Login</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>">Inicio</a></span> <span>Login</span></p>
          </div>
        </div>
      </div>
    </div>
		
	<section class="ftco-section-account">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-12 ftco-animate">
	          <div class="row mt-5 pt-3 d-flex justify-content-start">

	          	<div class="col-md-6 col-sm-12">
	          		<div class="account-intro bg-light p-3 p-md-4 mt-2">
	          			<h2 class="account-heading-item mb-4" style="margin-bottom: 0.1rem !important;">YA TENGO UNA CUENTA CREADA</h2>
							<p>Si ya eres usuario registrado, introduce tu email y contraseña que utilizaste en el registro.</p>
							<form action="<?php echo base_url();?>login/try_login" class="profile-form bg-light" method='POST'>
								<div class="row align-items-end">
									<?php 

									if (isset($this->session->error_message)){ ?>
										<div class="col-md-12 alert alert-danger" role="alert">
  											<?php echo ($this->session->error_message); ?>
										</div>

										
									<?php } ?>
									<div class="col-md-12">
						                <div class="form-group">
						                	<label for="inputUser">Correo</label>
						                  	<input name="inputUser" id="inputUser" type="email" class="form-control" placeholder="" required>
						                </div>
							        </div>
						            <div class="col-md-12">
						                <div class="form-group">
						                	<label for="inputPass">Contraseña</label>
						                  	<input name="inputPass" id="inputPass" type="password" class="form-control" placeholder="" required>
						                </div>
					                </div>
								</div>
								<div class="w-100"></div>
								<button class="btn btn-primary btn-cuenta" type="submit">INICIAR SESIÓN</button>
							</form>
					</div>
	          	</div>


	          	<div class="col-md-6 col-sm-12 d-flex frex-wrap mt-2 text-center align-items-around align-content-center">
	          		<div class="account-menu account-total bg-light p-3 p-md-4">
	          			<h2 class="account-heading-item mb-4" style="margin-bottom: 0.1rem !important;">¿TODAVÍA NO TIENES CUENTA?</h2>
							<p>Crearte una cuenta tiene muchas ventajas</p>
		          			<a href="#" class="btn btn-primary btn-cuenta">Crear una cuenta</a>
					</div>	
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
 