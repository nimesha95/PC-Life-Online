<?php
require '../../dbcon/user.php';
require '../../dbcon/dbcon.php';
if(isset($_GET['id'])){
    if(isset($_GET['id']))
    {
        $dc_id=$_GET['id'];
    }

    $sql="UPDATE `tb_desktop` SET `availability`='Available' WHERE pro_id = '$dc_id'";
    $res1=mysqli_query($conn,$sql);




}


?>