<div class="content content--dark-secondary">
			<div class="section">
				<h1 class="headline headline--center"><?= $config->get_page_name(); ?></h1>
				<div class="subnav">
					<ul class="reset">
                        <li <?= ($config->get_page() == 'produkty' && empty($config->get_page_category())) ? 'class="is-active"' : ''?>>
							<a href="produkty" class="subnav__btn"><span class="icon icon--heart"></span>Všechny dobroty</a>
						</li>
                        <!--<li <?= ($config->get_page_category() == 'vanoce') ? 'class="is-active"' : ''?>>
                            <a href="produkty/vanoce" class="subnav__btn"><span class="icon icon--sweets"></span>Vánoce</a>
                        </li>-->
						<li <?= ($config->get_page_category() == 'dorty') ? 'class="is-active"' : ''?>>
							<a href="produkty/dorty" class="subnav__btn"><span class="icon icon--cake"></span>Dorty</a>
						</li>
						<li <?= ($config->get_page_category() == 'kolace') ? 'class="is-active"' : ''?>>
							<a href="produkty/kolace" class="subnav__btn"><span class="icon icon--pie"></span>Koláče</a>
						</li>
						<li <?= ($config->get_page_category() == 'sladkosti') ? 'class="is-active"' : ''?>>
							<a href="produkty/sladkosti" class="subnav__btn"><span class="icon icon--candy"></span>Sladkosti</a>
						</li>
                    </ul>
				</div><!-- /subnav -->

				<div class="plist plist--secondary">
					<div class="plist__list">
                        <?php
                            $products = $config->get_products($config->get_page_category());
                            foreach($products as $key => $produkt) {
                                ?>
                                <div class="plist__item">
                                    <a href="<?= $config->get_page()?>/<?= $produkt['category']?>/<?= $produkt['slug'];?>" class="plist__link">
                                        <span class="plist__fig">
                                            <span class="plist__img"><img src="#" data-src="images/products/main-<?= $produkt['slug'];?>.jpg" alt="" class="js-lazy" /></span>
                                        </span>

                                        <span class="plist__content">
                                            <span class="plist__sub"><?= $produkt['tags'];?></span>
                                            <span class="plist__name"><?= $produkt['title'];?></span>
                                            <?php if (!empty($produkt['info'])): ?>
                                                <span class="plist__info"><?= $produkt['info'];?></span>
                                            <?php endif; ?>
                                        </span>

                                        <span class="plist__meta">
                                            <span class="plist__price">
                                                <span class="icon icon--<?= $produkt['ico']?>"></span>
                                                <?= !empty($produkt['price']) ? $produkt['price'] . ' Kč' : '&nbsp;'; ?>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            <?php
                        }
                        ?>
                    </div><!-- /plist__list -->

					<!--div class="plist__more">
						<a href="#" class="btn btn--more">Načíst další dobroty</a>
					</div-->
				</div><!-- /plist -->


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
