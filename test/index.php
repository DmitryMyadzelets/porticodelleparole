<!DOCTYPE HTML>
<html lang="it">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-control" content="private">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="description" content="Vuoi imparare il russo parlato e scritto in maniera coinvolgente, divertente e sempre motivante? Vieni da noi e fai il Corso di Lingua Russa a Bologna in Associazione Portoco delle Parole"> -->
    <meta name="description" content="Insegniamo il russo, parlato e scritto, utilizzando un percorso ben strutturato per tutti i livelli, 
    offrendo semplicità, grande coinvolgimento&hellip;. E un pizzico di divertimento!">
    <meta name="keywords" content="
    test di lingua russa,
    test di russo,
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
    <meta name="twitter:image" content="http://www.porticodelleparole.it/img/bologna-moscow-rainbow-portico.png" />

    <!--  -->
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/test.css">

    <title>
        Corsi di Russo Speciali a Bologna &mdash; Associazione Portico delle Parole
    </title>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        var pluginUrl = '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
        _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
        _gaq.push(['_setAccount', 'UA-44617461-1']);
        _gaq.push(['_trackPageview']);
        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

</head>

<body>
<div class="main-container shadow">

<div class="stretchy-wrapper" id="logo-wrapper">
    <div>
        <img src="/img/bologna-moscow-rainbow-portico.png"
        alt="Logo Portico delle Parole"
        title="Portico delle parole. Associazione. Corso di lingua Russa"
        />
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/contacts.php" ?>

<section style="padding-bottom: 1.618em;">
    <h1>
        Тест
    </h1>
    <h2>
        <ul class='menu' id='level-buttons'>
            <li>A1</li>
            <li>A2</li>
            <li>B1</li>
            <li>B2</li>
        </ul>
    </h2>
    <div id="test-content"></div>
    <input type="submit" value="Verificare">
</section>

</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/contacts-bottom.php" ?>
</body>

<script src="https://d3js.org/d3.v4.min.js"></script>
<script src="index.js"></script>

</html>
