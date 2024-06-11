<?php
get_header();
?>

<?php
$er = $_SESSION['message'] ?? [];
?>

<html>
<div id="main-content-wp" class="detail-news-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <h1>Thêm sản phẩm mới</h1>
        <form style="display:flex; flex-direction:column; width: 20%;" action="?mod=upload&act=upload" method="post" enctype="multipart/form-data">
            Mã sản phẩm
            <input name="id" type="text" />
            Tên sản phẩm
            <input name="name" type="text" />
            <?php if(isset($er['name'])){
                echo $er['name'];
            } ?>
            Ảnh
            <input name="img" type="file" />
            <?php if(isset($er['img'])){
                echo $er['img'];
            } ?>
            Loại sản phẩm
            <select id="category_id" name="category_id">
                <option value="0">--Loại sản phẩm--</option>
                <option value="1">Điện thoại</option>
                <option value="2">Macbook</option>
            </select>
            <?php if(isset($er['category'])){
                echo $er['category'];
            } ?>
            Giá
            <input name="price" type="number" />
            <?php if(isset($er['price'])){
                echo $er['price'];
            } ?>
            <input class="save border-2 border-black max-w-max px-4 py-2 mt-4 " type="submit" name="Thêm"
                value="Thêm" />
        </form>
    </div>
</div>

</html>

<?php
get_footer();
?>