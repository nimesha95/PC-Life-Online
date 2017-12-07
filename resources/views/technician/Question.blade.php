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
       <h3>{{$Invoice}} - {{$device}} - Device Question</h3>
       <div class="col-sm-12">
        <form action="{{route('addReview')}}" method="post">
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" data-toggle="modal" >Confirm</button>

            </div>
            <input type="hidden" name="type" value="{{$Type}}"  >
            <input type="hidden" name="device" value=" {{$device}}"  >
            <input type="hidden" name="invoice" value=" {{$Invoice}}"  >
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-9">


                    <table border="0" class="table table-hover">
                        <thead>
                        <th>#</th>
                        <th>Device</th>
                        <th>Availability</th>
                        <th>Remark</th>


                        </thead>
                        @foreach($qarray as $Custom)
                            @php ($i = 1)



                            @if (($Custom->D1)!== '')
                                <tr>
                                <td> <label for="comment">{{$i}}</label></td>
                                <td><label for="comment"  value="{{$Custom->D1}}">{{$Custom->D1}}</td>
                                <input type="hidden" name="D1" value="{{$Custom->D1}}"  >
                                <td>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="D1c" Value="Yes"></label>
                                    </div>


                                </td>

                                </tr>
                                @php ($i = $i+1)
                            @else
                                <input type="hidden" name="D1" value="NA"  >
                            @endif
                            @if (($Custom->D2)!== '')
                                <tr>
                                    <td> <label for="comment">{{$i}}</label></td>
                                    <td><label for="comment"  value="{{$Custom->D2}}">{{$Custom->D2}}</td>
                                    <input type="hidden" name="D2" value="{{$Custom->D3}}"  >
                                    <td>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="Yes" name="D2c"></label>
                                        </div>

                                    </td>

                                </tr>
                                @php ($i = $i+1)
                            @else
                                <input type="hidden" name="D2" value="NA"  >
                            @endif

                            @if (($Custom->D3)!== '')
                                <tr>
                                    <td> <label for="comment">{{$i}}</label></td>
                                    <td><label for="comment"  >{{$Custom->D3}}</td>
                                    <input type="hidden" name="D3" value="{{$Custom->D3}}"  >
                                    <td>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="Yes" name="D3c"></label>
                                        </div>

                                    </td>

                                </tr>
                                @php ($i = $i+1)
                            @else
                                <input type="hidden" name="D4" value="NA"  >
                            @endif
                            @if (($Custom->D4)!== '')
                                <tr>
                                    <td> <label for="comment">{{$i}}</label></td>
                                    <td><label for="comment"  >{{$Custom->D4}}</td>
                                    <input type="hidden" name="D4" value="{{$Custom->D4}}"  >
                                    <td>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="Yes" name="D4c"></label>
                                        </div>

                                    </td>

                                </tr>
                                @php ($i = $i+1)
                            @else
                                <input type="hidden" name="D5" value="NA"  >
                            @endif
                            @if (($Custom->D5)!== '')
                                <tr>
                                    <td> <label for="comment">{{$i}}</label></td>
                                    <td><label for="comment"  >{{$Custom->D5}}</td>
                                    <input type="hidden" name="D5" value="{{$Custom->D5}}"  >
                                    <td>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="Yes" name="D5c"></label>
                                        </div>

                                    </td>

                                </tr>
                                @php ($i = $i+1)
                            @else
                                <input type="hidden" name="D5" value="NA"  >
                            @endif
                            @if (($Custom->D6)!== '')
                                <tr>
                                    <td> <label for="comment">{{$i}}</label></td>
                                    <td><label for="comment"  >{{$Custom->D6}}</td>
                                    <input type="hidden" name="D6" value="{{$Custom->D6}}"  >
                                    <td>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="Yes" name="D6c"></label>
                                        </div>

                                    </td>

                                </tr>
                                @php ($i = $i+1)
                            @else
                                <input type="hidden" name="D6" value="NA"  >
                            @endif
                            @if (($Custom->D7)!== '')
                                <tr>
                                    <td> <label for="comment">{{$i}}</label></td>
                                    <td><label for="comment"  >{{$Custom->D7}}</td>
                                    <input type="hidden" name="D7" value="{{$Custom->D7}}"  >
                                    <td>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="Yes" name="D7c"></label>
                                        </div>

                                    </td>

                                </tr>
                                @php ($i = $i+1)
                            @else
                                <input type="hidden" name="D7" value="NA"  >
                            @endif
                            @if (($Custom->D8)!== '')
                                <tr>
                                    <td> <label for="comment">{{$i}}</label></td>
                                    <td><label for="comment"  >{{$Custom->D8}}</td>
                                    <input type="hidden" name="D8" value="{{$Custom->D8}}"  >
                                    <td>
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="Yes" name="D8c"></label>
                                        </div>

                                    </td>

                                </tr>
                                @php ($i = $i+1)
                            @else
                                <input type="hidden" name="D8" value="NA"  >
                            @endif
                        @endforeach
                    </table>


        </form>
       </div>


   </div>





@endsection


