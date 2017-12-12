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
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <form action="{{route('viewjob')}}" method="post">
                    <h2>Job Overview- {{$jobid}} </h2>
                    <input type="hidden" name="jobid" value="{{$jobid}}">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="dashcont">
                                <div class="dashhead">


                                    <div class="col-sm-12"><h4>Job Details</h4></div>
                                </div>
                                <hr>

                                <table class="table table-hover">
                                    <thead>

                                    </thead>
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

        </div>

    </div>
    <div class="row" style="margin-top: 20px">


        <div class="col-sm-12">
            <div class="dashcont">
                <div class="dashhead">


                    <div class="col-sm-12"><h4>Job Task</h4></div>
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
                        <th> Action</th>

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


                            <div class="col-sm-12"><h4>Problems In Device</h4></div>
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


                            <div class="col-sm-12"><h4>Devices Recived</h4></div>
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
    <div class="col-sm-1"></div>
    </div>
    </div>

@endsection

