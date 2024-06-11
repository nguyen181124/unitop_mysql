<?php
function get_product_card_by_id($cat_id){
    $list_product_cart = get_record('products', [], []);

    if(array_key_exists($cat_id, $list_product_cart)){
        $list_product_cart[$cat_id]['url'] = "?mod=product&act=main&cat_id={$cat_id}";
        return $list_product_cart[$cat_id];
    }else{
        return false;
    }

}

function get_list_product_by_card_id($cat_id) {
    $list_product = get_record('products', [], []);
    $result = [];
    foreach ($list_product as $item) {
        if($item['category_id'] == $cat_id) {
            $item['url'] = "?mod=product&act=detail&id={$item['id']}";
            $result[] = $item;
        }
    }
    return $result;
}

function get_product_by_id($id) {
    $list_product = get_record('products', [], []);
    foreach ($list_product as $product) {
        if($product['id'] == $id){
            $product['url_add_cart'] = "?mod=cart&act=add&id={$id}";
        $product['url'] = "?mod=product&act=detail&id={$id}";
        return $product;
        }
    }
    return false;
}

function paginate(string $table,int $page, int $limit, array $condition = []) {
    $offset = ($page - 1) * $limit;
    global $conn;
    $sql = "SELECT * FROM $table ";
    if (!empty($condition)){
        $sql.= "WHERE $condition[0] $condition[1] $condition[2] ";
    }
    $sql .= "LIMIT $limit OFFSET $offset";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

// SELECT * FROM products WHERE catagory_id = 1 LIMIT 4 OFFSET 0;

function delete_product($id){
    global $conn;
    $sql = "DELETE FROM products WHERE id={$id}";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}