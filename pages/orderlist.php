<?php
include "../misc/arraydb.php";
include "../misc/head.php";
?>
<script type="text/javascript" src="bestellformular/js.js"></script>

<style>
    thead tr th 
    {
    text-align: center;
    }
</style>
</head>
<body>
<header>
    <?php include "../misc/navbar.php";?>
</header>
<main role="main" class="container">
    <div class="jumbotron">
        <h4 class="display-4">Dynamische Getänkeliste</h4>
        <p class="lead">Diese Zeilen werden im Hintergrund durch eine Klasse erstellt</p>
        <hr class="my-4">
        <p>Sie kann beliebig nach einem Pattern erstellt werden. Die Buttons werden automatisch generiert.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Getränk</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="getr">
                </div>
            </div>
            <div class="col">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Preis</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="pre">
                </div>
            </div>
            <div class="col">
                <button type="button" class="btn btn-primary btn-sm" id="inputBtn">Erweitern</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Getränk</th>
                        <th scope="col">Preis (€)</th>
                        <th scope="col">Anzahl</th>
                        </tr>
                    </thead>
                    <tbody id="drinksList">
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="panel panel-default" id="p">
                    <div class="panel-heading">
                        <h3 class="panel-title" id="heading">
                            Gesamt:
                        </h3>
                    </div> 
                    <div class="row">
                        <div class="col-sm">
                            Getränke:
                        </div>
                        <div class="col-sm">
                            <span id="drinkCard"></span>
                            <div id="testing"></div>
                        </div>
                        <div class="col-sm">
                            <span id="drinkCardNumber"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "../misc/footer.php"; ?>