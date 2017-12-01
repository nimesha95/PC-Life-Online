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
    <!--
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
        </div>
    </div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    -->

    <div class="row">
        <div class="col-md-6">
            <div class="pre-scrollable" style="height: 200px">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Pending Orders</div>

                    <!-- Table -->
                    <table class="table" id="curOrders">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Value</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="pre-scrollable" style="height: 200px">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Orders need Delivering</div>

                    <!-- Table -->
                    <table class="table" id="deliOrders">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Value</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{URL::to('js/stock_man.js')}}"></script>
    <script>
        var token = '{{\Illuminate\Support\Facades\Session::token()}}';
        var url_curOrders = '{{route('check_orders')}}';
        var url_deliOrders = '{{route('check_deli_orders')}}';
    </script>
@endsection
