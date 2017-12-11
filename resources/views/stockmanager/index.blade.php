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
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Pending Orders</div>

                    <!-- Table -->
                    <table class="table" id="curOrders" style="border: 3px solid black">
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
    <div class="row">
        <div id="chartdiv" style="height: 200px;width: 100%;font-size: 11px;"></div>
    </div>
    <div class="row">
        <form class="form" method="post" action="{{route('stock.SendCritStock')}}">
            <div class="form-group">
                <label class="control-label col-sm-2 col-sm-offset-2" for="Model">Critical Stock Notification:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="crit"
                           placeholder="Enter the names of the low stock items"
                           name="model" required="true">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default">Send Message</button>
                </div>
            </div>
            {{ csrf_field() }}
        </form>
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
