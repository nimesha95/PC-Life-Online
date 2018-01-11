@extends('layouts.master_fluid')

@section('title')
    Order ID
@endsection


@section('header')
    @include('partials.stock_header')
@endsection

@section('content')
    <div class="row" style="background-color: white; box-shadow: 0px 0px 5px rgba(0,0,0,0.3); border-radius: 10px ; padding: 10px ;margin:10px ">
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

            @if($deli_stat)
                <script>
                    var token = '{{\Illuminate\Support\Facades\Session::token()}}';
                    var url_add_to_firebase = '{{route('add_to_fbase')}}';
                </script>
                <script src="https://www.gstatic.com/firebasejs/4.6.1/firebase.js"></script>
                <script src="{{URL::to('js/addToFirebase.js')}}"></script>
                <script type="text/javascript">
                    addToDeliveryTable({{$orderid}});
                </script>
            @endif

            <div class="form-group">
                <input type="hidden" name="orderid" id="orderid" value="{{$orderid}}">
            </div>
            <div class="form-group">
                <div class="col-sm-offset-10 col-sm-20">
                    <button type="submit" id="submitBtn" name="submitBtn" class="btn btn-info">Submit</button>
                </div>
            </div>
            {{ csrf_field() }}
        </form>
    </div>
    </div>
    <script>
        var url = '{{route('stockmanager.index')}}'
    </script>
    <script type="text/javascript">
        $("#submitBtn").click(function () {
            var delay = 3000;
            setTimeout(function () {
                window.location = url;
            }, delay);
        });
    </script>
@endsection
