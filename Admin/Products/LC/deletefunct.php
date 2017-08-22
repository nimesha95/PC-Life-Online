<?php
require '../../dbcon/user.php';
require '../../dbcon/dbcon.php';
if(isset($_POST['yes'])){
    if(isset($_POST['pro_id']))
    {
        $dc_id=$_POST['pro_id'];

    }
    $sql="DELETE FROM `tb_laptop` WHERE pro_id='$dc_id'";
    $res1=mysqli_query($conn,$sql);

    header('Location:index.php');



}


?>