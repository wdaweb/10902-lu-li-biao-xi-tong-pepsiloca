<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">管理者帳號管理</p>
    <form method="post" action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">帳號</td>
                    <td width="45%">密碼</td>
                    <td width="10%">刪除</td>
                </tr>
                <?php
                //請參考title.php來讀懂以下的程式碼
                    $table=$do;
                    $db=new DB($table);
                    $rows=$db->all();
                    foreach($rows as $row){           
                ?>
                <tr class='cent'>
                    <td><input type="text" name="acc[]" value="<?=$row['acc'];?>" style='width:90%'> </td>
                    <td><input type="password" name="pw[]" value="<?=$row['pw'];?>" style='width:90%'> </td>
                    <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php                
                    }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/admin.php?table=<?=$table;?>&#39;)"
                            value="新增管理者帳號"></td>
                    <input type="hidden" name="table" value='<?=$table;?>'>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>