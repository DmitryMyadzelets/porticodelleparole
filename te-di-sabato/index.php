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
        Tè del sabato &mdash; Associazione Portico delle Parole
    </title>

    <?php include $_SERVER['DOCUMENT_ROOT']."/google-analytics.php" ?>

</head>
<body>

<div class="main-container shadow">
<div class='slideshow'></div>

<?php setlocale(LC_ALL, 'it_IT.UTF-8'); ?>

<section>
    <h1>
        Tè del sabato
    </h1>
    <p>
        Accogliere gli ospiti con tè e biscotti è una delle tradizioni russe più diffuse: per questo abbiamo creato il Tè del sabato (чай по субботам), un'attività <b>gratuita</b> per tutti i tesserati dell'associazione che si svolge <b>due sabati al mese dalle 11 alle 13</b>. Durante gli incontri, potrai assistere a presentazioni <b>in russo con la traduzione in italiano</b> su argomenti sempre diversi riguardanti la storia, la geografia, l'economia, i viaggi in Russia, la cultura e le tradizioni, degustando insieme a noi il classico tè russo in un'atmosfera piacevole e informale. Durante questi incontri avrai la possibilità di conoscere altri studenti e scambiare con loro idee e punti di vista, confrontandoti sui temi proposti.
    </p>
    <p>
        Il Tè del sabato si svolgerà nei seguenti giorni:
    </p>
    <ul>
        <?php
            // prints string 'day month'
            function dnm($date) {
                echo strftime("%-d %B", strtotime($date));
            }
        ?>
        <li><?php dnm('2020-02-15'); ?></li>
        <li><?php dnm('2020-02-29'); ?></li>
        <li><?php dnm('2020-03-07'); ?></li>
        <li><?php dnm('2020-03-21'); ?></li>
        <li><?php dnm('2020-04-04'); ?></li>
        <li><?php dnm('2020-04-19'); ?> &mdash; Domenica, picnic per la Pasqua Ortodossa</li>
        <li><?php dnm('2020-05-09'); ?></li>
        <li><?php dnm('2020-05-23'); ?></li>
    </ul>
    <p>
        La conferma della partecipazione è <b>sempre obbligatoria</b> per ogni incontro.
    </p>
    <p>
        Il tè del sabato si svolge già dal 2014, e in <?php echo date("Y")-2014 ?> anni sono già stati organizzati 130 incontri. Guarda l'elenco degli argomenti svolti negli ultimi anni qui sotto.
    </p>
</section>

</div> <!-- main-container shadow -->
<br>
<div class="main-container shadow">

    <h2>Anno 2019</h2>
    <p>In lavorazione...</p>

</div> <!-- main-container shadow -->
<br>
<div class="main-container shadow">

    <h2>Anno 2018</h2>
    <?php include "2018.php" ?>

</div> <!-- main-container shadow -->
<br>
<div class="main-container shadow">

    <h2>Anno 2017</h2>
    <?php include "2017.php" ?>

</div> <!-- main-container shadow -->
<br>
<div class="main-container shadow">

    <h2>Anno 2016</h2>
    <?php include "2016.php" ?>

</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/contacts-bottom.php" ?>

<!-- jQuery v1.7+ is required for slick.js -->
<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<!-- slideshow -->
<script>
    var ids = ["5daf00ce3d30d","5daf00db457e1","5daf00e51b08b","5daf00ef54790","5daf00fa9b5a4","5daf01044f609","5daf010dc8587","5daf011b544e7","5daf0126e80a8","5daf0130f1411","5daf013b4386e","5daf014590437","5daf014f193d4","5daf015841a97","5daf01627aef1","5daf016dbdb18","5daf0178c080b","5daf0182d7215","5daf018cbd73e","5daf01989346d"];
    // var ids = ["59b95944b19d7","59b956f327c91","59b9570236050","59b9571a04761","59b957312b211","59b95755105ef","59b9577053a96","59b9578084ec1","59b95795dd625","59b957a538a2d","59b9589257b54","59b959354680c","59b958b969a86","59b958ccf29b6","59b958edc6c12","59b958fbc0777","59b95921d2ec6","59b956dc05d3a","59b2c7d1e2f53","59b2c8a1ed236","59b2c8d104015","59b2c8e5a5f5a","59b2c90077fa9","59b2c91599035","59b2c94951f5d","59b2c95fa36dc","59b2c9765e889","59b3f1eee2482","59b3f205a6ffc","59b3f2270ebc4","59b3f26c202c9","59b3f2a8ca258","59b3f2c424dad","59b3f2efd7e8d","59b3f323c8f39","59b3f34a6dc5f","59b3f37954502","59b3f3a261854","59b3f3de88786","59b3f427804d8","59b3f46a7214f","59b3f4b0df48a","59b3f4d171773","59b3f4dddcb87","59b3f4ea5aefe","5bb264c86df8c","5bb264e17580b","5bb264ef4a3ed","5bb264fa6a877","5bb265034e03f","5bb2650cad400","5bb26516c2bde","5bb2651fe24ee","5bb265286111a","5bb2653451404","5bb26542d3dcc","5bb2654a1cbce","5bb2655233567","5bb2655a7a51b","5bb26562c71c7"];
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
