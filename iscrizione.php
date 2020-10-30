<!DOCTYPE HTML>
<html lang="it">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>


<?php
	class State {
		const typing = 0;
		const fixing = 1;
		const done = 2;
	}

	$state = State::typing;

	if ($_POST) {
		$state = State::fixing;

	   	$valid_name = !empty($_POST['name']);
	   	$valid_email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
	   	if ($valid_name and $valid_email) {
	   		$state = State::done;
	   	}
	}

	$values = array();


	if ($_POST) {
		/* Debug
	    echo '<pre>';
	    echo htmlspecialchars(print_r($_POST, true));
	    echo '</pre>';
	    */
	   
	   	do {

	   		if ($state != State::done) { break; }

			/* Make file name. It is current date + CSV */
			$str_date = date('Ymd', strtotime('now'));
			$fname = './log/'.$str_date.'.csv';

			$fsize = 0;
			
			if (file_exists($fname)) { $fsize = filesize($fname); }


			if ($fp = fopen($fname, 'a')) {
				/* Write CSV header if file is new or it's empty.
				Newly created file has size 1.
				*/
			
				if ($fsize < 1) {
					$names = array_merge(array('ip'), array_keys($_POST));
					fputcsv($fp, 
						$names,
						';');
				}

				/* Maximum file size (protection from overfill) */
				$fsize_max = 100*1024;

				if ($fsize < $fsize_max) {
					$values = array();
					$values['ip'] = getenv("REMOTE_ADDR");
					$values = array_merge($values, $_POST);
					fputcsv($fp, 
						$values,
						';');
				}

				fclose($fp);
			}

	   	} while (false);
	}
?>

<div <?php if ($_POST) { echo '___style="visibility:hidden; height:0"'; } ?>>

	<form method="POST" action="<?php $_PHP_SELF ?>">

	<?php 
		$err_msg = "<span style='color: red'> non e digitato correttamente </span>"; 
	?>


	<p>Nome, Cognome <?php if (($state == State::fixing) and !$valid_name) { echo $err_msg; } ?>
		<br/>
		<input type="text" name="name" style="width:100%" value="<?php if (isset($_POST['name'])) { echo $_POST['name']; }?>">
	</p>

	<p>Giorni della settimana e orari di disponibilità per le lezioni (indicare più varianti)<br/>
		<input type="text" name="schedule" style="width:100%" value="<?php if (isset($_POST['schedule'])) { echo $_POST['schedule']; } ?>">
	</p>

	<p>Indirizzo e-mail <?php if (($state == State::fixing) and !$valid_email) { echo $err_msg; } ?>
		<br/>
		<input type="text" name="email" style="width:100%" value="<?php if (isset($_POST['email'])) { echo $_POST['email']; }?>">
	</p>

	<p>Numero di telefono<br/>
		<input type="text" name="phone" size="15em" value="<?php if (isset($_POST['phone'])) { echo $_POST['phone']; }?>">
	</p>


	<p>
		Se già studiato il russo, per quanto tempo?<br/>
		 <input type="text" name="time_learned" style="width:100%" value="<?php if (isset($_POST['time_learned'])) { echo $_POST['time_learned']; }?>">
	</p>

	<p>
		<label>
			<input type="checkbox" name="gdpr_autorized" value="yes" required <?php if (isset($_POST['gdpr_autorizzato'])) { echo 'checked'; }?>>
			Autorizzo il trattamento dei dati personali in base all’art. 13 del D. Lgs. 196/2003 e all’art. 13 GDPR 679/16.<br>
		</label>
	</p>

	<?php 
		if ($state == State::done) {
			echo "Grazie, ", $_POST['name'];
		} else {
			echo '<input type="submit" value="Invia">';
		}
	?>

</div>

<div <?php if (!$_POST) { echo 'style="visibility:hidden; height:0"'; } ?>>
</div>



<?php

	if ($state == State::done) {

		$to  = 'info@porticodelleparole.it'.',';
		$to .= 'DmitryMyadzelets@gmail.com';
		$subject = 'Iscrizione';

		$message = '';
		foreach ($values as $key => $value) {
            $message = $message.$key.' : '.$value."\r\n";
        }

		$headers   = array();
		$headers[] = "MIME-Version: 1.0";
		$headers[] = "Content-type: text/plain; charset=iso-8859-1";
		$headers[] = "From: Portico delle Parole <info@porticodelleparole.it>";
		$headers[] = "Reply-To: Recipient Name <receiver@domain3.com>";
		$headers[] = "Subject: {$subject}";
		$headers[] = "X-Mailer: PHP/".phpversion();

		$success = mail($to, $subject, $message, implode("\r\n", $headers));
    if (!$success) {
      $errorMessage = 'I dati sono stati salvati, ma non abbiamo ricevuto il tuo messaggio per problemi con il sito web. Ti chiediamo gentilmente di contattarci per telefono o di scriverci una mail.';
      echo '<p class="error">'.$errorMessage.'</p>';
    }
  }
?>

</body>
