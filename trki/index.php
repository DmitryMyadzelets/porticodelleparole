<!DOCTYPE HTML>
<html lang="it">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Insegniamo il russo, parlato e scritto, utilizzando un percorso ben strutturato per tutti i livelli, offrendo semplicità, grande coinvolgimento&hellip;. E un pizzico di divertimento!">
    <meta name="keywords" content="
TRKI/TORFL,
TORFL,
Certificazione di lingua russa TRKI/TORFL TORFL,
Corsi di preparazione all'esame TRKI/TORFL TORFL,
Esami e certificazione TRKI/TORFL TORFL,
russo online
    ">

    <!-- Twitter card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@BolognaRusso" />
    <meta name="twitter:title" content="Corsi di Russo a Bologna" />
    <meta name="twitter:description" content="Insegniamo il russo, parlato e scritto, utilizzando un percorso ben strutturato per tutti i livelli, offrendo semplicità, grande coinvolgimento&hellip;. E un pizzico di divertimento!" />
    <meta name="twitter:image" content="//www.porticodelleparole.it/img/bologna-moscow-rainbow-portico.png" />

    <!--  -->
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <?php require $_SERVER['DOCUMENT_ROOT']."/main.css.php" ?>

    <title>
        Certificazione di lingua russa TRKI/TORFL TORFL &mdash; Associazione Portico delle Parole
    </title>

    <?php include_once $_SERVER['DOCUMENT_ROOT']."/google-analytics.php" ?>

</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/header.php" ?>

<div class="main-container shadow">
<?php include $_SERVER['DOCUMENT_ROOT']."/contacts.php" ?>

<h1 id="certificazione">Certificazione di Lingua Russa TRKI/TORFL</h1>
<div class="block-image">
  <div class="stretchy-wrapper" style="padding-bottom: calc(480%/6.40)">
    <div>
      <img src="https://www.porticodelleparole.it/photos/?id=6388dc33a639f" alt="Foto di una studentessa con il suo certifacato TRKI/TORFL" loading="lazy"/>
    </div>
  </div>
  <div hidden class="stretchy-wrapper" style="padding-bottom: calc(475%/6.40)">
    <div>
      <img src="https://www.porticodelleparole.it/photos/?id=6388b90aafb5f" alt="Foto del certifacato TRKI/TORFL" loading="lazy"/>
    </div>
  </div>
  <p>Una felice studentessa con il suo certificato dall'Università Statale di San Pietroburgo dopo aver svolto l'esame presso Portico delle Parole</p>
</div>

<h2>Perchè sostenere l'esame di certificazione?</h2>
<ul>
  <li>Per essere più competitivo sul mercato del lavoro</li>
  <li>Per andare a studiare in Russia o in un altro paese russofono</li>
  <li>Per avere un riconoscimento ufficiale delle tue conoscenze linguistiche</li>
