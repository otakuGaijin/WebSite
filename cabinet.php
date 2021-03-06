<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabinet de gynécologie</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Mystyle.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/parallax.js"></script>
  </head>

  <body>

    <!-- Header -->

    <header>
      <div class="jumbotron topband">
        <div class="">
          <div class="row" style="margin:0px;">
            <div class="col-sm-9">
              <h2>
                <strong>
                  Cabinet de gynécologie, obstétrique et échographie
                </strong>
              </h2>
              <h3>
                <span class="titredoc"><strong>D</strong>r Gérard <strong>BARRAL</strong>,</span>
                <span class="titredoc"><strong>D</strong>r Franck <strong>JACQUOT</strong>,</span>
                <span><strong>D</strong>r Irina <strong>HERGHEA</strong>,</span>
                <br> Marlène <strong>BARRAL</strong> Sage-femme
              </h3>
            </div>
            <div class="col-sm-3 blockadresse">
              <h3>
                12 chemin de la Croix Pivort,<br><strong>69110, Sainte-Foy-Lès-Lyon</strong>
              </h3>
              <h3>
                <strong>Tel:</strong> 04.78.59.82.51
              </h3>
            </div>
          </div>
        </div>
      </div>

      <!-- responsive navbar -->
      <section>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">
                <i class="fa fa-medkit fa-lg" aria-hidden="true"></i>
              </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class=""><a href="index.php">Accueil</a></li>
                <li class=""><a href="equipe.php">Equipe médicale</a></li>
                <li class="active"><a href="cabinet.php">Cabinet</a></li>
                <li class=""><a href="contact.php">Contact</a></li>
                <li class=""><a href="access.php">Accès</a></li>
                <li class=""><a href="information.php">Informations</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </section>

    </header>
    <!-- Cabinet block -->

    <div class="container col-sm-12">
      <div class="row">
        <div class="col-sm-6">
            <div class="panel-heading">
              <h2 class="pagetitle"><strong><img src="img/room.png" alt="" />CABINET :</strong></h2>
            </div>
            <div class="panel-body">
              <h3> <strong>Locaux :</strong> </h3>
              <p>
                2 bureaux de consultation avec salle d'examen dédiée <br>
                1 salle d'échographie <br>
                1 salle d'attente <br>
                1 secrétariat <br>
              </p>
            </div>
        </div>
        <div class="col-sm-6">
          <img src="img\salle.jpg" alt="" />
        </div>
      </div>
    </div><br><br>
    <div class="container colsm-12">
      <div class="row">
        <div class="panel-body">
          <h3><strong>Plateau technique :</strong></h3>
            <div class="col-md-6">
              <p>
                Dossiers médicaux informatisés avec le logiciel Axisante. <br>
                Feuilles de soins électroniques établies avec la carte vitale par logiciel Axiam. <br>
                Résultats d'examens informatisés avec le bioserveur Apycript. <br>
                Echographe VOLUSON E8 (2D - 3D et 4D) année 2017. <br>
                Colposcope Carl Zeiss. <br>
              </p>
            </div>
            <div class="col-md-6">
              <p>
                Appareil de rééducation périnéale Phenix Uro 4. <br>
                Monitoring Edan F6 <br>
                Utilisation préférentielle de matériel à usage unique. <br>
                Si besoin stérilisation par chaleur humide avec stérilisateur Euronda.<br>
              </p>
            </div>
        </div>

      </div>

    </div>
    <?php
      include 'footer.php';
     ?>
