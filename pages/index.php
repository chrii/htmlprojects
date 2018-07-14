<?php
    include "../misc/arraydb.php";
    include "../misc/head.php";
    include "../misc/sqldb.php";

    $res = getEntry();
    $counter = 0;
    foreach($res as $count)
    {
        $counter++;
    }
?>
</head>
<body>
<header>
    <?php include "../misc/navbar.php";?>
</header>
<main role="main" class="container">
    <div class="jumbotron">
        <h4 class="display-4">Willkommen</h4>
        <p class="lead">Willkommen auf meiner PHP und Javascript Testseite</p>
        <hr class="my-4">
        <p>Hier wird es in Zukunft eine Ansammlung an Tests und Projekten geben die meine Skills und meine Fertigkeiten unter Beweis stellen</p>
        <!-- Möglichkeit finden den letzten Datenbank Eintrag von hier zu verweisen --> 
        <a class="btn btn-primary btn-lg" href="../pages/blogpage.php?id=<?php echo $counter; ?>" role="button">Latest Blog</a>
    </div>
<h4 class="display-4">User</h4>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Vorname</th>
            <th scope="col">Nachname</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $table = new CreateTable($userdb);
        $test = $table->createRow();
        foreach($test as $key)
        {
            echo $key;
        }
        
        ?>
    </tbody>
</table>
</main>
<?php include "../misc/footer.php"; ?>