</ul>
<p>L'associazione <b>Portico delle Parole è un centro di certificazione ufficiale</b> della lingua russa TRKI/TORFL (Тест по русскому языку как иностранному/ Test of Russian as a foreign language), che ha stipulato un accordo con l'Università Statale di San Pietroburgo.</p>
<p>La certificazione rilasciata viene riconosciuta dal MIUR (Ministero dell'Istruzione, dell'Università e della Ricerca d'Italia).</p>

<div class="block-image">
  <div class="stretchy-wrapper" style="padding-bottom: calc(427%/6.40)">
    <div>
      <img src="https://www.porticodelleparole.it/photos/?id=6388908d736d4" alt="Foto del complesso universitario" loading="lazy"/>
    </div>
  </div>
  <p>Complesso universitario a San Pietroburgo &mdash; 
  Origine:&nbsp;<a href="https://commons.wikimedia.org/w/index.php?curid=70622014" target="_blank">Wikipedia</a>
  </p>
</div>

<h2>Livelli della certificazione</h2>
<div class="div-table trki-table">
    <div class="div-column col-half">
       <div class="col-head">
           <h3>Livello</h3>
       </div>
       <p>A1 (elementare)</p>
       <p>A2 (base)</p>
       <p>B1 (intermedio)</p>
       <p>B2 (avanzato)</p>
       <p>C1 (padronanza)</p>
       <p>C2 (padronanza)</p>
     </div>
    <div class="div-column col-half">
      <div class="col-head">
        <h3>Codice</h3>
      </div>
      <p>TEU</p>
      <p>TBU</p>
      <p>TRKI/TORFL-1</p>
      <p>TRKI/TORFL-2</p>
      <p>TRKI/TORFL-3</p>
      <p>TRKI/TORFL-4</p>
    </div>
</div>
<p>La certificazione di livello A1 ha validità di 5 anni, mentre le certificazioni di livelli A2, B1, B2, C1, C2 non hanno scadenza.</p>
<h2>Prezzo</h2>
<p>
  Il prezzo per la certificazione è di <b>140&#8364; per ogni livello</b>. 
</p>
<p>
  È obbligatorio il rilascio di una tessera associativa del costo di 40&#8364;.
</p>
<?php include $_SERVER['DOCUMENT_ROOT']."/payment.php" ?>

<h2>Quando si tengono gli esami?</h2>
<?php
function before($date) {
  return date_create('now') < date_create($date);
}
function iso2str($date) {
  $months = ['gennaio','febbraio','marzo','aprile','maggio','giugno','luglio','agosto','settembre','ottobre','novembre','dicembre'];
  $date = date_create($date);
  $d = $date->format('j');
  $m = $months[$date->format('n')-1];
  $y = $date->format('Y');
  return $d.' '.$m.' '.$y;
}
$exams = [
  '2025-10-17' => 'In presenza a Bologna oppure online sulla piattaforma dell\'Università Statale di San Pietroburgo'
];
$exams = array_filter($exams, before, ARRAY_FILTER_USE_KEY);
#echo implode('<br>', array_keys($exams));

if (empty($exams)) {
  echo '<p>Le date delle sessioni saranno da definire.</p>';
 } else {
  echo '<p>Le prossime sessioni si terranno:</p>';
  echo '<ul>';
  foreach ($exams as $date => $description) {
    echo '<li>';
    echo iso2str($date).' '.$description;
    echo '</li>';
  }
  echo '</ul>';
}
?>

<h2>Dove si tengono gli esami?</h2>
<p>Le sessioni d'esame si tengono sia <b>presso la nostra sede a Bologna</b> sia <b>online</b>. Puoi scegliere l'opzione che andrebbe più comodo per te.</p>
<p>I rappresentanti dell’Università di San Pietroburgo partecipano in modo diretto alle sessione.</p>
<h2>Le modalità d'esame</h2>
<p>Per le certificazioni è consentito l'utilizzo:</p>
<ul>
  <li>Livelli A1, A2 e B1 &mdash; dizionario bilingue (RUS – IT,  IT – RUS).</li>
  <li>Livelli B2 e C1 &mdash; unicamente dizionario monolingue (RUS – IT).</li>
  <li>Livello C2 &mdash; non è ammesso l'utilizzo di nessun dizionario.</li>
</ul>
<p>Le sessioni d'esame sono strutturate in 5 prove:</p>
<ol>
  <li>Лексика и грамматика &mdash; conoscenze grammaticali e lessicali (prova scritta)</li>
  <li>Чтение &mdash; abilità di comprensione scritta (prova scritta)</li>
  <li>Письмо &mdash; abilità di produzione scritta (prova scritta)</li>
  <li>Аудирование &mdash; abilità di comprensione orale (prova orale)</li>
  <li>Говорение &mdash; abilità di produzione orale (prova orale)</li>
</ol>
<p>Per avere più informazioni sullo svolgimento degli esami puoi <a href="https://testingcenter.spbu.ru/vebinary.html" target="_blank">guardare i video</a> registrati dall'Università Statale di San Pietroburgo dalla durata di 1 ora per ogni livello. In lingua inglese per i livelli A1, B1, B2 ed in lingua russa per i livelli B2, C1, C2.</p>
<p>Puoi <a href="https://testingcenter.spbu.ru/ekzameny/russia/trki.html" target="_blank">scaricare</a> le versioni demo del test per tutti i livelli.<p>
<h2 id="preparazione">Preparazione all'esame TRKI/TORFL</h2>
<p>Ti prepariamo a superare le varie prove di tutti i livelli dell'esame ufficiale TRKI/TORFL.</p>
<p>Ti forniamo i materiali adatti e ben organizzati che, insieme alle simulazioni fatte durante il corso e alla competenza dei nostri insegnanti, risulteranno necessari alla preparazione degli esami.</p>

<h2 id="prezzi">Prezzi</h2>
<?php $discount = false; include $_SERVER['DOCUMENT_ROOT']."/prices.php" ?>

<h2>Metodi di pagamento</h2>
<?php include $_SERVER['DOCUMENT_ROOT']."/payment.php" ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT']."/contacts-bottom.php" ?>
</body>
</html>
