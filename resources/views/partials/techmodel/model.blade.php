<div class="modal fade" id="AddModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Model</h4>
            </div>
        @if(\Illuminate\Support\Facades\Session::get('AdminRegUser'))
            @if(count($errors)>0)   <!-- to show error alerts -->
                <script>
                    $(document).ready(function () {
                        $('#AddUserModal').modal({show: true});
                    })
                </script>
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
                @endif
            @endif
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="{{route('admin.reguser')}}">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="type">Type:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="sel1" name="role">
                                <option value="1">User</option>
                                <option value="0">Adminstrator</option>
                                <option value="2">Stock Manager</option>
                                <option value="3">Cashier</option>
                                <option value="4">Technician</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <li>
                            <div class="butt" data-toggle="modal" data-target="#AddUserModal">New Job</div>
                        </li>
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