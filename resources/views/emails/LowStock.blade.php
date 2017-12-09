<html>
<head>
    <title>Stock Level Critical</title>
</head>
<body>

<p>The follwing items are out of stock</p>
<ul>
    @foreach($low_stock as $item)
        <li>{{$item}}</li>

    @endforeach
</ul>
<p>Please Consider Reorder</p>
</body>
</html>