<?php
include 'header.inc.php';
if(isset($_GET['id'])){
    if($_GET['id']=='products'){
        include 'Products/index.php';
    }

}
else {
    echo 'Home';
}
?>