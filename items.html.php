<?php
include 'header.inc.php';

$_SESSION["db"] = $_GET['item'];
$_SESSION["cat"] = $_GET['cat'];

if ($_SESSION["cat"] == "Brand_New") {
    $_SESSION["cat"] = "Brand New";
}

// connect to database
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'pclifeonline');

// define how many results you want per page
$results_per_page = 6;

// find out the number of results stored in database
if (!isset($_SESSION["cat"])) {
    $sql = 'SELECT * FROM ' . $_SESSION["db"];
} elseif (isset($_SESSION["cat"])) {
    $sql = 'SELECT * FROM ' . $_SESSION["db"] . ' WHERE  cat="' . $_SESSION["cat"] . '"';
}
//echo $sql;

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
if (!isset($_SESSION["cat"])) {
    $sql = 'SELECT * FROM ' . $_SESSION["db"] . ' LIMIT ' . $this_page_first_result . ',' . $results_per_page;
} elseif (isset($_SESSION["cat"])) {
    $sql = 'SELECT * FROM ' . $_SESSION["db"] . ' WHERE cat="' . $_SESSION["cat"] . '" LIMIT ' . $this_page_first_result . ',' . $results_per_page;
}

if ($_SESSION["db"] == "tb_desktop") {
    include 'Inc/sidebar_desktop.php';
} else if ($_SESSION["db"] == "tb_laptop") {
    include 'Inc/sidebar_laptop.php';
}

$result = mysqli_query($con, $sql);
$itemNo = 0;
echo'<div class="row">';
while($row = mysqli_fetch_array($result)) {
    if($itemNo%3==0 && $itemNo != 0){
        echo'
            </div>
            <div class="row">
        ';
    }
    //echo $itemNo;
    $itmID = $row['pro_id'];
    $Manfac = $row['brand'];
    $Mode = $row['model'];
    $imag = $row['pri_image'];
    $price = $row['price'];
    echo '<div class="col-md-4">
            <div style="text-align:center; margin: 5px;padding: 5px;height: auto;box-shadow: black 0px 0px 2px;background-color: white;border-radius: 2px;-webkit-transition: box-shadow 0.2s;">
            <div class="item-inner">
                <a href="show.php?itmID=' . $itmID . '">
                    <span class="pic">
                        <img alt="" height="210" src="' . $imag . '" width="210" style="margin:auto">
                    </span>
                    <h4>' . $Manfac . ' ' . $Mode . '</h4>
                    <span class="g-price" style="color:red"><b>' . $price . ' LKR</b></span>
                </a>
            </div>
            </div>
          </div>';
    $itemNo +=1 ;
}
echo'</div></div>
    <div class "row">
    <div class="col-md-3"></div>
    <div class="col-md-9">
    ';

if ($_SESSION["cat"] == "Brand New") {
    $_SESSION["cat"] = "Brand_New";
}

// display the links to the pages
echo '<ul class="pagination">';
for ($page=1;$page<=$number_of_pages;$page++) {
    echo '<li class="active"><a href="items.html.php?item=' . $_SESSION["db"] . '&cat=' . $_SESSION["cat"] . '&page=' . $page . '">' . $page . '</a> </li>';
}

echo '</div>
    </div>

</body>';
include('footer.inc.php');
echo '
</html>';
?>