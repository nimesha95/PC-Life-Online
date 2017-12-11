<div class="col-md-10 col-md-offset-1">
    <form class="form-horizontal" method="post" action="{{route('RepairInv')}}">
        <table class="table table-striped">
            <thead>

            </thead>
            <tbody>


                <tr>
                    <td>
                        <img src='https://barcode.tec-it.com/barcode.ashx?data={{$Jobid}}&code=Code128&dpi=72' alt='Barcode Generator TEC-IT'/>
                    </td>
                    {{ csrf_field() }}
                    <td></td>

                </tr>

            </tbody>
    </form>
</div>

