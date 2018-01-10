@extends('layouts.master')

@section('title')

@endsection

@section('header')
    @include('partials.admin_header')
@endsection

@section('content')

    <div class="container">
        <div class="row">

            <h1 align="center">Customer Detail Report</h1><br><br>

            <div class="col-md-12">

                <div class="table-responsive">


                    <table id="mytable" class="table table-bordred table-striped">

                        <thead>

                        <th>Name</th>
                        <th>Email</th>

                        </thead>
                        <tbody>

                        @foreach($cust as $cus )
                            <tr>
                                <td>{{ $cus -> name}}</td>
                                <td>{{ $cus -> email}}</td>
                                <td>
                                <td><p data-placement="top" data-toggle="tooltip" title="View"><a
                                                class="btn btn-primary btn-xs"
                                                href="{{route('admin.report_cust_history1',$cus->email)}}"><span
                                                    class="glyphicon glyphicon-search"></span></a></p></td>
                                </td>

                        @endforeach


                        </tbody>

                    </table>

                    <div class="clearfix"></div>


                </div>

            </div>
        </div>
    </div>

@endsection