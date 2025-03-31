		<div class="content content--bg6">
			<div class="section">
				<div class="bread">
					<?php include_once 'breadcrumb.php';?>
				</div><!-- /bread -->

				<div class="post">
					<div class="post__intro">
						<h1>Mega pusinky s čokoládou nebo bez</h1>

						<div class="post__fig">
							<img src="images/products/mega-pusinky-1.jpg" alt="" width="400" />
						</div>

						<div class="post__meta">
							<span class="icon icon--candy"></span>
							<p>Cena<br> pusinky bez čokolády </p>
							<p class="post__meta__price"><?= $config->get_product_price();?></p>
						</div>

						<div class="post__meta">
							<span class="icon icon--cake"></span>
							<p style="max-width: 190px">Cena pusinky s čokoládou</p>
							<p class="post__meta__price">85&nbsp;Kč</p>
						</div>

						<div class="post__meta">
							<span class="icon icon--diameter"></span>
							<p>velikost cca 11 cm</p>
						</div>

						<p>Vyšlehaný bílek s nasekanou mléčnou čokoládou. Navrch křehké, uvnitř vláčné.</p>
					</div><!-- /post__intro -->

					<div class="post__row post__row--primary">
						<div class="post__article">
							<div class="post__meta">
								<span class="icon icon--info"></span>
								<p>Složení</p>
							</div>

							<ul>
								<li>bílky</li>
								<li>mléčná čokoláda</li>
								<li>cukr</li>
								<li>možnost dodat pusinky bez čokolády</li>
								<li>vhodné pro bezlepkovou dietu</li>
							</ul>
						</div>


						<div class="post__fig">
							<img src="images/products/mega-pusinky-2.jpg" alt="" width="400" />
						</div>
					</div>

					<div class="post__row">
						<div class="post__article">
							<div class="post__meta">
								<span class="icon icon--allergen"></span>
								<p>Alergeny</p>
							</div>

							<ul>
								<li>bílky</li>
							</ul>
						</div>


						<div class="post__fig">
							<img src="images/products/sladkost_textura.jpg" alt="" width="400" />
						</div>
					</div>

				</div><!-- /post -->

				<div class="cta">
					<a href="napiste-nam?p=mega-pusinky-s-cokoladou-nebo-bez" class="btn btn--wide">OBJEDNAT</a>
				</div>

			</div><!-- /section -->

			<div class="content__bg js-lazy" data-src="images/bg-6.png"></div>
		</div><!-- /content -->

		<?php include_once 'similar.php'; ?>

