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
                    <div class="dashcont" style="height: 300px">
                        <div class="dashhead">
                            <form >

                                    <div class="col-sm-10" ><h4 >All</h4></div>
                                <div class="col-sm-2" ><button type="submit" class="btn btn-default showbutton" style="background-color: #00dd00">Search</button></div>




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
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($qarray as $Custom)
                                    <tr  data-toggle="modal" data-target="#Showtask{{$Custom->jobid}}">
                                    <td>{{$Custom->jobid}}</td>
                                        <td>{{$Custom->device}}</td>
                                        <td>{{$Custom->totaltime}}</td>
                                        <td>{{$Custom->price}}</td>
                                        <td>{{$Custom->deleverdate}}</td>
                                    </tr>


                                @endforeach



                            </tbody>
                        </table>


                    </div>

                </div>

            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-sm-6" >
                    <div class="dashcont" style="height: 300px">
                        <div class="dashhead">
                            <form >

                                <div class="col-sm-10" ><h4 >All</h4></div>
                                <div class="col-sm-2" ><button type="submit" class="btn btn-default showbutton" style="background-color: #00dd00">Search</button></div>




                            </form>

                        </div>
                        <hr>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Job ID </th>
                                <th>Device</th>


                                <th>Deliver Date</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($qarray1 as $Custom)
                                <tr  data-toggle="modal" data-target="#Showtask{{$Custom->jobid}}">
                                    <td>{{$Custom->jobid}}</td>
                                    <td>{{$Custom->device}}</td>


                                    <td>{{$Custom->deleverdate}}</td>
                                </tr>


                            @endforeach



                            </tbody>
                        </table>


                    </div>

                </div>
                <div class="col-sm-6" >
                    <div class="dashcont" style="height: 300px">
                        <div class="dashhead">
                            <form >

                                <div class="col-sm-10" ><h4 >All</h4></div>
                                <div class="col-sm-2" ><button type="submit" class="btn btn-default showbutton" >Search</button></div>




                            </form>

                        </div>
                        <hr>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Job ID </th>
                                <th>Device</th>


                                <th>Deliver Date</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($qarray2 as $Custom)
                                <tr  data-toggle="modal" data-target="#Showtask{{$Custom->jobid}}">
                                    <td>{{$Custom->jobid}}</td>
                                    <td>{{$Custom->device}}</td>


                                    <td>{{$Custom->deleverdate}}</td>
                                </tr>


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

    @foreach($qarray as $Custom)

        <div class="modal fade" id="Showtask{{$Custom->jobid}}" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{$Custom->jobid}}</h4>
                    </div>

                    <div class="modal-body">
                        <h4> Questionier</h4>
                        <div class="row">

                            <table border="0" class="table " style="padding:10px">

                                <form action="{{route('viewjob')}}" method="post">
                                        <tr>
                                            {{ csrf_field() }}
                                            <td> <label for="comment">Enter the User Name</label></td>
                                            <td> <input type="hidden" class="form-control"  Name="Jobid" value="{{$Custom->jobid}}" placeholder="Enter the Customer's User ID"></td>
                                            <td> <button type="Submit" class="subbutton"  >Goto the Job</button></td>
                                        </tr>
                                </form>
                            </table>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#RemoveUserModal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    @endforeach



@endsection

