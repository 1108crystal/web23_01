<?php
include_once "./base.php";
//   dd($_POST);
$table = $_POST['table'];
foreach ($_POST['id'] as $idx => $id) {
    //是否有刪除的key，如有刪除此筆

    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $$table->del($id);
    } else {
        $row = $$table->find($id);
        switch ($table) {
            case 'Title':
                $row['text'] = $_POST['text'][$idx];
                $row['sh'] = (isset($_POST['sh']) && $id == $_POST['sh']) ? 1 : 0;
                break;

            case 'Admin':
                break;
            case 'Menu':
                break;
            case 'Total':
                $row['total'] = $_POST['total'][$idx];
                break;
            case 'Bottom':
                $row['bottom'] = $_POST['bottom'][$idx];
                break;
            default:
                if (isset($_POST['text'])) {
                    $row['text'] = $_POST['text'][$idx];
                }
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                break;
        }
        $$table->save($row);
    }
}

to("../back.php?do=" . lcfirst($table));
