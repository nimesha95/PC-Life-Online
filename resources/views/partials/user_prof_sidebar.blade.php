<div class="col-md-3" style=" ">
    <!-- It can be fixed with bootstrap affix http://getbootstrap.com/javascript/#affix-->
    <div id="sidebar" class="well sidebar-nav">
        <h5><i class="glyphicon glyphicon-home"></i>
            <small><b>PROFILE MANAGEMENT</b></small>
        </h5>
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#" data-toggle="modal" data-target="#UpdateInfo">Update Information</a></li>
            <li><a href="#">View Profile</a></li>
        </ul>
        <h5><i class="glyphicon glyphicon-user"></i>
            <small><b>ORDERS</b></small>
        </h5>
        <ul class="nav nav-pills nav-stacked">
            <li><a href="{{route('user.orders')}}">Order History</a></li>
            <li><a href="{{route('user.getCart')}}">Cart</a></li>
        </ul>
    </div>
</div>