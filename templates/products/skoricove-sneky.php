<div class="content content--bg6">
    <div class="section">
        <div class="bread">
            <?php include_once 'breadcrumb.php'; ?>
        </div><!-- /bread -->

        <div class="post">
            <div class="post__intro">
                <h1>Skořicové šneky</h1>

                <div class="post__fig">
                    <img src="images/products/skoricove-sneky-1.jpg" alt="" width="400" />	
                </div>					
                <div class="post__meta">
                    <span class="icon icon--sweets"></span>
                    <p>Cena<br>Koláče</p>
                    <p class="post__meta__price"><?= $config->get_product_price(); ?></p>
                </div>
                <div class="post__meta">
                    <span class="icon icon--diameter"></span>
                    <p>Průměr 1 ks: 7 cm<br />minimální objednávka: 12 ks</p>
                </div>

                <p>Máslem napuštěné, obalené ve skořici, extra sladké. Jsou naprosto neodolatelné.</p>
            </div><!-- /post__intro -->

            <div class="post__row post__row--primary">
                <div class="post__article">
                    <div class="post__meta">
                        <span class="icon icon--info"></span>
                        <p>Složení</p>
                    </div>

                    <ul>
                        <li>mouka</li>
                        <li>mléko</li>
                        <li>droždí</li>
                        <li>olej</li>
                        <li>soda</li>
                        <li>skořice</li>
                        <li>máslo</li>
                        <li>cukr</li>
                        <li>vanilkový cukr</li>
                        <li>sůl</li>
                        <li>kypřící prášek do pečicva</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/skoricove-sneky-2.jpg" alt="" width="400" />
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
                        <li>mléko</li>
                        <li>máslo</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/skoricove-sneky-3.jpg" alt="" width="400" />
                </div>	
            </div>

        </div><!-- /post -->

        <div class="cta">
            <a href="napiste-nam?p=skoricove-sneky" class="btn btn--wide">OBJEDNAT</a>
        </div>

    </div><!-- /section -->

    <div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
</div><!-- /content -->

<?php include_once 'similar.php'; ?>

