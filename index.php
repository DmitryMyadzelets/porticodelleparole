<!DOCTYPE HTML>
<html lang="it">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-control" content="private">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="description" content="Vuoi imparare il russo parlato e scritto in maniera coinvolgente, divertente e sempre motivante? Vieni da noi e fai il Corso di Lingua Russa a Bologna in Associazione Portoco delle Parole"> -->
    <meta name="description" content="Insegniamo il russo, parlato e scritto, utilizzando un percorso ben strutturato per tutti i livelli, 
    offrendo semplicità, grande coinvolgimento&hellip;. E un pizzico di divertimento!">
    <meta name="keywords" content="corso di russo a bologna,
    corso di italiano a bologna,
    corso russo,
    corso italiano,
    scuola di lingue,
    corso di lingua russa,
    corso di lingua italiana,
    lezioni di russo a Bologna,
    lezioni di italiano a Bologna,
    bologna centro,
    portico delle parole,
    porticodelleparole,
    porticodelleparole.it,
    offerta,
    prezzi bassi,
    sconti,
    portici,
    corsi di PACCHETTI PROMOZIONALI a Bologna,
    corsi di lingue a Bologna,
    corsi di inglese a Bologna,
    corsi di russo a Bologna,
    corsi di Italiano per stranieri a Bologna,
    ripetizioni di russo a Bologna,
    viaggi a Bologna,
    giochi a Bologna,
    test a Bologna,
    ripetizioni di Russo a Bologna,
    preparazione agli esami di maturità a Bologna,
    preparazione esami universitari a Bologna,
    ">

    <!-- Twitter card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@BolognaRusso" />
    <meta name="twitter:title" content="Corsi di Russo a Bologna" />
    <meta name="twitter:description" content="Insegniamo il russo, parlato e scritto, utilizzando un percorso ben strutturato per tutti i livelli, 
    offrendo semplicità, grande coinvolgimento&hellip;. E un pizzico di divertimento!" />
    <meta name="twitter:image" content="http://www.porticodelleparole.it/img/bologna-moscow-rainbow-portico.png" />

    <!--  -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <title>
        Corsi di Russo a Bologna - Associazione Portico delle Parole
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
    <script type="text/javascript" src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js'></script>
    <script type="text/javascript">
        function shuffle (array) {
            var i = 0, j = 0, temp = null;

            for (i = array.length - 1; i > 0; i -= 1) {
                j = Math.floor(Math.random() * (i + 1));
                temp = array[i];
                array[i] = array[j];
                array[j] = temp;
            }
        }

        var ids = ["59ba5658c4c1b","59ba566b6c411","59ba5675c3ec5","59ba56853348b","59ba569543d3d","59ba56a23e92c","59ba56ae84cb7","59ba56bf46162","59ba56cd1cadd","59ba56dccd269","59ba56e9afd41","59ba56f834593","59ba570653afb","59ba591280e0c","59ba5923a232c","59ba5933ee8e9","59ba59406d1c4","59ba5959cf9e3","59ba596b04748"];
        shuffle(ids);

        $(function () {
            var slides = $('.slideshow');
            var i = ids.length;
            while (i > 0) {
                i = i - 1;
                slides.append('<div><div class=\'slick-frame\'><img data-lazy=\'/photos/?id=' + ids[i] + '\'/></div></div>');
            }
            slides.slick({
                lazyLoad: 'ondemand',
                autoplay: true,
                autoplaySpeed: 5000
            });
        });
    </script>

</head>

<body>
    <?php
        function age($bdate) {
            return date_diff(date_create($bdate), date_create('now'))->y;
        }
    ?>
<div class="main-container shadow">

<ul class='menu'>
    <li><a href="#corsi-di-russo">Corsi</a></li>
    <li><a href="#prezzi">Prezzi</a></li>
    <li><a href="#orari">Orari</a></li>
    <li><a href="#attivita">Attività</a></li>
    <li><a href="#i-nostri-insegnanti">Insegnanti</a></li>
    <li><a href="#foto">Foto</a></li>
</ul>

<div class="stretchy-wrapper" id="logo-wrapper">
    <div>
        <img src="./img/bologna-moscow-rainbow-portico.png"
        alt="Logo Portico delle Parole"
        title="Portico delle parole. Associazione. Corso di lingua Russa"
        />
    </div>
</div>

<div class="center">
    <p>
        Vuoi imparare il <b>russo parlato e scritto</b> in maniera coinvolgente e dinamica, con un metodo d’insegnamento 
        interattivo e ben strutturato? 
        Vieni a scoprire i nostri corsi, <b>con madrelingua russi specializzati nell’insegnamento</b> del russo 
        per stranieri e della cultura russa!
    </p>
