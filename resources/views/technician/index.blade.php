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

                                    <div class="col-sm-10" ><h4 >Repairs To Do</h4></div>
                                <div class="col-sm-2" ><a href="{{url('technician/Jobs/Repair')}}"><button type="button" class="btn btn-default showbutton" style="background-color: #00dd00">View All</button></a></div>




                            </form>

                        </div>
                        <hr>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Job ID </th>
                                <th>Device</th>
                                <th>Job Time (Min)</th>
                                <th>Price (Rs.)</th>
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

                                <div class="col-sm-10" ><h4 >Completed (Need to Deliver)</h4></div>
                                <div class="col-sm-2" ><button type="submit" class="btn btn-default showbutton" style="background-color: #00dd00">View All</button></div>




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

                                <div class="col-sm-10" ><h4 >Company Warrnaty</h4></div>
                                <div class="col-sm-2" ><button type="submit" class="btn btn-default showbutton" >View All</button></div>




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
                        <h4 class="modal-title">{{$Custom->jobid}}- Job Overview</h4>
                    </div>

                    <div class="modal-body">

                        <div class="row">
                            <div class="container">

                            <table  class="table " style="width: 400px">

                                <form action="{{route('viewjob')}}" method="post">
                                    {{ csrf_field() }}
                                    <tr>

                                        <td> <label for="comment">Device </label></td>
                                        <td>  <b>: {{$Custom->device}}</b></td>

                                    </tr>
                                    <tr>

                                            <td> <label for="comment">Job Type </label></td>
                                            <td>  <b>: {{$Custom->jobtype}}</b></td>

                                        </tr>
                                    <tr>

                                        <td> <label for="comment">Device Serial No </label></td>
                                        <td>  <b>: {{$Custom->Serialno}}</b></td>

                                    </tr>
                                    <tr>

                                        <td> <label for="comment">Condition  </label></td>
                                        <td>  <b>: {{$Custom->Condition}}</b></td>

                                    </tr>
                                    <tr>

                                        <td> <label for="comment">Problem  </label></td>
                                        <td>  <b>: {{$Custom->Problem}}</b></td>

                                    </tr>
                                    <tr>

                                        <td> <label for="comment">Order Date</label></td>
                                        <td>  <b>: {{$Custom->orderdate}}</b></td>

                                    </tr>
                                    <tr>

                                        <td> <label for="comment">Delivery Date</label></td>
                                        <td>  <b>: {{$Custom->deleverdate}}</b></td>

                                    </tr>
                                    <tr>

                                        <td> <label for="comment">Customer Name</label></td>
                                        <td>  <b>: {{$Custom->user}}</b></td>

                                    </tr>
                                    <tr>

                                        <td> <label for="comment">Contact No</label></td>
                                        <td>  <b>: {{$Custom->telno}}</b></td>

                                    </tr>

                                        <td> <input type="hidden" class="form-control"  Name="Jobid" value="{{$Custom->jobid}}" placeholder="Enter the Customer's User ID"></td>

                                   <tr>
                                        <td> <button type="Submit" class="subbutton"  >Goto the Job</button></td>
                                    </tr>
                                </form>
                            </table>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" >Close</button>
                    </div>
                </div>

            </div>
        </div>

    @endforeach

    @foreach($qarray1 as $Custom)

        <div class="modal fade" id="Showtask{{$Custom->jobid}}" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{$Custom->jobid}}- Job Overview</h4>
                    </div>

                    <div class="modal-body">

                        <div class="row">
                            <div class="container">

                                <table  class="table " style="width: 400px">

                                    <form action="{{route('viewjob')}}" method="post">
                                        {{ csrf_field() }}
                                        <tr>

                                            <td> <label for="comment">Device </label></td>
                                            <td>  <b>: {{$Custom->device}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Job Type </label></td>
                                            <td>  <b>: {{$Custom->jobtype}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Device Serial No </label></td>
                                            <td>  <b>: {{$Custom->Serialno}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Condition  </label></td>
                                            <td>  <b>: {{$Custom->Condition}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Problem  </label></td>
                                            <td>  <b>: {{$Custom->Problem}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Order Date</label></td>
                                            <td>  <b>: {{$Custom->orderdate}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Delivery Date</label></td>
                                            <td>  <b>: {{$Custom->deleverdate}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Customer Name</label></td>
                                            <td>  <b>: {{$Custom->user}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Contact No</label></td>
                                            <td>  <b>: {{$Custom->telno}}</b></td>

                                        </tr>

                                        <td> <input type="hidden" class="form-control"  Name="Jobid" value="{{$Custom->jobid}}" placeholder="Enter the Customer's User ID"></td>

                                        <tr>
                                            <td> <button type="Submit" class="subbutton"  >Goto the Job</button></td>
                                        </tr>
                                    </form>
                                </table>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" >Close</button>
                    </div>
                </div>

            </div>
        </div>

    @endforeach

    @foreach($qarray2 as $Custom)

        <div class="modal fade" id="Showtask{{$Custom->jobid}}" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{$Custom->jobid}}- Job Overview</h4>
                    </div>

                    <div class="modal-body">

                        <div class="row">
                            <div class="container">

                                <table  class="table " style="width: 400px">

                                    <form action="{{route('viewjob')}}" method="post">
                                        {{ csrf_field() }}
                                        <tr>

                                            <td> <label for="comment">Device </label></td>
                                            <td>  <b>: {{$Custom->device}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Job Type </label></td>
                                            <td>  <b>: {{$Custom->jobtype}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Device Serial No </label></td>
                                            <td>  <b>: {{$Custom->Serialno}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Condition  </label></td>
                                            <td>  <b>: {{$Custom->Condition}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Problem  </label></td>
                                            <td>  <b>: {{$Custom->Problem}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Order Date</label></td>
                                            <td>  <b>: {{$Custom->orderdate}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Delivery Date</label></td>
                                            <td>  <b>: {{$Custom->deleverdate}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Customer Name</label></td>
                                            <td>  <b>: {{$Custom->user}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Contact No</label></td>
                                            <td>  <b>: {{$Custom->telno}}</b></td>

                                        </tr>

                                        <td> <input type="hidden" class="form-control"  Name="Jobid" value="{{$Custom->jobid}}" placeholder="Enter the Customer's User ID"></td>

                                        <tr>
                                            <td> <button type="Submit" class="subbutton"  >Goto the Job</button></td>
                                        </tr>
                                    </form>
                                </table>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" >Close</button>
                    </div>
                </div>

            </div>
        </div>

    @endforeach
    @foreach($qarray3 as $Custom)

        <div class="modal fade" id="Shownote{{$Custom->jobid}}" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{$Custom->jobid}}- Job Overview</h4>
                    </div>

                    <div class="modal-body">

                        <div class="row">
                            <div class="container">

                                <table  class="table " style="width: 400px">

                                    <form action="{{route('viewjob')}}" method="post">
                                        {{ csrf_field() }}
                                        <tr>

                                            <td> <label for="comment">Device </label></td>
                                            <td>  <b>: {{$Custom->device}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Job Type </label></td>
                                            <td>  <b>: {{$Custom->jobtype}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Device Serial No </label></td>
                                            <td>  <b>: {{$Custom->Serialno}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Condition  </label></td>
                                            <td>  <b>: {{$Custom->Condition}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Problem  </label></td>
                                            <td>  <b>: {{$Custom->Problem}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Order Date</label></td>
                                            <td>  <b>: {{$Custom->orderdate}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Delivery Date</label></td>
                                            <td>  <b>: {{$Custom->deleverdate}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Customer Name</label></td>
                                            <td>  <b>: {{$Custom->user}}</b></td>

                                        </tr>
                                        <tr>

                                            <td> <label for="comment">Contact No</label></td>
                                            <td>  <b>: {{$Custom->telno}}</b></td>

                                        </tr>

                                        <td> <input type="hidden" class="form-control"  Name="Jobid" value="{{$Custom->jobid}}" placeholder="Enter the Customer's User ID"></td>

                                        <tr>
                                            <td> <button type="Submit" class="subbutton"  >Goto the Job</button></td>
                                        </tr>
                                    </form>
                                </table>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" >Close</button>
                    </div>
                </div>

            </div>
        </div>

    @endforeach
    <div class="modal fade" id="Shownote" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Notification</h4>
                </div>
                <div class="container">
                <table class="table table-hover" style="width: 300px">
                    <thead>
                    <tr>
                        <th>Job ID </th>
                        <th>Device</th>


                        <th>Deliver Date</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($qarray3 as $Custom)
                        <tr  data-toggle="modal" data-target="#Showtask{{$Custom->jobid}}" data-dismiss="modal">
                            <td>{{$Custom->jobid}}</td>
                            <td>{{$Custom->device}}</td>


                            <td>{{$Custom->deleverdate}}</td>
                        </tr>


                    @endforeach



                    </tbody>
                </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" >Close</button>
                </div>
            </div>

        </div>
    </div>

@endsection

