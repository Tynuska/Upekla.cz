<div class="content content--bg6">
    <div class="section">
        <div class="bread">
            <?php include_once 'breadcrumb.php'; ?>
        </div><!-- /bread -->

        <div class="post">
            <div class="post__intro">
                <h1>Čokoládový cheesecake</h1>

                <div class="post__fig">
                    <img src="images/products/cokoladovy-cheesecake-2.jpg" alt="" width="400" />	
                </div>					
                <div class="post__meta">
                    <span class="icon icon--cake"></span>
                    <p>Cena<br>Dortu</p>
                    <p class="post__meta__price"><?= $config->get_product_price(); ?></p>
                </div>	
                <div class="post__meta">
                    <span class="icon icon--diameter"></span>
                    <p>Průměr dortu: 27 cm<br />Trvanlivost: 72 hodin</p>
                </div>

                <p>Vynikající kombinace hutné čokolády a čerstvého sýru na sušenkové krustě.</p>
            </div><!-- /post__intro -->

            <div class="post__row post__row--primary">
                <div class="post__article">
                    <div class="post__meta">
                        <span class="icon icon--info"></span>
                        <p>Složení</p>
                    </div>

                    <ul>
                        <li>čokoláda</li>
                        <li>sušenky</li>
                        <li>máslo</li>
                        <li>čerstvý sýr</li>
                        <li>cukr</li>
                        <li>vanilka</li>
                        <li>vejce</li>
                        <li>kysaná smetana</li>
                        <li>šlehačka</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/cokoladovy-cheesecake-1.jpg" alt="" width="400" />
                </div>	
            </div>

            <div class="post__row">
                <div class="post__article">
                    <div class="post__meta">
                        <span class="icon icon--allergen"></span>
                        <p>Alergeny</p>
                    </div>

                    <ul>
                        <li>čerstvý sýr</li>
                        <li>vejce</li>
                        <li>kysaná smetana</li>
                        <li>smetana</li>
                        <li>máslo</li>
                        <li>čokoláda</li>
                        <li>sušenky</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/cokoladovy-cheesecake-3.jpg" alt="" width="400" />
                </div>	
            </div>

        </div><!-- /post -->

        <div class="cta">
            <a href="napiste-nam?p=cokoladovy-cheesecake" class="btn btn--wide">OBJEDNAT</a>
        </div>

    </div><!-- /section -->

    <div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
</div><!-- /content -->

<?php include_once 'similar.php'; ?>

