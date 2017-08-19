<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #d4d4d4">
            <div class="container">
                <h2 STYLE="text-align: center">Horizontal form</h2>
                <form class="form-horizontal" action="/action_page.php">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Condition">Condition:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="cond" name="cond">
                                <option>----Please Select----</option>
                                <option>Used</option>
                                <option>Brand new</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Product Brand" >Product Brand:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="brand" name="brand"  >
                                <option>----Please Select----</option>
                                <option>HP</option>
                                <option>Samsung</option>
                                <option>Lenovo</option>
                                <option>Dell</option>
                                <option>Other</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Model">Model:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="model" placeholder="Enter model name" name="model" title="Charactors only">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Processor">Processor:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="processor" placeholder="Enter Processor type" name="processor" title="Charactors only">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="RAM">RAM:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ram" placeholder="RAM type" name="ram" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Hard Drive">Hard Drive:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="hdd" placeholder="Enter Hard Drive type" name="hdd">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Graphic Card">Graphic Card:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="gui" placeholder="Enter Graphic Card type" name="gui">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Optical Drive">Optical Drive:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="op_drive" placeholder="Optical Drive" name="op_drive">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Screen type">Screen type:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="screen_type" placeholder="Enter Screen type" name="screen_type">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Wifi">Wifi:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="wifi" name="wifi">
                                <option>----Please Select----</option>
                                <option>Available</option>
                                <option>Not Available</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Bluetooth">Bluetooth:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="bluetooth" name="bluetooth">
                                <option>----Please Select----</option>
                                <option>Available</option>
                                <option>Not Available</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Web Cam">Web Cam:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="web_cam" name="web_cam">
                                <option>----Please Select----</option>
                                <option>Available</option>
                                <option>Not Available</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Operating System">Operating System:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="os" name="os">
                                <option>----Please Select----</option>
                                <option>Available</option>
                                <option>Not Available</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Colors">Colors:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="colors" placeholder="Choose Colors" name="colors">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Sound System">Sound System:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="sounds" name="sounds">
                                <option>----Please Select----</option>
                                <option>Stereo</option>
                                <option>2.1</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Regular Price">Regular Price:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="price" placeholder="Enter Regular Price" name="price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Discounted Price">Discounted Price:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="dis_price" placeholder="Enter Discounted Price" name="dis_price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Availability">Availability:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="availability" name="availability">
                                <option>----Please Select----</option>
                                <option>Available</option>
                                <option>Not Available</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Warranty(months)">Warranty(months):</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="warranty" placeholder="Warranty(months)" name="warranty">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Primary Image">Primary Image:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pri_image" placeholder="Primary Image" name="pri_image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 1">Image 1:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="img1" placeholder="Image 1" name="img1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 2">Image 2:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="img2" placeholder="Image 2" name="img2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 3">Image 3:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="img3" placeholder="Image 3" name="img3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Image 4">Image 4:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="img4" placeholder="Image 4" name="img4">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Add</button>
                            <button type="submit" class="btn btn-default">Update</button>
                            <button type="submit" class="btn btn-default">Delete</button>
                        </div>
                    </div>

                </form>
            </div>
    </form>
</div>

</body>
</html>
