@extends('layouts.master')

@section('title')
    PC-Life Online
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('content')

    <div class="container carouselRes">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/71/Milna%2C_Bra%C4%8D%2C_Hrvatska_-_Blata%C5%A1ka_riva_800x400.jpg" alt="...">
                        <div class="carousel-caption">
                            <h2>Heading</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://tpf.eu/wp-content/uploads/2015/03/800-400-Barcelone-Groupe.jpg" alt="...">
                        <div class="carousel-caption">
                            <h2>Heading</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://www.tentacle.eu/images/made/a/uploads/bilder/slideshow_800x400/bsr_gdynia_800x400_800_400_80_c1.jpg" alt="...">
                        <div class="carousel-caption">
                            <h2>Heading</h2>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>

        </div>
    </section>
@endsection