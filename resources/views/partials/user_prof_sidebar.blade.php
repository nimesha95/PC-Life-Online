<div class="col-md-3">
    <!-- It can be fixed with bootstrap affix http://getbootstrap.com/javascript/#affix-->
    <div id="sidebar" class="well sidebar-nav"
         style="background-color: white; box-shadow: 0px 0px 5px rgba(0,0,0,0.3); border-radius: 10px">
        <h5><i class="glyphicon glyphicon-home"></i>
            <small><b>PROFILE MANAGEMENT</b></small>
        </h5>
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="{{route('user.profile1')}}">View Profile</a></li>
            <li><a href="#" data-toggle="modal" data-target="#UpdateInfo">Update Information</a></li>

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