</div>

<?php
    $fname = 'config/config.json';

    $data = @file_get_contents($fname);
    $config = (array)json_decode($data);

    $start_date = strtotime($config['firstDate']);
    $now = strtotime("now");
    $days_left = 1 + floor(($start_date - $now)/(60*60*24));

    $manca = "Mancano solo " . $days_left . " giorni all'inizio delle lezioni!";
    if ($days_left == 1) {
        $manca = "Manca solo 1 giorno all'inizio delle lezioni!";
    }

    if ($days_left > 0) {
        echo "<div class=\"ads center\"><p>";
        echo "<b>".$config['firstDateFormatted']."</b> ci sarà la prima lezione del nuovo corso per principianti, intermedi e avanzati.";
        echo "<br/><b>", $manca, "</b>";
        echo "<br/>Affrettati! I posti sono limitati.";
        echo "<br/>Ti aspettiamo!";
        echo "</p></div>";
    }
?>

<!--     <div class="center" style="font-size: 1.618em; padding: 1.618em 0; color: red;">
        <p>Contattaci per iscriverti ai corsi estivi di lingua russa. <br>Ti aspettiamo!</p>
    </div>
 -->
<!--     <p>
        Sono già aperte le iscrizioni ai nostri corsi collettivi dei vari livelli ma il numero dei posti è limitato! 
        Affrettatevi a salpare con noi verso i lidi della lingua e della cultura russe!<br/>Vi aspettiamo con impazienza!
    </p>
 -->
<!-- <p class='center'>Siamo aperti per i corsi <b>anche ad agosto</b>.</p> -->

<!-- <p style="color:red" class="center">
    <a href="#corso_italiano">C'è una novità! Lingua e cultura italiane per stranieri!</a>
</p>
 -->
<div style="display: none">
    <div class="review_photo">
        <div class="stretchy-wrapper">
            <div>
                <img src="./img/petrozavodsk.jpg" atl='Foto of Petrozavodsk'/>
            </div>
        </div>
    </div>
    <p>
        Vuoi fare un’esperienza unica in Russia quest’estate? Vuoi fare un’immersione nella lingua russa in Russia? 
        Allora ti invitiamo a fare il corso di russo a Petrozavodsk, nella fantastica scuola di russo 
        con la quale siamo convenzionati.
    </p>
    <p>
        Petrozavodsk si trova vicino alla Finlandia, è quindi facile raggiungerla. 
        La città è situata sul Lago Onega e attorno vi sono tanti altri laghi per cui potrai godere della natura. 
        Il clima assomiglia al clima della Svezia o della Finlandia. 
        San Pietroburgo è raggiungibile in treno in 5 ore e mezza.
    </p>
    <p>
        <a href="enjoyrussian">Scoprire di più</a>
    </p>
</div>


<div class="div-table contacts-table">
    <div class="div-column col-half">
        <p>
            <a href="https://www.google.com/maps/place/Via+del+Pratello,+9,+40122+Bologna+BO/@44.4955127,11.3336612,551" target="_blank">
                <img src="/img/pin.svg" alt="Indirizzio" class="svg-icon"
                title="Indirizzio del Portico delle Parole"
                />via dell Pratello 9, Bologna
            </a>
        </p>
        <p>
            <a href="https://www.facebook.com/porticodelleparole" TARGET="_blank">
                <img src="/img/facebook.svg" alt="Facebook logo" class="svg-icon"
                title="Seguici il Portico delle Parole su Facebook"
                />Seguici su Facebook
            </a>
            <!-- <img src="./img/google.svg" alt="" style="width: 2em; margin-right: 0.5em; vertical-align: middle;"> -->
        </p>
    </div>
    <div class="div-column col-half">
        <p>
            <!-- Olga -->
            <a href="tel:+393276617027" style="text-decoration: none; color: #444;">
                <img src="./img/phonecall.svg" alt="Phone" class="svg-icon"
                title="Chiamaci al Portico delle Parole"
                />
                <span style="font-size: 180%">
                    <?php
                    $ts = strtotime('2018-07-03');
                    $te = strtotime('2018-08-21');
                    $t0 = time();
                    if ($t0 > $te || $t0 < $ts) {
                        echo('Tel. 327 661 7027'); // Olga
                    } else {
                        // echo('Tel. 388 465 0676'); // Luba
                        echo('Tel. 329 754 2687'); // Yana
                    }
                    ?>
                </span>
            </a>
        </p>
        <p>
            <a href="mailto:info@porticodelleparole.it">
                <!-- style="text-decoration: none; color: #444;" -->
                <img src="./img/mail.svg" alt="email" class="svg-icon"
                title="email al Portico delle Parole"
                />info@porticodelleparole.it
            </a>
        </p>
    </div>
