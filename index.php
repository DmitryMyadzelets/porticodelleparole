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

</head>

<body>
<div class="main-container shadow">


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
            <a href="http://maps.google.com/maps?q=Via+Nosadella+15B,+Bologna,+Italy&amp;hl=en&amp;sll=44.49522,11.352654&amp;sspn=0.053693,0.111494&amp;hnear=Via+Nosadella,+15B,+Bologna,+Emilia-Romagna,+Italy" target="_blank">
                <img src="./img/pin.svg" alt="Indirizzio" class="svg-icon"
                title="Indirizzio del Portico delle Parole"
                />via Nosadella 15 b, Bologna
            </a>
        </p>
        <p>
            <a href="https://www.facebook.com/porticodelleparole" TARGET="_blank">
                <img src="./img/facebook.svg" alt="Facebook logo" class="svg-icon"
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
                    $ts = strtotime('2016-08-02');
                    $te = strtotime('2016-08-26');
                    $t0 = time();
                    if ($t0 > $te || $t0 < $ts) {
                        echo('Tel. 327 661 7027'); // Olga
                    } else {
                        echo('Tel. 388 465 0676'); // Luba
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
    Corsi di russo
</h1>

<p>Insegniamo il russo, parlato e scritto, utilizzando un percorso ben strutturato per <b>tutti i livelli
    (A1, A2, B1, B2, C1)</b>, offrendo semplicità, grande coinvolgimento&hellip;. E un pizzico di divertimento!
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


<h3>Nel corso sono compresi:</h3>

<p>
    <ul>
        <li>Il <b>manuale</b>;
        <li>Email settimanali con info, link e altri materiali utili per imparare il russo;
        <li>Supporto via email, Facebook, WhatsApp per qualsiasi domanda riguardante i corsi e la lingua russa;
        <li><b>Il laboratorio del lessico settimanale</b> (1 ora e 30 minuti);
        <li>Lezioni di recupero per eventuali chiarimenti;
        <li>Attività culturali gratuite per tutti i corsisti.
    </ul>
</p>

<div>
    <div class="review_photo">
        <div class="stretchy-wrapper">
            <div>
                <img src="./img/samovar.jpg" atl='Cup of tea'/>
            </div>
        </div>
    </div>
    <p>
        Ma c’è di più! <b>Ogni sabato</b>, dalle 11:30 alle 13:30, la sede della nostra associazione si riempie di 
        colori e sapori grazie alla tradizionale cerimonia del tè. I russi amano bere il tè, che è parte integrante 
        della tradizione, della cultura e della vita quotidiana in Russia.
    </p>
    <p>
        L’incontro <b><q>il tè del sabato</q></b> &mdash; <q>чай по субботам</q> è un’opportunità unica per 
        incontrare nuovi amici russi ed italiani, scambiare opinioni e riflessioni, e naturalmente praticare il tuo russo. 
        Ogni settimana viene affrontato un argomento nuovo, <b>in russo e in italiano</b>, per scoprire le tradizioni, 
        la storia e le peculiarità che rendono la cultura russa così affascinante ed unica al mondo! 
        La partecipazione è <b>gratuita</b> per tutti gli alunni della scuola.
    </p>
    <p>
        Guarda gli argomenti al <a href="te-di-sabato/">tè del sabato e eventi speciali</a> nell anno 2017.
    </p>

    <div style="display: none">
        <p>
            Solo l’anno scorso abbiamo trattato tanti argomenti molto interessanti. Ecco l’elenco:
        </p>
        <ul>
            <li>a</li>
        </ul>
        <p>
            E ce ne sono molti altri ancora! Insieme a questi argomenti, sono stati organizzati diversi eventi, 
            aperti a tutti i corsisti, completamente gratuiti. Guarda qui sotto:
        </p>
        <ul>
            <li>b</li>
        </ul>
    </div>
</div>

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
        come, ad esempio, i <b>laboratori del lessico e gli incontri settimanali, totalmente gratuiti</b>.
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


<section>
    <h2>
        Corsi di russo speciali
    </h2>
    <p>
        Su richiesta, sono disponibili i seguenti <a href="corsi-speciali/">corsi speciali</a>:
        <ul>
            <li>
                <a href="corsi-speciali/#russo-per-adozione">
                    Russo per adozione
                </a>
            </li>
            <li>
                <a href="corsi-speciali/#russo-per-preparazione-esami-universitari">
                    Russo per preparazione esami universitari
                </a>
            </li>
            <li>
                <a href="corsi-speciali/#russo-per-azienda">
                    Russo per l’azienda
                </a>
            </li>
            <li>
                <a href="corsi-speciali/#russo-per-viaggiare">
                    Russo per viaggiare
                </a>
            </li>
        </ul>
    </p>
</section>


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
        Olga, 28 anni, Irkutsk (Siberia), Russia
    </h3>
    <div class="review_photo">
        <div class="stretchy-wrapper">
            <div>
                <img src="./img/olga.jpg" alt="Foto di Olga"/>
            </div>
        </div>
    </div>
    <div itemprop="reviewbody">
        <p>Amo insegnare, e sono proprio i miei studenti ad accrescere in me l'entusiasmo lezione dopo 
            lezione! La loro curiosità nell'apprendere è contagiosa, e così nasce in me la voglia di 
            perfezionarmi sempre per offrire loro lezioni sempre nuove, interessanti, utili e conoscitive.
        </p>
        <span id="olga_readmore" style="display: none">
            <p>
                Ho terminato i miei studi all'Università Statale di Mosca, dove mi sono specializzata 
                nell'insegnamento del russo come lingua straniera; dal 2010 ho dato lezioni di russo, 
                la mia lingua madre, a studenti americani e italiani. Vivo a Bologna da Febbraio del 2011. 
            </p>
            <p>
                Prima del mio trasferimento a Bologna, ho lavorato un anno in America, nel Colorado e a Seattle.
                Durante i miei anni universitari ho vissuto per sei mesi ad Algarve, in Portogallo, dove ho avuto 
                modo di praticare il portoghese con il programma Erasmus. 
            </p>
            <p>
                Ovviamente anche la mia vita in Italia è all'insegna delle lingue straniere. Grazie alle 
                mie esperienze di studio e lavoro ho avuto l'opportunità di conoscere meglio anche la mia 
                lingua madre, e ho così appreso le tecniche migliori per poterla insegnare e farla imparare 
                ai miei studenti. 
            </p>
            <p>
                Oltre al mio lavoro mi piace molto anche fare escursioni, passeggiate nella natura, e 
                visitare nuove città. È con gioia che vorrei condividere con voi le mie conoscenze della 
                lingua e della cultura russe! 
            </p>
            <p>
                Aspetto con impazienza di incontrarvi e spero di avere presto questo grande piacere!
            </p>
        </span>
        <p>
            <a id="olga_readmore_btn" style="cursor: pointer; text-decoration: underline;"></a>
        </p>
    </div>
</div>


<div itemprop="review" itemscope itemtype="http://schema.org/Review">
    <h3 itemprop="author">
        Yana, 29 anni, Mosca, Russia
    </h3>
    <div class="review_photo">
        <div class="stretchy-wrapper">
            <div>
                <img src="./img/yana.jpg" alt="Foto di Yana"/>
            </div>
        </div>
    </div>
        
    <div itemprop="reviewbody">
        <p>Ho concluso i corsi di insegnamento della lingua russa come lingua straniera nella 
            Università Statale di Mosca e da due anni insegno lingua russa agli stranieri.
            Non solo cerco di insegnare ai miei studenti la lingua russa, ma cerco anche di 
            trasmettere loro la cultura del mio paese: una cultura molto interessante 
            caratterizzata da tante diverse sfumature.</p>
        <p>I miei studenti hanno superato con successo i corsi universitari come programma di 
            scambio a Mosca e a San Pietroburgo, sono stati in Russia per adozioni, hanno 
            partecipato a numerose conferenze e hanno appena iniziato a leggere i classici della 
            letteratura. Per me è molto importante un approccio individuale con ogni studente, 
            conoscere le sue aspettative e i suoi obiettivi in modo da imparare insieme 
            il russo con entusiasmo.</p>
        <p>Spero di vederti tra i miei studenti nella nostra Associazione Portico delle Parole.</p>
    </div>
</div>


<div itemprop="review" itemscope itemtype="http://schema.org/Review">
    <h3 itemprop="author">
        Liubov, 29 anni, Volgograd - San Pietroburgo, Russia (lezioni di cultura russa)
    </h3>
    <div class="review_photo">
        <div class="stretchy-wrapper">
            <div>
                <img src="./img/liubov.dishluk.jpg" alt="Foto di Liubov"/>
            </div>
        </div>
    </div>
    <div itemprop="reviewbody">
        <p>
            Nel 2013 sono venuta a Bologna per dedicarmi alla ricerca nel dottorato presso l’Università di Bologna. 
            Il tema della mia ricerca riguarda i rapporti tra il cinema sovietico e l’Italia. 
        </p>
        <span id="liubov_readmore" style="display: none">
            <p>
                Collaboro con l’Associazione “Portico delle parole” dal Novembre 2014, facendo lezioni sulla cultura 
                russa durante il nostro abitudinario <q>tè’ del sabato</q> &mdash; <q>чай по субботам</q> e i vari 
                incontri extra: parliamo di cinema, lingua, storia, etc. (vedi Lista degli argomenti del tè del sabato).
                Essere di Volgograd (ex-Stalingrado), vivere molti anni a San Pietroburgo e viaggiare molto 
                in Russia&hellip; queste esperienze mi hanno fatto vedere quanto è diverso il mio paese e mi hanno 
                dato la possibilità di conoscerlo meglio. È ciò di cui racconto con grande piacere durante le 
                mie lezioni al Portico delle Parole.
            </p>
            <p>
                Sono lieta di condividere con te le mie conoscenze della lingua e della cultura russa. Vieni alle lezioni 
                al Portico delle Parole e il mondo russo bolognese ti si aprirà davanti agli occhi!
            </p>
        </span>            
        <p>
            <a id="liubov_readmore_btn" style="cursor: pointer; text-decoration: underline;"></a>
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
    Prezzi
</h2>

<div class="div-table price-table">
    <div class="div-column col-third">
        <div class="col-head">
            <h3>Individuale</h3>
        </div>
        <p>
            20 ore – 364&#8364; (18,2 all'ora)
            <br/>
            10 ore – 197&#8364; (19,7 all'ora)
        </p>
    </div>
    <div class="div-column col-third">
        <div class="col-head">
            <h3>In due</h3>
        </div>
        <p>
            20 ore – 277&#8364; (13,8 all'ora)
            <br/>
            10 ore – 147&#8364; (14,7 all'ora)
        <p/>
        <p>
            Prezzo a persona
        </p>
    </div>
    <div class="div-column col-third">
        <div class="col-head">
            <h3>In gruppo</h3>
        </div>
        <p>
            20 ore – <span style="text-decoration: line-through;">240&#8364;</span> <span style="color:red">adesso in offerta 197&#8364;</span>  (9,8 all'ora)
        </p>
        <p>
            I gruppi sono formati da 5 &mdash; max. 10 persone</span>
        </p>
    </div>
</div>

<p>
    È obbligatorio il rilascio di una tessera associativa del costo di 20&#8364;.
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
    Orario delle lezioni
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
            Le lezioni sono <b>1 volta alla settimana</b>. Il giorno sarà concordato con gli altri partecipanti del corso.
            <br/>
            <br/>
            <b>20 ore = 12 lezioni</b><br>
            La durata di ogni lezione è di 1 ora e 40 min
            <br/>
            <br/>
            Puoi scegliere fra <b>due fasce orarie</b>:<br>
            1) dalle 18:15 alle 19:55<br>
            2) dalle 20:05 alle 21:45
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
    L'associazione si trova in pieno centro storico di Bologna, in via Nosadella, 15 B, a soli 20 minuti dalla Stazione Centrale.
    È facilmente raggiungibile da ogni parte della città, a piedi o con:
