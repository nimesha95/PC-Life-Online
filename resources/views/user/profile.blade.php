@extends('layouts.master_fluid')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class="row">
        @include('partials.user_prof_sidebar')
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <h1>Body Contents</h1>
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