</div>

<p>
    Ciao, привет!
</p>
<p>
    Vieni da noi all’associazione culturale <b>Portico delle Parole</b>, 
    qui troverai una piccola isola della cultura russa all’interno delle mura di Bologna.
    L’associazione <q>Portico delle Parole</q> è particolarmente apprezzata per il suo <b>ambiente professionale, 
    stimolante ed accogliente</b>, nel quale i nostri corsisti apprendono in maniera piacevole e dinamica 
    la lingua e la cultura russa. Per saperne di più, guarda il video qui sotto.
</p>


<!-- Video -->
<div class="stretchy-wrapper" id="video-wrapper">
    <div>
        <iframe id="ytplayer" type="text/html" width="100%" height="100%"
          src="http://www.youtube.com/embed/RFPyCgWDbwA?rel=0&controls=0&showinfo=0&origin=http://www.porticodelleparole.it/"
          frameborder="0"/></iframe>
    </div>
</div>

<h1>
    <a name="corsi-di-russo">
        Corsi di russo
    </a>
</h1>

<p>Insegniamo il russo, parlato e scritto, utilizzando un percorso ben strutturato per <b>tutti i livelli
    (A1, A2, B1, B2, C1)</b>, offrendo semplicità, grande coinvolgimento&hellip; e un pizzico di divertimento!
    Al termine di ogni corso di 20 ore, puoi proseguire col corso successivo.
</p>

<p>
    Nel corso principianti di <b>12 lezioni (20 ore)</b> imparerai:
    <ul>
        <li>L’alfabeto cirillico;</li>
        <li>Leggere semplici testi in cirillico;</li>
        <li>Scrivere un’email in russo (usando gli addesivi con le lettere in cirillico per la tua testiera);</li>
        <li>Sostenere una conversazione su temi di uso quotidiano con un madrelingua russo;</li>
        <li>Parlare di te stesso e della tua famiglia;</li>
        <li>Chiedere informazioni in varie situazioni durante un viaggio in Russia;</li>
        <li>Le tradizioni e le feste russe.</li>
    </ul>
</p>

<p>
    Per conoscere il <b>programma dei livelli successivi</b>, contattaci direttamente.
</p>

<p>
    Se non sei un principiante, vieni in associazione per un <b>incontro personale gratuito</b> e 
    ti indirizzeremo verso il corso migliore per le tue esigenze e il tuo livello.
</p>

<?php
// <h3>Nel corso sono compresi:</h3>

// <p>
//     <ul>
//         <li>Il <b>manuale</b>;
//         <li>Email settimanali con info, link e altri materiali utili per imparare il russo;
//         <li>Supporto via email, Facebook, WhatsApp per qualsiasi domanda riguardante i corsi e la lingua russa;
//         <li><b>Il laboratorio del lessico settimanale</b> (1 ora e 30 minuti);
//         <li>Lezioni di recupero per eventuali chiarimenti;
//         <li>Attività culturali gratuite per tutti i corsisti: tè del sabato e gli eventi speciali.
//     </ul>
// </p>
?>

<section>
    <h2>
        Corsi di russo speciali
    </h2>
    <p>
        Su richiesta, sono disponibili i <a href="corsi-speciali/">seguenti corsi</a>:
    </p>
    <div class="div-table special-courses-table">
        <div class="div-column col-fourth">
            <a href="corsi-speciali/#russo-per-azienda">
                <img src="/img/business.jpg">
                <p>
                    Russo per l’azienda
                </p>
            </a>
        </div>
        <div class="div-column col-fourth">
            <a href="corsi-speciali/#russo-per-preparazione-esami-universitari">
                <img src="/img/russo-per-esami.jpg">
                <p>
                    Russo per preparazione esami universitari
                </p>
            </a>
        </div>
        <div class="div-column col-fourth">
            <a href="corsi-speciali/#russo-per-adozione">
                <img src="/img/adozione.jpg">
                <p>
                    Russo per adozione
                </p>
            </a>
        </div>
        <div class="div-column col-fourth">
            <a href="corsi-speciali/#russo-per-viaggiare">
                <img src="/img/turismo.jpg">
                <p>
                    Russo per viaggiare
                </p>
            </a>
        </div>
    </div>

</section>

<h2>
    <a name="attivita">
        Attività
    </a>
