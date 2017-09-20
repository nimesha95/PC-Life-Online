@extends('layouts.master')

@section('title')
    Some header passed from the parameters
@endsection

@section('content')
    @include('partials/desktop_sbar')

    <div class="col-md-9">
        @foreach(array_chunk($items,3) as $itemschunk)
            <div class="row">
                @foreach($itemschunk as $item)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{$item->image}}">
                            <div class="caption">
                                <h3>{{$item->name}}</h3>
                                <p>{{$item->description}}</p>
                                <div class="clearfix">
                                    <div class="pull-left price">
                                        <h4>{{$item->price}} LKR</h4>
                                    </div>
                                    <a href="#"
                                       class="btn btn-success pull-right" role="button"> Add to Cart </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    </div>

@endsection
