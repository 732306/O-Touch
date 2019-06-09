<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{	
		$this->load->view('tienda/layouts/header');
		$this->load->view('tienda/layouts/menu');
		$this->load->view('tienda/cart');
		$this->load->view('tienda/layouts/footer');
	}

	function add() {
		$data = array(
			"cod_art"		=>	$_POST["articulo_cod"], 
			"url_img"		=> 	$_POST["articulo_img"], 
			"titulo"		=> 	$_POST["articulo_titulo"], 
			"descripcion" 	=> 	$_POST["articulo_descripcion"],
			//"cantidad"		=>	$_POST["cantidad"], 
			"precio" 		=> 	$_POST["articulo_precio"] 
		);
		$this->cart->insert($data);
	}

	function load() {
		echo $this->view();
	}

	function remove() {
		$cod_art = $_POST["cod_art"];
		$data = array(
			'cod_art' => $cod_art
			//'cantidad' => 0 
		);
		$this->cart->update($data);
		echo $this->view();

	}

	function view() {
		$output = '';
		$output .= '
		<div class="row">
		    <div class="col-md-12 ftco-animate">
		    	<div class="cart-list">
					<table class="table">
					    <thead class="thead-primary">
					      <tr class="text-center">
					        <th>&nbsp;</th>
					        <th>&nbsp;</th>
					        <th>Complemento</th>
					        <th>Precio</th>
					        <th>Cantidad</th>
					        <th>Total</th>
					      </tr>
					    </thead>
		';
		$count = 0;
		foreach ($this->cart->contents() as $item) {
			$counts++;
			$output .= '
					    <tbody>
			                <tr class="text-center">
			                        <td class="product-remove">
			                        	<button type="button" name="remove" class="btn btn-danger btn-xs remove_inventory" id="'.$item["cod_art"].'"><span class="ion-ios-close"></span></button>
			                        </td>
			                        
			                        <td class="image-prod"><div class="img" style="background-image:url(<?php echo base_url(); ?>assets/images/'.$item["url_img"].');"></div></td>
			                        
			                        <td class="product-name">
			                            <h3>'.$item["titulo"].'</h3>
			                            <p>'.$item["descripcion"].'</p>
			                        </td>
			                        
			                        <td class="price">'.$item["precio"].'</td>
			                        
			                        <td class="quantity">
			                            <div class="input-group mb-3">
			                                 <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
			                            </div>
			                       </td>
			                        
			                        <td class="total">$4.90</td>
			                      </tr><!-- END TR-->
					    </tbody>
					</table>
				</div>
		    </div>
		</div>

			';
		}
		$output .= '
    		<div class="row justify-content-end">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Total</h3>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>'.$this->cart->total().'</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">Proceder al pago</a></p>
    			</div>
    		</div>

		';

		if($count == 0) {
			$output = '<h3 class="mb-4">El carrito se encuentra vacío.</h3>';
		}
		return $output;

	}
}

/*<td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>*/