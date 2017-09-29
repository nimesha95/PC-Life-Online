@extends('layouts.master')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <!-- It can be fixed with bootstrap affix http://getbootstrap.com/javascript/#affix-->
            <div id="sidebar" class="well sidebar-nav">
                <h5><i class="glyphicon glyphicon-home"></i>
                    <small><b>MANAGEMENT</b></small>
                </h5>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Add</a></li>
                    <li><a href="#">Search</a></li>
                </ul>
                <h5><i class="glyphicon glyphicon-user"></i>
                    <small><b>USERS</b></small>
                </h5>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">List</a></li>
                    <li><a href="#">Manage</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <h1>User Profile</h1>
                </div>
            </div>

            <div class="row" style="margin-top: 20px">
                <a href="{{route('user.orders')}}">Order History</a>
            </div>
            <div class="row" style="margin-top: 20px">
                @if(isset($orders))
                    @foreach($orders as $order)
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <ul class="list-group">
                                    @foreach($order->order_obj as $row)
                                        <li class="list-group-item">
                                            {{$row->name}} || {{$row->qty}} || {{$row->price}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="panel-footer">
                                <strong>Total Price: {{$order->total}}</strong>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>


@endsection
