<?php
get_header();
?>
<?php
$id = (int) $_GET['id'];
$item = get_product_by_id($id);
?>

<div id="main-content-wp" class="detail-product-page clearfix">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="info-product-wp">
                <div class="section-detail clearfix">
                    <div class="thumb fl-left">
                        <img src="<?php echo $item['img'] ?>" alt="">
                    </div>
                    <div class="detail fl-right">
                        <h3 class="title"><?php echo $item['name']; ?></h3>
                        <p class="price"><?php echo currency_format($item['price'], 'đ') ?></p>
                        <p class="product-code">Mã sản phẩm: <?php echo $item['id'] ?></p>
                        <div class="desc-short">
                            <h5>Mô tả sản phẩm:</h5>
                        </div>
                        <a href="?mod=delete_product&act=delete" title="Xóa sản phẩm" class="del-product"><i
                                class="fa fa-trash-o"></i></a>
                            
                    </div>
                </div>
            </div>
            <div class="section" id="desc-wp">
                <div class="section-head">
                    <h3 class="section-title">Chi tiết sản phẩm</h3>
                </div>
                <div class="section-detail">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>