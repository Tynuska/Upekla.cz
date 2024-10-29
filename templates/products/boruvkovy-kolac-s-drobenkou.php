		<div class="content content--bg6">
			<div class="section">
				<div class="bread">
					<?php include_once 'breadcrumb.php';?>
				</div><!-- /bread -->

				<div class="post">
					<div class="post__intro">
						<h1>Borůvkový koláč s drobenkou</h1>

						<div class="post__fig">
							<img src="images/products/boruvkovy-kolac-s-drobenkou-1.jpg" alt="" width="400" />	
						</div>					
						<div class="post__meta">
							<span class="icon icon--pie"></span>
							<p>Cena<br>Koláče</p>
							<p class="post__meta__price"><?= $config->get_product_price();?></p>
						</div>	
						<div class="post__meta">
							<span class="icon icon--diameter"></span>
							<p>Průměr koláče 24 cm</p>
						</div>

						<p>Voňavý borůvkový koláč s našlehaným tvarohem a křupavou drobenkou.</p>
					</div><!-- /post__intro -->

					<div class="post__row post__row--primary">
						<div class="post__article">
							<div class="post__meta">
								<span class="icon icon--info"></span>
								<p>Složení</p>
							</div>

							<ul>
								<li>máslo</li>
								<li>mouka</li>
								<li>cukr</li>
								<li>prdopeč</li>
								<li>tvaroh</li>
								<li>borůvky</li>
								<li>mléko</li>
								<li>pudink</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="images/products/boruvkovy-kolac-s-drobenkou-2.jpg" alt="" width="400" />
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
								<li>tvaroh</li>
								<li>mléko</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="images/products/kolac_textura.jpg" alt="" width="400" />
						</div>	
					</div>

				</div><!-- /post -->

				<div class="cta">
					<a href="napiste-nam?p=boruvkovy-kolac-s-drobenkou" class="btn btn--wide">OBJEDNAT</a>
				</div>

			</div><!-- /section -->

			<div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
		</div><!-- /content -->

		<?php include_once 'similar.php'; ?>

