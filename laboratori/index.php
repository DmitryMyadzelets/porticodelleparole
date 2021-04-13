<!DOCTYPE HTML>
<html lang="it">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="description" content="Vuoi imparare il russo parlato e scritto in maniera coinvolgente, divertente e sempre motivante? Vieni da noi e fai il Corso di Lingua Russa a Bologna in Associazione Portoco delle Parole"> -->
    <meta name="description" content="Insegniamo il russo, parlato e scritto, utilizzando un percorso ben strutturato per tutti i livelli, 
    offrendo semplicità, grande coinvolgimento&hellip;. E un pizzico di divertimento!">
    <meta name="keywords" content="
    corsi di russo speciali,
    corso di russo per adozione,
    corso di russo per preparazione esami universitari,
    corso di russo per azienda,
    corso di russo per viaggiare
    ">

    <!-- Twitter card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@BolognaRusso" />
    <meta name="twitter:title" content="Corsi di Russo a Bologna" />
    <meta name="twitter:description" content="Insegniamo il russo, parlato e scritto, utilizzando un percorso ben strutturato per tutti i livelli, 
    offrendo semplicità, grande coinvolgimento&hellip;. E un pizzico di divertimento!" />
    <meta name="twitter:image" content="//www.porticodelleparole.it/img/bologna-moscow-rainbow-portico.png" />

    <!--  -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <title>
        Corsi di Russo Speciali a Bologna &mdash; Associazione Portico delle Parole
    </title>

    <?php include $_SERVER['DOCUMENT_ROOT']."/google-analytics.php" ?>

</head>

<body>

<div class="main-container shadow">
<?php include $_SERVER['DOCUMENT_ROOT']."/menu.php" ?>
<div class='slideshow'></div>

<h1>
    Laboratori linguistici
</h1>
<p>
    Oltre alle lezioni del corso, avrai l'opportunità di migliorare il tuo russo con laboratori linguistici, un mezzo stimolante ed utile per ampliare le tue conoscenze.
</p>
<p>
    I laboratori che proponiamo ti permetteranno di approfondire meglio vari aspetti della lingua, indicati per arricchire il tuo bagaglio lessicale, fornendo un approccio allo studio della lingua pratico e diretto. La pratica della lingua è stimolata con intelligenza e senso della realtà. Tra i vari laboratori da noi offerti/proposti, c'è il:
</p>
<ul>
    <li><b>Laboratorio del lessico</b> (ad esempio, laboratorio dei proverbi e modi di dire, aggettivi, dello slang, il lessico relativo ai viaggi, all'aeroporto, lessico dell'alcool, ecc.);</li>
    <li><b>Laboratorio di corsivo</b> (lezioni per imparare a leggere e scrivere il cirillico corsivo);</li>
    <li><b>Laboratorio di grammatica</b> (approfondimenti su particolarità grammaticali, eccezioni, uso dei casi, verbi di moto, ecc);</li>
    <li><b>Laboratorio di lettura</b> (esercitazioni di lettura ad alta voce di racconti o articoli legati al mondo russo, scelti accuratamente a seconda del livello di competenza degli studenti).</li>
</ul>
<p>
    I laboratori sono completamente <b>gratuiti per i nostri corsisti</b> e si tengono due o tre volte al mese, sempre in orario serale e nei giorni feriali. Potrai partecipare ai laboratori anche se non sei un corsista acquistando la <q>Laboratori Linguistici Card</q>, al costo di 45 euro (15 per incontro), che ti consentirà di partecipare a 3 laboratori nel corso dell'anno accademico.
</p>

<hr>

<p>
    Guarda <a href="/#i-nostri-insegnanti">i nostri insegnanti</a>, 
    cosa <a href="/#dicono-di-noi">dicono di noi</a> e
    <a href="/#dove-trovarci">dove trovarci</a>.
</p>

</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/contacts-bottom.php" ?>

<!-- jQuery v1.7+ is required for slick.js -->
<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<!-- slideshow -->
<script>
    var ids = ["5da841ce0cffe","5da841dd84e19","5da841e7d4faf","5da841f1e4c30","5da841fc50b09","5da842080ac5b","5da84217b7979","5da84221a76c2","5da8422b5aeee","5da8423539719","5da8423f10e69","5da8424a25c0c","5da84253cef18","5da8425db965b","5da84267c2cc7","5da8427199744","5da8427abb068","5da8428496e0e","5da8428e3e282","5da8429955753","5da842a2d0b10"];
    $(function () {
        var slides = $('.slideshow');
        var i = ids.length;
        while (i > 0) {
            i = i - 1;
            slides.append('<div><div class=\'slick-frame\'><img data-lazy=\'//www.porticodelleparole.it/photos/?id=' + ids[i] + '\'/></div></div>');
        }
        slides.slick({
            lazyLoad: 'ondemand',
            autoplay: true,
            autoplaySpeed: 5000
        });
    });
</script>

</body>
</html>
