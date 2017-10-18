<?php
/**
 * Created by PhpStorm.
 * User: Nimesha
 * Date: 8/23/2017
 * Time: 9:45 AM
 */

include 'header.inc.php';

  $search =  $_POST['my_html_input_tag'];
  $sql = "SELECT pro_id from keywords WHERE itemName='".$search."'";
//echo $sql;
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'pclifeonline');

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$id = $row['pro_id'];


$type = substr($id, 0, 2);

if ($type == "DC") {
    include "./item_display/Desktop.php";

    $Desk = new Desktop();
    $Desk->set_itm($id);
    $Desk->echo_itm();
} elseif ($type == "LC") {
    include "./item_display/Laptop.php";

    $Lap = new Laptop();
    $Lap->set_itm($id);
    $Lap->echo_itm();
}
include('footer.inc.php');
?>
