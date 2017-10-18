@extends('layouts.master_without_container')

@section('title')
    PC-Life Online
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

    <section class="home-search  cont-bg1 hidden-xs">
        <div class="container">
            <div class="row">
                <div class="mar-70 text-center">
                    <h1 class="promo-head">
                        Buy &amp; Sell
                    </h1>
                    <h1 class="promo-head2">
                        Absolutely Free
                    </h1>
                    <form id="search_form1" method="GET" action="https://saleme.lk/ads">
                        <div class="col-xs-12  search-panel1">
                            <div class="input-group home-search1">
                                <div class="input-group-btn ">
                                    <button type="button" class="btn location-btn " data-toggle="modal"
                                            data-target=".select-city-modal">
                                        <span class="lnr lnr-pointer-down"></span> <span id="search_concept">&nbsp;Select City</span>
                                    </button>
                                    <button type="button" class="btn cat-btn" data-toggle="modal"
                                            data-target=".select-category-modal">
                                        <span class="lnr lnr-tag"></span> <span
                                                id="search_concept">&nbsp;All Category</span>
                                    </button>
                                </div>
                                <input type="text" class="form-control search-txt" name="query"
                                       placeholder="What you looking for...">
                                <span class="input-group-btn">
<button class="btn  search-btn" id="more_query1" type="button"><span class="lnr lnr-magnifier"></span></button>
</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection