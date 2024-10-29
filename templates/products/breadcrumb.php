<ul class="reset" itemscope itemtype="http://schema.org/BreadcrumbList">
	<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
		<a href="" itemprop="item">
			Úvod
		</a>
		<span itemprop="position" content="1"></span>
	</li>
	<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
		<a href="produkty/" itemprop="item">
			Produkty
		</a>
		<span itemprop="position" content="2"></span>
	</li>
	<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
		<a href="produkty/<?= $config->get_page_category();?>" itemprop="item">
			<?= $config->get_page_category_title();?>
		</a>
		<span itemprop="position" content="3"></span>
	</li>
	<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
		<a href="produkty/<?= $config->get_page_category();?>/<?= $config->get_page_product();?>/" itemprop="item">
			<?= $config->get_page_product_title();?>
		</a>
		<span itemprop="position" content="4"></span>
	</li>
</ul>