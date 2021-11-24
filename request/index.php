<!DOCTYPE HTML>
<html lang="it">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex">

  <link rel="stylesheet" type="text/css" href="/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="/css/main.css">

  <script async src='//api.porticodelleparole.it/js/request.js'></script>

  <title>Richiesta di adesione - Associazione Portico delle Parole</title>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/header.php" ?>

<div class="main-container shadow">
  <h1>Richiesta di adesione all'associazione Portico delle Parole</h1>
  <p>In qualita di socio ordinario (quota associativa annuale pari a 20 euro).</p>
	<form method="POST" action="<?php $_PHP_SELF ?>">

	<p>Nome, Cognome
		<br/>
		<input type="text" name="name" style="width:100%" required autofocus>
	</p>

	<p>Data di nascita
		<br/>
		<input type="date" name="birthday" required>
	</p>

	<p>Indirizzo e-mail
		<br/>
		<input type="email" name="email" style="width:100%" required>
	</p>

  <p>Numero di telefono
    <br/>
		<input type="tel" name="phone">
	</p>

	<p>
		<label>
			<input type="checkbox" name="statute_accepted" value="yes" required>
      Accetto <a href="/statuto" target="_blank">lo Statuto della associazaione</a><br>
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

</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/contacts-bottom.php" ?>
</body>
</html>
