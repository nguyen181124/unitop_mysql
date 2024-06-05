<?php
get_header();
?>

<?php

$list_add = get_record('products', [], []);
$cat_id = (int) $_GET['cat_id'];
$infor_cat_mobile = get_product_card_by_id(1);
$infor_cat_macbook = get_product_card_by_id(2);
?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <a style="color: #000" class="section-title" href="<?php echo $infor_cat_mobile['url'] ?>">Điện
                        thoại</a>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php foreach ($list_add as $product) {
                            if ($product['category_id'] == 1) {
                                ?>
                                <li>
                                    <img src="<?php echo $product['img'] ?>" alt="">
                                    <a href="?mod=product&act=detail&id=<?php echo $product['id'] ?>" title="" class="title"><?php echo $product['name'] ?></a>
                                    <p class="price"><?php echo currency_format($product['price'], 'đ') ?></p>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <a style="color: #000" class="section-title"
                        href="<?php echo $infor_cat_macbook['url'] ?>">Macbook</a>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php foreach ($list_add as $product) {
                            if ($product['category_id'] == 2) {
                                ?>
                                <li>
                                    <img src="<?php echo $product['img'] ?>" alt="">
                                    <a href="?mod=product&act=detail&id=<?php echo $product['id'] ?>" title="" class="title"><?php echo $product['name'] ?></a>
                                    <p class="price"><?php echo currency_format($product['price'], 'đ') ?></p>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>