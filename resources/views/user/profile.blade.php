@extends('layouts.master_fluid')

@section('title')
    User Profile
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('css/spinner.css') }}"/>
@endsection

@section('header')
    @include('partials.header')
    <script src="http://api.mygeoposition.com/api/geopicker/api.js"
            type="text/javascript"></script>    <!-- location picker -->
@endsection

@section('content')
    <!--
    <div class="loading">Loading&#8230;</div>
    -->
    <div class="row">
        @include('partials.user_prof_sidebar')
        <div class="col-md-9">
            <div class="row">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>
            <div class="row" style="margin-top: 20px">

            </div>

            <div class="row" style="margin-top: 20px">
                @if(isset($orders))
                    <div class="row">
                        <div class="col-md-offset-4">
                            <h4>Your Previous Orders</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 col-md-offset-2">
                            @foreach($orders as $order)
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <ul class="list-group">
                                            @foreach($order->order_obj as $row)
                                                <li class="list-group-item">
                                                    {{$row->name}} <span class="badge">{{$row->qty}}</span> <span
                                                            class="label label-success">{{$row->price}} LKR</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="panel-footer">
                                        <strong>Total Price: {{$order->total}}</strong>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
            @endif
            <!--
                @if(isset($orders))
                <div class="row">
                    <div class="col-md-offset-4">
                        <h4>Your Previous Orders</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-md-offset-2">
@foreach($orders as $order)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <ul class="list-group">
@foreach($order->order_obj as $row)
                        <li class="list-group-item">
{{$row->name}} <span class="badge">{{$row->qty}}</span> <span
                                                            class="label label-success">{{$row->price}} LKR</span>
                                                </li>
                                            @endforeach
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <strong>Total Price: {{$order->total}}</strong>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                    -->
            </div>

        </div>
    </div>

    <!-- User info Modal -->
    <div class="modal fade" id="UpdateInfo" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update User Profile</h4>
                </div>
            @if(count($errors)>0)   <!-- to show error alerts -->
                <script>
                    $(document).ready(function () {
                        $('#AddUserModal').modal({show: true});
                    })
                </script>
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
                @endif
                <div class="modal-body">
                    <form class="form-horizontal" method="post" action="{{route('user.editinfo')}}">

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Mobile:</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" minlength="10" maxlength="10" id="mobile"
                                       placeholder="Enter Mobile No"
                                       name="mobile" required>
                            </div>
                        </div>

                        <input type="text" name="geoposition1a" id="geoposition1a" size="10" hidden>
                        <input type="text" name="geoposition1b" id="geoposition1b" size="10" hidden>
                        <input type="text" name="geoposition1c" id="geoposition1c" size="10" hidden>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="addrLine1">Address:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="geoposition1d" id="geoposition1d"
                                       size="70" readonly>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-9 col-sm-2">
                                <button type="button" class="btn btn-warning" onclick="lookupGeoData();">Select Address
                                </button>
                            </div>
                        </div>

                        <!--
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="addrLine1">Line 1:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="addrLine1"
                                                               placeholder="Enter Address Line 1"
                                                               name="addrLine1" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="addrLine2">Line 2:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="addrLine2"
                                                               placeholder="Enter Address Line 2"
                                                               name="addrLine2" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="addrCity">City:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="addrCity" placeholder="Enter City"
                                                               name="addrCity" required>
                                                    </div>
                                                </div>
                                                -->

                        <script type="text/javascript">
                            function lookupGeoData() {
                                myGeoPositionGeoPicker({
                                    startAddress: 'White House, Washington',
                                    returnFieldMap: {
                                        'geoposition1a': '<LAT>',
                                        'geoposition1b': '<LNG>',
                                        'geoposition1c': '<CITY>', /* ...or <COUNTRY>, <STATE>, <DISTRICT>,
                                                                           <CITY>, <SUBURB>, <ZIP>, <STREET>, <STREETNUMBER> */
                                        'geoposition1d': '<ADDRESS>'
                                    }
                                });
                            }
                        </script>

                    {{ csrf_field() }}

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save and Close</button>
                    </form>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    @include('partials.footer')
@endsection
@section('scripts')
    <script src="{{URL::to('js/test.js')}}"></script>
@endsection