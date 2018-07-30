</head>
<body>
<header>
    <?php
    require "../init/init.php";
    include "../layout/navbar.php";
    ?>
</header>
<main role="class" class="container">
    <div class="container">
        <div class="content">
            <h1 class="display-4">Blog</h1>
            <div class="row">
                <div class="col-12 col-md-8">
                <?php
                    $postRepo = new App\Posts\PostsRepository($blogdb);
                    $getter = $_GET['id'];
                    if($getter == 'blogpage'){$getter = 1;}
                    $blogpostSingle = $postRepo->getSingleEntry($getter);
                ?>
                        <div class='card' style="margin-bottom: 10px;">
                            <div class='card-header lead'>
                                <?php echo $blogpostSingle->title; ?>
                            </div>
                            <div class='card-body'>
                                <p><?php echo nl2br($blogpostSingle->content); ?></p>
                            </div>
                        </div>

                </div>
                <div class="col-6 col-md-4">
                    <ul class="list-group list-group-flush lead">
                        <?php 
                            $blogpostAll = $postRepo->getAllEntrys();
                            foreach($blogpostAll as $blogList): ?>
                                <li class='list-group-item list-group-item-dark rounded small'>
                                    <a href="blogpage.php?id=<?php echo $blogList->id; ?>">
                                        <?php echo $blogList->title;?>
                                    </a>
                                </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</main>
<?php include "../layout/footer.php"; ?>