<h3 class="cent">新增自介自傳</h3>
<hr>
<form action="api/add.php" method="post" enctype="multipart/form-data">
    <table style="width:70%;margin:auto">
        <tr>
            <td style="text-align:right">自我介紹：</td>
            <td><textarea name="intro" style="width:300px;height:100px;"></textarea></td>
        </tr>
        <tr>
            <td style="text-align:right">自傳：</td>
            <td><textarea name="bio" style="width:300px;height:100px;"></textarea></td>
        </tr>
    </table>
    <div style="width:100px;margin:auto">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>