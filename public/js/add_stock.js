$("#ItemType1").change(function () {
    var catagory = this.value;

    if (catagory == 0) {
        $("#ItemModel1").empty();
        $("#ItemModel1").append("<option value='0' selected>--Model--</option>");
    }
    else {
        $.ajax({
            method: 'POST',
            url: url,
            data: {type: 'model', body: catagory, _token: token}
        })
            .done(function (msg) {
                //console.log(msg['msg'][0]['id']);
                var len = msg['msg'].length;
                $("#ItemModel1").empty();
                $("#ItemModel1").append("<option value='0' selected>--Model--</option>");
                for (var i = 0; i < len; i++) {
                    var model = msg['msg'][i]['id'];

                    $("#ItemModel1").append("<option value='" + model + "'>" + model + "</option>");
                    console.log(model);
                }
            })
    }
});

$("#ItemModel1").change(function () {
    var model = this.value;
    var catagory = $("#ItemType1 option:selected").val();
    console.log(catagory);

    if (model == 0) {
        $("#productSelect").empty();
        $("#productSelect").append("<option value='0' selected>--Model--</option>");
    }
    else {
        $.ajax({
            method: 'POST',
            url: url,
            data: {type: 'product', body: model, cat: catagory, _token: token}
        })
            .done(function (msg) {
                var len = msg['msg'].length;
                $("#productSelect").empty();
                $("#productSelect").append("<option value='0' selected>--Model--</option>");
                for (var i = 0; i < len; i++) {
                    var model = msg['msg'][i]['id'];

                    $("#productSelect").append("<option value='" + model + "'>" + model + "</option>");
                    console.log(model);
                }
            })
    }
});
