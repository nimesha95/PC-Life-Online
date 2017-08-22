<?php
require '../../dbcon/user.php';
require '../../dbcon/dbcon.php';
if(isset($_POST['No'])){
    if(isset($_POST['pro_id']))
    {
        $dc_id=$_POST['pro_id'];
    }


    header('Location:view.php?id='.$dc_id);



}


?>