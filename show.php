<?php
include 'header.inc.php';
$id = $_GET['itmID'];

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