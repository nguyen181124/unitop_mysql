<?php
get_header();
?>

<?php
$list_add = get_record('Product', [], [['category_id' , '=', 1], ['price', '=', 99]]);
?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">

                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php foreach ($list_add as $product) {
                            ?>
                            <li>
                                <img src="<?php echo $product['img'] ?>" alt="">
                                <a href="" title="" class="title"><?php echo $product['name'] ?></a>
                                <p class="price"><?php echo currency_format($product['price'], 'đ')?></p>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <!-- <div class="section list-cat">
                <div class="section-head">
                    <a style="color: #000" class="section-title"
                        href="<?php echo $infor_cat_macbook['url'] ?>"><?php echo $infor_cat_macbook['cat_title'] ?></a>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php foreach ($list_add as $product) {
                            ?>
                            <li>
                                <img src="<?php echo $product['product_img'] ?>" alt="">
                                <a href="" title="" class="title"><?php echo $product['product_name'] ?></a>
                                <p class="price"><?php echo currency_format($product['product_price'], 'đ') ?></p>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</div>
<?php
get_footer();
?>