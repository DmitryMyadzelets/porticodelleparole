<!DOCTYPE HTML>
<html lang="it">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-control" content="private">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="description" content="Vuoi imparare il russo parlato e scritto in maniera coinvolgente, divertente e sempre motivante? Vieni da noi e fai il Corso di Lingua Russa a Bologna in Associazione Portoco delle Parole"> -->
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

    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <title>
        Corso di Russo a Bologna - Associazione Portico delle Parole
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
        alt="Portico delle parole. Associazione. Corso di lingua Russa"
        />
    </div>
</div>

<div class="center">
<p>Vuoi imparare <b>il russo parlato</b> e scritto in maniera coinvolgente, divertente e originale? 
    Vieni da noi a frequentare il corso di russo <b>Immersione in Russia</b>!</p>
</div>  

<?php

    $fname = 'config/config.json';

    $data = @file_get_contents($fname);
    $config = (array)json_decode($data);

    $start_date = strtotime($config['firstDate']);
    $now = strtotime("now");
    $days_left = 1 + floor(($start_date - $now)/(60*60*24));

    $manca = "Solo " . $days_left . " giorni all'inizio!";
    if ($days_left == 1) {
        $manca = "Solo 1 giorno all'inizio!";
    }

    if ($days_left > 0) {
        echo "<div class=\"ads center\"><p>";
        echo "<b>".$config['firstDateFormatted']."</b> ci sarà la prima lezione del nuovo corso per principianti, intermedi e avanzati";
        echo "<br/><b>", $manca, "</b>";
        echo "<br/>Affrettatevi, i posti sono limitati.";
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
                <img src="./img/pin.svg" alt="" class="svg-icon"
                />via Nosadella 15 b, Bologna
            </a>
        </p>
        <p>
            <a href="https://www.facebook.com/porticodelleparole" TARGET="_blank">
                <img src="./img/facebook.svg" alt="" class="svg-icon"
                />Seguici su Facebook
            </a>
            <!-- <img src="./img/google.svg" alt="" style="width: 2em; margin-right: 0.5em; vertical-align: middle;"> -->
        </p>
    </div>
    <div class="div-column col-half">
        <p>
            <!-- Olga -->
            <a href="tel:+393276617027" style="text-decoration: none; color: #444;">
                <img src="./img/phonecall.svg" alt="" class="svg-icon"/>
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
                <img src="./img/mail.svg" alt="" class="svg-icon"
                />info@porticodelleparole.it
            </a>
        </p>
    </div>
</div>


<p>
    Ciao! Vieni da noi all’associazione culturale <b>Portico delle Parole</b> e troverai la piccola 
    isola della cultura russa dentro le mura di Bologna. Per saperne di più guarda il video qui sotto.
</p>


<!-- Video -->
<div class="stretchy-wrapper" id="video-wrapper">
    <div>
        <iframe id="ytplayer" type="text/html" width="100%" height="100%"
          src="http://www.youtube.com/embed/RFPyCgWDbwA?rel=0&controls=0&showinfo=0&origin=http://www.porticodelleparole.it/"
          frameborder="0"/></iframe>
    </div>
</div>


<h2>
    Corsi di russo
</h2>

<p>
    Insegniamo il russo parlato e scritto utilizzando un percorso ben strutturato, 
    che organizziamo per tutti i livelli, offrendo semplicità, divertimento e grande coinvolgimento.
</p>
<p> 
    Facciamo un esempio. Sei un principiante? <b>Che cosa impari in 13 lezioni, 20 ore</b>:
    <ul>
        <li>L’alfabeto cirillico</li>
        <li>Leggere semplici testi in cirillico</li>
        <li>Scrivere un’email in russo (usando gli addesivi con le lettere in cirillico per la tua testiera)</li>
        <li>Sostenere una conversazione su temi di uso quotidiano con un madrelingua russo</li>
        <li>Parlare di te stesso e della tua famiglia</li>
        <li>Chiedere informazioni in varie situazioni durante un viaggio in Russia</li>
        <li>Le tradizioni e le feste russe</li>
    </ul>
</p>

<h3>Che cosa è compreso nel corso:</h3>

<p>
    <ul>
        <li>Il <b>manuale</b><!-- , che è fatto dai nostri insegnanti -->
        <li>L’email settimanale con link per vedere video, ascoltare dialoghi, e materiali per fare i compiti
        <li>Supporto per qualsiasi domanda riguardando al corso via email, Facebook, WhatsApp
        <li><b>Workshop settimanale</b> di 1 ora e 30 minuti di ascolto, fonetica e lettura
        <li>Una lezione di 1 ora e 30 minuti di recupero durante il corso
        <li><b>L’aperitivo</b> russo alla fine o alla metà del corso
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
        L’incontro &quot;<b>il te’ di sabato</b>&quot; &mdash; &quot;чай по субботам&quot; è un’opportunità unica per te 
        per incontrare nuovi amici russi ed italiani, scambiare opinioni e riflessioni, e naturalmente praticare il tuo russo. 
        Ogni settimana viene affrontato un argomento nuovo, <b>in russo e in italiano</b>, per scoprire le tradizioni, 
        la storia e le peculiarità che rendono la cultura russa così affascinante ed unica al mondo! 
        La partecipazione è <b>gratuita</b> per tutti gli alunni della scuola.
    </p>
</div>

<div>
    <div class="review_photo">
        <div class="stretchy-wrapper">
            <div>
                <img src="./img/laboratorio_di_lessico2.jpg" atl='Laboratorio di lessico'/>
            </div>
        </div>
    </div>
    <p>Oltre alla lezione canonica ti diamo tanta possibilità di praticare il tuo russo con utilissime 
        attività extra quali ad esempio i <b>laboratori del lessico, incontri settimanali, gratuiti</b>.</p>

    <p>Con il laboratorio del lessico avrai la possibilità di:
        <ul>
            <li>Frequentare le lezioni gratuite una volta alla settimana (per tutti i corsisti).</li>
            <li>Imparare nuove parole e metterle subito in pratica.</li>
            <li>Approfondire il lessico in piccoli gruppi del tuo livello con I madrelingua.</li>
            <li>Fare conversazione con I madrelingua e con le persone del tuo stesso livello.</li>
            <li>Chiedere per qualsiasi domanda.</li>
            <li>Confrontarsi con le persone presenti al corso che come te vogliono parlare in russo.</li>
            <li>Avere a disposizione il materiale didattico necessario per imparare senza costi aggiuntivi.</li>
        </ul>
    </p>
</div>


<h2>
    I nostri insegnanti
</h2>
<p>
    I nostri insegnanti sono tutti <b>madrelingua russi</b> laureati nell'insegnamento della lingua russa per stranieri:
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
        Ksenia, 29 anni, Mosca, Russia
    </h3>
    <div class="review_photo">
        <div class="stretchy-wrapper">
            <div>
                <img src="./img/ksenia.jpg" alt="Foto di Ksenia"/>
            </div>
        </div>
    </div>
    <div itemprop="reviewbody">
        <p>Abito a Bologna dal 2012 e mi sono laureata in Linguistica all'Università di Bologna. 
        Al momento sto lavorando presso la Scuola di Lingue e Letterature Straniere 
        dell'Università di Bologna: tengo un corso di esercitazioni di lingua russa.</p>
        <p>Durante le mie lezioni faccio di tutto per coinvolgere al massimo gli studenti, 
        creando un atmosfera amichevole e divertente, avvicinandosi passo dopo passo allo 
        scopo principale &mdash; parlare il russo, ed è proprio questo risultato dell'insegnamento 
        che mi da più soddisfazione! Venite anche voi all'Associazione a scoprire un mondo nuovo, 
        della lingua e della cultura russa!</p>
    </div>
</div>


<div itemprop="review" itemscope itemtype="http://schema.org/Review">
    <h3 itemprop="author">
        Liubov, 29 anni, Volgograd - San Pietroburgo, Russia
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
            Mi sono laureata in giornalismo all’Università statale di San Pietroburgo, 
            dove ho scritto la tesi finale sulla tv italiana. Sono stata sempre interessata ai rapporti tra 
            l’Italia e la Russia anche quando poi ho lavorato come giornalista a San Pietroburgo.
            L’altro mio grande interesse sono sempre state le lingue: sia il russo che le lingue straniere. 
        </p>
        <span id="liubov_readmore" style="display: none">
            <p>
                A San Pietroburgo ho studiato per un anno anche alla Facoltà di
                Filologia all’Università statale pedagogica di Herzen, dove ho conosciuto le lingue
                antiche slave che mi hanno aiutato molto a capire la mia lingua madre. Poi ho
                avuto anche vissuto l’esperienza da ‘exchange student’ all’Università Roma Tre,
                al Dipartimento di studi Umanistici. Per ora posso dire che parlo cingue lingue
                straniere più il russo : ) Per me è sempre un piacere condivere la mia esperienza
                di studio con gli allunni del corso di russo.
            </p>
            <p>
                Nel 2013 sono venuta a Bologna per dedicarmi alla ricerca nel dottorato
                all’Università di Bologna. E ancora una volta il tema della mia ricerca riguarda i
                rapporti tra il cinema sovietico e l’Italia.
            </p>
            <p>
                Collaboro con l’Associazione “Portico delle parole” gia’ da 2 anni facendo le
                lezioni sulla cultura russa: il cinema, la lingua, la storia, etc. Essere di Volgograd
                (ex-Stalingrado), vivere molti anni a San Pietroburgo e viaggiare molto in Russia
                &mdash; queste esperienze mi hanno fatto vedere quanto è diverso il mio paese e mi
                hanno dato la possibilità di conoscerlo meglio. È ciò che racconto con grande
                piacere durante le mie lezioni al Portico delle Parole. 
            </p>
            <p>
                Sono lieta di condividere con te le mie conoscenze della lingua e della cultura russa. Vieni ai lezioni al Portico
                delle Parole e ti si aprirà il mondo russo a Bologna!
            </p>
        </span>            
        <p>
            <a id="liubov_readmore_btn" style="cursor: pointer; text-decoration: underline;"></a>
        </p>
    </div>
