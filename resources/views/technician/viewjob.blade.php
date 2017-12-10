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
        <div class="col-sm-1" ></div>
        <div class="col-sm-10" >
            <form action="{{route('viewjob')}}" method="post">
            <h2>Job No - {{$jobid}} </h2>
                <input type="hidden" name="jobid" value="{{$jobid}}">
            <div class="row">

                <div class="col-sm-12" >
                    <div class="dashcont" >
                        <div class="dashhead">


                            <div class="col-sm-12" ><h4 >Job Details</h4></div>
                        </div>
                        <hr>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Job Type </th>
                                <th>Invoice No</th>
                                <th>Device serial  no</th>
                                <th>device</th>
                                <th>Condition</th>
                                <th>Problem</th>
                                <th>Price</th>

                            </tr>
                            <tr>
                                <th>Total time</th>
                                <th>Order Date</th>
                                <th>Delivety Date</th>
                                <th>Status</th>
                                <th>User</th>
                                <th>Telephone No</th>
                            </tr>
                            </thead>
                            <tbody>


                                @foreach($qarrayj as $Custom)
                                    <tr  >

                                        <td>{{$Custom->jobtype}}</td>
                                        <td>{{$Custom->invoiceno}}</td>



                                        <td>{{$Custom->Serialno}}</td>
                                        <td>{{$Custom->device}}</td>
                                        <td>{{$Custom->Condition}}</td>
                                        <td>{{$Custom->Problem}}</td>
                                        <td>{{$Custom->price}}</td>


                                    </tr>
                                    <tr>
                                        <td>{{$Custom->totaltime}}</td>
                                        <td>{{$Custom->orderdate}}</td>
                                        <td>{{$Custom->deleverdate}}</td>
                                        <td>{{$Custom->status}}</td>
                                        <td>{{$Custom->user}}</td>
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



            <div class="col-sm-12" >
                <div class="dashcont" >
                    <div class="dashhead">


                        <div class="col-sm-12" ><h4 >Job Questioneier</h4></div>
                    </div>
                    <hr>

                    <table class="table table-hover">

                        <tbody>
                        <thead>
                            <tr>
                                <th> Name   </th>
                                <th> Default Operation Time   </th>


                                <th> Default Involve Time   </th>
                                <th> Price   </th>
                                <th> Status   </th>
                                <th> Action   </th>

                            </tr>
                        </thead>

                        @foreach($qarrayt as $Custom)
                            <tr  >

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

                <div class="col-sm-6" >
                    <div class="row" >

                        <div class="col-sm-12" >
                            <div class="dashcont" >
                                <div class="dashhead">


                                    <div class="col-sm-12" ><h4 >Job Questioneier</h4></div>
                                </div>
                                <hr>

                                <table class="table table-hover">

                                    <tbody>


                                    @foreach($qarrayq as $Custom)
                                        <tr  >

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


                <div class="col-sm-6" >
                    <div class="row" >

                        <div class="col-sm-12" >
                            <div class="dashcont" >
                                <div class="dashhead">


                                    <div class="col-sm-12" ><h4 >Job Questioneier</h4></div>
                                </div>
                                <hr>

                                <table class="table table-hover">

                                    <tbody>


                                    @foreach($qarraya as $Custom)
                                        <tr  >

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
        <div class="col-sm-1" ></div>
    </div>
</div>

@endsection

