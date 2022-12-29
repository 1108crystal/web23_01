<h3>新增最新消息資料</h3>
<hr>
<form action="./api/add.php" method="post">
<table>

    <tr>
        <td>最新消息資料內容：</td>
        <td>
            <!-- <input type="text" name="text"> -->
            <textarea rows="4" cols="50" name="text" style="width:95%;height:62px"></textarea>
        </td>
    </tr>
</table>
<div>
    <input type="submit" value="新增">
    <input type="hidden" name="table" value="News">
    <input type="reset" value="重置">
</div>
</form>