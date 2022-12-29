<h3>新增動態文字廣告管理</h3>
<hr>
<form action="./api/add.php" method="post" >
<table>

    <tr>
        <td>動態文字廣告內容：</td>
        <td>
            <input type="text" name="text">
        </td>
    </tr>
</table>
<div>
    <input type="submit" value="新增">
    <input type="hidden" name="table" value="Ad">
    <input type="reset" value="重置">
</div>
</form>