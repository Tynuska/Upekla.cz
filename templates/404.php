
		<div class="not-found">
			<div class="not-found__main">
				<div class="not-found__logo">
					<img src="images/logo-circle.svg" alt="Upekla" width="100" />
				</div>

				<div class="not-found__article">
					<p class="not-found__meta">Něco se tu peče</p>
					<h1>Chybička<br />se vloudila</h1>
					<p>Nebaví vás jen koukat na fotky?<br />Přijďte ochutnat!</p>

					<a href="cukrarny" class="btn btn--midi">Cukrárny Upekla</a>
				</div>

			</div>

			<div class="not-found__deco js-lazy" data-src="images/not-found-deco.png"></div>
			<div class="not-found__bg js-lazy" data-src="images/not-found-bg.png"></div>

		</div><!-- /not-found -->

		<div class="content content--dark">
			<div class="section">
				<div class="similar">
					<h2 class="headline">Mohlo by vám chutnat</h2>

					<div class="plist">
						<div class="plist__list">
							<?php 
						$products = $config->get_products(null, null, 1);
						$i = 0;
						foreach($products as $key => $produkt) { 
							if($i < 3){ 
								?>
								<div class="plist__item">
									<a href="produkty/<?= $produkt['category']?>/<?= $produkt['slug'];?>" class="plist__link">
										<span class="plist__fig">
											<span class="plist__img"><img src="#" data-src="images/products/main-<?= $produkt['slug'];?>.jpg" alt="" class="js-lazy" /></span>
										</span>

										<span class="plist__content">
											<span class="plist__sub"><?= $produkt['tags'];?></span>
											<span class="plist__name"><?= $produkt['title'];?></span>
										</span>

										<span class="plist__meta">
											<span class="plist__price">
												<span class="icon icon--<?= $produkt['ico']?>"></span>
												<?= $produkt['price'];?> Kč
											</span>
										</span>
									</a>
								</div>
								<?php 
							}
							$i++;
						}
						?>

						</div><!-- /plist__list -->	

						<div class="plist__more">
							<a href="produkty" class="btn btn--xl">Prohlížet</a>
						</div>
					</div><!-- /plist -->
				</div><!-- /similar -->
			</div>
		</div><!-- /content -->

		<div class="citation js-lazy" data-src="images/laska.jpg">
			<div class="citation__article js-animation-group">
				<p class="promo js-animated-item" data-animation-delay="500">Nikdy není pozdě na kávu a dortík</p>
				<p class="xl js-animated-item" data-animation-delay="1000">Žádná láska není tak uspokojivá a&nbsp;hřejivá, jako láska k jídlu.</p>
			</div>
		</div>
		
		<div class="content content--dark content--bg4">
			<div class="section">
				<div class="find-us js-animation-group">
					<div class="find-us__prologue">
						<p class="promo">Cukrárny</p>
						<h2>Kde nás<br />najdete</h2>
						<p>Cukrárny najdete v našich<br />domovských městech,<br />se kterými nás pojí silné pouto.</p>

						<div class="find-us__btns">
							<a href="cukrarny#pribram" class="btn btn--midi btn--t-center">v Příbrami</a>
							<a href="cukrarny#pisek" class="btn btn--midi btn--t-center">v Písku</a>
						</div>
					</div>

					<div class="find-us__fig">
						<div class="find-us__img js-animated-item" data-animation-delay="500">
							<img src="#" data-src="images/cukrarna-1.jpg" alt="" class="js-lazy" />
						</div>

						<div class="find-us__img find-us__img--secondary js-animated-item" data-animation-delay="1000">
							<img src="#" data-src="images/cukrarna-2.jpg" alt="" class="js-lazy" />
						</div>

					</div>


				</div><!-- /find-us -->
			</div>

			<div class="content__bg js-lazy" data-src="images/bg-4.png" ></div>
		</div><!-- /content -->
