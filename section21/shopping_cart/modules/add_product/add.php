<?php
get_header();
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $isvalid = true;
        $id = $_POST['id'];
        $name = $_POST['name'];
        $img = $_POST['img'];
        $category_id = $_POST[`category_id`];
        $price = $_POST['price'];
        // insert_record(PDO::PARAM_INT(),'products', ['name' => $name, 'category_id' => (int)$category_id]);
        insert_record('products', [
            'name' => $name,
            "category_id" => $category_id,
        ]);
        if ($is_success) {
            echo " Insert successfully!";
        }
    } catch (Exception $exception) {
        print_r($exception->getMessage());
    }

    // print_r($conn);
    // insert_record('Product', ['name' => $name, 'img' => $img, 'categoty_id' => $category_id, 'price' => $price]);

}
?>

<html>
<div id="main-content-wp" class="detail-news-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <h1>Thêm sản phẩm mới</h1>
        <form action="" method="post">
            Mã sản phẩm
            <input name="id" type="text" />
            Tên sản phẩm
            <input name="name" type="text" />
            Ảnh
            <input name="img" type="text" />
            Loại sản phẩm
            <select id="category_id" name="category_id">
                <option value="0">--Loại sản phẩm--</option>
                <option value="1">Điện thoại</option>
                <option value="2">Macbook</option>
            </select>
            Giá
            <input name="price" type="number" />
            <input class="save border-2 border-black max-w-max px-4 py-2 mt-4 " type="submit" name="Thêm"
                value="Thêm" />
        </form>
    </div>

    <div class="database">
        <?php foreach ($list_add as $product) {
            ?>
            <tr>
                <td><?php echo $product['id'] ?></td>
                <td><?php echo $product['name'] ?></td>
                <td><img src="<?php echo $product['img'] ?>" alt=""></td>
                <td><?php echo $product['category_id'] ?></td>
                <td><?php echo $product['price'] ?></td><br>
            </tr>
            <?php
        }
        ?>
    </div>
</div>

</html>

<?php
get_footer();
?>