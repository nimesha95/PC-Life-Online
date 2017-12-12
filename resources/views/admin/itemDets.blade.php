@extends('layouts.master')

@section('title')

@endsection

@section('header')
    @include('partials.admin_header')
@endsection

@section('content')

    <div class="container">
        <div class="row">

            <h1 align="center">Sales Report</h1><br><br>

            <div class="col-md-12">
                @if($items)
                    <div class="table-responsive">


                        <table id="mytable" class="table table-bordred table-striped">

                            <thead>

                            <th align="center">Item</th>
                            <th align="center">Quantity</th>
                            <th align="center">Amount</th>

                            </thead>
                            <tbody>

                            @foreach($items as $item )
                                <tr>
                                    <td>{{ $item->order_obj }}</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $item->Items_Sold }}</td>
                                    <td>Rs. {{ $item->total }}</td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        @else
                            <div class="row">
                                <p>Sorry No sales for this item </p>
                            </div>

    @endif




@endsection