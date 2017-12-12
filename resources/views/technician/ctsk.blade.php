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
           <div class="modal-footer">
               <button type="button" class="btn btn-default" data-toggle="modal" data-target="#newtask" role="dialog">Add New Task</button>

           </div>


           <div class="row">
               <div class="col-md-9">

                   <table border="0" class="table table-hover">
                       <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Default Operation Time</th>
                            <th>Default Involve Time</th>
                            <th>Default Price </th>
                            <th>Used for </th>
                       </thead>
                       @foreach($qarray as $Tasks)
                           <div class="modal fade" id="Customizetask{{$Tasks->id}}" role="dialog">
                               <div class="modal-dialog">

                                   <!-- Modal content-->
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                                           <h4 class="modal-title">Customize - {{$Tasks->Name}}</h4>
                                       </div>

                                       <div class="modal-body">
                                           <form action="{{route('customizetask')}}" method="post">
                                               {{ csrf_field() }}
                                               <div class="row">

                                           <div class="col-md-12">
                                               <input type="hidden" name="id" value="{{$Tasks->id}}"  >
                                               <label for="comment"> Name :</label>
                                               <input type="text" class="form-control"  Name="name" value="{{$Tasks->Name}}" >
                                               <label for="comment"> Default Operation Time :</label>
                                               <input type="text" class="form-control"  Name="DOPT" value="{{$Tasks->DOPT}}" >
                                               <label for="comment"> Default Involve Time :</label>
                                               <input type="text" class="form-control"  Name="DINT" value="{{$Tasks->DINT}}" >
                                               <label for="comment"> Default Price :</label>
                                               <input type="text" class="form-control"  Name="price" value="{{$Tasks->price}}" >

                                               <label for="comment"> Usage :</label>
                                               <div class="row">
                                               <div class="btn-group" data-toggle="buttons" style="margin-left: 20px;" >

                                                   <label class="btn btn-primary">
                                                       <input type="radio" name="Select" value="B"
                                                       @if (($Tasks->used) === 'B')
                                                       checked="checked"
                                                               @endif> Both Desktop Laptop
                                                   </label>
                                                   <label class="btn btn-primary">
                                                       <input type="radio" name="Select" value="D" @if (($Tasks->used) === 'D')
                                                       checked="checked"
                                                               @endif> Desktop
                                                   </label>
                                                   <label class="btn btn-primary">
                                                       <input type="radio" name="Select" value="L" @if (($Tasks->used) === 'L')
                                                       checked="checked"
                                                               @endif> Laptop
                                                   </label>

                                               </div>
                                               </div>
                                               <div class="row" style="margin: 10px">
                                               <button type="SUBMIT" class="btn btn-default" >Update</button>
                                               </div>
                                           </div>

                                               </div>







                                           </form>

                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" >Close</button>
                                       </div>
                                   </div>

                               </div>
                           </div>

                           <tr data-toggle="modal" data-target="#Customizetask{{$Tasks->id}}">

                               <td> <label for="comment">{{$Tasks->id}}</label></td>
                               <td> <label for="comment">{{$Tasks->Name}}</label></td>
                               <td> <label for="comment">{{$Tasks->DOPT}}</label></td>
                               <td> <label for="comment">{{$Tasks->DINT}}</label></td>
                               <td> <label for="comment">{{$Tasks->price}}</label></td>
                               <td> <label for="comment">@if (($Tasks->used) === 'B')
                                           Both Desktop/Laptop
                                       @elseif (($Tasks->used) === 'D')
                                           Desktop
                                       @else
                                          Laptop
                                       @endif
                                   </label></td>



                           </tr>



                       @endforeach
                   </table>
               </div>
           </div>

   </div>
       <div class="modal fade" id="newtask" role="dialog">
           <div class="modal-dialog">

               <!-- Modal content-->
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                       <h4 class="modal-title">Add New Task </h4>
                   </div>

                   <div class="modal-body">
                       <form action="{{route('addnewtask')}}" method="post">

                           <div class="row">
                               {{ csrf_field() }}
                               <div class="col-md-12">
                                   <label for="comment"> Name :</label>
                                   <input type="text" class="form-control"  Name="name" value="" required>
                                   <label for="comment"> Default Operation Time :</label>
                                   <input type="text" class="form-control"  Name="DOPT" value="" pattern="\+[0-9]{12}" required  >
                                   <label for="comment"> Default Involve Time :</label>
                                   <input type="text" class="form-control"  Name="DINT" value=""  pattern="\+[0-9]{12}" required>
                                   <label for="comment"> Default Price :</label>
                                   <input type="text" class="form-control"  Name="price" value=""  pattern="\+[0-9]{12}" required>

                                   <label for="comment"> Usage :</label>
                                   <div class="row">
                                       <div class="btn-group" data-toggle="buttons" style="margin-left: 20px;" name="Select">

                                           <label class="btn btn-primary active">
                                               <input type="radio" name="Select" value="B"

                                               > Both Desktop Laptop
                                           </label>
                                           <label class="btn btn-primary">
                                               <input type="radio" name="Select" value="D"> Desktop
                                           </label>
                                           <label class="btn btn-primary">
                                               <input type="radio"  name="Select" value="L"> Laptop
                                           </label>

                                       </div>
                                   </div>
                                   <button type="SUBMIT" class="btn btn-default" >Add New Task</button>
                               </div>

                           </div>







                       </form>

                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" >Close</button>
                   </div>
               </div>

           </div>
       </div>





@endsection


