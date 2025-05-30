		<div class="content content--bg6">
			<div class="section">
				<div class="bread">
					<?php include_once 'breadcrumb.php';?>
				</div><!-- /bread -->

				<div class="post">
					<div class="post__intro">
						<h1>Marokánky</h1>

						<div class="post__fig">
							<img src="images/products/makaronky-1.jpg" alt="" width="400" />	
						</div>					
						<div class="post__meta">
							<span class="icon icon--candy"></span>
							<p>Cena<br>Sladkosti</p>
							<p class="post__meta__price"><?= $config->get_product_price();?></p>
						</div>
						<div class="post__meta">
							<span class="icon icon--diameter"></span>
							<p>Průměr zhruba 10 cm<br />minimální objednávka 12 ks</p>
						</div>

						<p>Vláčné  a šťavnaté marokánky, plné ovoce a mandlí,  máčené v čokoládě. Zdravá varianta cukroví.</p>
					</div><!-- /post__intro -->

					<div class="post__row post__row--primary">
						<div class="post__article">
							<div class="post__meta">
								<span class="icon icon--info"></span>
								<p>Složení</p>
							</div>

							<ul>
								<li>mouka</li>
								<li>máslo</li>
								<li>cukr</li>
								<li>med</li>
								<li>sušené mléko</li>
								<li>mandle</li>
								<li>brusinky</li>
								<li>čokoláda</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="images/products/makaronky-2.jpg" alt="" width="400" />
						</div>	
					</div>

					<div class="post__row">
						<div class="post__article">
							<div class="post__meta">
								<span class="icon icon--allergen"></span>
								<p>Alergeny</p>
							</div>

							<ul>
								<li>máslo</li>
								<li>mouka</li>
								<li>mandle</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="images/products/sladkost_textura.jpg" alt="" width="400" />
						</div>	
					</div>

				</div><!-- /post -->

				<div class="cta">
					<a href="napiste-nam?p=marokánky" class="btn btn--wide">OBJEDNAT</a>
				</div>

			</div><!-- /section -->

			<div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
		</div><!-- /content -->

		<?php include_once 'similar.php'; ?>

