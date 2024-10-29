<div class="content content--bg6">
    <div class="section">
        <div class="bread">
            <?php include_once 'breadcrumb.php'; ?>
        </div><!-- /bread -->

        <div class="post">
            <div class="post__intro">
                <h1>Perníkový cheesecake</h1>

                <div class="post__fig">
                    <img src="images/products/pernikovy-cheesecake-3.jpg" alt="" width="400" />	
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

                <p>Cheesecake s čokoládou, mandlemi, karamelovou šlehačkou a korpusem, který voní po perníčkách.</p>
            </div><!-- /post__intro -->

            <div class="post__row post__row--primary">
                <div class="post__article">
                    <div class="post__meta">
                        <span class="icon icon--info"></span>
                        <p>Složení</p>
                    </div>

                    <ul>
                        <li>máslo</li>
                        <li>med</li>
                        <li>třtinový cukr</li>
                        <li>mouka</li>
                        <li>vejce</li>
                        <li>kakao</li>
                        <li>perníkové koření</li>
                        <li>soda</li>
                        <li>mascarpone</li>
                        <li>smetana</li>
                        <li>cukr</li>
                        <li>mandle</li>
                        <li>hořká čokoláda</li>
                        <li>tvaroh</li>
                        <li>kysaná smetana</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/pernikovy-cheesecake-2.jpg" alt="" width="400" />
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
                        <li>mouka</li>
                        <li>vejce</li>
                        <li>mascarpone</li>
                        <li>smetana</li>
                        <li>mandle</li>
                        <li>tvaroh</li>
                        <li>kysaná smetana</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/pernikovy-cheesecake-1.jpg" alt="" width="400" />
                </div>	
            </div>

        </div><!-- /post -->

        <div class="cta">
            <a href="napiste-nam?p=pernikovy-cheesecake" class="btn btn--wide">OBJEDNAT</a>
        </div>

    </div><!-- /section -->

    <div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
</div><!-- /content -->

<?php include_once 'similar.php'; ?>

