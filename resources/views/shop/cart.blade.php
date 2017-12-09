@extends('layouts.master')

@section('title')
    Cart
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <script type="text/javascript">
        function successMsg() {
            $.bootstrapGrowl('Payment is Successful.', {
                type: 'success',
                delay: 2000,
            });
        }

        function FailedMsg() {
            $.bootstrapGrowl('Payment Failed', {
                type: 'danger',
                delay: 2000,
            });
        }

        @if(Session::has('pav_success'))
            {{"successMsg();"}}
            {{session()->forget('pav_success')}}
        @endif
        @if(Session::has('pav_error'))
            {{"FailedMsg();"}}
            {{session()->forget('pav_error')}}
        @endif

    </script>


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
                <div class="row" style="margin-top: 15px">
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
                    <div class="col-md-2 col-xs-2">{{$row->price * $row->qty}}</div>
                    <div class="col-md-1 col-xs-1">
                        <a href="{{route('product.RemoveFromCart' , ['count'=>'all','rowid'=> $row->rowId])}}"
                           class="btn btn-xs btn-danger" role="button">
                            <span class="glyphicon glyphicon-remove"></span>&nbsp;
                        </a>
                    </div>
                </div>
            @endforeach

            <div class="row" style="margin-top: 15px">
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
                        <ul class="nav nav-tabs" id="tabContent">
                            <li class="active"><a href="#paymentTab" data-toggle="tab">Payment</a></li>
                            <li><a href="#checkoutTab" data-toggle="tab">Checkout</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="paymentTab">
                                <form class="form-horizontal" method="post" action="#">
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="Payment">Select Payment
                                            Method:</label>
                                        <div class="col-sm-6" id="pay">
                                            <div class="radio">
                                                <label><input type="radio" name="payment" value="paypal">Paypal</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="payment" value="bank">Bank
                                                    Deposit</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="payment" checked="checked"
                                                              value="pickup">Pay when pickup
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="delivery">Delivery Method:</label>
                                        <div class="col-sm-6">
                                            <select id="deliveryDrop" class="form-control" id="delivery"
                                                    name="delivery">
                                                <option value="0">Pickup</option>
                                                <option value="1">Home Delivery</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="addr_info" id="addr_info" style="display: none">
                                            <label class="control-label col-sm-4" for="addr">Shipping Address:</label>
                                            <div class="col-sm-6" id="address_info" style="display: none">
                                                <p id="line1"></p>
                                                <p id="line2"></p>
                                                <p id="city"></p>
                                                <p id="phone"></p>
                                            </div>
                                            <div class="col-sm-6" id="set_addr" style="display: none">
                                                <a href="#" class="btn btn-info">Set Address</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-10 col-sm-20">
                                            <button type="button" id="toNext" class="btn btn-info">Next</button>
                                        </div>
                                    </div>
                                    {{ csrf_field() }}
                                </form>
                            </div>
                            <div class="tab-pane" id="checkoutTab">
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4">
                                        <h4>Order Review</h4>
                                    </div>
                                </div>
                                <div class="row col-md-offset-1 col-xs-offset-2" style="margin-top: 10px">
                                    <div class="col-md-5 col-xs-5"><b>Product</b></div>
                                    <div class="col-md-2 col-xs-3"><b>Qty</b></div>
                                    <div class="col-md-2 col-xs-2"><b>Price (pcs)</b></div>
                                    <div class="col-md-2 col-xs-2"><b>Total</b></div>
                                </div>
                                @foreach(Cart::content() as $row)
                                    <div class="row col-md-offset-1 col-xs-offset-2">
                                        <div class="col-md-5 col-xs-5">* {{$row->name}}</div>
                                        <div class="col-md-2 col-xs-3">{{$row->qty}}</div>
                                        <div class="col-md-2 col-xs-2">{{$row->price}}</div>
                                        <div class="col-md-2 col-xs-2">{{$row->price * $row->qty}}</div>
                                    </div>
                                @endforeach
                                <div class="row col-md-offset-1 col-xs-offset-2" style="margin-top: 10px">
                                    <div class="col-md-5 col-xs-5"></div>
                                    <div class="col-md-2 col-xs-3"><b>SubTotal</b></div>
                                    <div class="col-md-2 col-xs-2"></div>
                                    <div class="col-md-2 col-xs-2"><b>{{Cart::subtotal()}}</b></div>
                                </div>
                                <div class="row" style="margin-top: 15px">
                                    <label class="control-label col-sm-4" for="paymentMethod">Payment Method:</label>
                                    <div class="col-sm-6">
                                        <p id="pay_meth"></p>
                                    </div>
                                </div>
                                <div class="row" id="addr_infoX" style="margin-top: 15px;display: none">
                                    <label class="control-label col-sm-4" for="paymentMethod">Delivery Address:</label>
                                    <div class="col-sm-6">
                                        <p id="line1x"></p>
                                        <p id="line2x"></p>
                                        <p id="cityx"></p>
                                        <p id="phonex"></p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 15px">
                                    <div class="col-sm-offset-5 col-sm-2">
                                        <button type="button" id="orderSubmit" class="btn btn-success">Make Order
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

@section('scripts')
    <script src="{{URL::to('js/shop.js')}}"></script>
    <script>
        var token = '{{\Illuminate\Support\Facades\Session::token()}}';
        var url = '{{route('getAddr')}}';
        var submitURL = '{{route('user.checkout')}}';
    </script>
@endsection
