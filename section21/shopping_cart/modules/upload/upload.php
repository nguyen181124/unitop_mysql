<?php
$upload_file = __DIR__ . "/../../public/images/" . basename($_FILES["img"]["name"]);
$ename = "";
$eimg = "";
$ecategory = "";
$eprice = "";
$er = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isvalid = true;
    try {
        $id = $_POST['id'];
        if (empty($_POST["name"])) {
            $isvalid = false;
            $er['name'] = "Hãy nhập tên sản phẩm";

        } else {
            $name = $_POST['name'];
        }

        if (empty($_FILES["img"]["name"])) {
            $isvalid = false;
            $er['img'] = "Hãy chọn hình ảnh cho sản phẩm";
        } elseif (!in_array(exif_imagetype($_FILES["img"]["tmp_name"]), [IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF])) {
            $isvalid = false;
            $er['img'] = "Hãy chọn hình ảnh có định dạng JPEG, PNG hoặc GIF";
        } else {
            $img = '/public/images/' . $_FILES["img"]["name"];

            // Check if the file is uploaded successfully
            if (!move_uploaded_file($_FILES["img"]["tmp_name"], $upload_file)) {
                $isvalid = false;
                $er['img'] = "Upload hình ảnh thất bại";
            }

        }




        if (empty($_POST["category_id"])) {
            $isvalid = false;
            $er['category'] = "Hãy chọn loại sản phẩm";

        } else {
            $category_id = $_POST['category_id'];
        }

        if (empty($_POST['price'])) {
            $isvalid = false;
            $er['price'] = "Hãy nhập giá của sản phẩm";

        } else {
            $price = $_POST['price'];
        }
        if ($isvalid) {
            insert_record('products', [
                'name' => $name,
                'img' => $img,
                'price' => $price,
                "category_id" => $category_id,
            ]);
            $_SESSION['message'] = 'success';
            header('Location: http://shop.local/?page=home');
        } else {
            $_SESSION['message'] = $er;

            header('Location: http://shop.local/?mod=add_product&&act=add');
        }
    } catch (Exception $exception) {
        print_r($exception->getMessage());
    }

}