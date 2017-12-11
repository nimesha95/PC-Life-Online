<div class="col-md-10 col-md-offset-1">
    <form class="form-horizontal" method="post" action="{{route('stock.subInv')}}">

        <H1>Invoice - {{$id}}</H1>
        <table>
            <tr>

                <td rowspan="5" style="width: 400px">
                    <img src='https://barcode.tec-it.com/barcode.ashx?data={{$id}}&code=Code128&dpi=96'
                         alt='Barcode Generator TEC-IT'/>
                </td>
            </tr>
            <tr>
                <td style="width: 100px">
                    Name :
                </td>
                <td style="width: 300px">
                    {{$user_info[0]->name}}
                </td>

            </tr>
            <tr>
                <td style="width: 100px">
                    Order Date :
                </td>
                <td style="width: 300px">
                    {{$order[0]->added}}
                </td>

            </tr>
            <tr>
                <td style="width: 100px">
                    Contact No :
                </td>
                <td style="width: 300px">
                    {{$user_info[0]->phone_no}}
                </td>

            </tr>
            <tr>
                <td style="width: 100px">
                    E-mail :
                </td>
                <td style="width: 300px">
                    {{$user_info[0]->email}}
                </td>

            </tr>
        </table>


        <hr>
        <table class="table table-striped" style="border: 1px solid white">
            <thead>

            <tr style="50px">
                <th class="col-md-2" style="width: 100px">Product ID</th>
                <th class="col-md-3" style="width: 100px">Name</th>
                <th class="col-md-2" style="width: 100px">Qty</th>
                <th class="col-md-4" style="width: 100px">Serial NO</th>
            </tr>
            </thead>
            <tbody>

            @foreach(Cart::content() as $row)
                <tr style="margin-top: 20px;">
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->qty}}</td>
                    <td>
                        @for($i=0;$i<$row->qty;$i++)
                            <div class="form-group">
                                <?php $str = $row->id . '-' . $i ?>
                                <input type="text" id="serialNo" value="{{$arr[$str]}}" class="form-control">
                                <br>
                            </div>
                        @endfor
                    </td>
                </tr>
            @endforeach
            </tbody>
    </form>
</div>

