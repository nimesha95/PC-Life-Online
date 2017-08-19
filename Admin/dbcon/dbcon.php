<?php
    require('user.php');
$conn=new mysqli($servername,$username,$password,$db);

if($conn->connect_error){
    die("connection failed :".$conn->connect_error);
}
//ddfsdgdfgf
?>