</h2>

<h3>Tè del sabato (чай по субботам)</h3>

<div>
    <div class="review_photo">
        <div class="stretchy-wrapper">
            <div>
                <img src="./img/samovar.jpg" atl='Cup of tea'/>
            </div>
        </div>
    </div>
    <p>
        <b>Ogni sabato</b>, dalle 11:00 alle 13:00, la sede della nostra associazione si riempie di 
        colori e sapori grazie alla tradizionale cerimonia del tè. I russi amano bere il tè, che è parte integrante 
        della tradizione, della cultura e della vita quotidiana in Russia.
    </p>
    <p>
        L’incontro <q>il tè del sabato</q> è un’opportunità unica per 
        incontrare nuovi amici russi ed italiani, scambiare opinioni e riflessioni, e naturalmente praticare il tuo russo. 
        Ogni settimana viene affrontato un argomento nuovo, <b>in russo e in italiano</b>, per scoprire le tradizioni, 
        la storia e le peculiarità che rendono la cultura russa così affascinante ed unica al mondo! 
        La partecipazione è <b>gratuita</b> per tutti gli alunni della scuola.
    </p>
    <p>
        Il <q>tè del sabato</q> è un’attività che va avanti dal 2014.
        Potrai vedere le foto e l’elenco degli argomenti svolti negli ultimi anni:
    </p>
    <div class="div-table te-di-sabato-table">
        <div class="div-column col-third">
            <a href="te-di-sabato/2016/">
                <img src="/img/2016-gagarin.jpg">
                <p>
                    2016
                </p>
            </a>
        </div>
        <div class="div-column col-third">
            <a href="te-di-sabato/2017/">
                <img src="/img/2017-balet.jpg">
                <p>
                    2017
                </p>
            </a>
        </div>
        <div class="div-column col-third">
            <a href="te-di-sabato/2018/">
                <img src="/img/2018-maslenitsa.jpg">
                <p>
                    2018
                </p>
            </a>
        </div>
    </div>

</div>

<h3>Laboratorio del lessico, conversazione, fonetica e corsivo</h3>

<div>
    <div class="review_photo">
        <div class="stretchy-wrapper">
            <div>
                <img src="./img/laboratorio_di_lessico2.jpg" atl='Laboratorio di lessico'/>
            </div>
        </div>
    </div>
    <p>
        Oltre alle lezioni del corso, hai l’opportunità di praticare il tuo russo con attività extra molto utili, 
        come, ad esempio, <b>i laboratori del lessico e gli incontri settimanali, totalmente gratuiti</b>.
    </p>
    <p>Con il laboratorio del lessico avrai la possibilità di:
        <ul>
            <li>Accedere gratuitamente alle lezioni una volta alla settimana, con partecipazione libera per tutti i corsisti;</li>
            <li>Imparare nuove parole e metterle subito in pratica;</li>
            <li>Approfondire il lessico in piccoli gruppi del tuo livello;</li>
            <li>Fare conversazione con I madrelingua e con le persone del tuo stesso livello;</li>
            <li>Chiarire determinati argomenti e temi;</li>
            <li>Confrontarsi con le persone presenti al corso, che come te vogliono imparare il russo;</li>
            <li>Disporre dei materiale didattico necessario per imparare senza costi aggiuntivi.</li>
        </ul>
    </p>
</div>


<h2>
    <a name="i-nostri-insegnanti">
        I nostri insegnanti
    </a>
</h2>
<p>
    I nostri insegnanti sono tutti <b>madrelingua russi</b>, specializzati nell'insegnamento della lingua russa per stranieri:
</p>

