</head>
<body>
  <header>
    <?php 
    require "../init/init.php";
    require "../layout/navbar.php";
    ?>
  </header>
  <main role="main" class="container">
    <div class="container row bmi-calc">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">BMI-Rechner</h5>
            <p class="card-text">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Körpergröße in Meter:</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="height">
                </div>
                <br />
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Gewicht in Kilogramm:</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="weight">
                </div>
                <br />
            </p>
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
  </main>
  <script type="text/javascript" src="../apps/javascript/bmi/index.js"></script>
  <?php include "../layout/footer.php"; ?>