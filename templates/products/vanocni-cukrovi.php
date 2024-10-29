		<div class="content content--bg6">
			<div class="section">
				<div class="bread">
					<?php include_once 'breadcrumb.php';?>
				</div><!-- /bread -->

				<div class="post">
					<div class="post__intro">
						<h1>Vánoční cukroví</h1>

						<div class="post__fig">
							<img src="images/products/vanocni-cukrovi-1.jpg" alt="" width="400" />
						</div>
						<div class="post__meta">
							<span class="icon icon--sweets"></span>
							<p>Cena<br>Cukroví</p>
							<p class="post__meta__price"><?= $config->get_product_price();?></p>
						</div>

						 <!-- <p> <br />OMLOUVÁME SE VŠEM PŘÍPADNÝM ZÁJEMCŮM O VÁNOČNÍ CUKROVÍ. ZASTAVILI JSME OBJEDNÁVKY, NAŠE KAPACITA JE NAPLNĚNA.</p> -->
						<!-- <p>  <br />JE NÁM LÍTO, JESTLI SE NA VÁS NEDOSTALO. JE MOŽNÉ, ŽE V TÝDNU OD 18. 12. BUDEME MÍT NA PULTECH CUKROVÍ NA PRODEJ </p>  -->

						<p>Mix 10 druhů vánočního cukroví. Na fotu 1 kg. Možnost vyzvednutí v našich cukrárnách v Příbrami nebo v Písku, a to buď v pondělí 9. 12., nebo ve čtvrtek 19. 12. 2024. Vždy kdykoliv od 7 do 18 hodin.</p>

					</div><!-- /post__intro -->

					<div class="post__row post__row--primary">
						<div class="post__article">
							<div class="post__meta">
								<span class="icon icon--info"></span>
								<p>Druhy:</p>
							</div>

							<ul>
								<li>kakaové košíčky s čokoládovým krémem a sušenou jahodou</li>
								<li>linecké košíčky s karamelovým krémem </li>
								<li>čokoládové hrudky s nasekanými mandlemi (bez mouky)</li>
								<li>kokosové kuličky s mandlí (bez mouky)</li>
								<li>linecká kolečka s rybízovou marmeládou</li>
								<li>oříškové rohlíčky s kakaovým krémem polité čokoládou</li>
								<li>vosí hnízda</li>
								<li>vanilkové rohlíčky </li>
								<li>medovníkové koule</li>
								<li>linecká srdce s mákem a citronovým krémem</li>
							</ul>
						</div>


						<div class="post__fig">
							<img src="images/products/vanocni-cukrovi-2.jpg" alt="" width="400" />
						</div>
					</div>

				</div><!-- /post -->

				<div class="cta">
					<a href="napiste-nam?p=vanocni-cukrovi" class="btn btn--wide">OBJEDNAT</a>
				</div>

			</div><!-- /section -->

			<div class="section section--xl">
				<div class="slider js-slider">
					<div class="slider__slide">
						<div class="slider__item">
							<div class="slider__fig">
								<div class="slider__img">
									<img src="#" data-src="images/products/vanocni-cukrovi-gal-1a.jpg" alt="" class="js-lazy" />
								</div>
							</div>

							<div class="slider__fig slider__fig--secondary">
								<div class="slider__img">
									<img src="#" data-src="images/products/vanocni-cukrovi-gal-1b.jpg" alt="" class="js-lazy" />
								</div>
							</div>
						</div>
					</div>
				</div><!-- /slider -->
			</div><!-- /section -->

			<div class="content__bg js-lazy" data-src="images/bg-6.png"></div>
		</div><!-- /content -->

		<?php
		$products = $config->get_products(null, $config->get_page_product(),1);
		if(count($products) > 0) { ?>
			<div class="content content--dark">
				<div class="section">
					<div class="similar">
						<h2 class="headline">Doporučené produkty</h2>

						<div class="plist">
							<div class="plist__list">
								<?php
								$i = 0;
								foreach($products as $key => $produkt) {
									if($i < 3) {

									?>
									<div class="plist__item">
										<a href="<?= $config->get_page()?>/<?= $produkt['category']?>/<?= $produkt['slug'];?>" class="plist__link">
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
								<a href="produkty" class="btn btn--xl">Prohlížet cukrovinky</a>
							</div>
						</div><!-- /plist -->
					</div><!-- /similar -->
				</div>
			</div><!-- /content --><?php }?>

