@extends('layouts.master_fluid')
@section('title')
    PC-Life Online | Technician
@endsection

@section('header')
    @include('partials.tech_header')

@endsection
@section('content')
    <div class="row">
        <div class="col-sm-1" ></div>
        <div class="col-sm-10" >
            <div class="row">

                <div class="col-sm-12" >
                    <div class="dashcont">
                        <div class="dashhead">
                            <form >

                                    <div class="col-sm-10" ><h4 >All Jobs -{{$Task}} </h4></div>





                            </form>

                        </div>
                        <hr>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Job ID </th>
                                <th>Device</th>
                                <th>Job Time (Min)</th>
                                <th>Price</th>
                                <th>Deliver Date</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($qarray as $Custom)
                                    <form action="{{route('viewjob')}}" method="post">
                                        {{ csrf_field() }}
                                    <tr  data-toggle="modal" data-target="#Showtask{{$Custom->jobid}}">
                                    <td>{{$Custom->jobid}}</td>
                                        <td>{{$Custom->device}}</td>
                                        <td>{{$Custom->totaltime}}</td>
                                        <td>{{$Custom->price}}</td>
                                        <td>{{$Custom->deleverdate}}</td>
                                        <td> <input type="hidden" class="form-control"  Name="Jobid" value="{{$Custom->jobid}}" placeholder="Enter the Customer's User ID"></td>
                                        <td><button type="submit" class="btn btn-default"  >View</button></td>
                                    </tr>
                                    </form>


                                @endforeach



                            </tbody>
                        </table>


                    </div>

                </div>

            </div>

        <!--
            <table>
                <tr>
                    <td style='padding:10px; text-align:center; font-size:15px; font-family:Arial,Helvetica;'>



                        <form action="{{route('technician.index')}}" method="POST">
                            <input type="text" name="D1" placeholder="username"><br><br>
                            <input type="text" name="D3" placeholder="email"><br><br>
                            <input type="text"  name="D2" placeholder="password"><br><br>
                            <input type="submit" value="REGISTER NOW!">
                            {{ csrf_field() }}
                        </form>
                    </td>
                    <td>
                        <img src='https://barcode.tec-it.com/barcode.ashx?data=01&code=Code128&dpi=150' alt='Barcode Generator TEC-IT'/>
                    </td>
                </tr>
            </table>-->
            </div>
        <div class="col-sm-1" ></div>
    </div>






@endsection

