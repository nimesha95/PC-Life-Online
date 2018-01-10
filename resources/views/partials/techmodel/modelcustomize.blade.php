<div class="modal fade" id="Customize" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Customize</h4>
            </div>

            <div class="modal-body">
                <div class="modal-body">
                    <h4> Questionier</h4>
                    <div class="row">
                        <div class="col-sm-3"><a href="{{url('technician/custom/DQ')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/desktop.png')}}" style="">
                                    <p>Desktop</p></div>

                            </a>
                        </div>
                        <div class="col-sm-3"><a href="{{url('technician/custom/LQ')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/laptop.png')}}" style="">
                                    <p>Laptop</p></div>

                            </a>
                        </div>
                        <div class="col-sm-3"><a href="{{url('technician/custom/TQ')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/tablet.png')}}" style="">
                                    <p>Tablet</p></div>

                            </a>
                        </div>
                        <div class="col-sm-3"><a href="{{url('technician/custom/OQ')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/otherdev.png')}}" style="">
                                    <p>Other</p></div>

                            </a>
                        </div>
                    </div>

                </div>

                <div class="modal-body">
                    <h4> Device Acceptance</h4>
                    <div class="row">
                        <div class="col-sm-3"><a href="{{url('technician/custom/DA')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/desktop.png')}}" style="">
                                    <p>Desktop</p></div>

                            </a>
                        </div>
                        <div class="col-sm-3"><a href="{{url('technician/custom/LA')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/laptop.png')}}" style="">
                                    <p>Laptop</p></div>

                            </a>
                        </div>
                        <div class="col-sm-3"><a href="{{url('technician/custom/TA')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/tablet.png')}}" style="">
                                    <p>Tablet</p></div>

                            </a>
                        </div>
                        <div class="col-sm-3"><a href="{{url('technician/custom/OA')}}">
                                <div class="butt" data-toggle="modal">
                                    <img src="{{ asset('img/technician/otherdev.png')}}" style="">
                                    <p>Other</p></div>

                            </a>
                        </div>
                    </div>


                </div>

                <div class="modal-body">
                    <h4> Other Settings</h4>
                    <div class="row">
                        <div class="col-sm-3"><a href="{{url('technician/customtask')}}">
                            <div class="butt" data-toggle="modal">
                                <img src="{{ asset('img/technician/Settings.png')}}" style="">
                                <p>Desktop</p></div>

                            </a>
                    </div>


                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal"
                        data-target="#RemoveUserModal">Close
                </button>
            </div>
        </div>

    </div>
</div>


