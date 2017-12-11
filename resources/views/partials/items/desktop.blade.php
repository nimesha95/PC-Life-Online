<div class="form-group">
    <input type="hidden" name="ITEM_TYPE" value="dsk">
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="Brand">Brand:</label>
    <div class="col-sm-3">
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
    <div class="col-sm-5">
        <input type="text" class="form-control" id="model" title="Model Number" placeholder="Enter model type"
               name="model" required="true">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Description">Description:</label>
    <div class="col-sm-8">
        <textarea class="form-control" rows="5" id="description" title="description"
                  placeholder="Enter a brief description"
                  name="description" required="true"></textarea>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Processor">Processor:</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="processor" title="Processor Details"
               placeholder="Enter Processor type" name="processor" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Condition">Condition:</label>
    <div class="col-sm-2">
        <select class="form-control" id="cond" name="cond">

            <option value="new" selected>Brand new</option>
            <option value="used">Used</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="Mother Board">Mother Board Details:</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="m_board" title="Mother Board Details"
               placeholder="Enter motherboard type" name="m_board" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="RAM">RAM type:</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="ram" title="RAM Type" placeholder="Enter RAM type"
               name="ram" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Hard Drive">Hard Drive:</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="hdd" title="Hard Drive Details"
               placeholder="Enter Hard Drive details" name="hdd" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Graphic Driver">Graphic Driver:</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="gui" title="VGA Details" placeholder="Enter Graphic Driver type"
               name="gui" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Optical Driver">Optical Driver:</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="op_drive" title="Optical Drive Details"
               placeholder="Enter Optical Driver type" name="op_drive" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Monitor details">Monitor Details:</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="monitor_des" placeholder="Enter Monitor Details"
               title="Monitor Details" name="monitor_des" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="power Supply">Power Supply:</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" id="pw_supply" title="Power Supply Details"
               placeholder="Enter Power Supply Details" name="pw_supply" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Mouse type">Mouse Type:</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" title="Mouse Details" id="mouse" placeholder="Enter Mouse type"
               name="mouse" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Key Board">Key Board Type:</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" id="key_bd" title="Key Board Details"
               placeholder="Enter Key Board type" name="key_bd" required>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="Sound System">Sound System:</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="sound" title="Sound System Details"
               placeholder="Enter Sound System type" name="sounds" required>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="Price">Price:</label>
    <div class="col-sm-5">
        <input type="number" pattern="{0-9}" min="2" class="form-control" id="price" title="" placeholder="Enter Price"
               name="price" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Discounted Price">Discounted Price:</label>
    <div class="col-sm-5">
        <input type="number" pattern="{0-9}" min="2" class="form-control" id="dis_price"
               title="Price after got discount" placeholder="Enter Discounted Price " name="dis_price" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Condition">Availability:</label>
    <div class="col-sm-2">
        <select class="form-control" id="availability" name="availability">

            <option value="1" selected>Available</option>
            <option value="0">Not Available</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="Warranty">Warranty:</label>
    <div class="col-sm-2">
        <input type="text" class="form-control" id="warranty" title="Warranty Period" pattern="\d+.{1,}"
               placeholder="Add warranty in Months " name="warranty" required>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="Operating System">Operating system:</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" id="os" title="Already Installed Operating System"
               placeholder="Enter OS " name="os" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Form Factor">Form Factor:</label>
    <div class="col-sm-2">
        <select class="form-control" id="frm_factor" name="frm_factor">

            <option value="ATX" selected>ATX</option>
            <option value="Mini ATX">Mini ATX</option>
            <option value="Micro ATX">Micro ATX</option>
        </select>
    </div>
</div>


<!-- fafaafafaa -->

<div class="form-group">
    <label class="control-label col-sm-2" for="image">Images (Max 3 images)</label>
    <div class="col-sm-6">
        <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <span class="btn btn-default btn-file">
                                        <span>Choose file</span>
                                        <input name="img[]" type="file" multiple/>
                                    </span>
            <span class="fileinput-filename"></span>
        </div>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="imageForHome">Thumbnail (450*600)</label>
    <div class="col-sm-6">
        <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <span class="btn btn-default btn-file">
                                        <span>Choose file</span>
                                        <input name="img1" type="file"/>
                                    </span>
            <span class="fileinput-filename"></span>
        </div>
    </div>
</div>
