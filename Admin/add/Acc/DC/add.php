<!DOCTYPE html>
<html lang="en">
<head>
    <title>Desktop Computers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="background-color:  #20B2AA">
            <div class="container">
                <h2 STYLE="text-align: center">Add Desktop computers</h2>
                <form class="form-horizontal" action="/action_page.php">

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Brand">Brand:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="brand" name="brand">
                                <option value="Please Select" selected>Please Select...</option>
                                <option value="HP">HP</option>
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
                            <input type="text" class="form-control" id="model" title="Model Number" " pattern="[A-Za-z]{3,}" placeholder="Enter model type" name="model">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Processor">Processor:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" " pattern="[A-Za-z]{3,}" id="processor" title="Processor Details" placeholder="Enter Processor type" name="processor">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Condition">Condition:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="cond" name="cond">
                                <option value="Please Select" selected>Please Select...</option>
                                <option value="Brand New">Brand new</option>
                                <option value="Used">Used</option>
                            </select>
                        </div>
                    </div> 
                        
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Mother Board">Mother Board Details:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" " pattern="[A-Za-z]{3,}" id="m_board" title="Mother Board Details" placeholder="Enter motherboard type" name="m_board">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="RAM">RAM type:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" " pattern="[A-Za-z]{3,}" id="ram" title="RAM Type" placeholder="Enter RAM type" name="ram">
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
                            <input type="text" class="form-control" " pattern="[A-Za-z]{3,}" id="gui" title="VGA Details" placeholder="Enter Graphic Driver type" name="gui">
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
                            <input type="text" class="form-control" " pattern="[A-Za-z]{3,}" id="monitor_des" placeholder="Enter Monitor Details" title="Monitor Details" name="monitor_des">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="power Supply">Power Supply:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" " pattern="[A-Za-z]{3,}" id="pw_supply" title="Power Supply Details" placeholder="Enter Power Supply Details" name="pw_supply">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Mouse type">Mouse Type:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" " pattern="[A-Za-z]{3,}" title="Mouse Details" id="mouse" placeholder="Enter Mouse type" name="mouse">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Key Board">Key Board Type:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" " pattern="[A-Za-z]{3,}"id="key_bd" title="Key Board Details" placeholder="Enter Key Board type" name="key_bd">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Sound System">Sound System:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" " pattern="[A-Za-z]{3,}" id="sound" title="Sound System Details" placeholder="Enter Sound System type" name="sound">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Price">Price:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="price" title="" placeholder="Enter Price" name="price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Discounted Price">Discounted Price:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="dis_price" title="Price after got discount" placeholder="Enter Discounted Price " name="dis_price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Condition">Availability:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="availability" name="availability">
                                <option value="Please Select" selected>Please Select...</option>
                                <option value="Available">Available</option>
                                <option value="Not Available">Not Available</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Warranty">Warranty:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="warranty" title="Warranty Period" placeholder="Add warranty " name="warranty">
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
                                <option value="Please Select" selected>Please Select...</option>
                                <option value="ATX">ATX</option>
                                <option value="Mini ATX">Mini ATX</option>
                                <option>Micro ATX</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Primary Image">Primary Image:</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="pri_image" placeholder="Select Image " name="pri_image" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 1">Image 1:</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="img1" placeholder="Select Image " name="img1" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 2">Image 2:</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="img2" placeholder="Select Image " name="img2" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 3">Image 3:</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="img3" placeholder="Select Image " name="img3" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 4">Image 4:</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="img4" placeholder="Select Image " name="img4" accept="image/*">
                        </div>
                    </div>

                    
                     <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Add Item</button><button type="clear" class="btn btn-default">Clear</button>      </div>
    </div>


                </form>
            </div>
    </form>
</div>

</body>
</html>
