<?php
require '../../dbcon/user.php';
require '../../dbcon/dbcon.php';
if(isset($_POST['add'])){
    $pro_id=$_POST['pro_id'];
    echo $pro_id;
    $cond=$_POST['cond'];
    echo $cond;
    $brand=$_POST['brand'];
    echo $brand;
    $model=$_POST['model'];
    echo $model;
    $processor=$_POST['processor'];
    echo $processor;
    $m_board=$_POST['m_board'];
    echo $m_board;
    $ram=$_POST['ram'];
    echo $ram;
    $hdd=$_POST['hdd'];
    echo $hdd;
    $gui=$_POST['gui'];
    echo $gui;
    $op_drive=$_POST['op_drive'];
    echo $op_drive;
    $monitor_des=$_POST['monitor_des'];
    echo $monitor_des;
    $pw_supply=$_POST['pw_supply'];
    echo $pw_supply;
    $mouse=$_POST['mouse'];
    echo $mouse;
    $key_bd=$_POST['key_bd'];
    echo $key_bd;
    $sounds=$_POST['sounds'];
    echo $sounds;
    $price=$_POST['price'];
    echo $price;
    $dis_price=$_POST['dis_price'];
    echo $dis_price;
    $availability=$_POST['availability'];
    echo $availability;
    $warranty=$_POST['warranty'];
    echo $warranty;
    $pri_image=$_POST['pri_image'];
    echo $warranty;
    $img1=$_POST['img1'];
    echo $img1;
    $img2=$_POST['img2'];
    echo $img2;
    $img3=$_POST['img3'];
    echo $img3;
    $img4=$_POST['img4'];
    echo $img4;
    date_default_timezone_set("Asia/Calcutta");
    date_default_timezone_set("Asia/Calcutta");

    $up_date= date('Y-m-d H:i:s');;
    $add_date= date('Y-m-d H:i:s');;


    echo $up_date;
    $os=$_POST['os'];
    echo $os;
    $frm_factor=$_POST['frm_factor'];
    echo $frm_factor;

    $sql=" UPDATE `tb_desktop` SET `cat`='$cond',`brand`='$brand',`model`='$model',`processor`='$processor',`m_board`='$m_board',`ram`='$ram',`hdd`='$hdd',`gui`='$gui',`op_drive`='$op_drive',`monitor_des`='$monitor_des',`pw_supply`='$pw_supply',`mouse`='$mouse',`key_bd`='$key_bd',`sounds`='$sounds',`price`='$price',`dis_price`='$dis_price',`availability`='$availability',`warranty`='$warranty',`pri_image`='$pri_image',`img1`='$img1',`img2`='$img2',`img3`='$img3',`img5`='$img4',`img4`='$img4',`up_date`='$up_date',`os`='$os',`frm_factor`='$frm_factor' WHERE pro_id='$pro_id'";
    $res1=mysqli_query($conn,$sql);




}


?>