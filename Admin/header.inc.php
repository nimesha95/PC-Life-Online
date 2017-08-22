<?php
session_start();
if(isset( $_SESSION['username'])){
    require 'Headcheck.php';
}
else
{
    require 'Login.php';
}

?>

