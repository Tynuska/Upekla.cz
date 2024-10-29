		<div class="content content--bg6">
			<div class="section">
				<div class="bread">
					<?php include_once 'breadcrumb.php';?>
				</div><!-- /bread -->

				<div class="post">
					<div class="post__intro">
						<h1>Velikonoční mazanec</h1>

						<div class="post__fig">
							<img src="images/products/velikonocni-mazanec-1.jpg" alt="" width="400" />	
						</div>					
						<div class="post__meta">
							<span class="icon icon--pie"></span>
							<p>Cena<br>Mazance</p>
							<p class="post__meta__price"><?= $config->get_product_price();?></p>
						</div>	
						<div class="post__meta">
							<span class="icon icon--diameter"></span>
							<p>Váha: 1 kg</p>
						</div>

						<p>Sametově hebký. S mandlemi a brusinkami. Vynikající.</p>
					</div><!-- /post__intro -->

					<div class="post__row post__row--primary">
						<div class="post__article">
							<div class="post__meta">
								<span class="icon icon--info"></span>
								<p>Složení</p>
							</div>

							<ul>
								<li>mouka</li>
								<li>droždí</li>
								<li>cukr krupice</li>
								<li>vanilkový cukr</li>
								<li>mandle</li>
								<li>brusinky</li>
								<li>máslo</li>
								<li>vejce</li>
								<li>mléko</li>
								<li>olej</li>
								<li>hera</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="images/products/velikonocni-mazanec-2.jpeg" alt="" width="400" />
						</div>	
					</div>

					<div class="post__row">
						<div class="post__article">
							<div class="post__meta">
								<span class="icon icon--allergen"></span>
								<p>Alergeny</p>
							</div>

							<ul>
								<li>mouka</li>
								<li>vejce</li>
								<li>mandle</li>
								<li>máslo</li>
								<li>mléko</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="images/products/cukrovi_textura.jpg" alt="" width="400" />
						</div>	
					</div>

				</div><!-- /post -->

				<div class="cta">
					<a href="napiste-nam?p=velikonocni-mazanec" class="btn btn--wide">OBJEDNAT</a>
				</div>

			</div><!-- /section -->

			<div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
		</div><!-- /content -->

		<?php include 'similar.php'; ?>

