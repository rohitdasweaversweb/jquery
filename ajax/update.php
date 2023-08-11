<?php
    include('inc.php');
    $id=$_POST['id'];
    $name=$_POST['updname'];
    $email=$_POST['updemail'];
    $pass=$_POST['updpwd'];

    $upd="UPDATE ajax_demo SET name='$name',email='$email',pass='$pass' WHERE id='$id' ";
    $con->query($upd);

?>