<!DOCTYPE HTML>
<html lang="it">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="description" content="Vuoi imparare il russo parlato e scritto in maniera coinvolgente, divertente e sempre motivante? Vieni da noi e fai il Corso di Lingua Russa a Bologna in Associazione Portoco delle Parole"> -->
    <meta name="description" content="Insegniamo il russo, parlato e scritto, utilizzando un percorso ben strutturato per tutti i livelli, 
    offrendo semplicità, grande coinvolgimento&hellip;. E un pizzico di divertimento!">
    <meta name="keywords" content="
    test livello russo online,
    test russo A1,
    test russo A2,
    test russo B1,
    test russo B2,
    test russo tutti livelli
    ">

    <!-- Twitter card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@BolognaRusso" />
    <meta name="twitter:title" content="Corsi di Russo a Bologna" />
    <meta name="twitter:description" content="Insegniamo il russo, parlato e scritto, utilizzando un percorso ben strutturato per tutti i livelli, offrendo semplicità, grande coinvolgimento&hellip;. E un pizzico di divertimento!" />
    <meta name="twitter:image" content="//www.porticodelleparole.it/img/bologna-moscow-rainbow-portico.png" />

    <!--  -->
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/test.css">

    <title>
        Test online livello di russo &mdash; Associazione Portico delle Parole
    </title>

    <?php include_once $_SERVER['DOCUMENT_ROOT']."/google-analytics.php" ?>

</head>
<body>
<div class="main-container shadow">

<?php include $_SERVER['DOCUMENT_ROOT']."/logo.php" ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/contacts.php" ?>

<section style="padding-bottom: 1.618em;">
    <h1>
        Verifica il tuo livello di russo
    </h1>
    <p>
        Ti chiediamo di completare questo test in massimo 60 minuti e di non usare alcun manuale o dizionario mentre lo svolgi. Il test è diviso in 4 livelli (A1, A2, B1, B2). Smetti di fare il test appena ti accorgi di aver raggiunto il tuo livello, non provare ad indovinare la risposta corretta.
    </p>
    <p>
        Il risultato ti verrà subito mostrato alla fine del test.
    </p>
    <p>
        Questo test è stato elaborato insieme con il nostro partner, la scuola di lingua russa in Russia <a href="https://enjoyrussian.com/" target="_blank">Enjoy Russian</a>.
    </p>
    
    <ul class='menu' id='level-buttons' style="font-size: larger;"></ul>
    
    <div id="test-content"></div>
    <input type="submit" value="Verificare" id="button-calculate">
    
    <h2>Risultato</h2>
    <div id='test-result'></div>

</section>

</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/contacts-bottom.php" ?>
<script src="https://d3js.org/d3.v4.min.js"></script>
<script src="index.js"></script>

</body>
</html>
