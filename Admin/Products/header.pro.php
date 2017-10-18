<?php
session_start();
if(!isset( $_SESSION['username'])){
   echo 'Please Login';
}


?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://plus.lankahost.net:2083/cpsess5605196824/viewer/home%2fsadhanap%2fImages/-desktop.png" type="image/png" sizes="32x32">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../CSS/style.css">
    <script type="text/javascript">
        function changeImage(element) {
            document.getElementById('imageReplace').src = element;
        }
    </script>
</head>

<body style="background-color: #ecebeb">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../../index.php">PC LIFE ONLINE</a>
        </div>
        <ul class="nav navbar-nav">
            <li ><a href="../../index.php">Home</a></li>
            <li ><a href="../../Porducts.php">Products</a></li>
            <li><a href="#">Store</a></li>
            <li><a href="#">Sales</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Pre Orders</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php

                    echo $_SESSION['username'];
                    ?> <span class="caret"></span></a>    <!--Set the session variable name -->
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a> </li>
                    <li><a href="#">Logout</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

