<?php
include('inc.php');
extract($_POST);
if(isset($_POST['name'])&&($_POST['email'])&&($_POST['password'])){
    $ins="INSERT INTO ajax_demo SET name='$name',email='$email',pass='$password'";
    $con->query($ins);
}
?>