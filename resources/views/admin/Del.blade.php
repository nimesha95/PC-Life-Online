@extends('layouts.master')

@section('title')

@endsection

@section('header')
    @include('partials.admin_header')
@endsection

@section('content')

    <div class="container">
        <div class="row">

            <h1 align="center">Delivery Report</h1><br><br>
            <div class="col-md-12">

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