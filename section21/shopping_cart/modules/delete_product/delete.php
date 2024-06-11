<?php
$id = (int) $_GET['id'];
delete_product($id);
header('Location: http://shop.local/?page=home');