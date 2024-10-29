		<div class="content content--bg6">
			<div class="section">
				<div class="bread">
					<?php include_once 'breadcrumb.php';?>
				</div><!-- /bread -->

				<div class="post">
					<div class="post__intro">
						<h1>Linecká kolečka</h1>

						<div class="post__fig">
							<img src="images/products/linecka-kolecka-1.jpg" alt="" width="400" />	
						</div>					
						<div class="post__meta">
							<span class="icon icon--candy"></span>
							<p>Cena<br>Sladkosti</p>
							<p class="post__meta__price"><?= $config->get_product_price();?></p>
						</div>	
						<div class="post__meta">
							<span class="icon icon--diameter"></span>
							<p>Průměr kolečka 8 cm<br />možné jiné tvary (srdíčka, kytičky)</p>
						</div>

						<p>Vynikající křehké linecké těsto s malinovou marmeládou.</p>
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
								<li>vejce</li>
								<li>marmeláda</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="images/products/linecka-kolecka-2.jpg" alt="" width="400" />
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
								<li>máslo</li>
								<li>vejce</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="images/products/sladkost_textura.jpg" alt="" width="400" />
						</div>	
					</div>

				</div><!-- /post -->

				<div class="cta">
					<a href="napiste-nam?p=linecka-kolecka" class="btn btn--wide">OBJEDNAT</a>
				</div>

			</div><!-- /section -->

			<div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
		</div><!-- /content -->

		<?php include_once 'similar.php'; ?>

