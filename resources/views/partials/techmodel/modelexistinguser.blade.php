<div class="modal fade" id="searchexistinguser" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Customize</h4>
            </div>

            <div class="modal-body">
                <h4> Questionier</h4>
                <div class="row">

                    <table border="0" class="table " style="padding:10px">

                        <form action="{{route('userregister')}}" method="post">
                            <tr>

                                <td><label for="comment">Enter the User Name</label></td>
                                <td><input type="text" class="form-control" Name="Name1" value=""
                                           placeholder="Enter the Customer's User ID"></td>
                                <td>
                                    <button type="Submit" class="subbutton">Search</button>
                                </td>
                            </tr>
                        </form>
                    </table>
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


