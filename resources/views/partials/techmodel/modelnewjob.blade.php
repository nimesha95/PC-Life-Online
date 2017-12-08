<div class="modal fade" id="NewJob" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Job</h4>
            </div>

            <div class="modal-body">
                <div class="modal-body">
                    <h4> Custom Repair Job</h4>
                    <div class="row">

                        <a href="{{url('technician/custom/DQ')}}">
                            <div class="butt" data-toggle="modal">
                                <img src="img/Tasks-Icon.png" style="" > <p>Desktop</p>  </div>
                        </a>

                        <a href="{{url('technician/custom/LQ')}}">
                            <div class="butt" data-toggle="modal">
                                <img src="img/Tasks-Icon.png" style="" > <p>Laptop</p>  </div>
                        </a>
                        <a href="{{url('technician/custom/TQ')}}">
                            <div class="butt" data-toggle="modal">
                                <img src="img/Tasks-Icon.png" style="" > <p>Tablet</p>  </div>
                        </a>
                        <a href="{{url('technician/custom/OQ')}}">
                            <div class="butt" data-toggle="modal">
                                <img src="img/Tasks-Icon.png" style="" > <p>Other</p>  </div>
                        </a>
                    </div>
                </div>
                <div class="modal-body">
                    <h4> Warranty</h4>
                    <div class="row">

                        <table border="0" class="table " style="padding:10px">

                            <form action="{{route('viewwarranty')}}" method="post">
                                <tr>
                                    {{ csrf_field() }}

                                    <td> <label for="comment">Invoice No</label></td>
                                    <td> <input type="text" class="form-control"  Name="Invoice" value="" placeholder="Enter Invoice No"></td>
                                    <td> <button type="Submit" class="subbutton"  >Search</button></td>
                                </tr>
                            </form>
                        </table>
                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#RemoveUserModal">Close</button>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="NewJobUser" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Select Customer</h4>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" method="post" >
                    <div class="form-group">

                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" autofocus="autofocus"
                                   name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter email"
                                   name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="pwd"
                                   placeholder="Enter password" name="pwd">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#RemoveUserModal">Close</button>
            </div>
        </div>

    </div>
</div>