<?php
$upload_dir = 'upload/';
$upload_file = $upload_dir.$_FILES['file']['name'];

if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
    echo "ok";
}else {
    echo"er";
}