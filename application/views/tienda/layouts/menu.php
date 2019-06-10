  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo base_url();?>">O'Touch</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          	<li class="nav-item active"><a href="<?php echo base_url();?>" class="nav-link">Inicio</a></li>

	          	<?php if (!empty($this->session->titulos)) { ?>
	          	<li class="nav-item dropdown">

	              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Complementos</a>
	              <div class="dropdown-menu" aria-labelledby="dropdown04">
	              	<a class="dropdown-item" href="<?php echo base_url();?>shop/" >
							Ver Todos
						</a>
	              	<?php foreach($this->session->titulos as $categoria): ?>
						<a class="dropdown-item" href="<?php echo base_url();?>shop/category/<?php echo $categoria->id?>" >
							<?php echo ucwords($categoria->titulo_cat); ?>
						</a>
	              	<?php endforeach; ?>
	              	
	              </div>
            	</li>
            	<?php } ?>
	         	<li class="nav-item"><a href="<?php echo base_url();?>blog" class="nav-link">Blog</a></li>
	          	<li class="nav-item"><a href="<?php echo base_url();?>contact" class="nav-link">Contacto</a></li>

	          	<?php 
	          	if (isset($this->session->logged_in) && ($this->session->logged_in) == TRUE) { ?>
	          		<li class="nav-item dropdown">
			              <a class="nav-link dropdown-toggle" href="#" id="dropdownCuenta" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			              	<span class="icon-user"></span>&nbsp  
			              	<?php echo ucwords($this->session->username);?>
			              </a>
			              <div class="dropdown-menu" aria-labelledby="dropdownCuenta">
			              	<a class="dropdown-item" href="<?php echo base_url();?>account">Mi Perfil</a>
			              	<a class="dropdown-item" href="<?php echo base_url();?>login/logout">Cerrar Sesión</a>
			              </div>
    				</li>

	          	<?php }
	          	else { ?>
	          		<li class="nav-item"><a href="<?php echo base_url();?>login" class="nav-link"><span class="icon-user"></span> Iniciar sesión</a></li>
	          	<?php } ?>
		          
		        <li class="nav-item cta cta-colored"><a href="<?php echo base_url();?>cart" class="nav-link"><span class="icon-shopping_cart"></span>

		        	[<?php echo $this->cart->total_items() ?>]

		        </a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->