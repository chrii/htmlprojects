<?php
    include "../misc/arraydb.php";
    include "../misc/tabfunction.php";
    include "../misc/head.php";
    include "../misc/navbar.php";
?>
</head>
<body>
    <!-- <div class="bmi-calc">
        <h3></h3>
        <br />

        <label for="height">Körpergröße in Meter: </label>
        <input type="number" id="height" name="height"/>
        <br />

        <label for="weight">Gewicht in Kilogramm:</label>
        <input type="number" id="weight" name="weight"/>
        <br />
        <div>Dein BMI ist: <span id="liveSwitch">XXX</span></div>
        <br />
        <button id="saveBmi" >BMI Speichern</button>
        <h3>Laut BMI hast du <span id="weight-option"></span>.</h3>
        <div><h4>Zuletzt gespeichert:</h4>
            <ul>
            <span id="listElement"></span>
            </ul>
        <p>Dies ergibt einen Durchschnittswert von: <span id="durchschnitt"></span></p>
        </div>
        <br />
        <div> Die Klickzahl ist: <span id="cCounter"></span></div>
        <button id="calculate">Berechnen</button>
    </div> -->

<div class="container row bmi-calc">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">BMI-Rechner</h5>
        <p class="card-text">        
            <label for="height">Körpergröße in Meter: </label>
            <input type="number" id="height" name="height"/>
            <br />
            <label for="weight">Gewicht in Kilogramm:</label>
            <input type="number" id="weight" name="weight"/>
            <br />
        </p>
        <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" id="saveBmi">
            Berechnen
        </button>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><div>Dein BMI ist: <span id="liveSwitch">XXX</span></div></h5>
        
        <p class="card-text">        
            <h3>Laut BMI hast du <span id="weight-option"></span>.</h3>
        </p>
      </div>
    </div>
  </div>
</div>

    <script type="text/javascript" src="bmi/index.js"></script>
<?php include "../misc/footer.php"; ?>