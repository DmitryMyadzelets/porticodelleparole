<?php
  $phone = include $_SERVER['DOCUMENT_ROOT']."/get-contact-phone.php";
  include_once $_SERVER['DOCUMENT_ROOT']."/get-phone-localized.php";
?>

<br>

<div class="main-container shadow">
    <p>
        Associazione Portico delle Parole <br>
        Via del Pratello 9, 40122 Bologna, Italia <br>
        Tel: <?php echo $phone; ?><br>
        <a href="mailto:info@porticodelleparole.it">info@porticodelleparole.it</a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.porticodelleparole.it">www.porticodelleparole.it</a>
    </p>
    <p>
        C.F.: 91361610370
    </p>
    <hr>
    <p>
        <a href="/cookie/">Informativa sui Cookie</a>
        &nbsp;|&nbsp;
        <a href="/privacy/">Privacy Policy</a>        
    </p>
</div>
