<?php
    include "../misc/arraydb.php";
    include "../misc/tabfunction.php";
    include "../misc/head.php";
    include "../misc/navbar.php";
?>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-8">

            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="../pic/backsmith.png??800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide" alt="First slide">
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
            </div>
        </div>
        <div class="col-sm-4">Zweiter Teil</div>
    </div>
</div>




<?php include "../misc/footer.php"; ?>