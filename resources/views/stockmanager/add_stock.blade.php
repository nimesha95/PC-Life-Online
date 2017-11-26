@extends('layouts.master_fluid')

@section('title')
    Update Stock
@endsection

@section('header')
    @include('partials.stock_header')
@endsection

@section('content')
    <h4>You are adding {{$brand}} >> {{$product}}</h4>


@endsection
