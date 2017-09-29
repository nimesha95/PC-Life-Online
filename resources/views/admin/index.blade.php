@extends('layouts.master')

@section('title')
    Administrator
@endsection


@section('header')
    @include('partials.admin_header')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h2>Admin Module</h2>
        </div>
        <div class="row">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal
            </button>
        </div>
    </div>
@endsection
