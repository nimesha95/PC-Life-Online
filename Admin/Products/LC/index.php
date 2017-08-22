<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laptop Computers</title>
    <?php
    require '../header.pro.php';
    ?>
    <div class="container">
        <h3 ><a href="../../Porducts.php">Products</a> > Laptop Computers</h3>


        <div class="row">
                        <form class="form-horizontal" action="index.php" method="post">

                    <div class="col-sm-6 col-sm-offset-3">

                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control"  placeholder="Search" name="searchres">
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
            if(isset($_POST['search'])){
                $pro_id=$_POST['searchres'];
                $sql ="SELECT * FROM tb_laptop WHERE pro_id='$pro_id' Order BY up_date DESC";
                $result=mysqli_query($conn,$sql);
                if($result!="") {
                    while ($row = mysqli_fetch_array($result)) {

                        echo '
                <div class="col-sm-6">';
                        echo "<a href='view.php?id=",$row['pro_id'],"'>";
                        echo '
                <div class="thumbproduct">
                    <table> <tr> <td rowspan="4"><img src="'.$row['pri_image'].'" style="margin:10px ;width: 120px; height: 120px">
                            </td><td><h4> '.$row['brand'].'-'.$row['model'].'</h4></td></tr>
                        <tr>
                            <td><b>'.$row['availability'].'</b></td>
                        </tr>
                        <tr>
                            <td><b>Rs.'.$row['price'].'</b></td>
                        </tr>
                        <tr>
                            <td><b>'.$row['pro_id'].'</b></td>
                        </tr>
                        
                    </table>
                
                </div>
            </a>
            </div>
                    ';

                    }
                }
                else{
                    echo '
                <div class="col-sm-12">';

                    echo '
                
                        <div style="margin: 5px;padding: 25px; height:150px; box-shadow: black 0px 0px 2px; background-color: white; border-radius: 2px; text-align: center">
                            There are no items Such as 
                        </div>
                
             
           
            </div>
                    ';
                }


            }
            else{
                $sql ="SELECT * FROM tb_laptop Order BY up_date DESC ";
                $result=mysqli_query($conn,$sql);
                if($result!="") {
                    while ($row = mysqli_fetch_array($result)) {

                        echo '
                <div class="col-sm-6">';
                        echo "<a href='view.php?id=",$row['pro_id'],"'>";
                        echo '
                <div class="thumbproduct">
                    <table> <tr> <td rowspan="4"><img src="'.$row['pri_image'].'" style="margin:10px ;width: 120px; height: 120px">
                            </td><td><h4> '.$row['brand'].'-'.$row['model'].'</h4></td></tr>
                        <tr>
                            <td><b>'.$row['availability'].'</b></td>
                        </tr>
                        <tr>
                            <td><b>Rs.'.$row['price'].'</b></td>
                        </tr>
                        <tr>
                            <td><b>'.$row['pro_id'].'</b></td>
                        </tr>
                        
                    </table>
                
                </div>
            </a>
            </div>
                    ';

                    }
                }
                else{
                    echo '
                <div class="col-sm-12">';

                    echo '
                
                        <div style="margin: 5px;padding: 25px; height:150px; box-shadow: black 0px 0px 2px; background-color: white; border-radius: 2px; text-align: center">
                            There 
                        </div>
                
             
           
            </div>
                    ';
                }

            }


            ?>











        </div>
        <?php
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }
        ?>




</body>
</html>
