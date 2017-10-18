<?php
require '../../dbcon/user.php';
require '../../dbcon/dbcon.php';
if(isset($_POST['add'])){
    $pro_id=$_POST['pro_id'];
    echo $pro_id;
    $cat=$_POST['cat'];
    echo $cat;
    $brand=$_POST['brand'];
    echo $brand;
    $model=$_POST['model'];
    echo $model;
    $processor=$_POST['processor'];
    echo $processor;
    $screen_size=$_POST['screen_size'];
    echo $screen_size;
    $ram=$_POST['ram'];
    echo $ram;
    $hdd=$_POST['hdd'];
    echo $hdd;
    $gui=$_POST['gui'];
    echo $gui;
    $op_drive=$_POST['op_drive'];
    echo $op_drive;
    $screen_type=$_POST['screen_type'];
    echo $screen_type;
    $wifi=$_POST['wifi'];
    echo $wifi;
    $bluetooth=$_POST['bluetooth'];
    echo $bluetooth;
    $web_cam=$_POST['web_cam'];
    echo $web_cam;
    $colors=$_POST['colors'];
    echo $colors;
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


    $sql=" UPDATE `tb_laptop` SET `cat`='$cat',`brand`='$brand',`model`='$model',`processor`='$processor',`screen_type`='$screen_type',`ram`='$ram',`hdd`='$hdd',`gui`='$gui',`op_drive`='$op_drive',`screen_size`='$screen_size',`wifi`='$wifi',`bluetooth`='$bluetooth',`web_cam`='$web_cam',`sounds`='$sounds',`price`='$price',`dis_price`='$dis_price',`availability`='$availability',`warranty`='$warranty',`pri_image`='$pri_image',`img1`='$img1',`img2`='$img2',`img3`='$img3',`img4`='$img4',`up_date`='$up_date',`os`='$os' WHERE pro_id='$pro_id'";
    $res1=mysqli_query($conn,$sql);
    header('Location:view.php?id='.$pro_id);







}


?>