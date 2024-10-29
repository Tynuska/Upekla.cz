<div class="content content--bg6">
    <div class="section">
        <div class="bread">
            <?php include_once 'breadcrumb.php'; ?>
        </div><!-- /bread -->

        <div class="post">
            <div class="post__intro">
                <h1>Borůvkový cheesecake</h1>

                <div class="post__fig">
                    <img src="images/products/boruvkovy-cheesecake-1.jpg" alt="" width="400" />	
                </div>					
                <div class="post__meta">
                    <span class="icon icon--cake"></span>
                    <p>Cena<br>Dortu</p>
                    <p class="post__meta__price"><?= $config->get_product_price(); ?></p>
                </div>	
                <div class="post__meta">
                    <span class="icon icon--diameter"></span>
                    <p>průměr: 24 cm - 12 dílů <br />trvanlivost: 48 hodin</p>
                </div>

                <p>Smetanový krém s tvarohem a borůvkami na sušenkovém kakaovém základu.</p>

                <ul>
                        <li>Jemný krém</li>
                        <li>Křupavý korpus</li>
                        <li>Lehký dort</li>
                       
                 </ul>   

                
            </div><!-- /post__intro -->

            <div class="post__row post__row--primary">
                <div class="post__article">
                    <div class="post__meta">
                        <span class="icon icon--info"></span>
                        <p>Složení</p>
                    </div>

                    <ul>
                        <li>kakaové sušenky</li>
                        <li>máslo</li>
                        <li>mascarpone</li>
                        <li>smetana</li>
                        <li>cukr</li>
                        <li>borůvky</li>
                        <li>želatina</li>
                        <li>tvaroh</li>
                        <li>kysaná smetana</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/boruvkovy-cheesecake-2.jpg" alt="" width="400" />
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
                        <li>mascarpone</li>
                        <li>smetana</li>
                        <li>tvaroh</li>
                        <li>kysaná smetana</li>
                    </ul>	
                </div>


                <div class="post__fig">
                    <img src="images/products/boruvkovy-cheesecake-3.jpg" alt="" width="400" />
                </div>	
            </div>

        </div><!-- /post -->

        <div class="cta">
            <a href="napiste-nam?p=boruvkovy-cheesecake" class="btn btn--wide">OBJEDNAT</a>
        </div>

    </div><!-- /section -->

    <div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
</div><!-- /content -->

<?php include_once 'similar.php'; ?>

