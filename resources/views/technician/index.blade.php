@extends('layouts.master_fluid')
@section('title')
    PC-Life Online | Technician
@endsection

@section('header')
    @include('partials.tech_header')

@endsection
@section('content')

    {{ $items}}
<form action="{{route('technician.index')}}" method="POST">
    <input type="text" name="D1" placeholder="username"><br><br>
    <input type="text" name="D3" placeholder="email"><br><br>
    <input type="text"  name="D2" placeholder="password"><br><br>
    <input type="submit" value="REGISTER NOW!">
    {{ csrf_field() }}
</form>

@endsection

