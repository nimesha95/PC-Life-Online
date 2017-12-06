@extends('layouts.master_fluid')
@section('title')
    PC-Life Online | Technician
@endsection

@section('header')
    @include('partials.tech_header')

@endsection
@section('content')
    @include('partials.techmodel.model')
   <div class="container">
       <h3>Customize Tasks </h3>
       <div class="col-sm-12">
           {{$name}}


           <div class="row">
               <div class="col-md-6">

                   <table border="0" class="table table-hover">
                       @foreach($qarray as $Tasks)

                           <tr>

                               <td> <label for="comment">Question 1</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Tasks->id}}"></td>



                           </tr>



                       @endforeach
                   </table>
               </div>
           </div>

   </div>





@endsection


