<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">自介自傳</p>
    <form method="post" action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="26%">自我介紹</td>
                    <td width="60%">自傳</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                </tr>
                <?php
                    $table=$do;
                    $db=new DB($table);
                    $rows=$db->all();
                    foreach($rows as $row){
                        $isChk=($row['sh']==1)?'checked':'';
                ?>
                <tr class='cent'>
                   
                    <td width="26%">
                        <textarea name="intro[]" style='width:90%;height:100px'><?=$row['intro'];?></textarea>
                    </td>
                    <td width="60%">
                        <textarea name="bio[]" style='width:90%;height:100px'><?=$row['bio'];?></textarea>
                    </td>
                    <td width="7%"><input type="radio" name="sh" value="<?=$row['id'];?>" <?=$isChk;?>> </td>
                    <td width="7%"><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
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
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/about.php?table=<?=$table;?>&#39;)"
                            value="新增自介與自傳"></td>
                    <input type="hidden" name="table" value='<?=$table;?>'>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>