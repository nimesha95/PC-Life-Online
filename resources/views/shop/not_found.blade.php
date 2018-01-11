@extends('layouts.master')

@section('title')
    Pay With Paypal
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class="container">
        <div class="row" style="box-shadow: 0px 0px 10px rgba(0,0,0,0.5);background-color: white">
            <h2>The item You're looking for does not exist</h2>
        </div>
    </div>
    @include('partials.footer')
@endsection