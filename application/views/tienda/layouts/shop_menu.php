<div class="col-md-2 col-sm-12 mb-2">
	<div class="account-menu account-total bg-light p-3">
			<h3 class="account-heading mb-4" style="margin-bottom: 0.1rem !important;">Categorías</h3>
  			<ul class="list-group-heading">
            	<?php if (!empty($this->session->titulos)) { ?>
            		<?php foreach($this->session->titulos as $categoria): ?>
            			<li class="list-group-item"><a href="<?php echo base_url();?>shop/cat1" class="text-secondary"><?php echo ucwords($categoria->titulo); ?></a></li>
            		<?php endforeach; ?>
            	<?php } ?>
			</ul>
	</div>	
</div>