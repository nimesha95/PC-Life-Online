<?php
require '../../dbcon/user.php';
require '../../dbcon/dbcon.php';
if(isset($_POST['yes'])){
    if(isset($_POST['pro_id']))
    {
        $dc_id=$_POST['pro_id'];

    }
    $sql="DELETE FROM `tb_desktop` WHERE pro_id='$dc_id'";
    $res1=mysqli_query($conn,$sql);

    header('Location:index.php');



}


?>