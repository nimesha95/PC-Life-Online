<div class="modal fade" id="More" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">More</h4>
            </div>

            <div class="modal-body">
                <div class="modal-body">
                    <div class="row" style="position: relative; top: -20px ">
                        <div class="col-sm-2"><img src="{{ asset('img/technician/repair.png')}}"
                                                   style=" width: 50px;height: 50px; display: inline-block"></div>
                        <div class="col-sm-10"><h4> View All Jobs</h4></div>

                    </div>

                    <div class="row">
                        <div class="col-sm-3"><a href="{{url('technician/Jobs/Repair')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/repair.png')}}" style="">
                                    <p>Repair</p></div>

                            </a>
                        </div>
                        <div class="col-sm-3"><a href="{{url('technician/Jobs/Service')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/repair.png')}}" style="">
                                    <p>Service</p></div>

                            </a>
                        </div>
                        <div class="col-sm-3"><a href="{{url('technician/Jobs/Company Warrnaty')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/repair.png')}}" style="">
                                    <p>Company </p></div>

                            </a>
                        </div>
                        <div class="col-sm-3"><a href="{{url('technician/Jobs/Completed')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/repair.png')}}" style="">
                                    <p>Completed</p></div>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row" style="position: relative; top: -20px ">
                        <div class="col-sm-2"><img src="{{ asset('img/technician/settings.png')}}"
                                                   style=" width: 50px;height: 50px; display: inline-block"></div>
                        <div class="col-sm-10"><h4> Settings</h4></div>

                    </div>
                    <div class="row">
                        <div class="row">

                            <div class="col-sm-3" data-toggle="modal" data-target="#Customize" data-dismiss="modal"
                                 style="position: relative; left: 10px">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/settings.png')}}" style="">
                                    <p>Customize</p></div>


                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal">Close</button>
            </div>
        </div>

    </div>
</div>