@extends('layouts.master')

@section('title')

@endsection

@section('header')
    @include('partials.admin_header')
@endsection

@section('content')

    <div class="container">
        <div class="row">

            <h1 align="center">Sales Report</h1><br><br>

            <div class="col-md-12">

                <div class="table-responsive">


                    <table id="mytable" class="table table-bordred table-striped">

                        <thead>

                        <th>ID</th>
                        <th>Name</th>

                        </thead>
                        <tbody>

                        @foreach($des as $desk )
                            <tr>
                                <td>{{ $desk -> proid}}</td>
                                <td>{{ $desk -> name}}</td>
                                <td>
                                <td><p data-placement="top" data-toggle="tooltip" title="View"><a
                                                class="btn btn-primary btn-xs"
                                                href="{{route('admin.showSales1',$desk -> proid)}}"><span
                                                    class="glyphicon glyphicon-search"></span></a></p></td>
                                </td>

                        @endforeach

                        @foreach($lap as $laps )
                            <tr>
                                <td>{{ $laps -> proid}}</td>
                                <td>{{ $laps -> name}}</td>
                                <td>
                                <td><p data-placement="top" data-toggle="tooltip" title="View"><a
                                                class="btn btn-primary btn-xs"
                                                href="{{route('admin.showSales1',$laps->proid)}}"><span
                                                    class="glyphicon glyphicon-search"></span></a></p></td>
                                </td>

                        @endforeach


                        </tbody>

@endsection