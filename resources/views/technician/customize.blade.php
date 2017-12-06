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
       <h3>Customize {{$Type}} - {{$Custtype}}</h3>
       <div class="col-sm-12">



           <div class="row">

                       @foreach($qarray as $Custom)
                        <div class="col-md-6">

                            <table border="0" class="table table-hover">
                           <tr>

                               <td> <label for="comment">Question 1</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D1}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 1</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D2}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 1</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D3}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 1</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D4}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 1</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D5}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 1</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D6}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 1</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D7}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 1</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D8}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 1</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D9}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 1</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D10}}"></td>



                           </tr>

                            </table>
                        </div>
                   <div class="col-md-6">

                       <table border="0" class="table table-hover">
                           <tr>

                               <td> <label for="comment">Question 1</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D11}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 12</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D12}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 13</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D13}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 14</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D14}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 15</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D15}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 16</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D16}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 17</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D17}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 18</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D18}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 19</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D19}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">Question 20</label></td>
                               <td>
                                   <input type="text" class="form-control"  id="D1" value="{{$Custom->D20}}"></td>



                           </tr>

                       </table>
                   </div>
                       @endforeach

           </div>


   </div>





@endsection


