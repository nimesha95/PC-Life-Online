<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>My page</title>

    <link rel="stylesheet" type="text/css" href="css/Style1.css">

    <script type="text/javascript">
        $(document).ready(function(){
            $('.search-box input[type="text"]').on("keyup input", function(){
                /* Get input value on change */
                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(".result");
                if(inputVal.length){
                    $.get("live_search.php", {term: inputVal}).done(function(data){
                        // Display the returned data in browser
                        resultDropdown.html(data);
                    });
                } else{
                    resultDropdown.empty();
                }
            });

            // Set search input value on click of result item
            $(document).on("click", ".result p", function(){
                $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                $(this).parent(".result").empty();
            });
        });
    </script>

</head>
<body>
<nav class="navbar navbar-inverse" >
        <div class="container-fluid">

            <!-- logo -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html.php" class="navbar-brand">PC LIFE ONLINE</a>
            </div>

            <!-- Menu items -->
            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
                    <li class="active" ><a href="index.html.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Desktop Computers <span class="caret"></span></a>
                        <ul class="dropdown-menu multi-column columns-2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="#"><b>Used Computers</b></a> </li>
                                        <li><a href="#">HP</a> </li>
                                        <li><a href="#">Samsung</a> </li>
                                        <li><a href="#">Lenovo</a> </li>
                                        <li><a href="#">Dell</a> </li>
                                        <li><a href="#">Others</a> </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="#"><b>Brand New Computers</b></a> </li>
                                        <li><a href="#">HP</a> </li>
                                        <li><a href="#">Samsung</a> </li>
                                        <li><a href="#">Lenovo</a> </li>
                                        <li><a href="#">Dell</a> </li>
                                        <li><a href="#">Others</a> </li>
                                    </ul>
                                </div>


                            </div>


                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laptop Computers <span class="caret"></span></a>
                        <ul class="dropdown-menu multi-column columns-2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="#"><b>Used Laptops</b></a> </li>
                                        <li><a href="#">HP</a> </li>
                                        <li><a href="#">Samsung</a> </li>
                                        <li><a href="#">Lenovo</a> </li>
                                        <li><a href="#">Dell</a> </li>
                                        <li><a href="#">Others</a> </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="#"><b>Brand New Laptops</b></a> </li>
                                        <li><a href="#">HP</a> </li>
                                        <li><a href="#">Samsung</a> </li>
                                        <li><a href="#">Lenovo</a> </li>
                                        <li><a href="#">Dell</a> </li>
                                        <li><a href="#">Others</a> </li>
                                    </ul>
                                </div>


                            </div>


                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accesories <span class="caret"></span></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="items.html.php?item=motherboard">Motherboard</a> </li>
                                        <li><a href="#">Ram</a> </li>
                                        <li><a href="#">Processors</a> </li>
                                        <li><a href="#">Hard Drives</a> </li>
                                        <li><a href="#">Casings </a> </li>
                                        <li><a href="#">Monitors </a> </li>
                                        <li><a href="#">Mouse </a> </li>
                                        <li><a href="#">Keyboards </a> </li>
                                        <li><a href="#">VGA Cards</a> </li>
                                        <li><a href="#">Coolers</a> </li>

                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="#">Power Supplies</a> </li>
                                        <li><a href="#">Mass Stage Devices</a> </li>
                                        <li><a href="#">Multimedia Speakers</a> </li>
                                        <li><a href="#">Memory Cards</a> </li>
                                        <li><a href="#">Optical Drives </a> </li>
                                        <li><a href="#">Cables </a> </li>
                                        <li><a href="#">UPS </a> </li>
                                        <li><a href="#">Network Devices and Acc. </a> </li>
                                        <li><a href="#">Printers And Acc.</a> </li>
                                        <li><a href="#">Scanners</a> </li>
                                        <li><a href="#">Laptop Acc.</a> </li>

                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="#"><b>Convertors</b></a> </li>
                                        <li><a href="#">Software Packages</a> </li>
                                        <li><a href="#">Virus Guards</a> </li>
                                        <li><a href="#">Smart Watches </a> </li>
                                        <li><a href="#">Tablets</a> </li>
                                        <li><a href="#">Other</a> </li>
                                    </ul>
                                </div>



                            </div>


                        </ul>
                    </li>
                    <! Drop down -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Services <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Repairs</a> </li>
                            <li><a href="#">Reselling</a> </li>
                            <li><a href="#">Delivery</a> </li>
                        </ul>
                    </li>
                    <li><a href="about.html.php">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <!-- Right allign -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <div class="search-box">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Search item" />
                            <div class="result" ></div>
                        </div>
                    </li>

                </ul>

            </div>
        </div>
    </nav>