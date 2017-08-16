<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Computers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php

$db = $_GET['item']; //setting the _GET variable which recieved from the index page

// connect to database
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'webitems');

// define how many results you want per page
$results_per_page = 5;

// find out the number of results stored in database
$sql='SELECT * FROM '.$db;
$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result);
// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}
// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;
// retrieve selected results from database and display them on page
$sql='SELECT * FROM '.$db.' LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
//echo $sql;

$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result)) {
    echo $row['id'] . ' ' . $row['model']. '<br>';
}
// display the links to the pages
for ($page=1;$page<=$number_of_pages;$page++) {
    echo '<a href="items.html.php?page=' . $page . '">' . $page . '</a> ';
}
?>
</body>
</html>