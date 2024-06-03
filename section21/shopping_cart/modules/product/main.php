<?php
get_header();
?>
<?php
$cat_id = (int) $_GET['cat_id'];
$infor_cat = get_product_card_by_id($cat_id);
$list_item = get_list_product_by_card_id($cat_id);
?>
<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $infor_cat['cat_title']; ?></h3>
                    <p class="section-desc"> Có <?php echo count($list_item)?> sản phẩm trong mục</p>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_item)) {
                        ?>
                        <ul class="list-item clearfix">
                            <?php foreach ($list_item as $item) { ?>
                                <li>
                                    <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb']?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['url']?>" title="" class="title"><?php echo $item['product_title']?></a>
                                    <p class="price"><?php echo currency_format($item['price'], 'đ')?></p>
                                </li>
                                <?php
                            }
                            ?>

                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="section" id="pagenavi-wp">
                <div class="section-detail">
                    <ul id="list-pagenavi">
                        <li class="active">
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                    </ul>
                    <a href="" title="" class="next-page"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>