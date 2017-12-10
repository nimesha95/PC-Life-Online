@extends('layouts.master_without_container')


@section('title')
    PC-Life Online
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('css/shop_index.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/shopstyle.css') }}"/>
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class="carousel   fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">

        <div class="overlay"></div>

        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class=""></li>
            <li data-target="#bs-carousel" data-slide-to="1" class=""></li>
            <li data-target="#bs-carousel" data-slide-to="2" class="active"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item slides">
                <div class="slide-1">
                    <img src="https://saleme.lk/images/saleme/banner.jpg" class="img-responsive hidden-xs"
                         alt="saleme.lk">
                    <img src="https://saleme.lk/images/saleme/banner-m1.jpg" class="img-responsive visible-xs"
                         alt="saleme.lk">
                </div>
                <div class="hero">
                </div>
            </div>
            <div class="item slides">
                <div class="slide-2">
                    <img src="https://saleme.lk/images/saleme/banner1.jpg" class="img-responsive hidden-xs"
                         alt="saleme.lk">
                    <img src="https://saleme.lk/images/saleme/banner-m2.jpg" class="img-responsive visible-xs"
                         alt="saleme.lk">
                </div>
                <div class="hero">
                </div>
            </div>
            <div class="item slides active">
                <div class="slide-3">
                    <img src="https://saleme.lk/images/saleme/banner2.jpg" class="img-responsive hidden-xs"
                         alt="saleme.lk">
                    <img src="https://saleme.lk/images/saleme/banner-m3.jpg" class="img-responsive visible-xs"
                         alt="saleme.lk">
                </div>
                <div class="hero">
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-1" ></div>
        <div class="col-sm-10" >
            <div class="row">

                <div id="hot">

                    <div class="box">
                        <div class="container">
                            <div class="col-md-12">
                                <h2>TODAY's HOT DEALS</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                            <div class="MultiCarousel-inner">
                                @if(sizeof($items)>0)
                                    @foreach($items as $item)
                                        <div class="item">
                                            <div class="pad15">
                                                <p class="lead">{{$item->name}}</p>
                                                <div class="front">
                                                    <a href="{{route('product.show' , ['id'=> $item->proid])}}">
                                                        <img src="{{ $item->image }}" alt=""
                                                             class="img-responsive">
                                                    </a>
                                                </div>
                                                <p>{{$item->price}} LKR</p>
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach($items2 as $item)
                                        <div class="item">
                                            <div class="pad15">
                                                <p class="lead">{{$item->name}}</p>
                                                <div class="front">
                                                    <a href="{{route('product.show' , ['id'=> $item->proid])}}">
                                                        <img src="{{ $item->image }}" alt=""
                                                             class="img-responsive">
                                                    </a>
                                                </div>
                                                <p>{{$item->price}} LKR</p>
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach($items3 as $item)
                                        <div class="item">
                                            <div class="pad15">
                                                <p class="lead">{{$item->name}}</p>
                                                <div class="front">
                                                    <a href="{{route('product.show' , ['id'=> $item->proid])}}">
                                                        <img src="{{ $item->image }}" alt=""
                                                             class="img-responsive">
                                                    </a>
                                                </div>
                                                <p>{{$item->price}} LKR</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                            <button class="btn btn-primary leftLst"><</button>
                            <button class="btn btn-primary rightLst">></button>
                        </div>
                    </div>

                </div>


            </div>
        <!--
            <table>
                <tr>
                    <td style='padding:10px; text-align:center; font-size:15px; font-family:Arial,Helvetica;'>



                        <form action="{{route('technician.index')}}" method="POST">
                            <input type="text" name="D1" placeholder="username"><br><br>
                            <input type="text" name="D3" placeholder="email"><br><br>
                            <input type="text"  name="D2" placeholder="password"><br><br>
                            <input type="submit" value="REGISTER NOW!">
                            {{ csrf_field() }}
                </form>
            </td>
            <td>
                <img src='https://barcode.tec-it.com/barcode.ashx?data=01&code=Code128&dpi=150' alt='Barcode Generator TEC-IT'/>
            </td>
        </tr>
    </table>-->
        </div>
        <div class="col-sm-1" ></div>
    </div>



    <!-- /#hot -->

@endsection

@section('scripts')
    <script src="{{URL::to('js/shop_index.js')}}"></script>
@endsection
