@extends('layouts.master')

@section('title')
    PC-Life Online
@endsection


@section('content')
    <div class="page-header">

        <h3 class="reviews">Orders to be Confirmed.</h3>

    </div>

    @foreach($orders as $order)

        <form method="POST" action="">

            {{ csrf_field() }}

            <div class="container">

                <div class="row">

                    <div class="col-sm-5 col-sm-offset-1">

                        <div class="comment-tabs">

                            <div class="tab-content">

                                <div class="tab-pane active">

                                    <ul class="media-list">

                                        <li class="media">


                                            <div class="media-body">

                                                <div class="well well-lg">

                                                    <h4 class="media-heading text-uppercase reviews">Order ID
                                                        : {{ $order->id }}</h4>

                                                    <ul class="media-date text-uppercase reviews list-inline">

                                                        <li class="dd">{{ $order->added }}</li>

                                                    </ul>

                                                    <p class="media-comment">

                                                        {{ $order->email }}

                                                    </p>

                                                    <a class="btn btn-success btn-circle text-uppercase left"
                                                       href="{{route('cashier.show',['cash'=>$order->id])}}"><span
                                                                class="glyphicon glyphicon-info-sign"></span> View</a>

                                                </div>

                                            </div>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- check the div closing, ignored some to make the view more cooler -->
        </form>

    @endforeach
@endsection