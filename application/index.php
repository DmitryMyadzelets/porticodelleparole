<!DOCTYPE HTML>
<html lang="it">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex">

  <link async rel="stylesheet" type="text/css" href="/css/normalize.css">
  <link async rel="stylesheet" type="text/css" href="/css/main.css">
  <link async rel="stylesheet" type="text/css" href="//api.porticodelleparole.it/bundle.css">

  <script>function removeLoader() { document.getElementById('loader').remove() }</script>
  <script defer src='//api.porticodelleparole.it/index.js' onload="removeLoader()"></script>

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
  <?php /*
	<form method="POST" action="<?php $_PHP_SELF ?>">

	<p>Nome, Cognome<br/>
		<input type="text" name="name" style="width:100%" required autofocus>
	</p>

	<p>Data di nascita<br/>
		<input type="date" name="birthday" required>
	</p>

	<p>Data di nascita<br/>
    <fieldset style="display: inline-block; width:4rem; border:none;">
      <legend style="font-size:small;">&nbsp;Giorno&nbsp;</legend>
      <input type="text" pattern="[0-9]+" required style="width:100%;">
    </fieldset>
    <fieldset style="display: inline-block; width:8rem; border:none;">
      <legend style="font-size:small;">&nbsp;Mese&nbsp;</legend>
      <input type="text" required style="width:100%;">
    </fieldset>
    <input type="text" required style="width:4rem;">
	</p>

	<p>Indirizzo e-mail<br/>
		<input type="email" name="email" style="width:100%" required>
	</p>

  <p>Numero di telefono<br/>
		<input type="tel" name="phone">
	</p>

	<p>
		<label>
			<input type="checkbox" name="statute_accepted" value="yes" required>
      Accetto <a href="/statuto" target="_blank">lo Statuto della associazaione</a>
    </label>
	</p>

	<p>
		<label>
			<input type="checkbox" name="gdpr_autorized" value="yes" required>
			Autorizzo il trattamento dei dati personali in base all’art. 13 del D. Lgs. 196/2003 e all’art. 13 GDPR 679/16<br>
		</label>
	</p>

  <p>
    <input type="submit" value="Invia">
  </p>

  </form>
  */?>

</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/contacts-bottom.php" ?>
</body>
</html>
