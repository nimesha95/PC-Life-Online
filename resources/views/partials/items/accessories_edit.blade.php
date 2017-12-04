<div class="form-group">
    <input type="hidden" name="ITEM_TYPE" value="acc">
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="Model">Model:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="model" title="Model Number" placeholder="Enter model type"
               name="model" required="true">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Description">Description:</label>
    <div class="col-sm-10">
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
    <div class="col-sm-10">
        <textarea class="form-control" rows="5" id="specification" title="specification"
                  placeholder="Enter a brief description"
                  name="specification" required="true"></textarea>
    </div>
</div>


<div class="form-group">
    <label class="control-label col-sm-2" for="Price">Price:</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" pattern="\d+.{1,}" id="price" title="" placeholder="Enter Price"
               name="price">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Discounted Price">Discounted Price:</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" pattern="\d+.{1,}" id="dis_price"
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
        <input type="text" class="form-control" id="warranty" title="Warranty Period" pattern="\d+.{1,}"
               placeholder="Add warranty in Months " name="warranty">
    </div>
</div>

