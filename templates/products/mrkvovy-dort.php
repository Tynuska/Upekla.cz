<div class="content content--bg6">
    <div class="section">
        <div class="bread">
            <?php include_once 'breadcrumb.php'; ?>
        </div><!-- /bread -->

        <div class="post">
            <div class="post__intro">
                <h1>Mrkvový dort</h1>

                <div class="post__fig">
                    <img src="images/products/mrkvovy-dort-1.jpg" alt="" width="400" />	
                </div>					
                <div class="post__meta">
                    <span class="icon icon--cake"></span>
                    <p>Cena<br>Dortu</p>
                    <p class="post__meta__price"><?= $config->get_product_price(); ?></p>
                </div>	
                <div class="post__meta">
                    <span class="icon icon--diameter"></span>
                    <p>Průměr 24 cm – 12 dílů<br />trvanlivost 72 hodin</p>
                </div>

                <p>Vláčný dort s ořechy  s vrstvou jemného krému. 12 mrkviček z cukrové hmoty.  Jeden z nejoblíbenějších dortů v naší nabídce.</p>
            </div><!-- /post__intro -->

            <div class="post__row post__row--primary">
                <div class="post__article">
                    <div class="post__meta">
                        <span class="icon icon--info"></span>
                        <p>Složení</p>
                    </div>

                    <ul>
                        <li>mouka</li>
                        <li>vejce</li>
                        <li>hnědý cukr</li>
                        <li>moučkový cukr</li>
                        <li>skořice</li>
                        <li>kypřící prášek</li>
                        <li>soda</li>
                        <li>sůl</li>
                        <li>olej</li>
                        <li>mrkev</li>
                        <li>vlašské ořechy</li>
                        <li>pomazánkové máslo</li>
                        <li>máslo</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/mrkvovy-dort-2.jpg" alt="" width="400" />
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
                        <li>vejce</li>
                        <li>ořechy</li>
                        <li>máslo</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/dort_textura.jpg" alt="" width="400" />
                </div>	
            </div>

        </div><!-- /post -->

        <div class="cta">
            <a href="napiste-nam?p=mrkvovy-dort" class="btn btn--wide">OBJEDNAT</a>
        </div>

    </div><!-- /section -->

    <div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
</div><!-- /content -->

<?php include_once 'similar.php'; ?>

