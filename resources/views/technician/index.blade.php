@extends('layouts.master_fluid')
@section('title')
    PC-Life Online | Technician
@endsection

@section('header')
    @include('partials.tech_header')

@endsection
@section('content')
    <div class="row">
        <div class="col-sm-2" ></div>
        <div class="col-sm-8" >
            <div class="row">

                <div class="col-sm-12" >
                    <div class="dashcont" style="height: 200px">

                    </div>

                </div>

            </div>
        <!--
            <table>
                <tr>
                    <td style='padding:10px; text-align:center; font-size:15px; font-family:Arial,Helvetica;'>



                        <form action="{{route('technician.index')}}" method="POST">
                            <input type="text" name="D1" placeholder="username"><br><br>
                            <input type="text" name="D3" placeholder="email"><br><br>
                            <input type="text"  name="D2" placeholder="password"><br><br>
                            <input type="submit" value="REGISTER NOW!">
                            {{ csrf_field() }}
                        </form>
                    </td>
                    <td>
                        <img src='https://barcode.tec-it.com/barcode.ashx?data=01&code=Code128&dpi=150' alt='Barcode Generator TEC-IT'/>
                    </td>
                </tr>
            </table>-->
            </div>
        <div class="col-sm-2" ></div>
    </div>





@endsection

