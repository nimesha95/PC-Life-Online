@extends('layouts.master_fluid')


@section('title')
    Techician | To Do
@endsection


@section('header')
    @include('partials.Tech_header')
@endsection


@section('content')
    <h1>TO Do List </h1>
    <div class="container">
        <h2>Horizonadssddfs static control</h2>
        <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <p class="form-control-static">someone@example.com</p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>

@endsection