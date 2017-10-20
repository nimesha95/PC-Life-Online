@extends('layouts.master_fluid')

@section('header')
    @include('partials.header')
@endsection

@section('content')
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
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <h1>Body Contents</h1>
                </div>
            </div>

            <div class="row" style="margin-top: 20px">
                <a href="{{route('user.orders')}}">Order History</a>
            </div>

            <div class="row" style="margin-top: 20px">
                @if(isset($orders))
                    @foreach($orders as $order)
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <ul class="list-group">
                                    @foreach($order->order_obj as $row)
                                        <li class="list-group-item">
                                            {{$row->name}} || {{$row->qty}} || {{$row->price}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="panel-footer">
                                <strong>Total Price: {{$order->total}}</strong>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="row">
                <a href="#" data-toggle="modal" data-target="#UpdateInfo">Update Information</a></li>
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
                                       name="mobile">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <h3>Address</h3>
                            </div>
                        </div>
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
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

@endsection
