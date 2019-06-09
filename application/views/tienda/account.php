
		
		<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url(); ?>assets/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
            <h1 class="mb-0 bread">Mi Cuenta</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>">Inicio</a></span> <span>Perfil</span></p>
          </div>
        </div>
      </div>
    </div>
		
	<section class="ftco-section-account">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 col-12 ftco-animate">
	          <div class="row mt-5 pt-3 d-flex">
	          	
	          	<!-- CARGA MENU LATERAL DE PERFIL -->
	          	<?php $this->load->view('tienda/layouts/account_menu'); ?>
	          	
	          	<div class="col-md-8 col-sm-12">
	          		<div class="account-intro bg-light p-3 p-md-4">
	          			<h3 class="mb-4">Hola, <?php echo strtoupper($this->session->username);?>&nbsp<?php echo strtoupper($this->session->lastname);?>!</h3>
							<p>Desde "Mi Cuenta" puedes ver un resumen de tus pedidos recientes y actualizar la información de tu cuenta.</p>		
							<a href="<?php echo base_url();?>account/profile" class="btn btn-primary" style="padding: 10px 5px !important; width: 35%; ">Editar datos</a>
							<div class="">
								<h2 class="account-heading-item mb-5" style="margin-bottom: 0.1rem !important;">Pedidos</h2>
								<?php if (!empty($pedidos)) { ?>
								<div class="table-responsive">
									<table class="table-pedidos">
									    <thead class="thead-primary">
									      <tr class="text-center">
									        <th>Pedido #</th>
									        <th>Fecha</th>
									        <th>Enviar a</th>
									        <th>Total</th>
									        <th>Estado</th>
									        <th>&nbsp;</th>
									      </tr>
									    </thead>
									    <?php foreach($pedidos as $pedido): ?>
										    <tbody>
										      <tr class="text-center">
										      	<td class="pedido"><?php echo $pedido->num_ped; ?></td>
										      	<td class="fecha"><?php echo $pedido->fecha; ?></td>
										      	<td class="nombre"><?php echo strtoupper($pedido->nombre); ?>&nbsp<?php echo strtoupper($pedido->apellidos); ?></td>
										      	<td class=""><?php echo $pedido->precio; ?>€</td>
										      	<?php 
										          	if ($pedido->estado == 'enviado') { ?>
										          		<td class="text-info">Enviado</td>
									          	<?php }
										          	else if ($pedido->estado == 'tramite') { ?>
										          		<td class="text-warning">Trámite</td>
										        <?php }
										          	else { ?>
										          		<td class="text-success">Entregado</td>
									          	<?php } ?>
										      	<td class="">Ver pedido | Factura | Seguimiento envio</td>
										      </tr><!-- END TR-->
										    </tbody>
									    <?php endforeach; ?>
									</table>
								</div>
								<?php } ?>
							</div>
					</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
 