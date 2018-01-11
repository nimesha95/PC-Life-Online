@extends('layouts.master')

@section('title')
    Pay With Bank Deposit
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if ($message = Session::get('success'))
                        <div class="custom-alerts alert alert-success fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            {!! $message !!}
                        </div>
                        <?php Session::forget('success');?>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="custom-alerts alert alert-danger fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            {!! $message !!}
                        </div>
                        <?php Session::forget('error');?>
                    @endif
                    <div class="panel-heading">Paywith BankSlip</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" id="payment-form" role="form"
                              action="{!! URL::route('user.postBank') !!}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="refID" class="col-md-4 control-label">Referance ID</label>
                                <div class="col-md-6">
                                    <input id="ref" type="text" class="form-control" name="ref"
                                           value="" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <input id="id" name="id" type="hidden" value="{{$id}}">
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Paywith with BankSlip
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection