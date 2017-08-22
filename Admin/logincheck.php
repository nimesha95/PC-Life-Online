<?php
include('dbcon/dbcon.php');
session_start();
$_SESSION['nID'] = 1;

if($_SERVER["REQUEST_METHOD"] == "POST") {

    // username and password sent from form

    $session_username = $_POST['username'];
    $session_password = $_POST['password'];


    $sqlid = "SELECT id FROM tb_user WHERE username = '$session_username' AND u_pw = '$session_password'";
    $sqltype = "SELECT u_type FROM tb_user WHERE username = '$session_username' AND u_pw = '$session_password'";

    $querytype = mysqli_query($conn, $sqltype);
    $type = mysqli_fetch_array($querytype, MYSQLI_ASSOC);

    $querysql = mysqli_query($conn, $sqlid);
    //checking query result is valid or not
    if (!$querysql) {
        die('Invalid query: ' . mysqli_error());
    }
    //


    $count = mysqli_num_rows($querysql);


    if ($count == 1) {


        if ($type['u_type']) {
            $_SESSION['username'] = $session_username;
            $stype = $type['u_type'];
            $_SESSION['type'] = $stype;
            $sql ="SELECT * FROM tb_user WHERE username='$session_username'";
            $result=mysqli_query($conn,$sql);
            $row = $result->fetch_assoc();
            date_default_timezone_set("Asia/Calcutta");
            $log_time= date("h:i:sa");
            $log_date = date('Y-m-d H:i:s');;
            $u_id=$row['u_id'];

            $sql1 = "INSERT INTO `tb_userlog`(`u_id`, `username`,`usertype`, `log_date`, `log_time`) VALUES ('$u_id','$session_username','$stype','$log_date','$log_time')";
            $res1=mysqli_query($conn,$sql1);


            header('Location:index.php');
        } }

    else {


        header('Location:Login.php?id=error');


    }}

?>
