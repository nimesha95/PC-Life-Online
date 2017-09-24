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
            <a class="navbar-brand" href="/">PC LIFE ONLINE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home <span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Desktop Computers <span class="caret"></span></a>
                    <ul class="dropdown-menu multi-column columns-2">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="multi-column-dropdown">
                                    <li><a href="{{ url('/desktops/used') }}"><b>Used Computers</b></a></li>
                                    <li><a href="{{ url('/desktops/used/HP') }}">HP</a></li>
                                    <li><a href="{{ url('/desktops/used/Samsung') }}">Samsung</a></li>
                                    <li><a href="{{ url('/desktops/used/Lenovo') }}">Lenovo</a></li>
                                    <li><a href="{{ url('/desktops/used/Dell') }}">Dell</a></li>
                                    <li><a href="{{ url('/desktops/used/Other') }}">Others</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="multi-column-dropdown">
                                    <li><a href="{{ url('/desktops/new') }}"><b>Brand New
                                                Computers</b></a></li>
                                    <li><a href="{{ url('/desktops/new/HP') }}">HP</a></li>
                                    <li><a href="{{ url('/desktops/new/Samsung') }}">Samsung</a></li>
                                    <li><a href="{{ url('/desktops/new/Lenovo') }}">Lenovo</a></li>
                                    <li><a href="{{ url('/desktops/new/Dell') }}">Dell</a></li>
                                    <li><a href="{{ url('/desktops/new/Other') }}">Others</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laptop Computers <span
                                class="caret"></span></a>
                    <ul class="dropdown-menu multi-column columns-2">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="multi-column-dropdown">
                                    <li><a href="{{ url('/laptops/used') }}"><b>Used Laptops</b></a></li>
                                    <li><a href="{{ url('/laptops/used/HP') }}">HP</a></li>
                                    <li><a href="{{ url('/laptops/used/Samsung') }}">Samsung</a></li>
                                    <li><a href="{{ url('/laptops/used/Lenovo') }}">Lenovo</a></li>
                                    <li><a href="{{ url('/laptops/used/Dell') }}">Dell</a></li>
                                    <li><a href="{{ url('/laptops/used/Other') }}">Others</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="multi-column-dropdown">
                                    <li><a href="{{ url('/laptops/new') }}"><b>Brand New
                                                Laptops</b></a></li>
                                    <li><a href="{{ url('/laptops/new/HP') }}">HP</a></li>
                                    <li><a href="{{ url('/laptops/new/Samsung') }}">Samsung</a></li>
                                    <li><a href="{{ url('/laptops/new/Lenovo') }}">Lenovo</a></li>
                                    <li><a href="{{ url('/laptops/new/Dell') }}">Dell</a></li>
                                    <li><a href="{{ url('/laptops/new/Other') }}">Others</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accessories <span
                                class="caret"></span></a>
                    <ul class="dropdown-menu multi-column columns-3">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <li><a href="#">Motherboard</a></li>
                                    <li><a href="#">Ram</a></li>
                                    <li><a href="#">Processors</a></li>
                                    <li><a href="#">Hard Drives</a></li>
                                    <li><a href="#">Casings </a></li>
                                    <li><a href="#">Monitors </a></li>
                                    <li><a href="#">Mouse </a></li>
                                    <li><a href="#">Keyboards </a></li>
                                    <li><a href="#">VGA Cards</a></li>
                                    <li><a href="#">Coolers</a></li>

                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <li><a href="#">Power Supplies</a></li>
                                    <li><a href="#">Mass Storage Devices</a></li>
                                    <li><a href="#">Multimedia Speakers</a></li>
                                    <li><a href="#">Memory Cards</a></li>
                                    <li><a href="#">Optical Drives </a></li>
                                    <li><a href="#">Cables </a></li>
                                    <li><a href="#">UPS </a></li>
                                    <li><a href="#">Network Devices and Acc. </a></li>
                                    <li><a href="#">Printers And Acc.</a></li>
                                    <li><a href="#">Scanners</a></li>
                                    <li><a href="#">Laptop Acc.</a></li>

                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <li><a href="#">Convertors</a></li>
                                    <li><a href="#">Software Packages</a></li>
                                    <li><a href="#">Virus Guards</a></li>
                                    <li><a href="#">Smart Watches </a></li>
                                    <li><a href="#">Tablets</a></li>
                                    <li><a href="#">Other</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('user.getCart') }}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart
                        <span class="badge">{{Auth::check()? Cart::count() : ''}}</span>
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