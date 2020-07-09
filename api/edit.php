<?php 

//請參考add.php的註解，自行讀懂下列程式碼的功能

include_once '../base.php';
 
$table=$_POST['table'];
$db=new DB($table);

 foreach($_POST['id'] as $key=>$id){
     if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
        $db->del($id);
     }else{
        $row=$db->find($id);

         switch($table){
            case "title":
               if(!empty($_POST['text'])){
                  $row['text']=$_POST['text'][$key];
               }
               $row['sh']=($_POST['sh']==$id)?1:0;
            break;
            case "admin":
               $row['acc']=$_POST['acc'][$key];
               $row['pw']=$_POST['pw'][$key];
            break;
            case "photo":
               $row['text']=$_POST['text'][$key];
               $row['sh']=($_POST['sh']==$id)?1:0;
               // print_r($row['img']);
            break;
            case "exp":
               $row['title']=$_POST['title'][$key];
               $row['year']=$_POST['year'][$key];
               $row['content']=$_POST['content'][$key];
               $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
            case "about":
               $row['intro']=$_POST['intro'][$key];
               $row['bio']=$_POST['bio'][$key];
               $row['sh']=($_POST['sh']==$id)?1:0;
            break;
            default:
               $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
         }

         $db->save($row);
     }
 }

to("../admin.php?do=$table");

?>