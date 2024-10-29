<div class="content content--bg6">
    <div class="section">
        <div class="bread">
            <?php include_once 'breadcrumb.php'; ?>
        </div><!-- /bread -->

        <div class="post">
            <div class="post__intro">
                <h1>Darovací šek</h1>

                <div class="post__fig">
                    <img src="images/products/darovaci-sek-1.jpg" alt="" width="400" />	
                </div>					
                <div class="post__meta">
                    <span class="icon icon--cake"></span>
                    <p>Cena</p>
                    <p class="post__meta__price"><?= $config->get_product_price(); ?></p>
                </div>	

                <p>Dárkové šeky v hodnotě 100, 200, 300, 500 a 1000 Kč. Můžete zakoupit u nás v Písku i v Příbrami.</p>
            </div><!-- /post__intro -->
        </div>    
    </div><!-- /section -->
    <div class="content__bg js-lazy" data-src="images/bg-6.png"></div>			
</div><!-- /content -->

<?php include_once 'similar.php'; ?>

