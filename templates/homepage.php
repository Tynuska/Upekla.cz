		<div class="hero">
			<div class="hero__main">
				<div class="hero__logo">
					<img src="images/logo-circle.svg" alt="Upekla" width="100" />
				</div>

				<div class="hero__article">
					<p class="hero__meta">dorty - koláče - sladkosti - cukroví</p>
					<h1>Dobroty, kterým propadnete</h1>
					<p>Vychutnejte si dorty, koláče a jiné dobroty z naší cukrárny a nechte se&nbsp;unést na vlně ďábelského pokušení.</p>
				</div>
			</div>

			<div class="hero__bg js-lazy" data-src="images/hero-bg.png"></div>
			<div class="hero__cake js-lazy" data-src="images/hero-cake.png"></div>
		</div><!-- /hero -->

		<div class="content content--dark content--bg1">
			<div class="section">
				<h2 class="headline">Vybrané produkty</h2>
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
						<a href="produkty" class="btn btn--xl">Prohlížejte</a>
					</div>
				</div><!-- /plist -->

			</div>

			<div class="content__bg js-lazy" data-src="images/bg-1.png"></div>
			<div class="content__deco js-lazy" data-src="images/bg-2.png"></div>
		</div><!-- /content -->

		<div class="content content--bg2">
			<div class="section">
				<div class="who js-animation-group">
					<div class="who__prologue">
						<p class="promo">Kdo jsme</p>
						<h2>Sestry<br />a cukrářky</h2>
						<p>Z našeho největšího koníčku se stalo naše živobytí a tak jsme v roce 2013 založily vlastní firmu.</p>

						<a href="o-nas" class="btn btn--midi">Jak vzniklo upekla?</a>	
					</div>

					<div class="who__item who__item--1 js-animated-item" data-animation-delay="1000">
						<h3>Miroslava Semrádová</h3>
						<p class="midi">Pečící element Upekla</p>

						<div class="who__fig">
							<div class="who__img">
								<img src="#" data-src="images/mirka.jpg" alt="" class="js-lazy" width="308" />
							</div>
						</div>

						<div class="who__arrow">
							<img src="#" data-src="images/mirka-arrow.svg" alt="" class="js-lazy" /> 
						</div>
					</div>

					<div class="who__item who__item--2 js-animated-item" data-animation-delay="1500">
						<h3>Petra Eisová</h3>
						<p class="midi">Organizační element Upekla</p>

						<div class="who__fig">
							<div class="who__img">
								<img src="#" data-src="images/peta.jpg" alt="" class="js-lazy" width="308" />
							</div>
						</div>

						<div class="who__arrow">
							<img src="#" data-src="images/peta-arrow.svg" alt="" class="js-lazy" />
						</div> 
					</div>


				</div><!-- /who -->
			</div>

			<div class="content__bg js-lazy" data-src="images/bg-3.png"></div>
		</div><!-- /content -->

		<div class="content content--bg3">
			<div class="section slider__arrows">
				<h2 class="headline">Galerie</h2>
			</div>

			<div class="section section--xl">
				<div class="slider js-slider">
					<div class="slider__slide">
						<div class="slider__item">
							<div class="slider__fig">
								<div class="slider__img">
									<img src="#" data-src="images/data-sablony/gal-1a.jpg" alt="" class="js-lazy" />
								</div>
							</div>

							<div class="slider__fig slider__fig--secondary">
								<div class="slider__img">
									<img src="#" data-src="images/data-sablony/gal-1b.jpg" alt="" class="js-lazy" />
								</div>
							</div>
						</div>
					</div>

					<div class="slider__slide">
						<div class="slider__item">
							<div class="slider__fig slider__fig--secondary">
								<div class="slider__img">
									<img src="#" data-src="images/data-sablony/gal-2b.jpg" alt="" class="js-lazy" />
								</div>
							</div>

							<div class="slider__fig">
								<div class="slider__img">
									<img src="#" data-src="images/data-sablony/gal-2a.jpg" alt="" class="js-lazy" />
								</div>
							</div>


						</div>
					</div>

				</div><!-- /slider -->
			</div><!-- /section -->			
		</div><!-- /content -->

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

		<div class="content content--bg5">
			<div class="section">
				<h2 class="headline headline--center headline--xl">Sledujte naše dortíky</h2>

				<div class="social-btns">
					<a href="https://www.instagram.com/upekla" target="_blank" class="btn btn--midi btn--insta">Instagram</a>
					<a href="https://www.facebook.com/upekla" target="_blank" class="btn btn--midi btn--fb">Facebook</a>
				</div>

				<div class="istream">
					<script src="https://apps.elfsight.com/p/platform.js" defer></script>
					<div class="elfsight-app-145067ad-1ce3-461d-990b-0fc30f586290"></div>
				</div><!-- /istream -->

			</div>

			<div class="content__bg js-lazy" data-src="images/bg-5.jpg"></div>
		</div><!-- /content -->