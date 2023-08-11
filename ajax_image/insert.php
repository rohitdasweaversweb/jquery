<?php
    include("inc.php");
    $n=$_POST['name'];
    $e=$_POST['email'];
    
    $fn=time().$_FILES['img']['name'];
    $ext=explode(".",$fn);
    $cn=count($ext);
    if($ext[$cn-1]=='jpg' ||$ext[$cn-1]=='jpeg' ||$ext[$cn-1]=='png' ){
    $tmp=$_FILES['img']['tmp_name'];
    move_uploaded_file($tmp,'pic/'.$fn);
    $ins="INSERT INTO tbl_ajax_image SET name='$n',email='$e',image='$fn' ";
    $con->query($ins);
    }
    else{
        echo"File type mismatched";
    }
    
?>