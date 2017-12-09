@extends('layouts.master_fluid')
@section('title')
    PC-Life Online | Technician
@endsection

@section('header')
    @include('partials.tech_header')

@endsection
@section('content')
<div class="container">
    <div class="container-fluid">
        <<div class="container">
            <h3>{{$jobid}} - {{$device}} - Device {{$type}}</h3>
            <div class="col-sm-12">
                <form action="{{route('addReview')}}" method="post">

                    <input type="hidden" name="type" value="{{$type}}"  >
                    <input type="hidden" name="device" value=" {{$device}}"  >
                    <input type="hidden" name="jobid" value=" {{$jobid}}"  >

            <div class="col-sm-3" style="background-color:lavender;"><h4>Tasks List</h4>



                @foreach($qarray as $Custom)
                    <form action="{{route('Addjobtask')}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="type" value="{{$type}}"  >
                        <input type="hidden" name="device" value=" {{$device}}"  >
                        <input type="hidden" name="jobid" value=" {{$jobid}}"  >
                                <input type="hidden" name="taskid" value=" {{$Custom->id}}"  >
                        <button type="submit" class="btn btn-default" >{{$Custom->Name}}</button>
                    </form>

                @endforeach





            </div>
                    <div class="col-sm-9" style="background-color:lavenderblush;"><h4>Tasks For Job</h4>


                        <div class="modal-footer">
                            @foreach($qarray1 as $Custom2)
                                <form action="{{route('Addjobtask')}}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="type" value="{{$type}}"  >
                                    <input type="hidden" name="device" value=" {{$device}}"  >
                                    <input type="hidden" name="jobid" value=" {{$jobid}}"  >
                                    <input type="hidden" name="taskid" value=" {{$Custom2->id}}"  >
                                    <button type="submit" class="btn btn-default" >{{$Custom2->Name}}</button>
                                </form>

                            @endforeach



                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</div>

@endsection

