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

    @foreach($items as $item)
        <div class="row">
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
                        <td width="80px" height="80px"><img src="{{$item->img4}}"
                                                            onclick="changeImage('{{$item->img4}}')" width="80px"
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
                    <div class="btn-group col-md-offset-1" role="group" aria-label="...">
                        <a href="#" role="button" class="btn btn-default">Add To Cart</a>
                        <a href="#" role="button" class="btn btn-success">Buy it Now</a>
                        <a href="#" role="button" class="btn btn-info">Wishlist</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row form-group"><br></div>
        <div class="row form-group"><br></div>
        <div class="row">
            <div class="col-md-12">
                <p>{{$item->itemDetails}}</p>
            </div>
        </div>
    @endforeach

@endsection