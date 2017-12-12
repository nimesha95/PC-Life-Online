<div class="form-group">
    <input type="hidden" name="ITEM_TYPE" value="acc">
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="catagory">Catagory:</label>
    <div class="col-md-4">
        <input class="form-control" list="catagory" name="catagory">
        <datalist id="catagory">
            <option value="Motherboard">
            <option value="Ram">
            <option value="Processor">
            <option value="Hard_Drive">Hard Drive</option>
            <option value="Casings">
            <option value="Monitors">
            <option value="Mouse">
            <option value="Keyboard">
            <option value="VGA_Cards">VGA Cards</option>
            <option value="Coolers">
            <option value="Power_Supply">Power Supply</option>
            <option value="Mass_Storage">Mass Storage</option>
            <option value="Speakers">
            <option value="Memory_Cards">Memory Cards</option>
            <option value="Optical_Drives">Optical Drives</option>
            <option value="Cables">
            <option value="UPS">
            <option value="Network_Devices">Network Devices</option>
            <option value="Printer">
            <option value="Scanner">
            <option value="Laptop_Acc">Laptop Acc</option>
            <option value="Converters">
            <option value="Softwares">
            <option value="Virus_Guard">Virus Guard</option>
            <option value="Smart_Watch">Smart Watch</option>
            <option value="Tablet">
            <option value="Other">
        </datalist>
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
    <label class="control-label col-sm-2" for="Condition">Condition:</label>
    <div class="col-sm-2">
        <select class="form-control" id="cond" name="cond">

            <option value="Brand New" selected>Brand new</option>
            <option value="Used">Used</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="Description">Specification:</label>
    <div class="col-sm-8">
        <textarea class="form-control" rows="5" id="specification" title="specification"
                  placeholder="Enter a brief description"
                  name="specification" required="true"></textarea>
    </div>
</div>


<div class="form-group">
    <label class="control-label col-sm-2" for="Price">Price:</label>
    <div class="col-sm-4">
        <input type="number" pattern="{0-9}" min="2" class="form-control" id="price" title="" placeholder="Enter Price"
               name="price">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Discounted Price">Discount (%):</label>
    <div class="col-sm-4">
        <input type="number" class="form-control" pattern="{0-9}" min="1" max="99" id="dis_price"
               title="Price after got discount" placeholder="Enter Discounted Price " name="dis_price">
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
        <input type="text" class="form-control" id="warranty" title="Warranty Period" maxlength="2" pattern="\d+.{1,}"
               placeholder="Add warranty in Months " name="warranty">
    </div>
</div>


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