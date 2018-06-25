<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css"\>
    <link rel="stylesheet" href="css/bootstrap-grid.css"\>
    <link rel="stylesheet" href="css/bootstrap-reboot.css"\>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link" href="#">Pricing</a>
            <a class="nav-item nav-link disabled" href="#">Disabled</a>
            </div>
        </div>
        </nav>
        <div class="jumbotron">
            <h4 class="display-4">Willkommen</h4>
            <p class="lead">Willkommen auf meiner PHP und Javascript Testseite</p>
            <hr class="my-4">
            <p>Hier wird es in Zukunft eine Ansammlung an Tests und Projekten geben die meine Skills und mein Können unter Beweis stellen</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
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
                include "misc/arraydb.php";
                include "misc/tabfunction.php";
                tabledb($userdb);
                ?>
            </tbody>
        </table>
    </div>


    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>