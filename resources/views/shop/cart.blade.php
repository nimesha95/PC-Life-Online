@extends('layouts.master')

@section('title')
    Some header passed from the parameters
@endsection

@section('content')


    <div class=" container">
        <div class="row">
            <div class="col-xs-3 col-md-4"></div>
            <div class="col-xs-6 col-md-4">
                <h2>Your Cart</h2>
            </div>
            <div class="col-xs-3 col-md-4"></div>
        </div>

        @if(Cart::count()<1)
            <div class="row">
                <div class="col-xs-3 col-md-4"></div>
                <div class="col-xs-6 col-md-4">
                    <p>Your Cart is empty</p>
                </div>
                <div class="col-xs-3 col-md-4"></div>
            </div>
        @else
            <div class="row">
                <div class="col-md-3 col-xs-4"><b>Product</b></div>
                <div class="col-md-2 col-xs-3"><b>Qty</b></div>
                <div class="col-md-2 col-xs-2"><b>Price</b></div>
                <div class="col-md-2 col-xs-2"><b>Total</b></div>
            </div>
            @foreach(Cart::content() as $row)
                <div class="row">
                    <div class="col-md-3 col-xs-4">{{$row->name}}</div>
                    <div class="col-md-2 col-xs-3">
                        {{$row->qty}}
                        <a href="{{route('product.RemoveFromCart' , ['count'=>1,'rowid'=> $row->rowId,'curcount'=>$row->qty])}}"
                           class="btn btn-xs btn-danger pull-right" role="button">
                            <span class="glyphicon glyphicon-minus"></span>&nbsp;
                        </a>
                        <a href="{{route('product.PlusOneCart' , ['rowid'=> $row->rowId,'curcount'=>$row->qty])}}"
                           class="btn btn-xs btn-success pull-right" role="button">
                            <span class="glyphicon glyphicon-plus "></span>&nbsp;
                            <!--span need some non char to fill the space-->
                        </a>
                    </div>
                    <div class="col-md-2 col-xs-2">{{$row->price}}</div>
                    <div class="col-md-2 col-xs-2">{{$row->total}}</div>
                    <div class="col-md-1 col-xs-1">
                        <a href="{{route('product.RemoveFromCart' , ['count'=>'all','rowid'=> $row->rowId])}}"
                           class="btn btn-xs btn-danger" role="button">
                            <span class="glyphicon glyphicon-remove"></span>&nbsp;
                        </a>
                    </div>
                </div>
            @endforeach

            <div class="row">
                <div class="col-md-3 col-xs-4"></div>
                <div class="col-md-2 col-xs-3"></div>
                <div class="col-md-2 col-xs-2"><b>SubTotal</b></div>
                <div class="col-md-2 col-xs-2">{{Cart::subtotal()}}</div>
            </div>
        @endif
    </div>

@endsection