</div>


<h2>
    Dicono di noi
</h2>


<!-- Reviews -->
<iframe id="reviews" type="text/html" width="100%" height="400"
  src="./reviews.html"
  frameborder="0"/>
</iframe>


<h2>
    Prezzi per i corsi di russo
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
            Si paga il costo a persona
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
            Il gruppo è formato da 5 a 10 persone</span>
        </p>
    </div>
</div>

<p>
    Siccome siamo un’associazione culturale è obbligatorio il rilascio della tessera associativa che costa 20&#8364;.
</p>



<h2>
    Orari dei corsi di russo
</h2>

<div class="div-table hours-table">
    <div class="div-column col-half">
        <div class="col-head">
            <h3>Corso individuale o in due<br>
            <span style="font-size: 75%">10 ore o 20 ore</span></h3>
        </div>
        <p>
            Si può fare lezione <b>qualsiasi giorno settimana a qualsiasi ora</b> 
            e si può anche fissare l’appuntamento di volta in volta per le lezioni successive.
            <br/>
            <br/>
            <b>In 10 ore ci sono 8 lezioni</b><br>
            di 1 ora e 15 min 
            <br/>
            <br/>
            <b>In 20 ore ci sono 16 lezioni</b><br>
            di 1 ora e 15 min
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
            <b>In 20 ore ci sono 13 lezioni</b><br>
            La durata della lezione è di 1 ora e 35 min 
            <br/>
            <br/>
            Puoi sceglere fra <b>due fasce orarie</b>:<br>
            1) dalle 18:15 alle 19:50<br>
            2) dalle 20:00 alle 21:35
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
    Dove si trova la sede dell’associazione
