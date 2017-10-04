@extends('layouts.master_fluid')

@section('title')
    Add Items
@endsection


@section('header')
    @include('partials.admin_header')
@endsection

@section('content')
    <div class="row">
        @include('partials.admin_sidebar')
        <div class="col-md-9">
            <div class="row">
                <h2>Add items</h2>
            </div>
            <div class="row">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>
            @if(session()->has('type'))
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" action="{{ route('admin.additems') }}" method="post">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="proid">Product ID:</label>
                                <div class="col-sm-2">
                                    <input type="text" id="productid" name="productid"
                                           value="{{\Illuminate\Support\Facades\Session::get('lastID')}}"
                                           class="form-control" readonly>
                                </div>
                            </div>
                            @foreach(session('type') as $type)
                                @include($type)
                            @endforeach

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default" name="add">Add Item</button>
                                    <button type="reset" class="btn btn-default" name="clear">Clear</button>
                                </div>
                            </div>

                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
