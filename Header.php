<?php

echo'
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Sadhana Pre School | '.$title.' </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/custom-styles.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/component.css">
        <link rel="stylesheet" href="css/font-awesome-ie7.css">
        
        
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <!-- Site header starts here -->

            


             <!-- main content starts here -->

            <div class="container b-radius-top">
                <div class="top-bar b-radius">
                    <div class="top-content">
                        <ul>
                            <li><a href="https://www.sadhanapreschool.com/"><i class="fw-icon-link icon"></i>www.sadhanapreschool.com</a></li>
                            <li><a href="#"><i class="fw-icon-envelope-alt icon"></i>info@sitename.com</a></li>
                            <li><a href="#"><i class="fw-icon-phone icon"></i>077-3509323</a></li>
                        </ul>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="fw-icon-facebook icon"></i></a></li>
                            <li><a href="#"><i class="fw-icon-twitter icon"></i></a></li>
                            <li><a href="#"><i class="fw-icon-linkedin icon"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="site-header">


                     <!-- Site Name starts here -->

                    <div class="site-name">
                        <h1>SADHANA PRE SCHOOL</h1>
                        <h5>Horagasmulla, Divulapitiya</h5>
                    </div>

                    <!-- Site Name ends -->

                     <!-- Menu starts here -->
                    <div class="menu">
                        <div class="navbar">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                               <i class="fw-icon-th-list"></i>
                            </a>
                            <div class="nav-collapse collapse">
                                <ul class="nav">
                                    <li ';if($title=='Home'){echo 'class="active"';} echo'><a href="index.php">Home</a></li>
                                   
                                    <li ';if($title=='History'){echo 'class="active"';} echo'><a href="Histroy.php">History</a></li>
                                    <li ';if($title=='Academic'){echo 'class="active"';} echo'><a href="Acdemic.php">Academic</a></li>
                                    <li ';if($title=='Events'){echo 'class="active"';} echo'><a href="Events.php">Events</a></li>
                                    <li ';if($title=='Achievements'){echo 'class="active"';} echo'><a href="#">Achievements</a></li>
                                    <li ';if($title=='Gallery'){echo 'class="active"';} echo'><a href="Gallery.php">Gallery</a></li>
                                    <li ';if($title=='New Admissions'){echo 'class="active"';} echo'><a href="#">New Admissions</a></li>
                                    <li ';if($title=='Contact'){echo 'class="active"';} echo'><a href="#">Contact</a></li>

                                </ul>

                            </div>
                        </div>
                    </div>

                    <!-- Menu ends -->
                </div>



';


?>