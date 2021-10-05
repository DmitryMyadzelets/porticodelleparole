<?php
  setlocale(LC_ALL, 'it_IT.UTF-8');

  $fname = $_SERVER['DOCUMENT_ROOT'].'/config/config.json';

  $data = @file_get_contents($fname);
  $config = (array)json_decode($data);

  $start_date = strtotime($config['firstDate']);
  $now = strtotime("now");
  $days = 1 + floor(($start_date - $now)/(60*60*24));

  if ($days <= 0) {
    return;
  }

  $header = $config['firstDateFormatted'];
  if ($days == 1) {
    $manca = "E' <mark>già domani</mark>!";
  } else {
    $manca = "Mancano <mark>solo ".$days." giorni</mark>!";
  }
?>

<section data-nosnippet>
<h2><mark><?php echo $header; ?></mark></h2>
<p>La prima lezione del nuovo corso per principianti, intermedi e avanzati.
<?php echo $manca; ?> Ti aspettiamo, contataci!
</p>
</section>
