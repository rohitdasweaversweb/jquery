<?php
    include('inc.php');
    if(isset($_POST['deleteid']))
    $del_id=$_POST['deleteid'];
    $del="DELETE FROM ajax_demo WHERE id='$del_id'";
    $con->query($del);
?>