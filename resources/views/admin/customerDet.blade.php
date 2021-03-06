@extends('layouts.master')

@section('title')

@endsection

@section('header')
    @include('partials.admin_header')
@endsection

@section('content')

    <div class="container" style="box-shadow: 0px 0px 10px rgba(0,0,0,0.5);background-color: white; border-radius: 5px">
        <div class="row">
            <img
                    src="{{ asset('img/home/dash.png')}}"
                    style="width:50px;height: 50px; position: relative; top: -5px ; left:100px;  display: inline-block"> <h3 style="display: inline-block;position: relative;  left:120px;  display: inline-block">   Dashboard</h3></div>



        <h1 align="center">Customer Detail Report</h1><br><br>

            @foreach($cusDets as $cusDet )
                <h5><b>&nbsp;&nbsp;&nbsp;&nbsp;Name : </b>{{ $cusDet->name }} </h4>
                    <h5><b>&nbsp;&nbsp;&nbsp;&nbsp;Phone : </b>{{ $cusDet->phone_no }} </h4>
                        <h5><b>&nbsp;&nbsp;&nbsp;&nbsp;Email : </b>{{ $cusDet->email }} </h4>
                            <h5><b>&nbsp;&nbsp;&nbsp;&nbsp;Address : </b>{{ $cusDet->addr_line1 }}
                                , {{ $cusDet->addr_line2 }}, {{ $cusDet->addr_city }}</h4>
                                @endforeach

                                <br><br>

                                <div class="col-md-12">

                                    <div class="table-responsive">


                                        <table id="mytable" class="table table-bordred table-striped">

                                            <thead>

                                            <th align="center">Item</th>
                                            <th align="center">Amount</th>
                                            <th align="center">Ordered On</th>
                                            <th align="center">Payment Type</th>
                                            <th align="center">Paid</th>
                                            <th align="center">Delivery</th>
                                            <th align="center">Verified</th>

                                            </thead>
                                            <tbody>

                                            @foreach($cust as $cus )
                                                <tr>
                                                    <td>{{ $cus->id }}</td>
                                                    <td>Rs. {{ $cus->total }}</td>
                                                    <td>{{ $cus->added }}</td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $cus->paymentType }}</td>
                                                    <td>&nbsp;&nbsp;&nbsp;{{ $cus->paid }}</td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $cus->delivery }}</td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $cus->verified }}</td>
                                                </tr>
                                            @endforeach


                                            </tbody>

                                        </table>

                                        <div class="clearfix"></div>


                                    </div>

                                </div>
        </div>
    </div>
@endsection