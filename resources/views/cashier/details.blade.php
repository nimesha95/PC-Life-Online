@extends('layouts.master')

@section('title')
    PC-Life Online
@endsection
@section('header')
    @include('partials.cashier_header')
@endsection

@section('content')

    <div class="row" style="box-shadow: 0px 0px 10px rgba(0,0,0,0.5);background-color: white; border-radius: 5px; margin:10px">
        <div>
            @foreach($orders as $order)

                <form method="POST" action="{{route('cashier.update',['cash'=>$order->id])}}">

                    {{ method_field('PUT') }}

                    {{ csrf_field() }}

                    <input type="hidden" name="ODID" id="ODID" value="{{ $order->id }}">
                    <input type="hidden" name="item" id="item" value="{{ $order->order_obj }}">
                    <input type="hidden" name="total" id="total" value="{{ $order->total }}">
                    <input type="hidden" name="type" id="type" value="{{ $order->paymentType }}">
                    <input type="hidden" name="date" id="date" value="{{ $order->added }}">

                    <div style="margin-top: 20px">
                        <div class="row" >
                            <div class="col-md-5 col-md-offset-1">

                                <h3>Your Order</h3>

                                <div class="pre-scrollable" style="height: 200px">
                                    <div class="panel panel-default">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Product ID</th>
                                                <th>Name</th>
                                                <th>Qty</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(Cart::content() as $row)
                                                <tr>
                                                    <td>{{$row->id}}</td>
                                                    <td>{{$row->name}}</td>
                                                    <td>{{$row->qty}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-md-offset-1">
                                <div class="overview product-description-section">

                                    <h3 class="product-description-section-title">Order Details: {{ $order->id }}</h3>

                                    <p style="color:red;font-size:36px;" class="pricing">Rs. {{ $order->total }}</p>

                                    <ul>

                                        <li>Email : {{ $order->email }}</li>

                                        <li>Purchased Date : {{ $order->added }}</li>

                                        <li>Payment Type : {{ $order->paymentType }}</li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-6   col-md-offset-3">

                                <div class="form-group">
                                    <label for="email">Order Total: </label>
                                    <input class="form-control" type="text" name="order_total" id="order_total"
                                           value="{{ $order->total }}"
                                           readonly>
                                </div>
                                <div class="form-group">
                                    <label for="email">Discounts (Percentage): </label>
                                    <input class="form-control" type="text" name="discount" id="discount" maxlength="2"
                                           value="0">
                                </div>
                                <div class="form-group">
                                    <label for="email">New Total: </label>
                                    <input class="form-control" type="text" name="new_total" id="new_total"
                                           value="{{ $order->total }}"
                                           readonly>
                                </div>
                                <button class="right" id="add-to-cart" type="submit" style="margin-bottom: 20px"><span
                                            class="glyphicon glyphicon-ok-sign"></span> Confirm
                                </button>

                            </div>
                        </div>





                        </div>

                    </div>

                </form>

            @endforeach
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{URL::to('js/cashier_details.js')}}"></script>
@endsection