<div itemprop="review" itemscope itemtype="http://schema.org/Review">
    <h3 itemprop="author">
        Olga, <?php echo age('1987-10-21'); ?> anni, Irkutsk (Siberia), Russia
    </h3>
    <div class="review_photo">
        <div class="stretchy-wrapper">
            <div>
                <img src="./img/olga.jpg" alt="Foto di Olga"/>
            </div>
        </div>
    </div>
    <div itemprop="reviewbody">
        <p>Sono una dei fondatori dell’associazione “Portico delle Parole”. L’associazione è nata nell’ottobre del 2013 con l’obbiettivo di creare un centro di didattica della lingua russa e di costruire un ponte tra la cultura russa e quella italiana.</p>
        <span id="olga_readmore" style="display: none">
            <p>Il mio lavoro presso l’associazione include l’insegnamento della lingua russa e la gestione della scuola e delle varie attività didattiche che proponiamo. Mi sono specializzata nell’insegnamento del russo come lingua straniera presso l’Università statale di Mosca e dal 2010 impartisco lezioni di russo, la mia lingua madre, a studenti americani e italiani. Grazie alla mia formazione didattica e professionale ho avuto l’opportunità di approfondire e mettere in pratica le tecniche più adeguate all’insegnamento della lingua russa.</p>
            <p>L’interesse  che manifestano i miei studenti verso la lingua e il mondo russo in generale è contagioso e stimolante, mi induce sempre a perfezionarmi per dare loro il meglio. Io ritengo che per imparare una lingua straniera siano fondamentali materiale didattico ben strutturato, pratica e interesse, per questo motivo abbiamo deciso di mettere a disposizione dei nostri corsisti non sono dell’ottimo materiale didattico, ma anche tante attività extra molto utili e gratuite, ad esempio il tè del sabato, laboratori linguistici (laboratori del lessico, laboratori di scrittura, laboratori di grammatica), ed eventi culturali, per dare loro la possibilità di praticare il loro russo.</p>
            <p>Con la nostra scuola avrai modo di scoprire la lingua russa, ma anche la cultura russa con le sue curiosità e tradizioni. Vieni a far parte del mondo russo di Bologna anche tu, ti aspetto!</p>
        </span>
        <p>
            <a id="olga_readmore_btn" style="cursor: pointer; text-decoration: underline;"></a>
        </p>
    </div>
</div>


<div itemprop="review" itemscope itemtype="http://schema.org/Review">
    <h3 itemprop="author">
        Iana, <?php echo age('1987-04-15'); ?> anni, Mosca, Russia
    </h3>
    <div class="review_photo">
        <div class="stretchy-wrapper">
            <div>
                <img src="./img/yana.jpg" alt="Foto di Iana"/>
            </div>
        </div>
    </div>
        
    <div itemprop="reviewbody">
        <p>Insegno al Portico delle Parole da febbraio 2016. Per un apprendimento veloce ed efficace del russo ti servono tre cose: volontà, motivazione e un insegnante che sostenga  questi due aspetti fondamentali. Al Portico delle Parole ti viene garantito un apprendimento produttivo e dinamico grazie alle lezioni ben strutturate e al tempo stesso interattive che coinvolgono tutti gli aspetti linguistici: fonetica, grammatica, lessico, ascolto, lettura e scrittura.</p>
        <span id="yana_readmore" style="display: none">
            <p>Grazie alla mia esperienza pluriennale e al mio percorso di studi incentrato sull’insegnamento della lingua russa come lingua straniera all'Università Statale di Mosca, preparo i programmi per i corsi collettivi e per quelli individuali, adattandoli alle esigenze degli studenti.</p>
            <p>I miei corsisti hanno superato con successo sia gli esami all'università in Italia sia i corsi universitari per i programmi di scambio a Mosca e a San Pietroburgo. Molti di loro, inoltre, sono stati in Russia per lavoro, per viaggi, e hanno partecipato a numerose conferenze in Russia.</p>
            <p>Oltre a questo, lavoro anche con bambini bilingue. Con loro mi occupo di lingua russa seguendo il programma scolastico ministeriale della Federazione Russa. E, naturalmente, impariamo a leggere, scrivere e parlare, giocando. I miei piccoli studenti superano con successo esami in russo sia in Italia che in Russia.</p>
            <p>Spero di vederti al Portico delle Parole dove troverai un ambiente professionale, stimolante ed accogliente.</p>
        </span>
        <p>
            <a id="yana_readmore_btn" style="cursor: pointer; text-decoration: underline;"></a>
        </p>
    </div>
</div>

