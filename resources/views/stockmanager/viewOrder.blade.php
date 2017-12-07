@extends('layouts.master_fluid')

@section('title')
    Order ID
@endsection


@section('header')
    @include('partials.stock_header')
@endsection

@section('content')
    <div class="col-md-10 col-md-offset-1">
        <form class="form-horizontal" method="post" action="{{route('stock.subInv')}}">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th class="col-md-2">Product ID</th>
                    <th class="col-md-3">Name</th>
                    <th class="col-md-2">Qty</th>
                    <th class="col-md-4">Serial NO</th>
                </tr>
                </thead>
                <tbody>
                @foreach(Cart::content() as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->qty}}</td>
                        <td>
                            @for($i=0;$i<$row->qty;$i++)
                                <div class="form-group">
                                    <input type="text" id="serialNo" name="{{$row->id}}-{{$i}}"
                                           class="form-control"><br>
                                </div>
                            @endfor
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="form-group">
                <input type="hidden" name="orderid" id="orderid" value="{{$orderid}}">
            </div>
            <div class="form-group">
                <div class="col-sm-offset-10 col-sm-20">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </div>
            {{ csrf_field() }}
        </form>
    </div>
@endsection
