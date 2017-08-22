<!DOCTYPE html>
<html lang="en">
<head>
    <title>Desktop Computers</title>
    <?php
    require '../header.pro.php';
    ?>
    <div class="container">
                <h2 STYLE="text-align: center">Add Desktop computers</h2>
                <?php
                require '../../dbcon/user.php';
                require '../../dbcon/dbcon.php';
                $sql2 ="SELECT * FROM tb_desktop WHERE id = (SELECT max(id) FROM tb_desktop)";
                $result2=mysqli_query($conn,$sql2);
                if($result2!="") {
                    while ($row = mysqli_fetch_array($result2)){
                        $preid= $row['id'];
                    }
                }
                else{
                    $preid= 1;
                }
                if($preid<9){
                    $dc_id='DC0000'.($preid+1);
                }
                elseif ($preid<99){
                    $dc_id='DC000'.($preid+1);
                }
                elseif ($preid<999){
                    $dc_id='DC00'.($preid+1);
                }
                elseif ($preid<9999){
                    $dc_id='DC0'.($preid+1);
                }
                else{
                    $dc_id='DC'.($preid+1);
                }


                echo'';

                ?>
                <form class="form-horizontal" action="addfunction.php" method="post">


                        <div class="form-group">
                            <label class="control-label col-sm-2" for="Product ID ">Product ID:</label>
                            <div class="col-sm-10">
                                <label class="control-label col-sm-2" for="Product ID "><?php echo $dc_id ?></label>
                                <input type="hidden"  value="<?php echo $dc_id ?>" class="form-control" id="pro_id" title="Model Number" "  name="pro_id">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-sm-2" for="Brand">Brand:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="brand" name="brand">

                                    <option value="HP" selected>HP</option>
                                    <option value="Lenovo">Lenovo</option>
                                    <option value="Samsung">Samsung</option>
                                    <option value="Dell">Dell</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>




                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Model">Model:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="model" title="Model Number" "  placeholder="Enter model type" name="model">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Processor">Processor:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" "  id="processor" title="Processor Details" placeholder="Enter Processor type" name="processor">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Condition">Condition:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="cond" name="cond">

                                <option value="Brand New" selected>Brand new</option>
                                <option value="Used">Used</option>
                            </select>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Mother Board">Mother Board Details:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" "  id="m_board" title="Mother Board Details" placeholder="Enter motherboard type" name="m_board">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="RAM">RAM type:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" "  id="ram" title="RAM Type" placeholder="Enter RAM type" name="ram" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Hard Drive">Hard Drive:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="hdd" title="Hard Drive Details" placeholder="Enter Hard Drive details" name="hdd">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Graphic Driver">Graphic Driver:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" "  id="gui" title="VGA Details" placeholder="Enter Graphic Driver type" name="gui">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Optical Driver">Optical Driver:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="op_drive" title="Optical Drive Details" placeholder="Enter Optical Driver type" name="op_drive">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Monitor details">Monitor Details:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" "  id="monitor_des" placeholder="Enter Monitor Details" title="Monitor Details" name="monitor_des">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="power Supply">Power Supply:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" "  id="pw_supply" title="Power Supply Details" placeholder="Enter Power Supply Details" name="pw_supply">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Mouse type">Mouse Type:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" "  title="Mouse Details" id="mouse" placeholder="Enter Mouse type" name="mouse">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Key Board">Key Board Type:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="key_bd" title="Key Board Details" placeholder="Enter Key Board type" name="key_bd">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Sound System">Sound System:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sound" title="Sound System Details" placeholder="Enter Sound System type" name="sounds">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Price">Price:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" pattern="\d+.{1,}"id="price" title="" placeholder="Enter Price" name="price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Discounted Price">Discounted Price:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" pattern="\d+.{1,}"id="dis_price" title="Price after got discount" placeholder="Enter Discounted Price " name="dis_price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Condition">Availability:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="availability" name="availability">

                                <option value="Available"selected>Available</option>
                                <option value="Not Available">Not Available</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Warranty">Warranty:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="warranty" title="Warranty Period" pattern="\d+.{1,}" placeholder="Add warranty in Months " name="warranty">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Operating System">Operating system:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="os" title="Already Installed Operating System" placeholder="Enter OS " name="os">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Form Factor">Form Factor:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="frm_factor" name="frm_factor">

                                <option value="ATX" selected>ATX</option>
                                <option value="Mini ATX">Mini ATX</option>
                                <option value="Micro ATX">Micro ATX</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Primary Image">Primary Image:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pri_image" placeholder="Paste the link of the Image (Thumbnail Image)" name="pri_image" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 1">Image 1:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="img1" placeholder="Paste the link of the Image" name="img1" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 2">Image 2:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="img2" placeholder="Paste the link of the Image" name="img2" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 3">Image 3:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="img3" placeholder="Paste the link of the Image" name="img3" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 4">Image 4:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="img4" placeholder="Paste the link of the Image " name="img4" >
                        </div>
                    </div>

                    
                     <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="add">Add Item</button><button type="clear" class="btn btn-default" name="clear">Clear</button>      </div>
    </div>


                </form>
            </div>
    </form>
</div>


</body>
</html>
