@extends('layouts.master')

@section('title')
    Some header passed from the parameters
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('content')
    @include('partials/'.$sidebar)

    <div class="col-md-9">
        @if(sizeof($items)>0)
            @foreach(array_chunk($items,3) as $itemschunk)
                <div class="row">
                    @foreach($itemschunk as $item)
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="{{route('product.show' , ['id'=> $item->proid])}}">
                                    <img src="{{$item->image}}">
                                </a>
                                <div class="caption">
                                    <a href="{{route('product.show' , ['id'=> $item->proid])}}">
                                        <h3>{{$item->name}}</h3>
                                    </a>
                                    <p>{{$item->description}}</p>
                                    <div class="clearfix">
                                        <div class="pull-left price">
                                            <h4>{{$item->price}} LKR</h4>
                                        </div>
                                        <a href="{{route('product.addToCart' , ['id'=> $item->proid])}}"
                                           class="btn btn-success pull-right" role="button"> Add to Cart </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        @else
            <div class="row">
                <h4>Sorry! No items found</h4>
            </div>
        @endif
    </div>
    </div>

@endsection
