<?php require $_SERVER["DOCUMENT_ROOT"] . "/te-di-sabato/header.html" ?>

<!-- slideshow -->
<script type="text/javascript">
    var ids = [];
    $(function () {
        var slides = $('.slideshow');
        var i = ids.length;
        while (i > 0) {
            i = i - 1;
            slides.append('<div><div class=\'slick-frame\'><img data-lazy=\'http://www.porticodelleparole.it/photos/?id=' + ids[i] + '\'/></div></div>');
        }
        slides.slick({
            lazyLoad: 'ondemand',
            autoplay: true,
            autoplaySpeed: 5000
        });
    });
</script>


<section>
    <h1>
        Anno 2018 &mdash; gli argomenti degli incontri per tutti i livelli del corso di russo
    </h1>

    <h2>
        Tè del sabato (чай по субботам)
    </h2>

    <h3>
        Feste tradizionali russe e dell'ex Unione Sovietica
    </h3>
    <!-- <img src="/img/te-di-sabato-2017-feste.jpg"> -->
    <ul>
        <li>
          <b>Maslenitsa</b> &mdash; il Carnevale russo: storia, tradizioni, folklore.
          <span class='authors'>Liubov Ermolaeva, Olga Miadzeletc di Irkutsk</span>
        </li>
        <li>
          <b>Festa dei difensori della Patria</b> del 23 febbraio: storia e tradizioni.
          <span class='authors'>Yana Kichenko di Mosca</span>
        </li>
    </ul>

    <h3>Storia</h3>
    <!-- <img src="/img/te-di-sabato-2017-storia.jpg"> -->
    <ul>
      <li>
        <b>L’alfabetizzazione e l’educazione della Rus’ antica</b> (parte 2).
        <span class='authors'>Anna Shkapa di Novosibirsk</span>
      </li>
      <li>
        <b>Assedio di Leningrado</b>. Diari e la poesia sull’assedio di Leningrado.
        <span class='authors'>Anna Shkapa di Novosibirsk</span>
      </li>
    </ul>

    <h3>Viaggio in Russia</h3>
    <!-- <img src="/img/te-di-sabato-2017-viaggio.jpg"> -->
    <ul>
      <li>
        <b>Geografia della Russia</b>.
        <span class='authors'>Olga Miadzeletc di Irkutsk</span>
      </li>
      <li>
        <b>Estate in Russia</b>. Consigli pratici per viaggiare e vivere in Russia.
        <span class='authors'>Martina Viérin, Sofia D’Amuri, Olga Miadzeletc</span>
      </li>
      <li>
        <b>Città dell’anello d’oro</b>: fatti interessanti, storia, posti da visitare.
        <span class='authors'>Anna Surikova di Mosca</span>
      </li>
      <li>
        <b>Irkutsk e il Lago Baikal</b> &mdash; lago più pulito e profondo al mondo (patrimonio dell’UNESCO).
        <span class='authors'>Liubov Ermolaeva di Irkutsk</span>
      </li>
    </ul>

    <h3>Cultura</h3>
    <!-- <img src="/img/te-di-sabato-2017-cultura.jpg"> -->
    <ul>
      <li>
        <b>Anna Akhmatova</b>. La vita e la poesia.
        <span class='authors'>Anna Shkapa di Novosibirsk</span>
      </li>
      <li>
        <b>Balletto russo</b>
        <span class='authors'>Anna Surikova di Mosca</span>
      </li>
      <li>
        <b>L’arte delle avanguardie russe</b>.
        Mostra <q>Revolutija</q>: da Chagall a Malevich, da Repin a Kandinsky, capolavori assoluti.
        <span class='authors'>Anna Shkapa di Novosibirsk</span>
      </li>
      <li>
        <b>Cinema sovietico</b>. Censura. Le commedie di Leonid Gajdaj: <q>Operazione Y e altre
avventure di Šurik</q>, <q>La prigioniera caucasica, o Le nuove avventure di Šurik</q>, e altri film
con le citazioni più famose tratte dai film.
        <span class='authors'>Valeria Belova di Gorodets</span>
      </li>
      <li>
        <b>Nostalgia dell’Unione Sovietica</b>: la vita quotidiana di quell’ epoca, racconti dei parenti,
genitori, foto e materiale video, le cose che il mondo occidentale non conosceva.
        <span class='authors'>Olga Miadzeletc di Irkutsk</span>
      </li>
      <li>
        <b>Il sistema scolastico in Russia</b>.
        <span class='authors'>Liubov Ermolaeva di Irkutsk</span>
      </li>
    </ul>

    <p>
        E ce ne sono molti altri ancora! Insieme a questi argomenti, sono stati organizzati 
        diversi eventi, aperti a tutti i corsisti, completamente gratuiti. Guarda qui sotto:
    </p>

    <h2>
        Eventi speciali
    </h2>
    <ul>
      <li>Pattinaggio sul ghiaccio a Rastignano.</li>
      <li>Picnic per la Pasqua Ortodossa.</li>
      <li>Visita guidata al negozio russo.</li>
      <li>Presentazione sul cibo russo con la degustazione.</li>
      <li>Decorazione dei prianiki (biscotti tradizionali russi).</li>
      <li>Visita guidata al negozio russo.</li>
      <li>Presentazione sul cibo russo con la degustazione.</li>
      <li>Aperitivo con la lettura delle poesie in russo dedicato al compleanao del poeta A.S. Pushkin e la giornata della lingua russa.</li>
      <li>Picnic per festeggiare la fine dell’anno accademico.</li>
    </ul>

</section>

<?php require $_SERVER["DOCUMENT_ROOT"] . "/te-di-sabato/footer.html" ?>
