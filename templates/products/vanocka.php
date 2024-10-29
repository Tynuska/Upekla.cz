		<div class="content content--bg6">
			<div class="section">
				<div class="bread">
					<?php include_once 'breadcrumb.php';?>
				</div><!-- /bread -->

				<div class="post">
					<div class="post__intro">
						<h1>Vánočka</h1>

						<div class="post__fig">
							<img src="images/products/vanocka-1.jpg" alt="" width="400" />
						</div>
						<div class="post__meta">
							<span class="icon icon--pie"></span>
							<p>Cena<br>Vánočky</p>
							<p class="post__meta__price"><?= $config->get_product_price();?></p>
						</div>
						<div class="post__meta">
							<span class="icon icon--diameter"></span>
							<p>Váha: 1,4 kg</p>
						</div>
						<p>Sametově hebká. S brusinkami a mandlemi.<br>
						Objednávat můžete kdykoliv, vánočky pro vás budeme péct od 25. 11. do 22. 12. 2024. </p>
					</div><!-- /post__intro -->

					<div class="post__row post__row--primary">
						<div class="post__article">

							<div class="post__meta">
								<span class="icon icon--info"></span>
								<p>Složení</p>
							</div>

							<ul>
								<li>Mouka</li>
								<li>Droždí</li>
								<li>Cukr krupice</li>
								<li>Vanilkový cukr</li>
								<li>Mandle</li>
								<li>Brusinky</li>
								<li>Máslo</li>
								<li>Vejce</li>
								<li>Mléko</li>
								<li>Olej</li>
								<li>Hera</li>

							</ul>
						</div>


						<div class="post__fig">
							<img src="images/products/vanocka-2.jpg" alt="" width="400" />
						</div>
					</div>

					<div class="post__row">
						<div class="post__article">
							<div class="post__meta">
								<span class="icon icon--allergen"></span>
								<p>Alergeny</p>
							</div>

							<ul>
								<li>Mouka</li>
								<li>Vejce</li>
								<li>Mandle</li>
								<li>Máslo</li>
								<li>Mléko</li>
							</ul>
						</div>


						<div class="post__fig">
							<img src="images/products/vanocka-3.jpg" alt="" width="400" />
						</div>
					</div>

				</div><!-- /post -->

				<div class="cta">
					<a href="napiste-nam?p=vanocka" class="btn btn--wide">OBJEDNAT</a>
				</div>

			</div><!-- /section -->

			<div class="content__bg js-lazy" data-src="images/bg-6.png"></div>
		</div><!-- /content -->

		<?php include_once 'similar.php'; ?>

