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
<?php include $_SERVER['DOCUMENT_ROOT']."/header.php" ?>

<div class="main-container shadow">
<?php include $_SERVER['DOCUMENT_ROOT']."/contacts.php" ?>

<section style="padding-bottom: 1.618em;">
    <h1 id="test-di-russo">
        Test di russo &mdash; scopri subito il tuo livello
    </h1>
    <p>Mettiti alla prova e valuta il tuo attuale livello di conoscenza della lingua russa! Completa il nostro test diviso in 4 livelli (A1, A2, B1, B2) senza utilizzare alcun manuale o dizionario. Il risultato ti verrà mostrato alla fine della prova.</p>
    <p>Il test è stato elaborato con la collaborazione della scuola di lingua russa <a href="https://enjoyrussian.com/" target="_blank">Enjoy Russian</a>, nostro partner in Russia.</p>
    
    <ul id='level-buttons'></ul>
    
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
