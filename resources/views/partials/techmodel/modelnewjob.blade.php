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
                    <div class="row" style="position: relative; top: -20px ">
                        <div class="col-sm-2"><img src="{{ asset('img/technician/repair.png')}}"
                                                   style=" width: 50px;height: 50px; display: inline-block"></div>
                        <div class="col-sm-10"><h4> Custom Repair Job</h4></div>

                    </div>

                    <div class="row">
                        <div class="col-sm-3"><a href="{{url('technician/newjob/D')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/desktop.png')}}" style="">
                                    <p>Desktop</p></div>

                            </a>
                        </div>
                        <div class="col-sm-3"><a href="{{url('technician/newjob/L')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/laptop.png')}}" style="">
                                    <p>Laptop</p></div>

                            </a>
                        </div>
                        <div class="col-sm-3"><a href="{{url('technician/newjob/T')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/tablet.png')}}" style="">
                                    <p>Tablet</p></div>

                            </a>
                        </div>
                        <div class="col-sm-3"><a href="{{url('technician/newjob/O')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/otherdev.png')}}" style="">
                                    <p>Other</p></div>

                            </a>
                        </div>


                    </div>
                </div>
                <hr>
                <div class="modal-body">
                    <div class="row" style="position: relative; top: -20px ">
                        <div class="col-sm-2"><img src="{{ asset('img/technician/warranty.png')}}"
                                                   style=" width: 50px;height: 50px; display: inline-block"></div>
                        <div class="col-sm-10"><h4>Claim the Warranty</h4></div>

                    </div>
                    <table border="0" class="table " style="padding:10px">

                        <form action="{{route('viewwarranty')}}" method="post">
                            <tr>
                                {{ csrf_field() }}

                                <td><label for="comment">Invoice No</label></td>
                                <td><input type="text" class="form-control" Name="Invoice" value=""
                                           placeholder="Enter Invoice No"></td>
                                <td>
                                    <button type="Submit" class="subbutton">Search</button>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal"
                        data-target="#RemoveUserModal">Close
                </button>
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
                <form class="form-horizontal" method="post">
                    <div class="form-group">

                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter Name"
                                   autofocus="autofocus"
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
                <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal"
                        data-target="#RemoveUserModal">Close
                </button>
            </div>
        </div>

    </div>
</div>