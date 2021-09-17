<div class="div-table contacts-table">
    <div class="div-column col-half">
        <p>
            <a href="https://www.google.com/maps?cid=16854914928900207445" target="_blank">
                <img src="/img/pin.svg" alt="Indirizzio" class="svg-icon"
                title="Indirizzio del Portico delle Parole"
                />Via dell Pratello 9, Bologna
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
        <p>
             <a href="https://www.instagram.com/porticodelleparole/" TARGET="_blank">
                <img src="/img/instagram.svg" alt="Instagram logo" class="svg-icon"
                title="Seguici il Portico delle Parole su Instagram"
                />Seguici su Instagram
            </a>
        </p>

    </div>
    <div class="div-column col-half">
        <p>
            <!-- Olga -->
            <a href="tel:+393276617027" style="text-decoration: none; color: inherit;">
                <img src="/img/phone-02.svg" alt="Phone" class="svg-icon"
                title="Chiamaci al Portico delle Parole"
                />
                Tel.
                <span style="font-size: 168%;">
                    <span style="">
                        <?php
                        $ts = strtotime('2018-07-03');
                        $te = strtotime('2018-08-21');
                        $t0 = time();
                        if ($t0 > $te || $t0 < $ts) {
                            echo('&nbsp;327&nbsp;661&nbsp;7027'); // Olga
                        } else {
                            echo('329 754 2687'); // Yana
                        }
                        ?>
                    </span>
                </span>
            </a>
        </p>
        <p>
            <a href="https://wa.me/393276617027">
                <img src="/img/whatsapp.svg" alt="WhatsApp" class="svg-icon"
                title="Contattaci su WhatsApp"
                />
                Contattaci su WhatsApp
            </a>
        </p>
        <p>
            <a href="mailto:info@porticodelleparole.it">
                <!-- style="text-decoration: none; color: #444;" -->
                <img src="/img/mail.svg" alt="email" class="svg-icon"
                title="email al Portico delle Parole"
                />
                info@porticodelleparole.it
            </a>
        </p>
    </div>
</div>
