<?php
function get_product_card_by_id($cat_id){
    global $list_product_cart;
    if(array_key_exists($cat_id, $list_product_cart)){
        $list_product_cart[$cat_id]['url'] = "?mod=product&act=main&cat_id={$cat_id}";
        return $list_product_cart[$cat_id];
    }else{
        return false;
    }

}

function get_list_product_by_card_id($cat_id) {
    global $list_product;
    $result = [];
    foreach ($list_product as $item) {
        if($item['cat_id'] == $cat_id) {
            $item['url'] = "?mod=product&act=detail&id={$item['id']}";
            $result[] = $item;
        }
    }
    return $result;
}

function get_product_by_id($id) {
    global $list_product;
    if(array_key_exists($id , $list_product)){
        $list_product[$id]['url_add_cart'] = "?mod=cart&act=add&id={$id}";
        $list_product[$id]['url'] = "?mod=product&act=detail&id={$id}";
        return $list_product[$id];
    }
    return false;
}