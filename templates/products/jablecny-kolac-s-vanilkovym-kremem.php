		<div class="content content--bg6">
			<div class="section">
				<div class="bread">
					<?php include_once 'breadcrumb.php';?>
				</div><!-- /bread -->

				<div class="post">
					<div class="post__intro">
						<h1>Jablečný koláč<br />s vanilkovým krémem</h1>

						<div class="post__fig">
							<img src="images/products/jablecny-kolac-s-vanilkovym-kremem-1.jpeg" alt="" width="400" />	
						</div>					
						<div class="post__meta">
							<span class="icon icon--pie"></span>
							<p>Cena<br>Koláče</p>
							<p class="post__meta__price"><?= $config->get_product_price();?></p>
						</div>	
						<div class="post__meta">
							<span class="icon icon--diameter"></span>
							<p>Průměr 27 cm – 12 dílů<br />trvanlivost 72 hodin</p>
						</div>

						<p>Dokonalé spojení křehkého máslového těsta, zkaramelizované jablečné náplně, našlehaného vanilkového krému a mandlí.</p>
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
								<li>vejce</li>
								<li>jablka</li>
								<li>mléko</li>
								<li>šlehačka</li>
								<li>cukr</li>
								<li>škrob</li>
								<li>mandle</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="images/products/jablecny-kolac-s-vanilkovym-kremem-2.jpeg" alt="" width="400" />
						</div>	
					</div>

					<div class="post__row">
						<div class="post__article">
							<div class="post__meta">
								<span class="icon icon--allergen"></span>
								<p>Alergeny</p>
							</div>

							<ul>
								<li>mandle</li>
								<li>vejce</li>
								<li>máslo</li>
								<li>smetana</li>
								<li>mléko</li>
								<li>mouka</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="images/products/kolac_textura.jpg" alt="" width="400" />
						</div>	
					</div>

				</div><!-- /post -->

				<div class="cta">
					<a href="napiste-nam?p=jablecny-kolac-s-vanilkovym-kremem" class="btn btn--wide">OBJEDNAT</a>
				</div>

			</div><!-- /section -->

			<div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
		</div><!-- /content -->

		<?php include 'similar.php'; ?>

