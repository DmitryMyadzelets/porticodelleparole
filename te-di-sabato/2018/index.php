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
    <img src="/img/te-di-sabato-2017-feste.jpg">
    <ul>
        <li>
            <b>Kolyada</b>: la tradizione antica di prevedere il futuro la notte della vigilia di Natale.
            <span class='authors'>Daria Kanishcheva di Pskov</span>            
        </li>
    </ul>

    <h3>Storia</h3>
    <img src="/img/te-di-sabato-2017-storia.jpg">
    <ul>
    </ul>

    <h3>Viaggio in Russia</h3>
    <img src="/img/te-di-sabato-2017-viaggio.jpg">
    <ul>
    </ul>

    <h3>Cultura</h3>
    <img src="/img/te-di-sabato-2017-cultura.jpg">
    <ul>
    </ul>

    <p>
        E ce ne sono molti altri ancora! Insieme a questi argomenti, sono stati organizzati 
        diversi eventi, aperti a tutti i corsisti, completamente gratuiti. Guarda qui sotto:
    </p>

    <h2>
        Eventi speciali
    </h2>
    <ul>
    </ul>

</section>

<?php require $_SERVER["DOCUMENT_ROOT"] . "/te-di-sabato/footer.html" ?>
