<?php 
$conn = new PDO('mysql:host=unitop.local;dbname=test_pdo', 'root', 'abc1234');
if(!$conn) {
    echo "Kết nối không thành công";
    die();
}
else{
    echo "Kết nối thành công";
}