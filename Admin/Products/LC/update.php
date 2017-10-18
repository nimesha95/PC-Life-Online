<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laptop Computers</title>
    <?php
    require '../header.pro.php';
    ?>
    <div class="container">

                <?php
                if(isset($_POST['upd']))
                {
                    require '../../dbcon/user.php';
                    require '../../dbcon/dbcon.php';
                   $dc_id=$_POST['pro_id'];
                    $sql ="SELECT * FROM tb_laptop WHERE pro_id='$dc_id'";
                    $result=mysqli_query($conn,$sql);
                    if($result!="Select Course"){
                        while ($row = mysqli_fetch_array($result)) {
                            echo '
<h2 STYLE="text-align: center">Update Desktop computers ( '.$dc_id.' )</h2>
                            <form class="form-horizontal" action="Updatefuction.php" method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Product ID ">Product ID:</label>
                        <div class="col-sm-10">
                            <label class="control-label col-sm-2" for="Product ID ">'.$dc_id.'</label>
                            <input type="hidden"  value="'.$dc_id.'" class="form-control" id="pro_id" title="Model Number" "  name="pro_id">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Brand">Brand:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="brand" name="brand">

                                <option value="HP" ';if($row['brand']=='HP'){echo 'selected';} echo '>HP</option>
                                <option value="Lenovo"';if($row['brand']=='Lenovo'){echo 'selected';} echo '>Lenovo</option>
                                <option value="Samsung"';if($row['brand']=='Samsung'){echo 'selected';} echo '>Samsung</option>
                                <option value="Dell"';if($row['brand']=='Dell'){echo 'selected';} echo '>Dell</option>
                                <option value="Other"';if($row['brand']=='Other'){echo 'selected';} echo '>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Model">Model:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="model" title="Model Number"   placeholder="Enter model type" name="model" value="'.$row['model'].'">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Processor">Processor:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['processor'].'"  id="processor" title="Processor Details" placeholder="Enter Processor type" name="processor">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Condition">Condition:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="cond" name="cat">

                                <option value="Brand New"';if($row['cat']=='Brand New'){echo 'selected';} echo '>Brand new</option>
                                <option value="Used"';if($row['cat']=='HP'){echo 'selected';} echo '>Used</option>
                            </select>
                        </div>
                    </div> 
                     
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="RAM">RAM type:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['ram'].'"  id="ram" title="RAM Type" placeholder="Enter RAM type" name="ram" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Hard Drive">Hard Drive:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['hdd'].'" id="hdd" title="Hard Drive Details" placeholder="Enter Hard Drive details" name="hdd">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Graphic Driver">Graphic Driver:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['gui'].'"  id="gui" title="VGA Details" placeholder="Enter Graphic Driver type" name="gui">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Optical Driver">Optical Driver:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="op_drive" value="'.$row['op_drive'].'" title="Optical Drive Details" placeholder="Enter Optical Driver type" name="op_drive">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Monitor details">Screen Type :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['screen_type'].'"  id="screen_type" placeholder="Enter Monitor Details" title="Monitor Details" name="screen_type">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="power Supply">Screen Size:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['screen_size'].'"  id="screen_size" title="Power Supply Details" placeholder="Enter Screen Size Details" name="screen_size">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Mouse type">Wifi:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['wifi'].'"  title="wifi" id="wifi" placeholder="Enter Mouse type" name="wifi">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Key Board">Bluetooth:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['bluetooth'].'" id="bluetooth" title="Key Board Details" placeholder="Enter Key Board type" name="bluetooth">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Key Board">Web Camera:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['web_cam'].'" id="web_cam" title="Key Board Details" placeholder="Enter Key Board type" name="web_cam">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Key Board">Colors:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['colors'].'" id="web_cam" title="Key Board Details" placeholder="Enter Key Board type" name="colors">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Sound System">Sound System:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  value="'.$row['sounds'].'" id="sound" title="Sound System Details" placeholder="Enter Sound System type" name="sounds">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Price">Price:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  value="'.$row['price'].'" pattern="\d+.{2,}" id="price" title="" placeholder="Enter Price" name="price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Discounted Price">Discounted Price:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" pattern="\d+.{2,}" id="dis_price"  value="'.$row['dis_price'].'" title="Price after got discount" placeholder="Enter Discounted Price " name="dis_price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Condition">Availability:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="availability" name="availability">

                                <option value="Available"';if($row['availability']=='Available'){echo 'selected';} echo '>Available</option>
                                <option value="Not Available"';if($row['availability']=='Not Available'){echo 'selected';} echo '>Not Available</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Warranty">Warranty:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['warranty'].'" id="warranty" title="Warranty Period" pattern="\d+.{1,}" placeholder="Add warranty in Months " name="warranty">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Operating System">Operating system:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['os'].'" id="os" title="Already Installed Operating System" placeholder="Enter OS " name="os">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Primary Image">Primary Image:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['pri_image'].'" id="pri_image" placeholder="Paste the link of the Image (Thumbnail Image)" name="pri_image" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 1">Image 1:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['img1'].'" id="img1" placeholder="Paste the link of the Image" name="img1" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 2">Image 2:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['img2'].'" id="img2" placeholder="Paste the link of the Image" name="img2" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 3">Image 3:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['img3'].'" id="img3" placeholder="Paste the link of the Image" name="img3" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 4">Image 4:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="'.$row['img4'].'" id="img4" placeholder="Paste the link of the Image " name="img4" >
                        </div>
                    </div>

                    
                     <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="add">Update</button><button type="clear" class="btn btn-default" name="clear">Clear</button>      </div>
    </div>


                </form>
                            
                            ';

                        }
                }
                }


                echo'';

                ?>

            </div>



</body>
</html>
