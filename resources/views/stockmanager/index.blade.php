@extends('layouts.master_fluid')

@section('title')
    Stock Manager
@endsection

@section('styles')
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all"/>
@endsection

@section('header')
    @include('partials.stock_header')
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="pre-scrollable" style="height: 200px">
                <div class="panel panel-primary">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><b>Pending Orders</b></div>

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
                <div class="panel panel-primary">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><b>Orders need Delivering</b></div>

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
    <br>
    <br>
    <div class="row">
        <div class="col-md-4 col-sm-offset-1"><h3>Stock Status</h3></div>
    </div>
    <div class="row">
        <div id="chartdiv" style="height: 200px;width: 100%;font-size: 11px;"></div>
    </div>

@endsection

@section('scripts')
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <script src="{{URL::to('js/stock_levels.js')}}"></script>
    <script src="{{URL::to('js/stock_man.js')}}"></script>
    <script>
        var token = '{{\Illuminate\Support\Facades\Session::token()}}';
        var url_curOrders = '{{route('check_orders')}}';
        var url_deliOrders = '{{route('check_deli_orders')}}';
        var url_acc_stock = '{{route('check_stock_stat',['id'=>1])}}'
    </script>
@endsection
