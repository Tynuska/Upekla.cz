		<div class="content content--bg6">
			<div class="section">
				<div class="bread">
					<?php include_once 'breadcrumb.php';?>
				</div><!-- /bread -->

				<div class="post">
					<div class="post__intro">
						<h1>Vanilkový krém</h1>

						<div class="post__fig">
							<img src="images/products/vanilkovy-krem-1.jpg" alt="" width="400" />	
						</div>					
						<div class="post__meta">
							<span class="icon icon--pie"></span>
							<p>Cena<br>Krému</p>
							<p class="post__meta__price"><?= $config->get_product_price();?></p>
						</div>
						<p>
							Obsah: 0,25 litru<br>
							Cena: 370 Kč<br><br>

							Obsah: 0,5 litru<br>
							Cena: 470 Kč<br>
						</p>

						<p>Lahodné spojení rumu, vanilky a smetany. Objednávat můžete kdykoliv, vánoční krém bude na prodej od 20. 11. do 22. 12. 2023</p>
					</div><!-- /post__intro -->

					<div class="post__row post__row--primary">
						<div class="post__article">
							<div class="post__meta">
								<span class="icon icon--info"></span>
								<p>Složení</p>
							</div>

							<ul>
								<li>neslazené kondenzované mléko</li>
								<li>smetana</li>
								<li>cukr krupice</li>
								<li>žloutky</li>
								<li>rum</li>
								<li>vanilkový lusk</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="images/products/cukrovi_textura.jpg" alt="" width="400" />
						</div>	
					</div>

					<div class="post__row">
						<div class="post__article">
							<div class="post__meta">
								<span class="icon icon--allergen"></span>
								<p>Alergeny</p>
							</div>

							<ul>
								<li>mléko</li>
								<li>smetana</li>
								<li>žloutky</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="images/products/cukrovi_textura.jpg" alt="" width="400" />
						</div>	
					</div>

				</div><!-- /post -->

				<div class="cta">
					<a href="napiste-nam?p=vanilkovy.krem" class="btn btn--wide">OBJEDNAT</a>
				</div>

			</div><!-- /section -->

			<div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
		</div><!-- /content -->

		<?php include_once 'similar.php'; ?>

