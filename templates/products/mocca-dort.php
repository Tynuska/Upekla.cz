		<div class="content content--bg6">
			<div class="section">
				<div class="bread">
					<?php include_once 'breadcrumb.php';?>
				</div><!-- /bread -->

				<div class="post">
					<div class="post__intro">
						<h1>Mocca dort</h1>

						<div class="post__fig">
							<img src="images/products/mocca-dort-1.jpg" alt="" width="400" />	
						</div>					
						<div class="post__meta">
							<span class="icon icon--cake"></span>
							<p>Cena<br>Dortu</p>
							<p class="post__meta__price"><?= $config->get_product_price();?></p>
						</div>	
						<div class="post__meta">
							<span class="icon icon--diameter"></span>
							<p>Průměr 24 cm – 12 dílů<br />trvanlivost 72 hodin</p>
						</div>

						<p>Sněhové kokosové pláty plněné jemným kávovým krémem. Bez mouky. Bez laktózy.</p>
					</div><!-- /post__intro -->

					<div class="post__row post__row--primary">
						<div class="post__article">
							<div class="post__meta">
								<span class="icon icon--info"></span>
								<p>Složení</p>
							</div>

							<ul>
								<li>máslo</li>
								<li>vejce</li>
								<li>cukr</li>
								<li>kokos</li>
								<li>káva</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="images/products/mocca-dort-2.jpg" alt="" width="400" />
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
								<li>kokos</li>
								<li>vejce</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="images/products/mocca-dort-3.jpg" alt="" width="400" />
						</div>	
					</div>

				</div><!-- /post -->

				<div class="cta">
					<a href="napiste-nam?p=mocca-dort" class="btn btn--wide">OBJEDNAT</a>
				</div>

			</div><!-- /section -->

			<div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
		</div><!-- /content -->

		<?php include_once 'similar.php'; ?>