</h2>

<p>
    Ci troviamo nel vero e proprio cuore di Bologna, nel centro storico, in via Nosadella, 15 B. 
</p>    

<a href="http://maps.google.com/maps?q=Via+Nosadella+15B,+Bologna,+Italy&amp;hl=en&amp;sll=44.49522,11.352654&amp;sspn=0.053693,0.111494&amp;hnear=Via+Nosadella,+15B,+Bologna,+Emilia-Romagna,+Italy" target="_blank">
<img src="./img/map.png" alt="Map: via Nosadella, 15B, Bologna">
</a>

<p>
    Posto che puoi raggiungere molto facilmente da tutte le parti della città. 
    C’è anche il parcheggio pubblico nella piazzetta di Porta Saragozza che si trova a 5-7 min di cammino.
</p>



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


<div>
    <iframe id="iscrizione" src="./iscrizione.php" 
        onLoad="autoResize('iscrizione');"
        scrolling="no"></iframe>
</div>  

<p>
Quando vieni presso la nostra sede per effettuare l’iscrizione e versare la quota di partecipazione, 
ci accordiamo per il giorno e l’ora esatti della prima lezione!
</p>




<h2>
    Infine
</h2>   

<p>
    Ti vogliamo ringraziare per averci dedicato il tuo tempo. Siamo sicuri che il nostro corso sarà 
    per te molto utile e interessante, se vuoi immergerti nel mondo della lingua e cultura russe!
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
        C.F.: 91361610370 &mdash; IBAN: IT27M0200802480000103405231
    </p>
</div>

<!-- <script async src='./js/monitor.js'></script> -->
<script async src='./js/readmore.js'></script>

</body>
</html>
