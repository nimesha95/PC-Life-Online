@extends('layouts.master_fluid')

@section('title')
    Testing
@endsection

@section('header')
    @include('partials.header')

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
    <script src={{URL::to('js/locationpicker.js')}}></script>
@endsection

@section('content')
    <div id="somecomponent" style="width: 500px; height: 400px;"></div>

    <script>
        $('#somecomponent').locationpicker();
    </script>
@endsection