<div itemprop="review" itemscope itemtype="http://schema.org/Review">
    <h3 itemprop="author">
        Anna, <?php echo age('1988-02-22'); ?> anni, Novosibirsk, Russia
    </h3>
    <div class="review_photo">
        <div class="stretchy-wrapper">
            <div>
                <img src="./img/shkapa.jpg" alt="Foto di Anna"/>
            </div>
        </div>
    </div>
        
    <div itemprop="reviewbody">
        <p>Io e i miei colleghi chiediamo sempre ai nostri studenti perché studiano la lingua russa e qual è il loro obiettivo. Con un approccio centrato sulla persona, gli studenti acquisiscono le nozioni del corso principale e approfondiscono le loro conoscenze su varie aree di interesse.</p>
        <span id="shkapa_readmore" style="display: none">
            <p>La mia esperienza pluriennale come insegnante di lingua russa presso il liceo scientifico Italo Calvino e presso l’Università Pedagogica a Mosca, mi ha permesso di constatare che un approccio integrato, che includa diversi metodi, è il più efficace e produttivo. Mi sono laureata in Lettere presso l’Università Statale di Novosibirsk nel 2010, con specializzazione in lingua e letteratura russa, e russo come lingua straniera. Ho terminato il dottorato presso L'sUniversità Statale Russa degli Studi Umanistici (RGGU) di Mosca. Dal 2016, studio economia all’Università di Bologna e da settembre 2017 insegno lingua e cultura russa all’associazione Portico delle Parole. Nell'insegnamento del russo, mi piace combinare in modo dinamico l’approccio di studio tradizionale con quello comunicativo.</p>
            <p>Per ottenere i migliori risultati, preparo ogni lezione tenendo conto delle caratteristiche del gruppo o dello studente singolo. C’è una cosa che ricordo sempre ai miei corsisti: lo studio di una qualsiasi lingua straniera è un piacere, ma anche un impegno. Tutto dipende dall'interesse, dalla motivazione e dalla buona volontà. Sarò molto lieta di aiutarti e di guidarti per rendere il tuo processo di apprendimento del russo il più interessante possibile.</p>
            <p>Ci vediamo al Portico delle Parole, il luogo dove potrai imparare tutto sulla lingua e la cultura russa!</p>
        </span>
        <p>
            <a id="shkapa_readmore_btn" style="cursor: pointer; text-decoration: underline;"></a>
        </p>
    </div>
</div>

<div itemprop="review" itemscope itemtype="http://schema.org/Review">
    <h3 itemprop="author">
        Anna, <?php echo age('1995-11-18'); ?> anni, Mosca, Russia
    </h3>
    <div class="review_photo">
        <div class="stretchy-wrapper">
            <div>
                <img src="./img/surikova.jpg" alt="Foto di Anna"/>
            </div>
        </div>
    </div>
        
    <div itemprop="reviewbody">
        <p>Nel 2017 ho conseguito la laurea in “Pedagogia linguistica” presso l'Università pedagogica di Mosca e, nello stesso anno, mi sono iscritta al corso di laurea magistrale in “Comunicazione pubblica e d’impresa” presso l'Università di Bologna. Qui ho conosciuto l’associazione Portico delle Parole dove insegno dall'ottobre 2017, grazie alla mia laurea e all'esperienza di insegnamento della lingua russa agli stranieri maturata a Mosca.</p>
        <span id="surikova_readmore" style="display: none">
            <p>Lavoro con studenti di tutti i livelli, inclusi quelli dei corsi collettivi e individuali, ma mi trovi anche ai laboratori del lessico. Per me, come insegnante, è importante vedere l'interesse negli occhi degli studenti, perciò in classe svolgo diversi tipi di attività: esercizi di grammatica, giochi di ruolo, ascolto di canzoni, visione di video da YouTube e di video-lezioni, spezzoni di film, discussioni su vari argomenti, scrittura di composizioni, lettere, e-mail; e inoltre, lettura e analisi di articoli da giornali russi. Questo lavoro mi piace molto perché trovo che sia molto gratificante vedere i miei studenti migliorare di volta in volta, lezione dopo lezione. Non vedo l’ora di fare la tua conoscenza e di introdurti in questo meraviglioso ambiente offerto dall'associazione Portico delle Parole.</p>
        </span>
        <p>
            <a id="surikova_readmore_btn" style="cursor: pointer; text-decoration: underline;"></a>
        </p>
    </div>
</div>

<div itemprop="review" itemscope itemtype="http://schema.org/Review">
    <h3 itemprop="author">
        Liubov, <?php echo age('1988-04-21'); ?> anni, Irkutsk, Russia
    </h3>
    <div class="review_photo">
        <div class="stretchy-wrapper">
            <div>
                <img src="./img/ermolaeva.jpg" alt="Foto di Liubov"/>
            </div>
        </div>
    </div>
        
    <div itemprop="reviewbody">
        <p>Da marzo 2016 insegno lingua russa al Portico delle Parole. Mi sono laureata all’università pedagogica di Irkutsk e ho terminato i corsi di insegnamento del russo come lingua straniera all’Università Statale di Mosca. Grazie alla mia laurea, mi occupo della preparazione dei materiali didattici per i corsi collettivi e individuali, incluso il laboratorio del lessico, e della creazione del materiale audiovisivo per tutti i livelli.</p>
        <span id="ermolaeva_readmore" style="display: none">
            <p>Generalmente, tengo lezioni individuali o a due, e il corso di russo per il business. In questi anni, molti dei miei studenti sono stati in Russia per lavoro, per l’università, o semplicemente per turismo. Sin dalla prima lezione cerco subito di coinvolgerti nell&#39;apprendimento della lingua russa con il supporto di materiali audiovisivi e mettendo subito in pratica gli argomenti di grammatica. Molti dei miei studenti sono lavoratori, per questo le mie lezioni sono molto flessibili e possiamo concordare insieme di volta in volta la lezione, secondo le tue esigenze.</p>
            <p>Spero di vederti presto qui con noi in associazione per condividere insieme interessanti aspetti culturali e linguistici del mondo russo.</p>
        </span>
        <p>
            <a id="ermolaeva_readmore_btn" style="cursor: pointer; text-decoration: underline;"></a>
        </p>
    </div>
