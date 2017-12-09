<div class="form-group">
    <input type="hidden" name="ITEM_TYPE" value="lap">
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="Brand">Brand:</label>
    <div class="col-sm-3">
        <input type="text" class="form-control" id="brand" name="brand" value="{{$data['row']['brand']}}" readonly>
    </div>
</div>


<div class="form-group">
    <label class="control-label col-sm-2" for="Model">Model:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="model" title="Model Number" placeholder="Enter model type"
               name="model" value="{{$data['row']['name']}}" readonly required="true">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Description">Description:</label>
    <div class="col-sm-10">
        <textarea class="form-control" rows="5" id="description" title="description"
                  placeholder="Enter a brief description"
                  name="description" required="true">{{$data['row']['description']}}</textarea>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Processor">Processor:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="processor" title="Processor Details" placeholder="Enter
        Processor type" name="processor" value="{{$data['row']['processor']}}">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="RAM">RAM type:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="ram" title="RAM Type" placeholder="Enter RAM type"
               name="ram" value="{{$data['row']['ram']}}" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Hard Drive">Hard Drive:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="hdd" title="Hard Drive Details"
               placeholder="Enter Hard Drive details" name="hdd" value="{{$data['row']['hdd']}}">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Graphic Driver">Graphic Driver:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="gui" title="VGA Details" placeholder="Enter Graphic Driver
        type" name="gui" value="{{$data['row']['gui']}}">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="Price">Price:</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" pattern="\d+.{1,}" id="price" title="" placeholder="Enter Price"
               name="price" value="{{$data['row']['price']}}">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="Discounted Price">Discounted Price:</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" pattern="\d+.{1,}" id="dis_price"
               title="Price after got discount" placeholder="Enter Discounted Price " name="dis_price"
               value="{{$data['row']['discount_price']}}">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="Warranty">Warranty:</label>
    <div class="col-sm-2">
        <input type="text" class="form-control" id="warranty" title="Warranty Period" pattern="\d+.{1,}"
               placeholder="Add warranty in Months " name="warranty" value="{{$data['row']['warranty']}}">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="Operating System">Operating system:</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="os" title="Already Installed Operating System"
               placeholder="Enter OS " name="os" value="{{$data['row']['os']}}">
    </div>
</div>

