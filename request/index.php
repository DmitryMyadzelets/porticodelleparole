<!DOCTYPE HTML>
<html lang="it">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="/css/main.css">

  <script async src='//api.porticodelleparole.it/js/request.js'></script>

  <title>Richesta di adesione - Associazione Portico delle Parole</title>

  <?php include_once $_SERVER['DOCUMENT_ROOT']."/google-analytics.php" ?>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/header.php" ?>

<div class="main-container shadow">
  <h1>Richesta di adesione</h1>
	<form method="POST" action="<?php $_PHP_SELF ?>">

	<p>Nome, Cognome
		<br/>
		<input type="text" name="name" style="width:100%" value="<?php if (isset($_POST['name'])) { echo $_POST['name']; }?>">
	</p>

	<p>Data di nascita
		<br/>
		<input type="text" name="birthday" size="15em" value="<?php if (isset($_POST['name'])) { echo $_POST['birthday']; }?>">
	</p>

	<p>Indirizzo e-mail
		<br/>
		<input type="text" name="email" style="width:100%" value="<?php if (isset($_POST['email'])) { echo $_POST['email']; }?>">
	</p>

	<p>Numero di telefono<br/>
		<input type="text" name="phone" size="15em" value="<?php if (isset($_POST['phone'])) { echo $_POST['phone']; }?>">
	</p>

	<p>
		<label>
			<input type="checkbox" name="gdpr_autorized" value="yes" required <?php if (isset($_POST['gdpr_autorizzato'])) { echo 'checked'; }?>>
			Autorizzo il trattamento dei dati personali in base all’art. 13 del D. Lgs. 196/2003 e all’art. 13 GDPR 679/16.<br>
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
