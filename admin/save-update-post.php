<?php
include "config.php";
if (empty($_FILES['new-image']['name'])) {
    $image = $_POST['old-image'];
} else {
    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_ext = strtolower(end(explode('.', $file_name)));
    $extensions = array('jpeg', 'jpg', 'png');

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "This file must be jpeg,jpg,png type.";
    }
    if ($file_size > 2097152) {
        $errors[] = "This file must be 2mb or lower";
    }

    if (empty($errors) === true) {
        move_uploaded_file($file_tmp, "upload/" . $file_name);
    }
}


?>
