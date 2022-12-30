<?php
include "base.php";
dd($_POST);
if (isset($_POST['id'])) {
    // 修改
    foreach ($_POST['id'] as $idx => $id) {
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $Menu->del($id);
        } else {
            $row = $Menu->find($id);
            $row['name'] = $_POST['name'][$idx];
            $row['href'] = $_POST['href'][$idx];
            $Menu->save($row);
        }
    }
}
// 新增
if (isset($_POST['add_name'])) {
    foreach ($_POST['add_name'] as $idx => $name) {
        echo $_POST['add_href'][$idx];
        if (!empty($name)) {
            $Menu->save([
                'name' => $name,
                'href' => $_POST['add_href'][$idx],
                'parent' => $_POST['parent'],
                'sh' => 1,
            ]);
        }
    }
}


to("../back.php?do=menu");
