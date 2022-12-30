<?php
include_once "./base.php";
dd($_POST);
$table = $_POST['table'];

$data=[];
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];
}

foreach($_POST as $key => $value){
    if($key!='table' && $key!='id'){
        $data[$key]=$value;  

    }
}

$$table->save($data);

to("../back.php?do=" . lcfirst($table));
