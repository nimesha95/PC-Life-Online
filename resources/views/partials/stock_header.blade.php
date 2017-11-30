<nav class="navbar navbar-default">
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
            <a class="navbar-brand" href="{{route('stockmanager.index')}}">PC LIFE ONLINE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/stockmanager') ? 'active' : '' }}"><a
                            href="{{route('stockmanager.index')}}">Home <span
                                class="sr-only">(current)</span></a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Stock <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#AddSelectModal">Add Product</a></li>
                        <li><a href="#">Edit Products</a></li>
                        <li><a href="#">Remove Product</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#AddStockModal">Update Stock</a></li>
                        <li><a href="#">Availability</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Orders <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Pre Orders</a></li>
                        <li><a href="#">ReOrders</a></li>
                    </ul>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Notification icon
                    </a>
                </li>
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
                <form class="form-horizontal" method="post" action="{{route('stock.redirect_add')}}">
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
                        <label class="control-label col-sm-2" for="model">Model:</label>
                        <div class="col-sm-10 col-md-4">
                            <select class="form-control" id="ItemModel" name="ItemModel">
                                <option value="0" selected>--Model--</option>
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

<!-- select stock modal -->
<div class="modal fade" id="AddStockModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Stock</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="{{route('stockmanager.addstock')}}">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="type">Catagory:</label>
                        <div class="col-sm-10 col-md-4">
                            <select class="form-control" id="ItemType1" name="ItemType1">
                                <option value="0" selected>Select Catagory</option>
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
                        <label class="control-label col-sm-2" for="model">Model:</label>
                        <div class="col-sm-10 col-md-4">
                            <select class="form-control" id="ItemModel1" name="ItemModel1">
                                <option value="0" selected>--Model--</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="product">Product:</label>
                        <div class="col-sm-10 col-md-4">
                            <select class="form-control" id="productSelect" name="productSelect">
                                <option value="0" selected>--Product--</option>
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

<script src="{{URL::to('js/add_stock.js')}}"></script>
<script>
    var token = '{{\Illuminate\Support\Facades\Session::token()}}';
    var url = '{{route('fill_dropdown')}}';
</script>