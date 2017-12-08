@extends('layouts.master_fluid')
@section('title')
    PC-Life Online | Technician
@endsection

@section('header')
    @include('partials.tech_header')

@endsection
@section('content')
<div class="container">
    <h3>Regiter New User </h3>
    <div class="col-sm-12">
        <form action="{{route('userregister')}}" method="post">

            <input type="hidden" name="type" value="sss"  >
            <input type="hidden" name="device" value="ss "  >
            <div class="modal-footer">
                <button type="Submit" class="subbuttonred"  >Register User</button>
                <button type="button" class="subbutton" data-toggle="modal" data-target="#searchexistinguser"  >Exisiting User</button>
            </div>
            {{ csrf_field() }}
            <table border="0" class="table table-hover">

                <tr>

                    <td> <label for="comment">Name</label></td>
                    <td>
                        <input type="text" class="form-control"  Name="Name1" value=""></td>
                    <td><input type="text" class="form-control"  Name="Name2" value=""></td></td>


                </tr>
                <tr>

                    <td> <label for="comment">E-Mail Address</label></td>
                    <td>
                        <input type="e-mail" class="form-control"  Name="email" value=""></td>
                    <td></td>
                 </tr>
                <tr>

                    <td> <label for="comment">Telephone Number</label></td>
                    <td>
                        <input type="text" class="form-control"  Name="Telno" value=""></td>
                    <td></td>
                </tr>
                <tr>

                    <td> <label for="comment">Address</label></td>
                    <td>
                        <input type="text" class="form-control"  Name="Address1" value=""></td>
                    <td><input type="text" class="form-control"  Name="Address2" value=""></td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection

