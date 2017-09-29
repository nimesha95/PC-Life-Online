@extends('layouts.master')

@section('title')
    Cart
@endsection

@section('header')
    @include('partials.header')
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

            <div class="row" style="margin-top: 20px">
                <div class="col-md-3 col-xs-4"></div>
                <div class="col-md-2 col-xs-3"></div>
                <div class="col-md-2 col-xs-2"></div>
                <div class="col-md-2 col-xs-2">
                    <a href="#" class="btn btn-default btn-success" data-toggle="modal" data-target="#SelectPayment"
                       role="button">Checkout</a>
                </div>
            </div>

        @endif

        <div class="modal fade" id="SelectPayment" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">CheckOut</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="{{route('admin.reguser')}}">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="Payment">Select Payment Method:</label>
                                <div class="col-sm-6">
                                    <div class="radio">
                                        <label><input type="radio" name="payment">EzCash</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="payment">Bank Deposit</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="payment">Pay when pickup</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4" for="delivery">Do you want order
                                    delivered?:</label>
                                <div class="col-sm-6">
                                    <select class="form-control" onchange="showAddrDiv(this)" id="delivery"
                                            name="delivery">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group" id="addr_div" style="display: none">
                                <label class="control-label col-sm-4" for="addr">Select Shipping Address:</label>
                                <div class="col-sm-6">
                                    <select class="form-control" id="addr" name="addr">
                                        <option value="0">Use my default address</option>
                                        <option value="1">Enter new address</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Make my Order</button>
                                </div>
                            </div>
                            {{ csrf_field() }}
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        function showAddrDiv(that) {
            if (that.value == 1) {
                document.getElementById("addr_div").style.display = "block";
            } else {
                document.getElementById("addr_div").style.display = "none";
            }
        }
    </script>
@endsection