</p>
<ul>
    <li>Autobus (fermata piazza Malpighi);</li>
    <li>Macchina (parcheggi: parcheggio nella piazzetta di Porta Saragozza a 5 minuti di distanza a piedi; 
        parcheggio Liceo Righi).</li>
</ul>

<a href="http://maps.google.com/maps?q=Via+Nosadella+15B,+Bologna,+Italy&amp;hl=en&amp;sll=44.49522,11.352654&amp;sspn=0.053693,0.111494&amp;hnear=Via+Nosadella,+15B,+Bologna,+Emilia-Romagna,+Italy" target="_blank">
<img src="./img/map.png" alt="Map: via Nosadella, 15B, Bologna" title="mapa del Portico delle Parole">
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
    Foto
</h2>
<div style='position: relative; padding-bottom: 76%; height: 0; overflow: hidden;'>
    <a data-flickr-embed="true"  href="https://www.flickr.com/photos/126701579@N07/albums/72157647133686116" title="www.porticodelleparole.it"><img src="https://c8.staticflickr.com/9/8613/15761132183_064d052173_z.jpg" width="640" height="480" alt="www.porticodelleparole.it"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
</div>

</div>

<br>

<div class="main-container shadow">
    <p>
        Associazione Portico delle Parole <br>
        via Nosadella 15B, 40123 Bologna, Italia <br>
        Tel: +39 327 6617027 <br>
        <a href="mailto:info@porticodelleparole.it">info@porticodelleparole.it</a>&nbsp;&nbsp;&nbsp;
        <a href="http://www.porticodelleparole.it">www.porticodelleparole.it</a>
    </p>
    <p>
        C.F.: 91361610370
    </p>
</div>

<!-- <script async src='./js/monitor.js'></script> -->
<script async src='./js/readmore.js'></script>

</body>
</html>
