@extends('layouts.master_fluid')

@section('title')
    Administrator
@endsection


@section('header')
    @include('partials.admin_header')
@endsection

@section('content')
    <div class="row" >
        @include('partials.admin_sidebar')
        <div >
        <div class="col-md-9" style="box-shadow: 0px 0px 10px rgba(0,0,0,0.5);background-color: white; border-radius: 5px">

            @if(sizeof($userQry)>0)

                <h3>User Login History</h3>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created At</th>
                        <th>Last Login</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($userQry as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->role_name}}</td>
                            <td>{{$row->created_at}}</td>
                            <td>{{$row->last_login}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                No stuff
            @endif
        </div>
        </div>
    </div>
@endsection()