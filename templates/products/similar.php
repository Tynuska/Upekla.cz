<?php 
$products = $config->get_products($config->get_page_category(), $config->get_page_product(),1);
if(count($products) > 0) { ?>
	<div class="content content--dark">
		<div class="section">
			<div class="similar">
				<h2 class="headline">Podobné produkty</h2>

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