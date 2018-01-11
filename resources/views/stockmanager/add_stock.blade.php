@extends('layouts.master_fluid')

@section('title')
    Update Stock
@endsection

@section('styles')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('header')
    @include('partials.stock_header')
@endsection

@section('content')
    <div class="row"
         style="background-color: white; box-shadow: 0px 0px 5px rgba(0,0,0,0.3); border-radius: 10px ; padding: 30px ;margin:10px ">
        <div class="row">
        <div class="col-md-4">
            <h4>You are adding <a href="#"> {{$brand}}</a> >> <a href="#"> {{$product}}</a></h4>
        </div>
    </div>
    <div class="row" style="margin-top: 10px">
        <form class="form-horizontal" method="post" action="#">
            <div class="form-group has-warning">
                <label class="control-label col-sm-2" for="type">Serial No:</label>
                <div class="col-sm-10 col-md-4">
                    <input type="text" id="serialNo" name="serialNo" class="form-control">
                </div>

                <span class="help-block" id="already_there" style="display: none">
                    <i class="material-icons" style="color:red">
                        warning
                    </i>
                    Item is already added
                </span>
                <span class="help-block" id="dataValid_span" style="display: none">Serial No Length Should be greter than 12</span>
            </div>
            <div class="form-group">
                <input type="hidden" name="proid" value="{{$proid}}">
            </div>
            <div class="form-group">
                <input type="hidden" name="product" value="{{$product}}">
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </div>
            {{ csrf_field() }}
        </form>
    </div>
    </div>
@endsection

@section('scripts')
    <script src="{{URL::to('js/add_stock_serial.js')}}"></script>
    <script>
        var token = '{{\Illuminate\Support\Facades\Session::token()}}';
        var url1 = '{{route('submit_stock')}}';
    </script>
@endsection
