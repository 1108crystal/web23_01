<?php
include_once "./base.php";

$table = $_POST['table'];
$data=[];
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];
}
if(isset($_POST['text'])){
    $data['text']=$_POST['text'];
}
if(isset($_POST['acc'])){
    $data['acc']=$_POST['acc'];
}
if(isset($_POST['pw'])){
    $data['pw']=$_POST['pw'];
}
if(isset($_POST['pw'])){
    $data['pw']=$_POST['pw'];
}
if($table!='Admin'){
    $data['sh']=($table=='Title')?0:1;
}

$$table->save($data);

to("../back.php?do=" . lcfirst($table));
