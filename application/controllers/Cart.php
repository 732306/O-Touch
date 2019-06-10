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
        'id'      => $_POST["articulo_cod"],
        'qty'     => $_POST["cantidad"],
        'price'   => $_POST["articulo_precio"],
        'name'    => $_POST["articulo_titulo"],
        'options' => array('Size' => 'L'),
        'image' => $_POST["articulo_img"]
		);

		$this->cart->insert($data);

		echo $this->cart->total_items(); 
	}

	public function load() {
		echo $this->show_cart();
	}

	public function loadResumen() {
		if ($this->cart->total_items() == 0){
			//echo $this->show_cart();
					echo "";

		}

		else {

			echo '<div class="col-md-6">
                        <div class="cart-total mb-3">
                            <h3>TOTAL</h3>
                            <p class="d-flex">
                                <span>Subtotal</span>
                                <span>'.$this->cart->total().' €</span>
                            </p>
                            <p class="d-flex">
                                <span>Envío</span>
                                <span>0,00 €</span>
                            </p>
                            <p class="d-flex">
                                <span>Descuento</span>
                                <span>0,00 €</span>
                            </p>
                            <hr>
                            <p class="d-flex total-price">
                                <span>Total</span>
                                <span>'.$this->cart->total().' €</span>
                            </p>
                        </div>
                        <p class="text-center"><a href="'.base_url().'checkout" class="btn btn-primary w-100 py-3 px-4">Tramitar Pedido</a></p>
                    </div>
                    ';
		}
	}

	public function remove() {
		$id = $_POST["id"];
		$this->cart->remove($id);
		echo $this->cart->total_items(); 
	}

	public function update_qty() {
		$id = $_POST["id"];
		$cantidad = $_POST["cantidad"];

		$data = array(
	        'rowid' => $id,
	        'qty'   => $cantidad
		);

		$this->cart->update($data);
				
		echo $this->cart->total_items(); 
	}

	public function total_carrito(){
		echo $this->cart->total(); 
	}

	public function show_cart() {
		$output = "";

		if($this->cart->total_items() == 0) {
			$output = "<h3 align='center'>Tu carrito tiene 0 complemento(s).</h3>
                    <img src='".base_url()."assets/images/carrito.svg' class='rounded mx-auto d-block' style='width: 15%;'>";
		}

		else {
			$output .= "<table class='table'>
					    <thead class='thead-primary'>
					      <tr class='text-center'>
					        <th>&nbsp;</th>
					        <th>Complemento</th>
					        <th>Precio</th>
					        <th>Cantidad</th>
					        <th>Total</th>
					        <th>&nbsp;</th>
					      </tr>
					    </thead>
					    <tbody>";


			foreach ($this->cart->contents() as $item) {
				$output .= "
	                <tr class='text-center'>	                        
                    <td class='image-prod'><div class='img' style='background-image:url(".base_url()."assets/images/".$item['image'].");'></div></td>
                    
                    <td class='product-name'>
                        <h3>".$item['name']."</h3>
                    </td>
                    
                    <td class='price'>".$item["price"]."€</td>
                    
                    <td class='quantity'>
                        <div class='input-group mb-3'>
                             <input type='number' id ='quantity".$item['rowid']."' name='quantity' class='quantity form-control input-number' value='".$item["qty"]."' min='1' max='100'>
	                        </div>
                   </td>
                    
                    <td class='total'>".($item["price"] * $item["qty"])."€</td>

                    <td class='product-remove'>
                    	<a name='updateCantidad' class='btn btn-xs update_inventory' id='".$item['rowid']."'>Actualizar</a>
                    	<a name='remove' class='btn btn-xs remove_inventory' id='".$item['rowid']."'><span class='ion-ios-close'></span></a>
                    </td>
                  </tr>";
				}

				$output.="</tbody></table>";

			}

		return $output;

	}
}