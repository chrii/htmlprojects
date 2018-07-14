<?php
    include "../misc/arraydb.php";
    include "../misc/head.php";
?>
    <title>Reaktionstest</title>
    <script type="text/javascript" src="reaktionstest/javascript.js"></script>
</head>
<body>
<header>
    <?php include "../misc/navbar.php";?>
</header>
<main role="main" class="container">
    <div class="container" id="reactfield">
        <div class="jumbotron">
            <h4 class="display-4">Reaktionstest</h4>
            <p class="lead"></p>
            <hr class="my-4">
            <p>Klicke in das Feld. Sobald die Seite grau wird, klicke erneut.<br/>
            Die Bestenliste wird gelöscht sobald die Seite neu geladen wird.</p>
        </div>
    </div>

    <div class="container">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Bestenliste:</h5>
            <p class="card-text"><ol id="hallOfFame"></ol></p>
        </div>
        </div>
    </div>
</main>
<?php include "../misc/footer.php"; ?>