</div>

<h2>
    <a name="dicono-di-noi">
        Dicono di noi
    </a>
</h2>


<!-- Reviews -->
<iframe id="reviews" type="text/html" width="100%" height="400"
  src="./reviews.html"
  frameborder="0"/>
</iframe>


<h2>
    <a name="prezzi">
        Prezzi
    </a>
</h2>

<div class="div-table price-table">
    <div class="div-column col-third">
        <div class="col-head">
            <h3>Individuale</h3>
        </div>
        <p>
            20 ore – 394&#8364; (19,70 all'ora)
            <br/>
            10 ore – 217&#8364; (21,70 all'ora)
        </p>
        <p>
            Nei giorni feriali dopo le 17:30 e il sabato a qualsiasi orario:
            <br/>
            20 ore – 464&#8364; (23,20 all'ora)
            <br/>
            10 ore – 247&#8364; (24,70 all'ora)
        </p>
    </div>
    <div class="div-column col-third">
        <div class="col-head">
            <h3>In due</h3>
        </div>
        <p>
            20 ore – 277&#8364; (13,80 all'ora)
            <br/>
            10 ore – 147&#8364; (14,70 all'ora)
        <p/>
        <p>
            Nei giorni feriali dopo le 17:30 e il sabato a qualsiasi orario:
            <br/>
            20 ore – 297&#8364; (14,80 all'ora)
            <br/>
            10 ore – 167&#8364; (16,70 all'ora)
        </p>
        <p>
            Prezzo a persona
        </p>
    </div>
    <div class="div-column col-third">
        <div class="col-head">
            <h3>In gruppo</h3>
        </div>
        <p>
            20 ore – <span style="text-decoration: line-through;">290&#8364;</span>
            <span style="color:red"> adesso in offerta 257&#8364;</span> (12,85 all'ora);
        </p>
        <p>
            I gruppi sono formati da 4 &mdash; max. 10 persone.
        </p>
        <p>
            Per i corsi collettivi offriamo uno sconto del 10&#37 per chi ha meno di 26 anni.
        </p>
    </div>
</div>

<p>
    È obbligatorio il rilascio di una tessera associativa del costo di 20&#8364;.
</p>
<p>
    Nel corso sono compresi: il manuale, attività linguistico-culturali gratuite: tè del sabato, laboratori del lessico e gli eventi speciali.
</p>

<h2>
    Metodi di pagamento
</h2>
<p>
    I metodi di pagamento: contanti, bonifico, assegno bancario. Dati per effettuare il bonifico:<br>
    Intestatario: Portico delle Parole<br>
    IBAN: IT27M0200802480000103405231<br>
    BIC: UNCRITM1OM0
</p>


<h2>
    <a name='orari'>
        Orario delle lezioni
    </a>
</h2>

<div class="div-table hours-table">
    <div class="div-column col-half">
        <div class="col-head">
            <h3>Corso individuale o in due<br>
            <span style="font-size: 75%">10 ore o 20 ore</span></h3>
        </div>
        <p>
            È possibile fare lezioni in qualsiasi giorno della settimana, dal lunedì al sabato, all'orario che ti è più comodo. 
            Si può, inoltre, concordare le lezioni successive, volta per volta.
            <br/>
            <br/>
            <b>10 ore = 8 lezioni</b><br>
            di 1 ora e 15 min (durata consigliata)
            <br/>
            <br/>
            <b>20 ore = 16 lezioni</b><br>
            di 1 ora e 15 min (durata consigliata)
        </p>
    </div>
    <div class="div-column col-half">
        <div class="col-head">
            <h3>Corso in gruppo<br>
            <span style="font-size: 75%">20 ore</span></h3>
        </div>
        <p>
            Le lezioni sono <b>1 volta alla settimana</b>. Il giorno sarà concordato con gli altri partecipanti del corso. È previsto un recupero gratuito di due lezioni.
            <br/>
            <br/>
            <b>20 ore = 12 lezioni</b><br>
            La durata di ogni lezione è di 1 ora e 40 min            
            <br/>
            <br/>
            Puoi scegliere fra <b>due fasce orarie</b>:<br>
            1) dalle 18:20 alle 20:00<br>
            2) dalle 20:10 alle 21:50
        </p>
    </div>
