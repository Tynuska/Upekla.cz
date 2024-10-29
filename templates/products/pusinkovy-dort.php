		<div class="content content--bg6">
			<div class="section">
				<div class="bread">
					<?php include_once 'breadcrumb.php';?>
				</div><!-- /bread -->

				<div class="post">
					<div class="post__intro">
						<h1>Pusinkový dort</h1>

						<div class="post__fig">
							<img src="images/products/pusinkovy-obrazek-1.jpg" alt="" width="400" />	
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

						<p>Slavnostní dort s vrstvami karamelu se slanými buráky, tmavé čokolády, mascarpone s bílou čokoládou a flambovanými pusinkami. Absolutně famózní kombinace.</p>
					</div><!-- /post__intro -->

					<div class="post__row post__row--primary">
						<div class="post__article">
							<div class="post__meta">
								<span class="icon icon--info"></span>
								<p>Složení</p>
							</div>

							<ul>
								<li>sušenky</li>
								<li>máslo</li>
								<li>smetana</li>
								<li>cukr</li>
								<li>arašídy</li>
								<li>čokoláda</li>
								<li>mascarpone</li>
								<li>vejce</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="images/products/pusinkovy-obrazek-2.jpg" alt="" width="400" />
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
								<li>smetana</li>
								<li>arašídy</li>
								<li>mascarpone</li>
								<li>vejce</li>
							</ul>	
						</div>
						

						<div class="post__fig">
							<img src="pusinkovy-obrazek-3.jpg" alt="" width="400" />
						</div>	
					</div>

				</div><!-- /post -->

				<div class="cta">
					<a href="napiste-nam?p=pusinkovy-dort" class="btn btn--wide">OBJEDNAT</a>
				</div>

			</div><!-- /section -->

			<div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
		</div><!-- /content -->

		<?php include_once 'similar.php'; ?>

