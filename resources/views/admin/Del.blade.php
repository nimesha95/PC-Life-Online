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

        <div class="col-md-12" >

                <div class="table-responsive">


                    <table id="mytable" class="table table-bordred table-striped">

                        <thead>


                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address 1</th>
                        <th>Address 2</th>
                        <th>City</th>
                        </thead>
                        <tbody>

                        @foreach($cust as $cus )
                            <tr>
                                <td>{{ $cus -> name}}</td>
                                <td>{{ $cus -> email}}</td>
                                <td>{{ $cus -> phone_no}}</td>
                                <td>{{ $cus -> addr_line1}}</td>
                                <td>{{ $cus -> addr_line2}}</td>
                                <td>{{ $cus -> addr_city}}</td>

                        @endforeach

                        </tbody>

                    </table>

                    <div class="clearfix"></div>


                </div>

            </div>
        </div>
    </div>
    @endsection

    </body>
    </html>