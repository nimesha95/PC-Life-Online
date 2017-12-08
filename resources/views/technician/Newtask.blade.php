@extends('layouts.master_fluid')
@section('title')
    PC-Life Online | Technician
@endsection

@section('header')
    @include('partials.tech_header')

@endsection
@section('content')
<div class="container">
    <form action="{{route('NewjobStore')}}" method="post">
    <h3 style="display: inline-block">New Job -  {{$Device}} Job ID #</h3> <h3 style="color: red;display: inline-block">
            @foreach($qarray as $Custom)
            @if(($Device)=== 'Desktop')
                @php($i="DR000".(($Custom->id)+1))
                    <input type="hidden" name="Jobid" value="{{$i}}"  >
                    <input type="hidden" name="device" value="{{$Device}}"  >
                    {{$i}}
            @endif
                @if(($Device)=== 'Laptop')
                    @php($i="LR000".(($Custom->id)+1))
                    <input type="hidden" name="Jobid" value="{{$i}}"  >
                    <input type="hidden" name="device" value="{{$Device}}"  >
                    {{$i}}
                @endif
                @if(($Device)=== 'Tablet')
                    @php($i="TR000".(($Custom->id)+1))
                    <input type="hidden" name="Jobid" value="{{$i}}"  >
                    <input type="hidden" name="device" value="{{$Device}}"  >
                    {{$i}}
                @endif
                @if(($Device)=== 'Other')
                    @php($i="OR000".(($Custom->id)+1))
                    <input type="hidden" name="Jobid" value="{{$i}}"  >
                    <input type="hidden" name="device" value="{{$Device}}"  >
                    {{$i}}
                @endif
            @endforeach </h3>
        <div class="col-sm-12">



            <div class="modal-footer">
                <button type="Submit" class="subbuttonred"  >Start Job</button>
                <button type="button" class="subbutton" data-toggle="modal" data-target="#searchexistinguser"  >Cancel Job</button>
            </div>
            {{ csrf_field() }}
            <table border="0" class="table table-hover">

                <tr>

                    <td> <label for="comment">Serial No</label></td>
                    <td>
                        <input type="text" class="form-control"  Name="Serial" value=""></td>

                    <td></td></td>


                </tr>
                <tr>

                    <td> <label for="comment">Condition</label></td>
                    <td>
                         <input type="text" class="form-control"  Name="conditiom" value=""></td>
                    <td></td>
                </tr>
                <tr>

                    <td> <label for="comment">Problem</label></td>
                    <td>
                        <input type="textarea" class="form-control"  Name="Problem" value=""></td>
                    <td></td>
                </tr>

            </table>
        </form>
    </div>
</div>

@endsection

