<?php
require '../../dbcon/user.php';
require '../../dbcon/dbcon.php';
if(isset($_POST['una'])){
if(isset($_POST['pro_id']))
    {
        $dc_id=$_POST['pro_id'];
    }

    $sql="UPDATE `tb_laptop` SET `availability`='Not Available' WHERE pro_id = '$dc_id'";
    $res1=mysqli_query($conn,$sql);
    header('Location:view.php?id='.$dc_id);



}


?>