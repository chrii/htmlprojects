<?php
    include "../misc/arraydb.php";
    include "../misc/head.php";
    include "../misc/navbar.php";
    include "../misc/sqldb.php";

?>
</head>
<body>
<div class="jumbotron">
    <h4 class="display-4">Willkommen</h4>
    <p class="lead">Willkommen auf meiner PHP und Javascript Testseite</p>
    <hr class="my-4">
    <p>Hier wird es in Zukunft eine Ansammlung an Tests und Projekten geben die meine Skills und meine Fertigkeiten unter Beweis stellen</p>
    <!-- Möglichkeit finden den letzten Datenbank Eintrag von hier zu verweisen --> 
    <a class="btn btn-primary btn-lg" href="#" role="button">Latest Blog</a>
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
        $table->createRow();
        
        ?>
    </tbody>
</table>
<?php include "../misc/footer.php"; ?>