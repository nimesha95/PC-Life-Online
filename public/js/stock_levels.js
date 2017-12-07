$(document).ready(function () {
    Acc_graph();

});

function Acc_graph() {
    $.ajax({
        method: 'POST',
        url: url_acc_stock,
        data: {body: "hey there231", _token: token}
    })
        .done(function (msg) {
            var len = msg['msg'].length;
            var msg = msg['msg'];
            //console.log(msg['msg']);

            var chart = AmCharts.makeChart("chartdiv", {
                "type": "serial",
                "theme": "light",
                "legend": {
                    "horizontalGap": 10,
                    "maxColumns": 1,
                    "position": "right",
                    "useGraphSettings": true,
                    "markerSize": 10
                },
                "dataProvider": [{
                    "Type": 'Accessories',
                    "motherboard": msg[0],
                    "ram": msg[1],
                    "processor": msg[2],
                    "memorycards": msg[3],
                    "mouse": msg[4],
                    "keyboard": msg[5]
                }],
                "valueAxes": [{
                    "stackType": "regular",
                    "axisAlpha": 0.5,
                    "gridAlpha": 0
                }],
                "graphs": [{
                    "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                    "fillAlphas": 0.8,
                    "labelText": "[[value]]",
                    "lineAlpha": 0.3,
                    "title": "Motherboards",
                    "type": "column",
                    "color": "#000000",
                    "valueField": "motherboard"
                }, {
                    "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                    "fillAlphas": 0.8,
                    "labelText": "[[value]]",
                    "lineAlpha": 0.3,
                    "title": "Ram cards",
                    "type": "column",
                    "color": "#000000",
                    "valueField": "ram"
                }, {
                    "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                    "fillAlphas": 0.8,
                    "labelText": "[[value]]",
                    "lineAlpha": 0.3,
                    "title": "Processors",
                    "type": "column",
                    "color": "#000000",
                    "valueField": "processor"
                }, {
                    "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                    "fillAlphas": 0.8,
                    "labelText": "[[value]]",
                    "lineAlpha": 0.3,
                    "title": "Memory Cards",
                    "type": "column",
                    "color": "#000000",
                    "valueField": "memorycards"
                }, {
                    "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                    "fillAlphas": 0.8,
                    "labelText": "[[value]]",
                    "lineAlpha": 0.3,
                    "title": "Mouse",
                    "type": "column",
                    "color": "#000000",
                    "valueField": "mouse"
                }, {
                    "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                    "fillAlphas": 0.8,
                    "labelText": "[[value]]",
                    "lineAlpha": 0.3,
                    "title": "Keyboards",
                    "type": "column",
                    "color": "#000000",
                    "valueField": "keyboard"
                }],
                "rotate": true,
                "categoryField": "Type",
                "categoryAxis": {
                    "gridPosition": "start",
                    "axisAlpha": 0,
                    "gridAlpha": 0,
                    "position": "left"
                },
                "export": {
                    "enabled": true
                }
            });


        })

    repeater = setTimeout(Acc_graph, 10000);
}