</div>

<div style="display: none">
    <h2 id="corso_italiano">Corso di italiano</h2>
    <p>
        Quest'anno c'è una novità! Offriamo infatti anche corsi di lingua e cultura italiane per stranieri, bambini e adulti. Sono lezioni individuali, il cui contenuto si cerca di adattare alle esigenze personali di ogni studente, affinché risultino interessanti e produttive! Il costo è di soli 19 euro all'ora. Sappiamo che cominciare a vivere in un nuovo paese è difficile, e per questo saremo felici di aiutarvi a fare conoscenza meglio e più in fretta con la lingua e la cultura italiane! Vi invitiamo con gioia ai nostri corsi e vi aspettiamo numerosi!
    </p>    
</div>

<h2>
    Attestato di partecipazione
</h2>
<p>
    Su richiesta, sarà rilascio un attestato di partecipazione, sia per corso collettivo che individuale. 
    Per il rilascio di tale certificato, è necessario aver frequentato almeno 16 ore su 20 del proprio corso.
</p>


<h2>
    <a name="dove-trovarci">
        Dove trovarci
    </a>
</h2>

<p>
    L'associazione si trova in pieno centro storico di Bologna, in via dell Pratello, 9, a soli 15 minuti dalla Stazione Centrale.
    È facilmente raggiungibile da ogni parte della città, a piedi o con:
</p>
<ul>
    <li>Autobus (fermate: piazza Malpighi, Ugo Bassi, via delle Lame);</li>
    <li>Macchina (parcheggio: <a href="https://www.apcoa.it/parcheggi-in/bologna/riva-reno/" target="_blank">Riva Reno</a>).</li>
</ul>

<a href="https://www.google.com/maps/place/Via+del+Pratello,+9,+40122+Bologna+BO/@44.4955127,11.3336612,551" target="_blank">
<img src="./img/map.png" alt="Map: via dell Pratello, 9, Bologna" title="mapa del Portico delle Parole">
</a>

<script type="text/javascript">
<!--
function autoResize(id){
    var newheight;
    var newwidth;
    if(document.getElementById){
        newheight=document.getElementById(id).contentWindow.document.body.scrollHeight;
        document.getElementById(id).height= (newheight + 35) + "px";  /*35 is a magic number :) */
    }
}
//-->   
</script>

<h2>Iscriviti online!</h2>

<p>
     Compila il modulo e ti contatteremo a breve!
</p>

<div>
    <iframe id="iscrizione" src="./iscrizione.php" 
        onLoad="autoResize('iscrizione');"
        scrolling="no"></iframe>
</div>  

<p>
    Al momento dell'iscrizione in associazione e del versamento della quota di partecipazione, 
    verranno stabilite data e orario di inizio della prima lezione.
</p>


<h2>
    In conclusione
</h2>   

<p>
    Ti ringraziamo per averci dedicato il tuo tempo. Contattaci per conoscerci e saperne di più dei 
    corsi e delle nostre attività. Una volta conosciuti la lingua e la cultura russa, non potrai più farne a meno!
</p>


<h2>
    <a name="foto"></a>
    Foto
</h2>
<div class='slideshow'></div>
<!-- <div style='position: relative; padding-bottom: 76%; height: 0; overflow: hidden;'>
    <a data-flickr-embed="true"  href="https://www.flickr.acom/photos/126701579@N07/albums/72157647133686116" title="www.porticodelleparole.it"><img src="https://c8.staticflickr.com/9/8613/15761132183_064d052173_z.jpg" width="640" height="480" alt="www.porticodelleparole.it"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</div>
 -->
<br>

</div>

<br>

<div class="main-container shadow">
    <p>
        Associazione Portico delle Parole <br>
        Via del Pratello 9, 40122 Bologna, Italia <br>
        Tel: +39 327 6617027 <br>
        <a href="mailto:info@porticodelleparole.it">info@porticodelleparole.it</a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.porticodelleparole.it">www.porticodelleparole.it</a>
    </p>
    <p>
        C.F.: 91361610370
    </p>
</div>

<!-- <script async src='./js/monitor.js'></script> -->
<script async src='./js/readmore.js'></script>
<!-- jQuery v1.7+ is required for slick.js -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

</body>
</html>
