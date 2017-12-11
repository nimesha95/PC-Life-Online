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

        <div class="col-sm-12" >
            <div class="col-sm-3" >
                <form action="{{route('ConfirmJob')}}" method="post">
                <div style="background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9); box-shadow: 0px 0px 2px #000; width: auto; padding: 10px" >


                    <div style="color: white ;padding: 10px;"> <b>Enter Device Information</b></div>
                    <div style="color: white ;padding: 10px;">
                        <b>Enter Device Questioneier</b>
                    </div>
                    <div style="color: white ;padding: 10px;">
                        <b>Enter Other Device Recieved</b>
                    </div>
                    <div style="color: white ;padding: 10px;">
                        <b>Add New Tasks</b>
                    </div>
                    <div style="height:auto;
    width:auto;
    padding: 10px;
    background-color: rgba(255,255,255,0.5) ;">
                        <b>Get Customer Information</b>
                    </div>
                    <div style="color: white ;padding: 10px;">
                        <b>Job Confirm</b>
                    </div>
                </div>
            </div>

            <div class="col-sm-9" >



                <div class="col-sm-12">



                    <div class="modal-footer">
                        <button type="Submit" class="subbuttonred"  >Confirm Job</button>

                    </div>
                    {{ csrf_field() }}
                    <table border="0" class="table table-hover">

                        <tr>

                            <td> <label for="comment">Customer Name</label></td>
                            <td>
                                <input type="text" class="form-control"  Name="name" value=""></td>
                            <td></td>
                        </tr>
                        <tr>

                            <td> <label for="comment">Contact</label></td>
                            <td>
                                <input type="textarea" class="form-control"  Name="contact" value=""></td>
                            <td></td>
                        </tr>



                        <input type="hidden" name="jobid" value=" {{$jobid}}"  >
                    </table>
            </form>
            </div>

    </div>

    </div>
</div>

@endsection

