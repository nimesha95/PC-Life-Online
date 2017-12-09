<div class="col-md-10 col-md-offset-1">
    <form class="form-horizontal" method="post" action="{{route('stock.subInv')}}">
        <table class="table table-striped">
            <thead>
            <tr>
                <th class="col-md-2">Product ID</th>
                <th class="col-md-3">Name</th>
                <th class="col-md-2">Qty</th>
                <th class="col-md-4">Serial NO</th>
            </tr>
            </thead>
            <tbody>

            @foreach(Cart::content() as $row)
                <tr>
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

