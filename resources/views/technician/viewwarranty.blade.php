@extends('layouts.master_fluid')
@section('title')
    PC-Life Online | Technician
@endsection

@section('header')
    @include('partials.tech_header')

@endsection
@section('content')
    <div class="container">
        <h3>View Warranty Deatils - </h3>
        <div class="col-sm-12">
            <?php
            $count = 0
            ?>
            @foreach($cart as $item)
                <p>{{$item->id}}</p>
                <p>{{$item->qty}}</p>
                <p>{{$item->name}}</p>
                <p>{{$item->price}}</p>
                <input type="text" value="{{$warrenty[$count]}}">
                <?php
                $count = $count + 1;
                ?>
            @endforeach
        </div>
    </div>

@endsection

