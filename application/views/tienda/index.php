		
	<div class="hero-wrap js-fullheight" style="background-image: url('assets/images/otouch.jpg');">
      <div class="overlay"></div><div class="overlay-right"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        	<h3 class="v">Rosa Clará by O'Touch</h3>
        	<h3 class="vr">Made in Spain</h3>
          <div class="col-md-11 ftco-animate text-center">
            <h1>O'Touch</h1>
            <h2><span>Complementos</span></h2>
          </div>
          <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
				</a>
			</div>
        </div>
      </div>
    </div>

    <div class="goto-here"></div>
    
    <section class="ftco-section ftco-product">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
	          <div class="col-md-12 heading-section text-center ftco-animate">
	          	<h1 class="big">Novedades</h1>
	            <h2 class="mb-4">Novedades</h2>
	          </div>
        	</div>

    		<div class="row">
    			<div class="col-md-12">
    				<div class="product-slider owl-carousel ftco-animate">
    					<?php foreach($articulos as $item): ?>
	    					<div class="item">
			    				<div class="product">
			    					<a href="<?php echo base_url();?>shop/product/<?php echo $item->cod_art; ?>" class="img-prod"><img class="img-fluid" src="<?php echo base_url(); ?>assets/images/<?php echo $item->url_img; ?>" alt="">
                                    </a>
			    					<div class="text pt-3 px-3">
			    						<h3>
			    							<a href="<?php echo base_url();?>shop/product/<?php echo $item->cod_art; ?>" >
			    							<?php echo $item->titulo; ?>
			    							</a>
			    						</h3>
			    						<div class="">
			    							<div class="pricing">
                                                <p class="price"><span class="price-sale">
                                                <?php echo $item->precio; ?>€</span></p>

                                                
                                            </div>
                                            <hr>
                                                <button type="button" 
                                            class="btn btn-primary btn-xl w-100 btn_add"
                                            data-cod="<?php echo $item->cod_art; ?>"
                                            data-precio="<?php echo $item->precio; ?>"
                                            data-img="<?php echo $item->url_img; ?>"
                                            data-titulo="<?php echo $item->titulo; ?>"
                                            data-descripcion="<?php echo $item->descripcion; ?>" 
                                            ><span>Añadir al carrito</span></button>
			    						</div>


			    					</div>


			    				</div>
		    				</div>
	    				<?php endforeach; ?>
    				</div>
    			</div>
    		</div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url(); ?>assets/images/bg_7.jpg);">
						<!-- <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a> -->
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate" id='sobreNosotros'>
	          <div class="heading-section-bold mb-5 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">O'Touch <br>Online <br> <span>Tienda de moda</span></h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p>Las colecciones de O'Touch están inspiradas en la moda, el cine, la naturaleza… en un proceso artesanal lleno de creatividad y cuidado de los detalles. Tocados, sombreros, pamelas y accesorios, personalizados y exclusivos para cada mujer.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

    

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Opiniones</h1>
          </div>
        </div>    		
        <div class="row justify-content-center">
          <div class="col-md-8 ftco-animate">
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel ftco-owl">
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(<?php echo base_url(); ?>assets/images/person_5.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">Qué decir. ¡Encantada con mi tocado! Precioso, favorecedor. Relación calidad -precio es excelente. Siempre atenta a mis peticiones, siempre informada de su proceso de elaboración, pues todo fue vía Facebook. Todo el mundo me dijo lo bonito que era. Totalmente recomendable. Acierto seguro.</p>
		                    <p class="name">Paloma Valero Garcia</p>
		                    <span class="position">Cliente</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(<?php echo base_url(); ?>assets/images/person_6.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">En cuanto vi a Olga y le dije lo que quería, no me tuve que preocupar de nada más.A parte de qué es supersincera, cercana... Le dio en el clavo y yo me vi guapísima la primera vez que vi la tiara, y eso que iba en vaqueros.
							Tus manos valen oro, gracias por crear una joya como esta.
							Sigue haciéndolo así, como tú sabes.
							Gracias por formar parte de ese día..</p>
		                    <p class="name">Carla</p>
		                    <span class="position">Cliente</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="big">Blog</h1>
            <h2>Recientes</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="<?php echo base_url();?>blog/articulo_blog" class="block-20" style="background-image: url('<?php echo base_url(); ?>assets/images/image_1.jpg');">
              </a>
              <div class="text mt-3 d-block">
                <h3 class="heading mt-3"><a href="<?php echo base_url();?>blog/articulo_blog">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="<?php echo base_url();?>blog/articulo_blog" class="block-20" style="background-image: url('<?php echo base_url(); ?>assets/images/image_2.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="<?php echo base_url();?>blog/articulo_blog">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="<?php echo base_url();?>blog/articulo_blog" class="block-20" style="background-image: url('<?php echo base_url(); ?>assets/images/image_3.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="<?php echo base_url();?>blog/articulo_blog">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    