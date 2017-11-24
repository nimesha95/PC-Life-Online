@extends('layouts.master_fluid')

@section('title')
    Stock Manager
@endsection

@section('header')
    @include('partials.stock_header')

    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Email Categories",
                    horizontalAlign: "left"
                },
                data: [{
                    type: "doughnut",
                    startAngle: 60,
                    //innerRadius: 60,
                    indexLabelFontSize: 17,
                    indexLabel: "{label} - #percent%",
                    toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                    dataPoints: [
                        {y: 67, label: "Inbox"},
                        {y: 28, label: "Archives"},
                        {y: 10, label: "Labels"},
                        {y: 7, label: "Drafts"},
                        {y: 15, label: "Trash"},
                        {y: 6, label: "Spam"}
                    ]
                }]
            });
            chart.render();

        }
    </script>
@endsection

@section('content')
    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
@endsection