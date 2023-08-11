<?php
    include("inc.php");
    if(isset($_POST['deleteid'])){
        $del_id=$_POST['deleteid'];
        $del="SELECT * FROM tbl_ajax_image WHERE id='$del_id'";
        $rs=$con->query($del);
        while($row=$rs->fetch_assoc()){
            $del_img=$row['image'];
            unlink('pic/'.$del_img);
        }

        $del="DELETE FROM tbl_ajax_image WHERE id='$del_id'";
        $con->query($del);
    }else{
        echo"No data Found for delete";
    }
?>