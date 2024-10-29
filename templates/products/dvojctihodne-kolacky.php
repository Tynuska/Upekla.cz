<div class="content content--bg6">
    <div class="section">
        <div class="bread">
            <?php include_once 'breadcrumb.php'; ?>
        </div><!-- /bread -->

        <div class="post">
            <div class="post__intro">
                <h1>Dvojctihodné koláčky</h1>

                <div class="post__fig">
                    <img src="images/products/dvojctihodne-kolacky-1.jpg" alt="" width="400" />	
                </div>					
                <div class="post__meta">
                    <span class="icon icon--pie"></span>
                    <p>Cena<br>Koláče</p>
                    <p class="post__meta__price"><?= $config->get_product_price(); ?></p>
                </div>	
                <div class="post__meta">
                    <span class="icon icon--diameter"></span>
                    <p>Průměr 6 cm nebo 8 cm</p>
                </div>

                <p>Vláčné a nadýchané koláčky s povidly navrch a tvarohem uvnitř. Posypané drobenkou.</p>
                <p>Varianty:</p>
                <ul>
                    <li>tvaroh a povidla</li>
                    <li>tvaroh a vlašské ořechy</li>
                    <li>tvaroh a mák</li>
                    <li>tvaroh a jablka se skořicí</li>
                </ul>
                <p>Menší velikost 6 cm cena 35 kč</p>
            </div><!-- /post__intro -->

            <div class="post__row post__row--primary">
                <div class="post__article">
                    <div class="post__meta">
                        <span class="icon icon--info"></span>
                        <p>Složení</p>
                    </div>

                    <ul>
                        <li>mouka</li>
                        <li>cukr</li>
                        <li>máslo</li>
                        <li>droždí</li>
                        <li>povidla</li>
                        <li>tvaroh</li>
                        <li>vejce</li>
                        <li>mléko</li>
                        <li>olej</li>
                        <li>sůl</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/dvojctihodne-kolacky-2.jpg" alt="" width="400" />
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
                        <li>máslo</li>
                        <li>tvaroh</li>
                        <li>vejce</li>
                        <li>mléko</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/kolac_textura.jpg" alt="" width="400" />
                </div>	
            </div>

        </div><!-- /post -->

        <div class="cta">
            <a href="napiste-nam?p=dvojctihodne-kolacky" class="btn btn--wide">OBJEDNAT</a>
        </div>

    </div><!-- /section -->

    <div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
</div><!-- /content -->

<?php include_once 'similar.php'; ?>
