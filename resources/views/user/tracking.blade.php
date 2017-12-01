@extends('layouts.master_fluid')

@section('header')
    @include('partials.header')
@endsection

@section('content')

    <div id="map" style="height: 400px; width: 100%;"></div>

@endsection

@section('scripts')
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtKgASFbXNafDy42XFoFzoN77Qnr-8HmE&callback=initMap">
    </script>
    <script src="https://www.gstatic.com/firebasejs/4.6.1/firebase.js"></script>
    <script src="{{URL::to('js/tracking.js')}}"></script>
@endsection
