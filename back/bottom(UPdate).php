<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">版權管理</p>
    <!-- <form method="post" target="back" action="?do=tii"> -->
        
    <form method="post" action="../api/update.php">
    <!-- <form method="post" action="../api/edit.php"> -->
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="20%">版權內容:</td>
                    <td width="80%">
                        <input type="text" name="bottom" value="<?=$Bottom->find(1)['bottom']?>">
                    </td>
                    <input type="hidden" name="table" value="Bottom">
                    <input type="hidden" name="id" value="<?=$Bottom->find(1)['id']?>">
                    
                </tr>

            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">

                    </td>
                    <td class="cent">
                        <input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>