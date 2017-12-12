<div class="col-md-3">
    <!-- It can be fixed with bootstrap affix http://getbootstrap.com/javascript/#affix-->
    <div id="sidebar" class="well sidebar-nav">
        <h5><i class="glyphicon glyphicon-home"></i>
            <small><b>MANAGEMENT</b></small>
        </h5>
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="{{route('admin.index')}}">Home</a></li>
            <li><a href="#" data-toggle="modal" data-target="#AddUserModal">Add</a></li>

        </ul>
        <h5><i class="glyphicon glyphicon-user"></i>
            <small><b>USERS</b></small>
        </h5>
        <ul class="nav nav-pills nav-stacked">
            <li><a href="{{route('admin.getUserHistory')}}">Login History</a></li>
        </ul>
    </div>
</div>