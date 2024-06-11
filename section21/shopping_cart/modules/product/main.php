<?php
get_header();
?>
<?php
$cat_id = (int) $_GET['cat_id'];
$page = $_GET['page'] ?? 1;
$infor_cat = get_product_card_by_id($cat_id);
$list_item = get_list_product_by_card_id($cat_id);
$list_add = paginate('products', $page, 4, ['category_id', '=', $cat_id]);
$all_product = count($list_item);
?>
<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php if($cat_id == 1){
                        echo "Điện thoại";
                    }elseif ($cat_id == 2) {
                        echo "Macbook";
                    } ?></h3>

                    <p class="section-desc"> Có <?php echo $all_product ?> sản phẩm trong mục</p>
                </div>
                <div class="section-detail">

                    <ul class="list-item clearfix">
                        <?php foreach ($list_add as $product) {

                            if ($product['category_id'] == $cat_id) {
                                ?>
                                <li>
                                    <img src="<?php echo $product['img'] ?>" alt="">
                                    <a href="?mod=product&act=detail&id=<?php echo $product['id'] ?>" title=""
                                        class="title"><?php echo $product['name'] ?></a>
                                    <p class="price"><?php echo currency_format($product['price'], 'đ') ?></p>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <div class="section" id="pagenavi-wp">
                <div class="section-detail">
                    <ul id="list-pagenavi">
                        <?php $total_page = ceil($all_product/4);
                        for($i = 1; $i <= $total_page; $i++) {
                            if ($i == $page) {
                                echo '<li class="active"><a href="?mod=product&act=main&cat_id=' . $cat_id . '&page=' . $i . '">' . $i . '</a></li>';
                            }else{
                                echo '<li class="active"><a href="?mod=product&act=main&cat_id=' . $cat_id . '&page=' . $i . '">' . $i . '</a></li>';
                            }
                        }
                        ?>
                    </ul>
                    
                     <a href="<?php if ($page < $total_page) {
                        echo '?mod=product&act=main&cat_id=' . $cat_id . '&page=' . ($page + 1);
                    } ?>" title="" class="next-page"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>