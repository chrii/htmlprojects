<?php
    include "../misc/arraydb.php";
    include "../misc/head.php";
    include "../misc/navbar.php";
?>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-8">

<ol class="carousel-indicators">
            <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100" src="../pic/backsmith.png" class="img-fluid"></li>
            <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg" class="img-fluid"></li>
            <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg" class="img-fluid"></li>
        </ol>
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="../pic/backsmith.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="../pic/indie.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../pic/ollie.png" alt="Third slide">
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->

    </div>
            <!--<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../pic/backsmith.png?800x400?auto=yes&bg=666&fg=444&text=first slide" alt="Second slide" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../pic/ollie.png?800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../pic/indie.png?800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>-->
        </div>
        <div class="col-sm-4">Zweiter Teil</div>
        </div>
</div>
<div class="container">

</div>


<?php include "../misc/footer.php"; ?>