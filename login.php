<?php
    include_once "base.php";
    if(!empty($_POST['acc']) && !empty($_POST['pw'])){
        $admin=new DB("admin");
        $acc=$_POST['acc'];
        $pw=$_POST['pw'];
        $chk=$admin->count(['acc'=>$acc,'pw'=>$pw]);
        if($chk>0){
            to("admin.php");
            $_SESSION['login']=$acc;
        }else{
            echo "<script>alert('帳號或密碼錯誤')</script>";
        }
        to ("admin.php");
    }
?>


<!-- //附檔名也能改成html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入畫面</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
</head>

</head>
    <style>
    body{
        background-image: url("img/bg.jpg");
        background-repeat: no-repeat;
        background-size:cover;
        margin:50px;
        
    }

   
    .logbox{
        height:300px;
        width:400px;
        border-radius:20px; 
        background-color: rgb(255, 255, 255);
        box-shadow:1px 1px 5px gray;
    }

   .h3{
     font-family: Arial, Helvetica, sans-serif;
   }

    </style>
</head>



<div class="logbox m-auto d-flex justify-content-center t1 border">
    
    <form action="" method="post">
        <h3 class="p-3 d-flex justify-content-center t2">Login</h3>

        <div class="d-flex justify-content-center mb-2 p-3"><label for="acc">帳號：</label><input type="text" name="acc" value="" placeholder="帳號 id"></div>
       
        <div class="d-flex justify-content-center mb-2"><label for="pw">密碼：</label><input type="password" name="pw" value="" placeholder="密碼 Password"></div>

        <div class="d-flex justify-content-around mb-2 p-3">
    <input class="btn btn-success align-self-end" style="width:100px" type="submit" value="登入">
    <input class="btn btn-success align-self-end" style="width:100px" type="reset" value="取消">
        </div>
        
        </div>
        </div>    
    </div>
    </form>
</body>
</html>