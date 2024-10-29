<div class="content content--bg6">
    <div class="section">
        <div class="bread">
            <?php include_once 'breadcrumb.php'; ?>
        </div><!-- /bread -->

        <div class="post">
            <div class="post__intro">
                <h1>Ořechový koláč<br />s čokoládou</h1>

                <div class="post__fig">
                    <img src="images/products/orechovy-dort-s-cokoladou-1.jpg" alt="" width="400" />	
                </div>					
                <div class="post__meta">
                    <span class="icon icon--pie"></span>
                    <p>Cena<br>Koláče</p>
                    <p class="post__meta__price"><?= $config->get_product_price(); ?></p>
                </div>	
                <div class="post__meta">
                    <span class="icon icon--diameter"></span>
                    <p>Průměr 24 cm – 12 dílů<br />trvanlivost 72 hodin</p>
                </div>

                <p>Šťavnatý kakaový koláč s mletými lískovými ořechy, politý čokoládou složenou z čokolády, másla a šlehačky a po obvodu posypaný opraženými lískovými ořechy. Vhodný pro bezlepkovou dietu.</p>
            </div><!-- /post__intro -->

            <div class="post__row post__row--primary">
                <div class="post__article">
                    <div class="post__meta">
                        <span class="icon icon--info"></span>
                        <p>Složení</p>
                    </div>

                    <ul>
                        <li>lískové ořechy</li>
                        <li>cukr</li>
                        <li>kakao</li>
                        <li>káva</li>
                        <li>vejce</li>
                        <li>čokoláda</li>
                        <li>máslo</li>
                        <li>smetana</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/orechovy-dort-s-cokoladou-2.jpg" alt="" width="400" />
                </div>	
            </div>

            <div class="post__row">
                <div class="post__article">
                    <div class="post__meta">
                        <span class="icon icon--allergen"></span>
                        <p>Alergeny</p>
                    </div>

                    <ul>
                        <li>ořechy</li>
                        <li>vejce</li>
                        <li>máslo</li>
                        <li>smetana</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/orechovy-dort-s-cokoladou-3.jpg" alt="" width="400" />
                </div>	
            </div>

        </div><!-- /post -->

        <div class="cta">
            <a href="napiste-nam?p=orechovy-kolac-s-cokoladou" class="btn btn--wide">OBJEDNAT</a>
        </div>

    </div><!-- /section -->

    <div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
</div><!-- /content -->

<?php include_once 'similar.php'; ?>
