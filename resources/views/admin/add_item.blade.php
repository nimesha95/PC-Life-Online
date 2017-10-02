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
            @if(session()->has('type'))
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('admin.additems') }}" method="post">
                            <div class="form-group">
                                <label for="proid">ProductID</label>
                                <input type="text" id="productid" name="productid"
                                       value="{{\Illuminate\Support\Facades\Session::get('lastID')}}"
                                       class="form-control" readonly>
                            </div>
                        @foreach(session('type') as $type)
                            @include($type)
                        @endforeach
                        @endif
                    </div>
                </div>
@endsection
