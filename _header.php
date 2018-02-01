<?php
header("Content-type: text/html; charset=utf8");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gestion de partitions de musique">
    <link rel="icon" href="ressources/images/favicon.png">

    <title>Gestion de partitions de musique</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap Theme -->
    <link href="bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/css/ie10-viewport.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="ressources/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  </head>

  <body>
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <!-- Oeuvres -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Oeuvres <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="oeuvre.php">Les oeuvres</a></li>
              <li><a href="#">Les partitions</a></li>
              <li><a href="#">Les chemises</a></li>
            </ul>
          </li>

          <!-- Concerts -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Concerts <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Les concerts</a></li>
              <li><a href="#">Les programmes</a></li>
              <li><a href="#">Les lieux de concert</a></li>
            </ul>

            <!-- Configuration -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configuration <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Les familles (pupitres et instruments)</a></li>
              <li><a href="#">Les catégories</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </nav>

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="ressources/js/vendor/jquery-1.12.4.min.js"><\/script>')</script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>

    <div class="container-fluid">

