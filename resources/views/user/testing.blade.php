@extends('layouts.master_fluid')

@section('title')
    Testing
@endsection

@section('header')
    @include('partials.header')

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
    <script src={{URL::to('js/locationpicker.js')}}></script>
@endsection

@section('content')
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#us11-dialog">Open Modal</button>


    <script src="http://api.mygeoposition.com/api/geopicker/api.js" type="text/javascript"></script>

    <script type="text/javascript">
        function lookupGeoData() {
            myGeoPositionGeoPicker({
                startAddress: 'White House, Washington',
                returnFieldMap: {
                    'geoposition1a': '<LAT>',
                    'geoposition1b': '<LNG>',
                    'geoposition1c': '<CITY>', /* ...or <COUNTRY>, <STATE>, <DISTRICT>,
                                                                           <CITY>, <SUBURB>, <ZIP>, <STREET>, <STREETNUMBER> */
                    'geoposition1d': '<ADDRESS>'
                }
            });
        }
    </script>

    Geo-Coordinates:
    <input type="text" name="geoposition1a" id="geoposition1a" size="10">
    <input type="text" name="geoposition1b" id="geoposition1b" size="10">
    <input type="text" name="geoposition1c" id="geoposition1c" size="10">
    <input type="text" name="geoposition1d" id="geoposition1d" size="70">
    <button type="button" onclick="lookupGeoData();">GeoPicker</button>

    <!-- Modal -->
    <div id="us11-dialog" class="modal fade" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal" style="width: 550px">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Location:</label>

                            <div class="col-sm-10"><input type="text" class="form-control" id="us11-address"
                                                          placeholder="Enter a location" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Radius:</label>

                            <div class="col-sm-5"><input type="text" class="form-control" id="us11-radius">
                            </div>
                        </div>
                        <div id="us11" style="width: 100%; height: 400px; position: relative; overflow: hidden;">
                            <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                <div class="gm-style"
                                     style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                    <div tabindex="0"
                                         style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;">
                                        <div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                    <div aria-hidden="true"
                                                         style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                        <div style="width: 256px; height: 256px; position: absolute; left: -19px; top: -41px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 30;">
                                                    <div aria-hidden="true"
                                                         style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                        <div style="width: 256px; height: 256px; position: absolute; left: -19px; top: -41px;">
                                                            <canvas width="256" height="256" draggable="false"
                                                                    style="width: 256px; height: 256px; user-select: none; position: absolute; left: 0px; top: 0px;"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                    <div aria-hidden="true"
                                                         style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -19px; top: -41px;"></div>
                                                    </div>
                                                </div>
                                                <div style="width: 22px; height: 40px; overflow: hidden; position: absolute; left: 264px; top: 160px; z-index: 200;">
                                                    <img alt=""
                                                         src="http://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png"
                                                         draggable="false"
                                                         style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                            </div>
                                            <div style="position: absolute; z-index: 0; left: 0px; top: 0px;">
                                                <div style="overflow: hidden; width: 550px; height: 400px;"><img
                                                            src="http://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i6054931&amp;2i4032297&amp;2e1&amp;3u15&amp;4m2&amp;1u550&amp;2u400&amp;5m5&amp;1e0&amp;5sen-US&amp;6sus&amp;10b1&amp;12b1&amp;token=116886"
                                                            style="width: 550px; height: 400px;"></div>
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                <div aria-hidden="true"
                                                     style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                    <div style="position: absolute; left: -19px; top: -41px; transition: opacity 200ms ease-out;">
                                                        <img draggable="false" alt=""
                                                             src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i23652!3i15751!4i256!2m3!1e0!2sm!3i405104558!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=38140"
                                                             style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gm-style-pbc"
                                             style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0; transition-duration: 0.8s;">
                                            <p class="gm-style-pbt">Use ctrl + scroll to zoom the map</p></div>
                                        <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                            <div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div>
                                        </div>
                                        <div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                <div class="gmnoprint"
                                                     style="width: 22px; height: 40px; overflow: hidden; position: absolute; opacity: 0.01; left: 264px; top: 160px; z-index: 200;">
                                                    <img alt=""
                                                         src="http://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png"
                                                         draggable="false" usemap="#gmimap12"
                                                         style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    <map name="gmimap12" id="gmimap12">
                                                        <area href="javascript:void(0)" log="miw"
                                                              coords="8,0,5,1,4,2,3,3,2,4,2,5,1,6,1,7,0,8,0,14,1,15,1,16,2,17,2,18,3,19,3,20,4,21,5,22,5,23,6,24,7,25,7,27,8,28,8,29,9,30,9,33,10,34,10,40,11,40,11,34,12,33,12,30,13,29,13,28,14,27,14,25,15,24,16,23,16,22,17,21,18,20,18,19,19,18,19,17,20,16,20,15,21,14,21,8,20,7,20,6,19,5,19,4,18,3,17,2,16,1,14,1,13,0,8,0"
                                                              shape="poly" title="Drag Me" style="cursor: pointer;">
                                                    </map>
                                                </div>
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                                <div style="z-index: -202; cursor: pointer; display: none;">
                                                    <div style="width: 30px; height: 27px; overflow: hidden; position: absolute;">
                                                        <img alt="" src="http://maps.gstatic.com/mapfiles/undo_poly.png"
                                                             draggable="false"
                                                             style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 90px; height: 27px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                        <a target="_blank"
                                           href="https://maps.google.com/maps?ll=6.935599,79.849441&amp;z=15&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3"
                                           title="Click to see this area on Google Maps"
                                           style="position: static; overflow: visible; float: none; display: inline;">
                                            <div style="width: 66px; height: 26px; cursor: pointer;"><img alt=""
                                                                                                          src="http://maps.gstatic.com/mapfiles/api-3/images/google4.png"
                                                                                                          draggable="false"
                                                                                                          style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                            </div>
                                        </a></div>
                                    <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 0px; height: 0px; position: absolute; left: 5px; top: 5px;">
                                        <div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div>
                                        <div style="font-size: 13px;">Map data ©2018 Google</div>
                                        <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;">
                                            <img alt="" src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png"
                                                 draggable="false"
                                                 style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                        </div>
                                    </div>
                                    <div class="gmnoprint"
                                         style="z-index: 1000001; position: absolute; right: 0px; bottom: 0px; width: 12px;">
                                        <div draggable="false" class="gm-style-cc"
                                             style="user-select: none; height: 14px; line-height: 14px;">
                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                <div style="width: 1px;"></div>
                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                            </div>
                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                <a style="text-decoration: none; cursor: pointer;">Map Data</a><span
                                                        style="display: none;">Map data ©2018 Google</span></div>
                                        </div>
                                    </div>
                                    <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                        <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                            Map data ©2018 Google
                                        </div>
                                    </div>
                                    <div class="gmnoprint gm-style-cc" draggable="false"
                                         style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                            <div style="width: 1px;"></div>
                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                        </div>
                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                            <a href="https://www.google.com/intl/en-US_US/help/terms_maps.html"
                                               target="_blank"
                                               style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms
                                                of Use</a></div>
                                    </div>
                                    <button draggable="false" title="Toggle fullscreen view"
                                            aria-label="Toggle fullscreen view" type="button"
                                            style="background: none; border: 0px; margin: 10px 14px; padding: 0px; position: absolute; cursor: pointer; user-select: none; width: 25px; height: 25px; overflow: hidden; top: 0px; right: 0px;">
                                        <img alt="" src="http://maps.gstatic.com/mapfiles/api-3/images/sv9.png"
                                             draggable="false" class="gm-fullscreen-control"
                                             style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                    </button>
                                    <div draggable="false" class="gm-style-cc"
                                         style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px; display: none;">
                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                            <div style="width: 1px;"></div>
                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                        </div>
                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                            <a target="_new" title="Report errors in the road map or imagery to Google"
                                               href="https://www.google.com/maps/@6.9355989,79.8494413,15z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                                               style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report
                                                a map error</a></div>
                                    </div>
                                    <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom"
                                         draggable="false" controlwidth="0" controlheight="0"
                                         style="margin: 10px; user-select: none; position: absolute; bottom: 0px; right: 0px; display: none;">
                                        <div class="gmnoprint" style="display: none; position: absolute;">
                                            <div draggable="false"
                                                 style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255);">
                                                <button draggable="false" title="Zoom in" aria-label="Zoom in"
                                                        type="button"
                                                        style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none;">
                                                    <div style="overflow: hidden; position: absolute;"><img alt=""
                                                                                                            src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png"
                                                                                                            draggable="false"
                                                                                                            style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;">
                                                    </div>
                                                </button>
                                                <div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230);"></div>
                                                <button draggable="false" title="Zoom out" aria-label="Zoom out"
                                                        type="button"
                                                        style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none;">
                                                    <div style="overflow: hidden; position: absolute;"><img alt=""
                                                                                                            src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png"
                                                                                                            draggable="false"
                                                                                                            style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;">
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="gmnoprint" controlwidth="28" controlheight="0"
                                             style="display: none; position: absolute;">
                                            <div title="Rotate map 90 degrees"
                                                 style="width: 28px; height: 28px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; display: none;">
                                                <img alt=""
                                                     src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png"
                                                     draggable="false"
                                                     style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                            <div class="gm-tilt"
                                                 style="width: 0px; height: 0px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; top: 0px; cursor: pointer;">
                                                <img alt=""
                                                     src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png"
                                                     draggable="false"
                                                     style="position: absolute; left: 0px; top: 0px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                        <div class="m-t-small">
                            <label class="p-r-small col-sm-1 control-label">Lat.:</label>

                            <div class="col-sm-3"><input type="text" class="form-control" style="width: 110px"
                                                         id="us11-lat"></div>
                            <label class="p-r-small col-sm-2 control-label">Long.:</label>

                            <div class="col-sm-3"><input type="text" class="form-control" style="width: 110px"
                                                         id="us11-lon"></div>
                        </div>
                        <div class="clearfix"></div>
                        <script>
                            $('#us11').locationpicker({
                                location: {latitude: 46.15242437752303, longitude: 2.7470703125},
                                radius: 50,
                                inputBinding: {
                                    latitudeInput: $('#us11-lat'),
                                    longitudeInput: $('#us11-lon'),
                                    radiusInput: $('#us11-radius'),
                                    locationNameInput: $('#us11-address')
                                },
                                enableAutocomplete: true
                            });
                            $('#us11-dialog').on('shown.bs.modal', function () {
                                $('#us11').locationpicker('autosize');
                            });
                        </script>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <script type="text/javascript">
        $('#myModal').locationpicker({
            location: {
                latitude: 46.15242437752303,
                longitude: 2.7470703125
            },
            radius: 300,
            inputBinding: {
                latitudeInput: $('#us11-lat'),
                longitudeInput: $('#us11-lon'),
                radiusInput: $('#us11-radius'),
                locationNameInput: $('#us11-address')
            },
            enableAutocomplete: true
        });
        $('#modal-dialog').on('shown.bs.modal', function () {
            $('#us11').locationpicker('autosize');
        });
    </script>
@endsection
