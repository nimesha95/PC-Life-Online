<!DOCTYPE html>
<html lang="en">
<head>
    <title>Desktop Computers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../CSS/style.css">
    <script type="text/javascript">
        function changeImage(element) {
            document.getElementById('imageReplace').src = element;
        }
    </script>
</head>
<body style="background-color: #ecebeb">

    <div class="container">
        <h3 ><a href="index.php"> Desktop Computers</a></h3>


        <div class="row">

        </div>
        <br>
        <div class="row">
            <?php
            require '../../dbcon/user.php';
            require '../../dbcon/dbcon.php';
            if(isset($_POST['delete'])) {
                $pro_id = $_POST['pro_id'];
                $sql = "SELECT * FROM tb_desktop WHERE pro_id='$pro_id' ";
                $result = mysqli_query($conn, $sql);
                if ($result != "") {
                    while ($row = mysqli_fetch_array($result)) {

                    echo '<div class="col-sm-12" style="margin: 5px;padding: 25px; height:auto; box-shadow: black 0px 0px 2px; background-color: white; border-radius: 2px; text-align: center">';
                    echo '
<div class="col-sm-6">
            <table border="0" >
            <tr>
            <td width="400px" height="400px" colspan="5"><img id="imageReplace" src="'.$row['pri_image'].' " width="400px" height="400px"></td>
            
</tr>
<tr><td width="80px" height="80px"><img src="'.$row['pri_image'].' " width="80px" height="80px"></td>
<td width="80px" height="80px"><a href="#" onclick="changeImage('.$row['img1'].');"><img src="'.$row['img1'].' " width="80px" height="80px"></a></td>
<td width="80px" height="80px"><img src="'.$row['img2'].' " width="80px" height="80px"></td>
<td width="80px" height="80px"><img src="'.$row['img3'].' " width="80px" height="80px"></td>
<td width="80px" height="80px"><img src="'.$row['img4'].' " width="80px" height="80px"></td>
</tr>
</table>
</div>
<br>
<div class="col-sm-6">
<table style="text-align:left">
<tr><td><h2>'.$row['brand'].' - '.$row['model'].'   ('.$row['pro_id'].')</h2></td></tr>

<tr><td><h3>'.$row['cat'].'</h3></td></tr>
<tr><td><h4>'.$row['processor'].'</h3></td></tr>
<tr><td><h4>'.$row['ram'].'</h3></td></tr>
<tr><td><h4>'.$row['hdd'].'</h3></td></tr>

<tr><td style="color:red"><h4> Rs.'.$row['price'].'.00</h3></td></tr>
<tr><td style="color:blue"><h4>'.$row['availability'].'</h3></td></tr>
<tr><td><hr></td></tr>
<tr><td style="color:red"><h4>Do You Really want to Delete this Product? </h3></td></tr>


</table>
<table>
<tr>
<td> 
<form class="form-horizontal" action="deletefunct.php" method="post"><div class="col-sm-offset-2 col-sm-10">
        
        <input type="hidden"  value="'.$pro_id.'" class="form-control" id="pro_id" title="Model Number" "  name="pro_id">
        <button type="submit" class="btn btn-default" name="yes"><b>Yes</b></button>      </div>
    </div>
</form>
</td>';
echo'

<td> 
<form class="form-horizontal" action="returndel.php" method="post"><div class="col-sm-offset-2 col-sm-10">
<input type="hidden"  value="'.$pro_id.'" class="form-control" id="pro_id" title="Model Number" "  name="pro_id">
        <button type="submit" class="btn btn-default" name="No"><b>No</b></button>      </div>
    </div>
</form>
</td>


</tr>
</table>

</div>
<br>

            ';

                    echo ' </div>';


                }}
            }



            ?>











        </div>





</body>
</html>
