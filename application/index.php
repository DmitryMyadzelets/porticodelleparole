<!DOCTYPE HTML>
<html lang="it">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex">

  <link async rel="stylesheet" type="text/css" href="/css/normalize.css">
  <link async rel="stylesheet" type="text/css" href="/css/main.css">
  <link async rel="stylesheet" type="text/css" href="//api.porticodelleparole.it/application.css">

  <script>function removeLoader() { document.getElementById('loader').remove() }</script>
  <script defer src='//api.porticodelleparole.it/application.js' onload="removeLoader()"></script>

  <title>Richiesta di adesione - Associazione Portico delle Parole</title>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/header.php" ?>

<div class="main-container shadow" id="app">
  <h1>Richiesta di adesione all'associazione Portico&nbsp;delle&nbsp;Parole</h1>
  <p>In qualita di socio ordinario (quota associativa annuale pari a 20 euro).</p>
  <p id="loader" class="center">
    <?php include "oval.svg"?>
  </p>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/contacts-bottom.php" ?>
</body>
</html>
