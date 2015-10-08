<!DOCTYPE HTML>
<html lang="it">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="main.css">
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
		<input type="text" name="name" style="width:100%" value="<?php echo $_POST['name']?>">
	</p>

	<p>Età (opzionale)<br/>
		<input type="text" name="age" size="7em" value="<?php echo $_POST['age']?>">
	</p>

	<p>Giorni e ora preferiti per frequentare lezioni (scegliere più varianti possibili)<br/>
		<input type="text" name="schedule" style="width:100%" value="<?php echo $_POST['schedule']?>">
	</p>

	<p>Indirizzo e-mail <?php if (($state == State::fixing) and !$valid_email) { echo $err_msg; } ?>
		<br/>
		<input type="text" name="email" style="width:100%" value="<?php echo $_POST['email']?>">
	</p>

	<p>Numero di telefono (opzionale)<br/>
		<input type="text" name="phone" size="15em" value="<?php echo $_POST['phone']?>">
	</p>


	<p>
		Se già studiato il russo, per quanto tempo?<br/>
		 <input type="text" name="time_learned" style="width:100%" value="<?php echo $_POST['time_learned']?>">
	</p>

	<input type="submit" value="Invia" style="height:2em; width:5em"> <?php  if ($state == State::done) {echo "Grazie, ", $_POST['name'];} ?>

</div>

<div <?php if (!$_POST) { echo 'style="visibility:hidden; height:0"'; } ?>>
</div



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

		echo mail($to, $subject, $message, implode("\r\n", $headers));
	}
?>

</body>