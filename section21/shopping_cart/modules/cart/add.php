<?php 
$id = (int) $_GET['id'];
add_cart($id);
$item = get_product_by_id($id);

redirect('?mod=cart&act=show');