@extends('layouts.master_without_container')

@section('title')
    PC-Life Online
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('css/shop_index.css') }}"/>
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

        <div class="carousel-inner" style="box-shadow: 0px 0px 10px rgba(0,0,0,0.5)">
            <div class="item slides">
                <div class="slide-1">
                    <img src="http://res.cloudinary.com/docp8wv1x/image/upload/v1512960688/1_tgxro0.png"
                         class="img-responsive hidden-xs"
                         alt="cover0">
                    <img src="http://res.cloudinary.com/docp8wv1x/image/upload/v1512960683/21_cbj9kg.png"
                         class="img-responsive visible-xs"
                         alt="cover0">
                </div>
                <div class="hero">
                </div>
            </div>
            <div class="item slides">
                <div class="slide-2">
                    <img src="http://res.cloudinary.com/docp8wv1x/image/upload/v1512960689/3_jv3bc9.png"
                         class="img-responsive hidden-xs"
                         alt="cover1">
                    <img src="http://res.cloudinary.com/docp8wv1x/image/upload/v1512960684/31_umk2ul.png"
                         class="img-responsive visible-xs"
                         alt="cover1">
                </div>
                <div class="hero">
                </div>
            </div>
            <div class="item slides active">
                <div class="slide-3">
                    <img src="http://res.cloudinary.com/docp8wv1x/image/upload/v1512960688/2_pzwsyb.png"
                         class="img-responsive hidden-xs"
                         alt="cover2">
                    <img src="http://res.cloudinary.com/docp8wv1x/image/upload/v1512960684/11_bxvjc2.png"
                         class="img-responsive visible-xs"
                         alt="cover2">
                </div>
                <div class="hero">
                </div>
            </div>
        </div>

    </div>
    <script>
        var token = '{{\Illuminate\Support\Facades\Session::token()}}';
        var url = '{{route('product.search')}}';
    </script>
    <script type="text/javascript">
        var timer;

        function up() {
            timer = setTimeout(function () {
                var keywords = $('#search-input').val();
                //console.log(keywords);
                var resultDropdown = $(this).siblings("#search-results");
                if (keywords.length > 0) {
                    $.ajax({
                        method: 'POST',
                        url: url,
                        data: {keywords: keywords, _token: token}
                    })
                        .done(function (msg) {
                            console.log(msg['msg'][0]);
                            $('#search-results').empty();
                            //console.log(msg['msg'].length);
                            var msg_len = msg['msg'].length;
                            for (i = 0; i < msg_len; i++) {
                                var dta = "<a href='http://pclife.dev/product/" + msg['msg'][i]['proid'] + "' ><p>" + msg['msg'][i]['name'] + "</p></a>";
                                $('#search-results').append(dta);
                            }
                            //var dta ="<p>" + $row["itemName"] + "</p>";
                        })
                }
                else {
                    $('#search-results').empty();
                }
            }, 500);
        }

        function down() {
            clearTimeout(timer);

        }
    </script>

    <div class="row">
        <div class="container">
            <div class="input-group stylish-input-group" style="margin: 10px; box-shadow: 0px 0px 3px rgba(0,0,0,0.5)">
                <input name="search-input" style="height: 50px; " id="search-input" type="text" class="form-control" onkeydown="down()"
                       onkeyup="up()"
                       placeholder="Search item"/>
                <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                <div class="result" id="search-results" name="search-results"></div>
            </div>

        </div>



                <!--
                <input type="submit" class="btn btn-default" name="my_form_submit_button"
                       value="Search"/>
                       -->

        </div>

    <div id="hot">

        <div class="box">
            <div class="container" >
                <div class="col-md-12">
                    <h2>TODAY'S HOT DEALS</h2>
                </div>
            </div>
        </div>
        <div class="container"><div class="row">
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000" style="padding: 10px">
                    <div class="MultiCarousel-inner" >
                        @if(sizeof($items)>0)
                            @foreach($items as $item)
                                <div class="item" >
                                    <div class="pad15" style="background-color: white">
                                        <p ><b>{{$item->name}}</b></p>
                                        <div class="front">
                                            <a href="{{route('product.show' , ['id'=> $item->proid])}}">
                                                <img src="{{ $item->image }}" alt=""
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                        <p style="color: red"><b>{{$item->price}} LKR </b></p>
                                    </div>
                                </div>
                            @endforeach

                            @foreach($items2 as $item)
                                <div class="item">
                                    <div class="pad15" style="background-color: white">
                                        <p ><b>{{$item->name}}</b></p>
                                        <div class="front">
                                            <a href="{{route('product.show' , ['id'=> $item->proid])}}">
                                                <img src="{{ $item->image }}" alt=""
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                        <p style="color: red"><b>{{$item->price}} LKR </b></p>
                                    </div>
                                </div>
                            @endforeach

                            @foreach($items3 as $item)
                                <div class="item">
                                    <div class="pad15" style="background-color: white">
                                        <p ><b>{{$item->name}}</b></p>
                                        <div class="front">
                                            <a href="{{route('product.show' , ['id'=> $item->proid])}}">
                                                <img src="{{ $item->image }}" alt=""
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                        <p style="color: red"><b>{{$item->price}} LKR </b></p>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <button class="btn btn-primary leftLst" STYLE="z-index: 999; position: absolute; left: -10px"><</button>
                    <button class="btn btn-primary rightLst" STYLE="position: absolute; right: -10px">></button>
                </div>
            </div>
        </div>


    </div>
    <div class="carousel-inner">

                <img src="http://res.cloudinary.com/docp8wv1x/image/upload/v1512960688/1_tgxro0.png"
                     class="img-responsive hidden-xs"
                     alt="cover0">
                <img src="http://res.cloudinary.com/docp8wv1x/image/upload/v1512960683/21_cbj9kg.png"
                     class="img-responsive visible-xs"
                     alt="cover0">

        </div>
        <div class="item slides">
            <div class="slide-2">
                <img src="http://res.cloudinary.com/docp8wv1x/image/upload/v1512960689/3_jv3bc9.png"
                     class="img-responsive hidden-xs"
                     alt="cover1">
                <img src="http://res.cloudinary.com/docp8wv1x/image/upload/v1512960684/31_umk2ul.png"
                     class="img-responsive visible-xs"
                     alt="cover1">
            </div>
            <div class="hero">
            </div>
        </div>
        <div class="item slides active">
            <div class="slide-3">
                <img src="http://res.cloudinary.com/docp8wv1x/image/upload/v1512960688/2_pzwsyb.png"
                     class="img-responsive hidden-xs"
                     alt="cover2">
                <img src="http://res.cloudinary.com/docp8wv1x/image/upload/v1512960684/11_bxvjc2.png"
                     class="img-responsive visible-xs"
                     alt="cover2">
            </div>
            <div class="hero">
            </div>
        </div>
    </div>
    <!-- /#hot -->

    @include('partials.footer')
@endsection

@section('scripts')
    <script src="{{URL::to('js/shop_index.js')}}"></script>
@endsection
