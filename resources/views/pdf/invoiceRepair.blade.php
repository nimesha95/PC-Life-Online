<div class="col-md-10 col-md-offset-1">
    <form class="form-horizontal" method="post" action="{{route('RepairInv')}}">
        <table class="table table-striped">
            <thead>

            </thead>
            <tbody>


            <tr>
                <td><img src="https://res.cloudinary.com/group-32/image/upload/v1513025171/Untitled-2_uj5ndo.png"></td>
                <td>
                    <img src='https://barcode.tec-it.com/barcode.ashx?data={{$Jobid}}&code=Code128&dpi=72'
                         alt='Barcode Generator TEC-IT'/>
                </td>
                {{ csrf_field() }}


            </tr>

            </tbody>
        </table>


        <div class="col-sm-12"><h4>Job Details</h4></div>

        <hr>

        <table class="table table-hover">
            <thead>

            </thead>
            <tbody>


            @foreach($qarrayj as $Custom)
                <tr>

                    <td><b>Customer Name</b></td>
                    <td>{{$Custom->user}}</td>
                    <td><b>Telephone No</b></td>
                    <td>{{$Custom->telno}}</td>
                </tr>

                <tr>

                    <td style="width: 150px"><b>Job Type</b></td>
                    <td style="width: 150px">{{$Custom->jobtype}}</td>
                    <td style="width: 150px"><b>Invoice No</b></td>
                    <td style="width:150px">{{$Custom->invoiceno}}</td>


                </tr>
                <tr>
                    <td><b>Device serial no</b></td>
                    <td>{{$Custom->Serialno}}</td>
                    <td><b>Device </b></td>
                    <td>{{$Custom->device}}</td>
                </tr>
                <tr>
                    <td><b>Condition</b></td>
                    <td>{{$Custom->Condition}}</td>
                    <td><b>Problem</b></td>
                    <td>{{$Custom->Problem}}</td>
                </tr>
                <tr>
                    <td><b>Price</b></td>
                    <td>{{$Custom->price}}</td>
                    <td><b>Total time</b></td>
                    <td>{{$Custom->totaltime}}</td>


                </tr>
                <tr>
                    <td><b>Order Date</b></td>
                    <td>{{$Custom->orderdate}}</td>
                    <td><b>Delivery Date</b></td>
                    <td>{{$Custom->deleverdate}}</td>
                </tr>
                <tr>
                    <td><b>Status</b></td>
                    <td>{{$Custom->status}}</td>
                    </td>
                </tr>


        @endforeach




    </form>


    </tbody>
    </table>


</div>
<hr>


<div><h4>Job Task</h4></div>


<table>

    <tbody>
    <thead>
    <tr>
        <th style="width: 150px"> Name</th>
        <th style="width: 150px"> Default Operation Time</th>


        <th style="width: 150px"> Default Involve Time</th>
        <th style="width: 150px"> Price</th>


    </tr>
    </thead>

    @foreach($qarrayt as $Custom)
        <tr>

            <td>{{$Custom->Name}}</td>
            <td>{{$Custom->DOPT}}</td>
            <td>{{$Custom->DINT}}</td>
            <td>{{$Custom->price}}</td>


        </tr>




        @endforeach


        </tbody>
</table>

<hr>
<table class="table table-hover">

    <tbody>


    @foreach($qarraya as $Custom)
        <tr>

            <td>{{$Custom->Q1}}</td>


        </tr>
        <tr>
            <td>{{$Custom->Q2}}</td>
        </tr>
        <tr>
            <td>{{$Custom->Q3}}</td>
        </tr>
        <tr>
            <td>{{$Custom->Q4}}</td>
        </tr>
        <br>
        <tr>
            <td>{{$Custom->Q5}}</td>
        </tr>



    @endforeach


    </tbody>
</table>
</div>
<hr>
I accept that the above details are correct and true according to my knowledge
<br>
<br>
Signature Of Customer - ..................................


<hr>
<br>
<br>
<br>
.......................................................................................................................................................................
</div>
<br>
<table class="table table-striped">
    <thead>

    </thead>
    <tbody>


    <tr>

        <td style="width: 250px">
            <img src='https://barcode.tec-it.com/barcode.ashx?data={{$Jobid}}&code=Code128&dpi=72'
                 alt='Barcode Generator TEC-IT'/>
        </td>
        <td style="width: 250px">
            <img src='https://barcode.tec-it.com/barcode.ashx?data={{$Jobid}}&code=Code128&dpi=72'
                 alt='Barcode Generator TEC-IT'/>
        </td>
        <td style="width: 250px">
            <img src='https://barcode.tec-it.com/barcode.ashx?data={{$Jobid}}&code=Code128&dpi=72'
                 alt='Barcode Generator TEC-IT'/>
        </td>
        {{ csrf_field() }}


    </tr>

    </tbody>
</table>


</div>


</div>

