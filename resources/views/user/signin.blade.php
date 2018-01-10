@extends('layouts.master')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class="container"
         style="background-color: white; box-shadow: 0px 0px 3px rgba(0,0,0,0.3); width: 400px; position: relative; top: 100px; padding: 30px; border-radius: 5px">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">

                <h2>Sign In</h2>


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
                        <input type="text" id="email" name="email" class="form-control" placeholder=" E-mail Address">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control"
                               placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Remember Me</label>
                    </div>
                    <div style="margin-bottom: 3px">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                    </div>

                    <a href="{{route('user.signup')}}">
                        <button class="btn btn-lg btn-primary btn-block" type="button">Signup</button>
                    </a>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>

    </div>
@endsection
