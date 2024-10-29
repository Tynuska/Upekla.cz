<div class="content content--bg6">
    <div class="section">
        <div class="bread">
            <?php include_once 'breadcrumb.php'; ?>
        </div><!-- /bread -->

        <div class="post">
            <div class="post__intro">
                <h1>Dýňový cheesecake</h1>

                <div class="post__fig">
                    <img src="images/products/dynovy-cheesecake-1.jpg" alt="" width="400" />	
                </div>					
                <div class="post__meta">
                    <span class="icon icon--cake"></span>
                    <p>Cena<br>Dortu</p>
                    <p class="post__meta__price"><?= $config->get_product_price(); ?></p>
                </div>	
                <div class="post__meta">
                    <span class="icon icon--diameter"></span>
                    <p>PRŮMĚR: 24 CM - 12 DÍLŮ<br />Trvanlivost: 48 hodin</p>
                </div>

                <p>Svěží dort s příjemnou příchutí  skořice, zázvoru a hřebíčku.</p>
            </div><!-- /post__intro -->

            <div class="post__row post__row--primary">
                <div class="post__article">
                    <div class="post__meta">
                        <span class="icon icon--info"></span>
                        <p>Složení</p>
                    </div>

                    <ul>
                        <li>čerstvý sýr</li>
                        <li>sušenky</li>
                        <li>máslo</li>
                        <li>smetana</li>
                        <li>dýně</li>
                        <li>perníkové koření</li>
                        <li>kysaná smetana</li>
                        <li>třtinový cukr</li>
                        <li>vejce</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/dynovy-cheesecake-2.jpg" alt="" width="400" />
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
                        <li>máslo</li>
                        <li>smetana</li>                        
                        <li>kysaná smetana</li>
                        <li>vejce</li>
                        <li>sušenky</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/dynovy-cheesecake-3.jpg" alt="" width="400" />
                </div>	
            </div>

        </div><!-- /post -->

        <div class="cta">
                    <a href="napiste-nam?p=dynovy-cheesecake" class="btn btn--wide"> NAPIŠTE POPTÁVKU NA TUTO DOBROTU.</a>
        </div>

    </div><!-- /section -->

    <div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
</div><!-- /content -->

<?php include_once 'similar.php'; ?>

