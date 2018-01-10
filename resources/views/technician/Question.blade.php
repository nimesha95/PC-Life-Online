@extends('layouts.master_fluid')
@section('title')
    PC-Life Online | Technician
@endsection

@section('header')
    @include('partials.tech_header')

@endsection
@section('content')
    @include('partials.techmodel.model')
    <div class="container">

        <div class="col-sm-12">
            <form action="{{route('addReview')}}" method="post">

                <input type="hidden" name="type" value="{{$Type}}">
                <input type="hidden" name="device" value=" {{$device}}">
                <input type="hidden" name="jobid" value=" {{$Jobid}}">
                {{ csrf_field() }}
                <div class="row">


                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <div style="background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9); box-shadow: 0px 0px 2px #000; width: auto; padding: 10px">
                                    <h4 style="color: White;display: inline-block"> New Job {{$device}} <br>
                                        <hr>
                                        Job ID {{$Jobid}}
                                    </h4>
                                    <hr>
                                    <div style="color: white ;padding: 10px;"><b>Enter Device Information</b></div>
                                    <div style="height:auto;   width:auto;
    padding: 10px;
    background-color: rgba(255,255,255,0.5) ;">
                                        <b>Enter Device Questionnaire</b>
                                    </div>
                                    <div style=" color: white ;padding: 10px; "><b>Enter Other Device Recieved</b></div>

                                    <div style="color: white ;padding: 10px;">
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
                            <div class="col-md-9">
                                <div class="modal-footer">
                                    <button type="submit" class="subbuttonred" data-toggle="modal">Confirm</button>

                                </div>

                                <table border="0" class="table table-hover">
                                    <thead>
                                    <th>#</th>
                                    <th>Question</th>
                                    <th>Availability</th>


                                    </thead>
                                    @foreach($qarray as $Custom)
                                        @php ($i = 1)



                                            @if (($Custom->D1)!== '')
                                                <tr>
                                                    <td><label for="comment">{{$i}}</label></td>
                                                    <td><label for="comment" value="{{$Custom->D1}}">{{$Custom->D1}}
                                                    </td>
                                                    <input type="hidden" name="D1" value="{{$Custom->D1}}">
                                                    <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="D1c"
                                                                          Value="Yes"></label>
                                                        </div>


                                                    </td>

                                                </tr>
                                                @php ($i = $i+1)
                                                    @else
                                                        <input type="hidden" name="D1" value="NA">
                                                    @endif
                                                    @if (($Custom->D2)!== '')
                                                        <tr>
                                                            <td><label for="comment">{{$i}}</label></td>
                                                            <td><label for="comment"
                                                                       value="{{$Custom->D2}}">{{$Custom->D2}}</td>
                                                            <input type="hidden" name="D2" value="{{$Custom->D3}}">
                                                            <td>
                                                                <div class="checkbox">
                                                                    <label><input type="checkbox" value="Yes"
                                                                                  name="D2c"></label>
                                                                </div>

                                                            </td>

                                                        </tr>
                                                        @php ($i = $i+1)
                                                            @else
                                                                <input type="hidden" name="D2" value="NA">
                                                            @endif

                                                            @if (($Custom->D3)!== '')
                                                                <tr>
                                                                    <td><label for="comment">{{$i}}</label></td>
                                                                    <td><label for="comment">{{$Custom->D3}}</td>
                                                                    <input type="hidden" name="D3"
                                                                           value="{{$Custom->D3}}">
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <label><input type="checkbox" value="Yes"
                                                                                          name="D3c"></label>
                                                                        </div>

                                                                    </td>

                                                                </tr>
                                                                @php ($i = $i+1)
                                                                    @else
                                                                        <input type="hidden" name="D4" value="NA">
                                                                    @endif
                                                                    @if (($Custom->D4)!== '')
                                                                        <tr>
                                                                            <td><label for="comment">{{$i}}</label></td>
                                                                            <td><label for="comment">{{$Custom->D4}}
                                                                            </td>
                                                                            <input type="hidden" name="D4"
                                                                                   value="{{$Custom->D4}}">
                                                                            <td>
                                                                                <div class="checkbox">
                                                                                    <label><input type="checkbox"
                                                                                                  value="Yes"
                                                                                                  name="D4c"></label>
                                                                                </div>

                                                                            </td>

                                                                        </tr>
                                                                        @php ($i = $i+1)
                                                                            @else
                                                                                <input type="hidden" name="D5"
                                                                                       value="NA">
                                                                            @endif
                                                                            @if (($Custom->D5)!== '')
                                                                                <tr>
                                                                                    <td>
                                                                                        <label for="comment">{{$i}}</label>
                                                                                    </td>
                                                                                    <td>
                                                                                        <label for="comment">{{$Custom->D5}}
                                                                                    </td>
                                                                                    <input type="hidden" name="D5"
                                                                                           value="{{$Custom->D5}}">
                                                                                    <td>
                                                                                        <div class="checkbox">
                                                                                            <label><input
                                                                                                        type="checkbox"
                                                                                                        value="Yes"
                                                                                                        name="D5c"></label>
                                                                                        </div>

                                                                                    </td>

                                                                                </tr>
                                                                                @php ($i = $i+1)
                                                                                    @else
                                                                                        <input type="hidden" name="D5"
                                                                                               value="NA">
                                                                                    @endif
                                                                                    @if (($Custom->D6)!== '')
                                                                                        <tr>
                                                                                            <td>
                                                                                                <label for="comment">{{$i}}</label>
                                                                                            </td>
                                                                                            <td>
                                                                                                <label for="comment">{{$Custom->D6}}
                                                                                            </td>
                                                                                            <input type="hidden"
                                                                                                   name="D6"
                                                                                                   value="{{$Custom->D6}}">
                                                                                            <td>
                                                                                                <div class="checkbox">
                                                                                                    <label><input
                                                                                                                type="checkbox"
                                                                                                                value="Yes"
                                                                                                                name="D6c"></label>
                                                                                                </div>

                                                                                            </td>

                                                                                        </tr>
                                                                                        @php ($i = $i+1)
                                                                                            @else
                                                                                                <input type="hidden"
                                                                                                       name="D6"
                                                                                                       value="NA">
                                                                                            @endif
                                                                                            @if (($Custom->D7)!== '')
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <label for="comment">{{$i}}</label>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <label for="comment">{{$Custom->D7}}
                                                                                                    </td>
                                                                                                    <input type="hidden"
                                                                                                           name="D7"
                                                                                                           value="{{$Custom->D7}}">
                                                                                                    <td>
                                                                                                        <div class="checkbox">
                                                                                                            <label><input
                                                                                                                        type="checkbox"
                                                                                                                        value="Yes"
                                                                                                                        name="D7c"></label>
                                                                                                        </div>

                                                                                                    </td>

                                                                                                </tr>
                                                                                                @php ($i = $i+1)
                                                                                                    @else
                                                                                                        <input type="hidden"
                                                                                                               name="D7"
                                                                                                               value="NA">
                                                                                                    @endif
                                                                                                    @if (($Custom->D8)!== '')
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <label for="comment">{{$i}}</label>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <label for="comment">{{$Custom->D8}}
                                                                                                            </td>
                                                                                                            <input type="hidden"
                                                                                                                   name="D8"
                                                                                                                   value="{{$Custom->D8}}">
                                                                                                            <td>
                                                                                                                <div class="checkbox">
                                                                                                                    <label><input
                                                                                                                                type="checkbox"
                                                                                                                                value="Yes"
                                                                                                                                name="D8c"></label>
                                                                                                                </div>

                                                                                                            </td>

                                                                                                        </tr>
                                                                                                        @php ($i = $i+1)
                                                                                                            @else
                                                                                                                <input type="hidden"
                                                                                                                       name="D8"
                                                                                                                       value="NA">
                                                                                                            @endif
                                                                                                            @endforeach
                                </table>
                            </div>


            </form>
        </div>


    </div>


    </div>





@endsection


