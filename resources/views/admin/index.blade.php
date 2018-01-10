@extends('layouts.master_fluid')

@section('title')
    Administrator
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('css/mystylesheet.css') }}"/>

    <!-- MetisMenu CSS -->
    <link href="{{ URL::asset('css/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ URL::asset('css/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
@endsection


@section('header')
    @include('partials.admin_header')
@endsection

@section('content')
    <div class="row">
        @include('partials.admin_sidebar')
        <div class="col-md-9">
            <div class="row" style="margin-bottom:80px;">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" id="orders" name="orders">0</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('admin.reports',['type'=>"orders",'day'=> "recent"])}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-truck fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" id="deliv" name="deliv">0</div>
                                    <div>New Deliveries</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('admin.reports',['type'=>"deliveries",'day'=> "recent"])}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-money fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" id="earn" name="earn">0</div>
                                    <div>Today's Earning</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-wrench fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>New Service</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('admin.reports',['type'=>"service",'day'=> "recent"])}}">
                            <div class="panel-footer">
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row"><h3>Income Fluctuation</h3></div>
            <div class="row">
                <div class="col-md-12">
                    <div id="area-chart" style="min-height: 250px;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="{{URL::to('js/admin_index.js')}}"></script>
    <script src="{{URL::to('js/admin_earning.js')}}"></script>
    <script>
        var token = '{{\Illuminate\Support\Facades\Session::token()}}';
        var url_sync = '{{route('sync_noti')}}';
        var url_earning = '{{route('sync_earning')}}';
    </script>
@endsection
