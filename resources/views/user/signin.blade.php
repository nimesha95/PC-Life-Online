@extends('layouts.master')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Sign In</h1>
        @if(count($errors)>0)   <!-- to show error alerts -->
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
            @endif
            <form action="{{ route('user.signin') }}" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <button type="submit" name="signin" id="signin" class="btn btn-primary signin">Sign In</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top: 10px"><a href="{{route('user.signup')}}">New User?
                SignUp Here</a></div>
    </div>
@endsection
