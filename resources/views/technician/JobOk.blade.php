@extends('layouts.master_fluid')
@section('title')
    PC-Life Online | Technician
@endsection

@section('header')
    @include('partials.tech_header')

@endsection
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <div class="col-sm-3">
                    <form action="{{route('RepairInv')}}" method="post">
                        <div style="background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9); box-shadow: 0px 0px 2px #000; width: auto; padding: 10px">
                            <h4 style="color: White;display: inline-block"> New Job Desktop <br>
                                <hr>
                                Job ID {{$jobid}}
                            </h4>
                            <hr>


                            <div style="color: white ;padding: 10px;"><b>Enter Device Information</b></div>
                            <div style="color: white ;padding: 10px;">
                                <b>Enter Device Questioneier</b>
                            </div>
                            <div style="color: white ;padding: 10px;">
                                <b>Enter Other Device Recieved</b>
                            </div>
                            <div style="color: white ;padding: 10px;">
                                <b>Add New Tasks</b>
                            </div>
                            <div style="color: white ;padding: 10px;">
                                <b>Get Customer Information</b>
                            </div>
                            <div style="height:auto;
    width:auto;
    padding: 10px;
    background-color: rgba(255,255,255,0.5) ;">
                                <b>Job Confirm</b>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-sm-9">


                    <div class="row">

                        <div class="col-sm-10">
                            <form action="{{route('RepairInv')}}" method="post">
                                <h2>Job No - {{$jobid}} </h2>
                                {{ csrf_field() }}
                                <div class="modal-footer">
                                    <button type="Submit" class="subbuttonred">Print Invoice</button>
                                    <a href="{{url('technician')}}" style="all: unset;">
                                        <button type="button" class="subbutton" data-toggle="modal" data-target="">
                                            Done
                                        </button>
                                    </a>
                                </div>
                                <input type="hidden" name="jobid" value="{{$jobid}}">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="dashcont">
                                            <div class="dashhead">


                                                <div class="col-sm-12"><h4>Job Details</h4></div>

                                                <hr>

                                                <table class="table table-hover">

                                                    <tr>


                                                    </tr>

                                                    <tbody>


                                                    @foreach($qarrayj as $Custom)
                                                        <tr>

                                                            <td><b>Job Type</b></td>
                                                            <td>{{$Custom->jobtype}}</td>
                                                            <td><b>Invoice No</b></td>
                                                            <td>{{$Custom->invoiceno}}</td>


                                                        </tr>
                                                        <tr>
                                                            <td><b>Device serial no</b></td>
                                                            <td>{{$Custom->Serialno}}</td>
                                                            <td><b>Device </b></td>
                                                            <td>{{$Custom->device}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Condition</b></td>
                                                            <td>{{$Custom->Condition}}</td>
                                                            <td><b>Problem</b></td>
                                                            <td>{{$Custom->Problem}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Price</b></td>
                                                            <td>{{$Custom->price}}</td>
                                                            <td><b>Total time</b></td>
                                                            <td>{{$Custom->totaltime}}</td>


                                                        </tr>
                                                        <tr>
                                                            <td><b>Order Date</b></td>
                                                            <td>{{$Custom->orderdate}}</td>
                                                            <td><b>Delivety Date</b></td>
                                                            <td>{{$Custom->deleverdate}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Status</b></td>
                                                            <td>{{$Custom->status}}</td>
                                                            <td><b>User</b></td>
                                                            <td>{{$Custom->user}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Telephone No</b></td>
                                                            <td>{{$Custom->telno}}</td>
                                                        </tr>


                                @endforeach


                            </form>


                            </tbody>
                            </table>


                        </div>


                        <div class="row" style="margin-top: 20px">


                            <div class="col-sm-12">
                                <div class="dashcont">
                                    <div class="dashhead">


                                        <div class="col-sm-12"><h4>Job Tasks</h4></div>
                                    </div>
                                    <hr>

                                    <table class="table table-hover">

                                        <tbody>
                                        <thead>
                                        <tr>
                                            <th> Name</th>
                                            <th> Default Operation Time</th>


                                            <th> Default Involve Time</th>
                                            <th> Price</th>
                                            <th> Status</th>


                                        </tr>
                                        </thead>

                                        @foreach($qarrayt as $Custom)
                                            <tr>

                                                <td>{{$Custom->Name}}</td>
                                                <td>{{$Custom->DOPT}}</td>
                                                <td>{{$Custom->DINT}}</td>
                                                <td>{{$Custom->price}}</td>


                                            </tr>




                                            @endforeach


                                            </tbody>
                                    </table>


                                </div>


                            </div>


                        </div>

                        <div class="row" style="margin-top: 20px">

                            <div class="col-sm-6">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="dashcont">
                                            <div class="dashhead">


                                                <div class="col-sm-12"><h4>Job Questioneier</h4></div>
                                            </div>
                                            <hr>

                                            <table class="table table-hover">

                                                <tbody>


                                                @foreach($qarrayq as $Custom)
                                                    <tr>

                                                        <td>{{$Custom->Q1}}</td>


                                                    </tr>
                                                    <tr>
                                                        <td>{{$Custom->Q2}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{$Custom->Q3}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{$Custom->Q4}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{$Custom->Q5}}</td>
                                                    </tr>



                                                @endforeach


                                                </tbody>
                                            </table>


                                        </div>

                                    </div>

                                </div>


                            </div>


                            <div class="col-sm-6">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="dashcont">
                                            <div class="dashhead">


                                                <div class="col-sm-12"><h4>Devices Recieved</h4></div>
                                            </div>
                                            <hr>

                                            <table class="table table-hover">

                                                <tbody>


                                                @foreach($qarraya as $Custom)
                                                    <tr>

                                                        <td>{{$Custom->Q1}}</td>


                                                    </tr>
                                                    <tr>
                                                        <td>{{$Custom->Q2}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{$Custom->Q3}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{$Custom->Q4}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{$Custom->Q5}}</td>
                                                    </tr>



                                                @endforeach


                                                </tbody>
                                            </table>


                                        </div>

                                    </div>

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


                </div>

            </div>
        </div>

        <div class="col-sm-1"></div>
    </div>
    </div>

@endsection

