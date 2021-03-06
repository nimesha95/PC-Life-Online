@extends('layouts.master')

@section('header')
    @include('partials.header')
@endsection

@section('scripts1')
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
@endsection

@section('content')

    <div class="row">

        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="container"
                     style="background-color:white;  box-shadow: 0px 0px 3px rgba(0,0,0,0.3); min-width: 400px; max-width: 800px;   margin: 10px; padding: 30px; border-radius: 5px">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <h2>Sign Up</h2>
                        @if(count($errors)>0)   <!-- to show error alerts -->
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p>{{$error}}</p>
                                @endforeach
                            </div>
                        @endif
                        <!--
            <form action="{{ route('user.signup') }}" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
                {{ csrf_field() }}
                                </form>
                                -->
                        </div>
                    </div>
                    <form data-toggle="validator" role="form" action="{{ route('user.signup') }}" method="post">
                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="control-label">Phone</label>
                            <input type="tel" pattern="^\d{10}$" maxlength="10" id="phone" name="phone"
                                   class="form-control"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="control-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                   data-error="Email address is invalid" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <div class="form-inline row">
                                <div class="form-group col-sm-6">
                                    <label for="inputPassword" class="control-label">Password</label>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="inputPassword" class="control-label"> Confirm Password</label>
                                </div>
                            </div>


                            <div class="form-inline row">
                                <div class="form-group col-sm-6">
                                    <input type="password" data-minlength="4" class="form-control" id="password"
                                           name="password"
                                           placeholder="password" required>
                                    <div class="help-block">Minimum of 4 characters</div>
                                </div>
                                <div class="form-group col-sm-6">

                                    <input type="password" class="form-control" id="passwordConfirm"
                                           name="passwordConfirm"
                                           data-match="#password"
                                           data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div style="margin-bottom: 3px">
                                <button class="btn btn-lg btn-primary btn-block" name="signup" type="submit">Submit
                                </button>
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection
