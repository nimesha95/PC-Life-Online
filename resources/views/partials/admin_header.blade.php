<nav class="navbar navbar-default" style="box-shadow: 0px 0px 10px rgba(0,0,0,0.5)">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('admin.index')}}">PC LIFE ONLINE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/admin') ? 'active' : '' }}"><a href="{{route('admin.index')}}"><img
                                src="{{ asset('img/home/home.png')}}"
                                style="width:20px;height: 20px; position: relative; top: -5px "> Home <span
                                class="sr-only">(current)</span></a>
                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><img
                                src="{{ asset('img/home/admin.png')}}"
                                style="width:20px;height: 20px; position: relative; top: -5px ">  I AM Admin <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#AddUserModal">Add Users</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#RemoveUserModal">Remove Users</a></li>
                        <li><a href="{{route('admin.getUserHistory')}}">User Login History</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><img
                                src="{{ asset('img/home/stock.png')}}"
                                style="width:20px;height: 20px; position: relative; top: -5px "> Stock <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#AddSelectModal">Add Product</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#EditItemModal">Edit Products</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#RemoveItemModal">Remove Product</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><img
                                src="{{ asset('img/home/report.png')}}"
                                style="width:20px;height: 20px; position: relative; top: -5px "> Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('admin.report_deli')}}">Delivery Report</a></li>
                        <li><a href="{{route('admin.report_cust_history')}}">Customer Detail</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        @if(Auth::check())
                            {{ Auth::user()->name }}
                        @else
                            Account
                        @endif
                        <span
                                class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if(Auth::check())
                            <li><a href="{{ route('user.profile') }}">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('user.logout') }}">Sign Out</a></li>
                        @else
                            <li><a href="{{ route('user.signin') }}">Sign In</a></li>
                            <li><a href="{{ route('user.signup') }}">Sign Up</a></li>
                        @endif
                    </ul>
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
                            <input type="text" class="form-control" id="name" placeholder="Enter Name"
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

            <div class="modal-body">
                <form class="form-horizontal" method="post" action="{{route('admin.removeuser')}}">

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter email"
                                   name="email">
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


<!-- Remove Item Modal -->
<div class="modal fade" id="RemoveItemModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Remove Product</h4>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" method="post" action="{{route('admin.removeitem')}}">

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Product ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="proid" placeholder="Enter Product ID"
                                   name="proid">
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


<!-- Edit Item Modal -->
<div class="modal fade" id="EditItemModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Item</h4>
            </div>
        @if(\Illuminate\Support\Facades\Session::get('AdminEditItem'))
            @if(count($errors)>0)   <!-- to show error alerts -->
                <script>
                    $(document).ready(function () {
                        $('#EditItemModal').modal({show: true});
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
                <form class="form-horizontal" method="post" action="{{route('admin.get_edit_item')}}">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="proid">Product ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pro_id" placeholder="Enter Product ID"
                                   name="pro_id" required>
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
                                <option value="3">Accessories</option>
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
