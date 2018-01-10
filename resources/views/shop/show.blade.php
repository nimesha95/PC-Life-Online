@extends('layouts.master')

@section('title')
    @foreach($items as $item)
        {{$item->name}}
    @endforeach
@endsection

@section('scripts1')
    <script type="text/javascript">
        function changeImage(imgr) {
            document.getElementById("imageReplace").src = imgr;
        }
    </script>
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <script type="text/javascript">
        function successMsg() {
            $.bootstrapGrowl('Item Succesfully added.', {
                type: 'success',
                delay: 2000,
            });
        }
        @if(Session::has('status'))
            {{"successMsg();"}}
        @endif

    </script>

    @foreach($items as $item)
        <div class="row">

            @include('partials.Sidebar')
            <H4>Device Details</H4>
            <div class="col-md-9"
                 style="background-color: white; box-shadow: 0px 0px 5px rgba(0,0,0,0.3); border-radius: 10px">
                <div class="col-md-6">
                    <table border="0">
                        <tr>
                            <td width="400px" height="400px" colspan="5"><img id="imageReplace" src="{{$item->image}}"
                                                                              width="400px" height="400px"></td>
                        </tr>
                        <tr>
                            <td width="80px" height="80px"><img src="{{$item->image}}"
                                                                onclick="changeImage('{{$item->image}}')" width="80px"
                                                                height="80px"></td>
                            <td width="80px" height="80px"><img src="{{$item->img1}}"
                                                                onclick="changeImage('{{$item->img1}}')" width="80px"
                                                                height="80px"></td>
                            <td width="80px" height="80px"><img src="{{$item->img2}}"
                                                                onclick="changeImage('{{$item->img2}}')" width="80px"
                                                                height="80px"></td>
                            <td width="80px" height="80px"><img src="{{$item->img3}}"
                                                                onclick="changeImage('{{$item->img3}}')" width="80px"
                                                                height="80px"></td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-6">
                    <!-- form-group is used to put some top margins between rows-->
                    <div class="row form-group"><br></div>
                    <div class="row form-group"><br></div>
                    <div class="row form-group">
                        <div class="col-md-6 col-md-offset-1"><h3>{{$item->name}}</h3></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3 col-md-offset-1">Product ID:</div>
                        <div class="col-md-3">{{$item->proid}}</div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3 col-md-offset-1">Condition:</div>
                        <div class="col-md-3">{{$item->type}}</div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 col-md-offset-1">{{$item->description}}</div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3 col-md-offset-1">Price:</div>
                        <div class="col-md-3"><b>{{$item->price}}</b></div>
                    </div>
                    <div class="row form-group">
                        <div class="btn-group col-md-offset-6" role="group" aria-label="...">
                            <a href="{{route('product.addToCart' , ['id'=> $item->proid])}}"
                               class="btn btn-success pull-right" role="button"> Add to Cart </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 col-md-offset-0">

                        <table class="table">
                            <tbody>
                            @foreach($specs as $key => $value)
                                <tr>
                                    <td><B>{{$key}}</B></td>
                                    <td>{{$value}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row form-group"><br></div>
        <div class="row form-group"><br></div>

    @endforeach
    <div style="width: 130%; position:  relative; left: -20%;">
        @include('partials.footer')
    </div>
@endsection

