<?php
include_once "./base.php";
// dd($_POST);
$row=$Mvim->find($_POST['id']);

if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../upload/" . $_FILES['img']['name']);
    $row['img']=$_FILES['img']['name'];
    $Mvim->save($row);
}



to("../back.php?do=mvim");
