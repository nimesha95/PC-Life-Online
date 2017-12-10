
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
                                    <li><a href="{{ url('/acc/Motherboard') }}">Motherboard</a></li>
                                    <li><a href="{{ url('/acc/Ram') }}">Ram</a></li>
                                    <li><a href="{{ url('/acc/Processor') }}">Processors</a></li>
                                    <li><a href="{{ url('/acc/Hard_Drive') }}">Hard Drives</a></li>
                                    <li><a href="{{ url('/acc/Casings') }}">Casings </a></li>
                                    <li><a href="{{ url('/acc/Monitors') }}">Monitors </a></li>
                                    <li><a href="{{ url('/acc/Mouse') }}">Mouse </a></li>
                                    <li><a href="{{ url('/acc/Keyboard') }}">Keyboards </a></li>
                                    <li><a href="{{ url('/acc/VGA_Cards') }}">VGA Cards</a></li>
                                    <li><a href="{{ url('/acc/Coolers') }}">Coolers</a></li>

                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <li><a href="{{ url('/acc/Power_Supply') }}">Power Supplies</a></li>
                                    <li><a href="{{ url('/acc/Mass_Storage') }}">Mass Storage Devices</a></li>
                                    <li><a href="{{ url('/acc/Speakers') }}">Multimedia Speakers</a></li>
                                    <li><a href="{{ url('/acc/Memory_Cards') }}">Memory Cards</a></li>
                                    <li><a href="{{ url('/acc/Optical_Drives') }}">Optical Drives </a></li>
                                    <li><a href="{{ url('/acc/Cables') }}">Cables </a></li>
                                    <li><a href="{{ url('/acc/UPS') }}">UPS </a></li>
                                    <li><a href="{{ url('/acc/Network_Devices') }}">Network Devices and Acc. </a></li>
                                    <li><a href="{{ url('/acc/Printer') }}">Printers And Acc.</a></li>
                                    <li><a href="{{ url('/acc/Scanner') }}">Scanners</a></li>
                                    <li><a href="{{ url('/acc/Laptop_Acc') }}">Laptop Acc.</a></li>

                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <li><a href="{{ url('/acc/Converters') }}">Convertors</a></li>
                                    <li><a href="{{ url('/acc/Softwares') }}">Software Packages</a></li>
                                    <li><a href="{{ url('/acc/Virus_Guard') }}">Virus Guards</a></li>
                                    <li><a href="{{ url('/acc/Smart_Watch') }}">Smart Watches </a></li>
                                    <li><a href="{{ url('/acc/Tablet') }}">Tablets</a></li>
                                    <li><a href="{{ url('/acc/Other') }}">Other</a></li>
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
                <li class="dropdown drp">
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
                            <li><a class="signout_link" href="{{ route('user.logout') }}">Sign Out</a></li>
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