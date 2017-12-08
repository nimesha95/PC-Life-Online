
@include('partials.techmodel.modelnewjob')
@include('partials.techmodel.modelmore')
@include('partials.techmodel.modelcustomize')

<nav class="navbar navbar-default">

    <div class="container-fluid" style="height: 100px">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('technician.index')}}" style="text-align: center; padding-top: auto;">PC LIFE ONLINE <br>  <b>Techician</b> </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" >

                <li>
                    <div class="butt" data-toggle="modal" data-target="#NewJob">
                        <img src="{{ asset('img/Tasks-Icon.png')}}" style=""> <p>New Job</p>  </div>

                </li>
                <li>
                    <a href="{{route('technician')}}" style="all: unset;"><div class="butt" HREF="#">Dashboard </div></a>
                </li>
                <li>
                    <div class="butt" data-toggle="modal" data-target="#More">
                        <img src="{{ asset('img/Tasks-Icon.png')}}" style=""> <p>More</p>  </div>

                </li>

                <li>
                    <div class="butt" data-toggle="modal" data-target="#AddUserModal">Notifications  </div>
                </li>


               <!-- <li>
                    <p id="time" class="navbar-brand"></p>
                    </body>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                    <script type="text/javascript">
                        var timestamp = '<?=time();?>';
                        function updateTime(){
                            $('#time').html(Date(timestamp));
                            timestamp++;
                        }
                        $(function(){
                            setInterval(updateTime, 1000);
                        });
                    </script>
                </li>
                -->










            </ul>
            <form class="navbar-form navbar-right" style="margin-top: 30px;">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" autofocus="autofocus">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
            <ul class="nav navbar-right" >
                <li>
                    <div class="butt" data-toggle="modal" data-target="#AddUserModal">Log Out  </div>
                </li>

            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- Register User Modal -->
<div class="modal fade" id="AddUserModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add a new user</h4>
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

<!-- Remove User Modal -->
<div class="modal fade" id="RemoveUserModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Remove user</h4>
            </div>
        @if(\Illuminate\Support\Facades\Session::get('AdminRegUser'))
            @if(count($errors)>0)   <!-- to show error alerts -->
                <script>
                    $(document).ready(function () {
                        $('#RemoveUserModal').modal({show: true});
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
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" autofocus="autofocus"   name="name">
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- Add item Select Menu Modal -->
<div class="modal fade" id="AddSelectModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Product</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="{{route('admin.redirect_add')}}">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="type">Type:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="items" name="ItemType">
                                <option value="1">Desktop</option>
                                <option value="2">Laptop</option>
                                <option value="3">some</option>
                                <option value="4">stuff</option>
                                <option value="5">goes</option>
                                <option value="6">here</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
