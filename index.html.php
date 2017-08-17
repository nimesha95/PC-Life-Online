
    <?php
        include('header.inc.php');
    ?>

    <div class="row">  <!-- This is for the number 1 in diagram -->
        <div class="col-sm-3 visible-lg">
            <p>This is space is left for the news bar</p>

        </div>
        <div class="col-sm-9">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/img/Cover1.jpg" alt="Los Angeles">
                    </div>

                    <div class="item">
                        <img src="/img/Cover2.jpg" alt="Chicago">
                    </div>

                    <div class="item">
                        <img src="/img/hiking-fb-cover.jpg" alt="New York">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


    </div>




    <div class="row">  <!-- This is for the number 1 in diagram -->
        <div class="col-sm-3 visible-lg">
            <p>News container 2</p>
        </div>
        <div class="col-sm-9">
            <p>Offer bar 2</p>
        </div>
    </div>

    <div class="row">
        <p align="center">Footer <a href="#"> Link</a> </p>
    </div>
</body>
</html>