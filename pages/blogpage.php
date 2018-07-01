<?php
    include "../misc/arraydb.php";
    include "../misc/head.php";
    include "../misc/navbar.php";
    include "../misc/sqldb.php";
?>
</head>
<body>
<?php  ?>
    <div class="container">
        <div class="content">
            <h1 class="display-4">Blog</h1>
            <div class="row">
                <div class="col-12 col-md-8">
                <?php   //TODO: Titlenames str_replace um sie als Sprungmarke benutzen zu können => $_GET !!
                    $resource = getEntry(); 
                    foreach($resource AS $blogpost): ?>
                        <div class='card'>
                            <div class='card-header lead'>
                                <?php echo $blogpost['title']; ?>
                            </div>
                            <div class='card-body'>
                                <p><?php echo $blogpost['content']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-6 col-md-4">
                    <ul class="list-group list-group-flush lead">
                        <?php 
                            $res = getEntry(); 
                            foreach($res as $blogList): ?>
                                <li class='list-group-item list-group-item-dark'>
                                    <a href=" blogpage.php?title=<?php echo $blogList['title']; ?>">
                                        <?php echo $blogList['title']; ?>
                                    </a>
                                </li>
                        <?php endforeach; var_dump($_GET); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php include "../misc/footer.php"; ?>