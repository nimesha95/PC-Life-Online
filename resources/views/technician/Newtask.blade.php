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


                    <div class="col-sm-3" >
                        <div style="background: #3498db;height: ;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9); box-shadow: 0px 0px 2px #000; width: auto; padding: 10px" >
                            <h4 style="color: White;display: inline-block"> New Job   {{$device}} <br><hr>Job ID {{$jobid}}
                            </h4>
                            <hr>
                            <div style="color: white ;padding: 10px;"> <b>Enter Device Information</b></div>
                            <div style="color: white ;padding: 10px;">
                                <b>Enter Device Questioneier</b>
                            </div>
                            <div style="color: white ;padding: 10px; "> <b>Enter Other Device Recieved</b></div>

                            <div style="height:auto; width:auto;
    padding: 10px; background-color: rgba(255,255,255,0.5);">
                                <b>Add New Tasks</b>
                            </div>
                            <div style="color: white ;padding: 10px;">
                                <b>Get Customer Information</b>
                            </div>
                            <div style="color: white ;padding: 10px;">
                                <b>Job Confirm</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 dashcont" style="min-height: 500px; min-width: 200px"><h4>Tasks List</h4><hr>



                        @foreach($qarray as $Custom)
                            <form action="{{route('Addjobtask')}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="type" value="{{$type}}"  >
                                <input type="hidden" name="device" value=" {{$device}}"  >
                                <input type="hidden" name="jobid" value=" {{$jobid}}"  >
                                <input type="hidden" name="taskid" value=" {{$Custom->id}}"  >
                                <button type="submit" class="subbuttonred1" >{{$Custom->Name}}</button>
                            </form>

                        @endforeach





                    </div>
                    <div class="col-sm-4 dashcont" style="min-height: 500px; min-width: 450px; margin-left: 10px"><h4>Tasks For Job</h4>
                        <hr>
                        <table border="0" class="table table-hover">
                            <thead>
                            <th>Task</th>
                            <th>DOPT</th>
                            <th>DINT</th>
                            <th>Price</th>
                            <th>Action</th>


                            </thead>
                            <tbody>

                            @foreach($qarray1 as $Custom2)
                                <form action="{{route('deletetask')}}" method="post">
                                    {{ csrf_field() }}
                                    <tr>
                                        <td>{{$Custom2->Name}}</td>
                                        <td>{{$Custom2->DOPT}}</td>
                                        <td>{{$Custom2->DINT}}</td>
                                        <td>{{$Custom2->price}}</td>
                                    <input type="hidden" name="type" value="{{$type}}"  >
                                    <input type="hidden" name="device" value=" {{$device}}"  >
                                    <input type="hidden" name="jobid" value=" {{$jobid}}"  >
                                    <input type="hidden" name="taskid" value=" {{$Custom2->id}}"  >
                                    <td><button type="submit" class="btn btn-default" >Delete</button></td>
                                    </tr>
                                </form>

                            @endforeach
                            </tbody>

                        </table>








                    </div>
              <form action="{{route('Confirmtask')}}" method="post">

                  <input type="hidden" name="type" value="{{$type}}"  >
                  <input type="hidden" name="device" value=" {{$device}}"  >
                  <input type="hidden" name="jobid" value=" {{$jobid}}"  >
                    <div class="col-sm-2" >
                        <div style="background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9); box-shadow: 0px 0px 2px #000; width: auto; padding: 10px" >
                            <div style="height:auto;
    width:auto;
    padding: 10px;
    background-color: rgba(255,255,255,0.5) ;">
                                @php($cost=0)
                                @php($DTOP=0)
                                @php($DINT=0)
                                @foreach($qarray1 as $Custom2)
                                    @php($cost=$cost+($Custom2->price))
                                    @php($DTOP=$DTOP+($Custom2->DOPT))
                                    @php($DINT=$DINT+($Custom2->DINT))
                                @endforeach

                                <h4 > Job Overview
                                </h4></div>

                            <hr>

                            <div style="height:auto;
    width:auto;
    padding: 10px;
    background-color: rgba(255,255,255,0.5) ;"> <b>Total Opereational Time - <br>{{$DTOP}} Min</b></div> <hr>
                            <div style="height:auto;
    width:auto;
    padding: 10px;
    background-color: rgba(255,255,255,0.5) ;"> <b>Total Involvement Time - <br>{{$DINT}} Min</b></div> <hr>
                            <div style="height:auto;
    width:auto;
    padding: 10px;
    background-color: rgba(255,255,255,0.5) ;"> <b>Total Cost - <br>Rs.{{$cost}}</b></div> <hr>
                            {{ csrf_field() }}
                            <input type="hidden" name="DTOP" value="{{$DTOP}}"  >
                            <input type="hidden" name="DINT" value=" {{$DINT}}"  >
                            <input type="hidden" name="cost" value=" {{$cost}}"  >

                            <div class="">
                                <button type="Submit" class="subbuttonred"  >Confirm</button>

                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</div>

@endsection

