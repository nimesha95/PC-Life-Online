<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">

        <h1 align="center">Delivery Report</h1><br><br>
        <div class="col-md-12">

            <div class="table-responsive">


                <table id="mytable" class="table table-bordred table-striped">

                    <thead>


                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address 1</th>
                    <th>Address 2</th>
                    <th>City</th>
                    </thead>
                    <tbody>

                    @foreach($cust as $cus )
                        <tr>
                            <td>{{ $cus -> name}}</td>
                            <td>{{ $cus -> email}}</td>
                            <td>{{ $cus -> phone_no}}</td>
                            <td>{{ $cus -> addr_line1}}</td>
                            <td>{{ $cus -> addr_line2}}</td>
                            <td>{{ $cus -> addr_city}}</td>

                    @endforeach

                    </tbody>

                </table>

                <div class="clearfix"></div>


            </div>

        </div>
    </div>
</div>

</body>
</html>