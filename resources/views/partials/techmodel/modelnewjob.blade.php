<div class="modal fade" id="NewJob" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Job</h4>
            </div>

            <div class="modal-body">
                <div class="butttask" data-toggle="modal" data-target="#NewJobUser" data-dismiss="modal">
                    <img src="img/Tasks-Icon.png" style=""> <p>Custom Repair Job</p>  </div>
                <div class="butttask" data-toggle="modal" data-target="#NewJobModal">
                    <img src="img/Tasks-Icon.png" style=""> <p>Service Warranty</p>  </div>
                <div class="butttask" data-toggle="modal" data-target="#NewJobModal">
                    <img src="img/Tasks-Icon.png" style=""> <p>Company Warranty</p>  </div>
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