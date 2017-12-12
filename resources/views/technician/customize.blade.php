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
        <form action="{{route('customizestore')}}" method="post">

            <input type="hidden" name="type" value="{{$Type}}"  >
            <input type="hidden" name="device" value=" {{$Custtype}}"  >
            {{ csrf_field() }}<div class="modal-footer">
                <button type="Submit" class="subbuttonred"  >Submit</button>
                </div>

           <div class="row">

                       @foreach($qarray as $Custom)
                        <div class="col-md-6">

                            <table border="0" class="table table-hover">
                           <tr>

                               <td> <label for="comment">{{$Type}} 1</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D1" value="{{$Custom->D1}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 2</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D2" value="{{$Custom->D2}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 3</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D3" value="{{$Custom->D3}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 4</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D4" value="{{$Custom->D4}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 5</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D5" value="{{$Custom->D5}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 6</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D6" value="{{$Custom->D6}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 7</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D7" value="{{$Custom->D7}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 8</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D8" value="{{$Custom->D8}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 9</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D9" value="{{$Custom->D9}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 10</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D10" value="{{$Custom->D10}}"></td>



                           </tr>

                            </table>
                        </div>
                   <div class="col-md-6">

                       <table border="0" class="table table-hover">
                           <tr>

                               <td> <label for="comment">{{$Type}} 11</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D11" value="{{$Custom->D11}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 12</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D12" value="{{$Custom->D12}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 13</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D13" value="{{$Custom->D13}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 14</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D14" value="{{$Custom->D14}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 15</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D15" value="{{$Custom->D15}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 16</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D16" value="{{$Custom->D16}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 17</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D17" value="{{$Custom->D17}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 18</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D18" value="{{$Custom->D18}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 19</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D19" value="{{$Custom->D19}}"></td>



                           </tr>
                           <tr>

                               <td> <label for="comment">{{$Type}} 20</label></td>
                               <td>
                                   <input type="text" class="form-control"  Name="D20" value="{{$Custom->D20}}"></td>



                           </tr>

                       </table>
                   </div>
                       @endforeach

           </div>
        </form>


   </div>





@endsection


