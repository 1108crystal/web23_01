<?php
include_once "./base.php";
// dd($_POST);
$table=$_POST['table'];
$$table->save(['id'=>$_POST['id'],'total'=>$_POST['total']]);

to("../back.php?do=" . lcfirst($table));
