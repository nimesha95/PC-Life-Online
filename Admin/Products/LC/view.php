<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laptop Computers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../CSS/style.css">
</head>
<body style="background-color: #ecebeb">

<div class="container">
    <h3><a href="index.php"> Laptop Computers</a></h3>


    <div class="row">
        <form class="form-horizontal" action="index.php" method="post">

            <div class="col-sm-6 col-sm-offset-3">

                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control" placeholder="Search" name="searchres">
                    <span class="input-group-addon">
                        <button type="submit" name="search">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </div>
        </form>
    </div>
    <br>
    <div class="row">
        <?php
        require '../../dbcon/user.php';
        require '../../dbcon/dbcon.php';
        if (isset($_GET['id'])) {
            $pro_id = $_GET['id'];
            $sql = "SELECT * FROM tb_laptop WHERE pro_id='$pro_id' ";
            $result = mysqli_query($conn, $sql);
            if ($result != "") {
                while ($row = mysqli_fetch_array($result)) {
                    $pri_image = $row['pri_image'];
                    $img1 = $row['img1'];
                    $img2 = $row['img2'];
                    $img3 = $row['img3'];
                    $img4 = $row['img4'];
                    echo '<div class="col-sm-12" style="margin: 5px;padding: 25px; height:auto; box-shadow: black 0px 0px 2px; background-color: white; border-radius: 2px; text-align: center">';
                    echo '
    <script type="text/javascript">
        function changeImage(imgr){
            document.getElementById("imageReplace").src=imgr;
        }
    </script>
    
<div class="col-sm-6">
            <table border="0" >
            <tr>
            <td width="400px" height="400px" colspan="5"><img id="imageReplace" src="' . $row['pri_image'] . ' " width="400px" height="400px"></td>
            
</tr>
<tr><td width="80px" height="80px"><img src="' . $row['pri_image'] . ' " onclick= "changeImage(\'' . $pri_image . '\')" width="80px" height="80px"></td>
<td width="80px" height="80px"><img src="' . $row['img1'] . ' " onclick= "changeImage(\'' . $img1 . '\')" width="80px" height="80px"></a></td>
<td width="80px" height="80px"><img src="' . $row['img2'] . ' " onclick= "changeImage(\'' . $img2 . '\')" width="80px" height="80px"></td>
<td width="80px" height="80px"><img src="' . $row['img3'] . ' " onclick= "changeImage(\'' . $img3 . '\')" width="80px" height="80px"></td>
<td width="80px" height="80px"><img src="' . $row['img4'] . ' " onclick= "changeImage(\'' . $img4 . '\')" width="80px" height="80px"></td>
</tr>
</table>
</div>
<br>
<div class="col-sm-6">
<table style="text-align:left">
<tr><td><h2>' . $row['brand'] . ' - ' . $row['model'] . '   (' . $row['pro_id'] . ')</h2></td></tr>

<tr><td><h3>' . $row['cat'] . '</h3></td></tr>
<tr><td><h4>' . $row['processor'] . '</h3></td></tr>
<tr><td><h4>' . $row['ram'] . '</h3></td></tr>
<tr><td><h4>' . $row['hdd'] . '</h3></td></tr>

<tr><td style="color:red"><h4> Rs.' . $row['price'] . '.00</h3></td></tr>
<tr><td style="color:blue"><h4>' . $row['availability'] . '</h3></td></tr>

</table>
<table>
<tr>
<td> 
<form class="form-horizontal" action="update.php" method="post"><div class="col-sm-offset-2 col-sm-10">
        
        <input type="hidden"  value="' . $pro_id . '" class="form-control" id="pro_id" title="Model Number" "  name="pro_id">
        <button type="submit" class="btn btn-default" name="upd"><b>UPDATE</b></button>      </div>
    </div>
</form>
</td>
<td> ';
                    if ($row['availability'] == 'Available') {
                        echo '<form class="form-horizontal" action="Notava.php" method="post"><div class="col-sm-offset-2 col-sm-10">
        
        <input type="hidden"  value="' . $pro_id . '" class="form-control" id="pro_id" title="Model Number" "  name="pro_id">
       
        <button type="submit" class="btn btn-default" name="una"><b>Mark as Not Available</b></button>      </div>
    </div>
</form>';
                    } else {
                        echo '<form class="form-horizontal" action="ava.php" method="post"><div class="col-sm-offset-2 col-sm-10">
        
        <input type="hidden"  value="' . $pro_id . '" class="form-control" id="pro_id" title="Model Number" "  name="pro_id">
       
        <button type="submit" class="btn btn-default" name="ava"><b>Mark as Available</b></button>      </div>
    </div>
</form>';

                    }
                    echo '
</td>
<td> 
<form class="form-horizontal" action="delete.php" method="post"><div class="col-sm-offset-2 col-sm-10">
<input type="hidden"  value="'.$pro_id.'" class="form-control" id="pro_id" title="Model Number" "  name="pro_id">
        <button type="submit" class="btn btn-default" name="delete" ><b style="color:red">DELETE</b></button>      </div>
    </div>
</form>
</td>


</tr>
</table>

</div>
<br>
<div class="col-sm-12">
<table class="table table-striped" style="font-weight: bold;"><b>
    
    <tbody>
    <tr>
        <td>Screen Type:</td>
        <td>' . $row['screen_type'] . '</td>
        
      </tr>
      <tr>
        <td>Screen size:</td>
        <td>' . $row['screen_size'] . '</td>
        
      </tr>
      <tr>
        <td>Graphic Driver:</td>
        <td>' . $row['gui'] . '</td>
        
      </tr>
      <tr>
        <td>Optical Driver:</td>
        <td>' . $row['op_drive'] . '</td>
        
      </tr>
      <tr>
        <td>WiFi:</td>
        <td>' . $row['wifi'] . '</td>
        
      </tr>
      <tr>
        <td>Bluetooth:</td>
        <td>' . $row['bluetooth'] . '</td>
        
      </tr>
      <tr>
        <td>Web Camera:</td>
        <td>' . $row['web_cam'] . '</td>
        
      </tr>
      <tr>
        <td>Sound System:</td>
        <td>' . $row['sounds'] . '</td>
        
      </tr>
      
      <tr>
        <td>Discounted Price:</td>
        <td>Rs.' . $row['dis_price'] . '.00</td>
        
      </tr>
      <tr>
        <td>Operating system:</td>
        <td>' . $row['os'] . '</td>
        
      </tr>
      <tr>
        <td>Warranty:</td>
        <td>' . $row['warranty'] . ' Months</td>
        
      </tr>
      <tr>
        <td>Added Date:</td>
        <td>' . $row['add_date'] . '</td>
        
      </tr>
      <tr>
        <td>Last Updated Date:</td>
        <td>' . $row['up_date'] . '</td>
        
      </tr>
      </b>
    </tbody>
    
  </table>
  </div>
            ';

                    echo ' </div>';


                }
            }
        }


        ?>


    </div>


</body>
</html>
