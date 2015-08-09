<?php
require_once __DIR__ . '/func_lib.php';

$newName = __DIR__ . '/images/' . basename($_FILES['upl_image']['name']);
if (is_uploaded_file($_FILES['upl_image']['tmp_name'])) {
    $res = move_uploaded_file($_FILES['upl_image']['tmp_name'], $newName);
    if ($res) {
        $fname = $_FILES['upl_image']['name'];
        $iname = $_POST['fname'];
        addNewImgToDB($fname,$iname);
        header('Location: index.php');
        exit;
    } else {
        header('Location: index.php');
    }
}
