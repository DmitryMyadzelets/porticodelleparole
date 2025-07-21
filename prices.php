<?php
function perHour($price, $hours) {
  echo number_format($price / $hours, 2, ",", ""); 
}
?>

<div class="div-table price-table">
  <div class="div-column col-third">
    <div class="col-head">
      <h3>In gruppo</h3>
    </div>
    <p>
      20 ore – <span style="text-decoration: line-through;">320&#8364;</span>
      <span style="color:red"> adesso in offerta 297&#8364; (<?php perHour(297, 20); ?> all'ora)</span>
    </p>
    <p>
      I gruppi sono formati da 3 &mdash; max. 8 persone.
    </p>
    <p>
      Durante il corso sono previste 3 lezioni di recupero.
    </p>
<?php if ($discount) { echo '
    <p>
      Per i corsi collettivi offriamo uno sconto del 10&#37; per chi ha meno di 26 anni.
    </p>
'; } ?>
  </div>
  <div class="div-column col-third">
    <div class="col-head">
      <h3>In due</h3>
    </div>
    <p>
      20 ore – 374&#8364; (<?php perHour(374, 20); ?> all'ora)
      <br/>
      10 ore – 197&#8364; (<?php perHour(197, 10); ?> all'ora)
    </p>
    <p>
      Nei giorni feriali dopo le 17:30 e il sabato a qualsiasi orario:
      <br/>
      20 ore – 404&#8364; (<?php perHour(404, 20); ?> all'ora)
      <br/>
      10 ore – 217&#8364; (<?php perHour(217, 10); ?> all'ora)
    </p>
    <p>
      Prezzo a persona
    </p>
  </div>
  <div class="div-column col-third">
    <div class="col-head">
      <h3>Individuale</h3>
    </div>
    <p>
      20 ore –
      <span style="text-decoration: line-through;">574&#8364;</span>
      <span style="color:red">
      adesso in offerta 534&#8364; (<?php perHour(534, 20); ?> all'ora)
      </span>
      <br/>
      10 ore – 
      <span style="text-decoration: line-through;">374&#8364;</span>
      <span style="color:red">
      adesso in offerta 297&#8364; (<?php perHour(297, 10); ?> all'ora)
      </span>
      <br/>
      5 ore - 163&#8364; (<?php perHour(163, 5); ?> all'ora)
      <br/>
      1 ora - 35,70&#8364;
    </p>
    <p>
      Nei giorni feriali dopo le 17:30 e il sabato mattina:
      <br/>
      20 ore – 594&#8364; (<?php perHour(594, 20); ?> all'ora)
      <br/>
      10 ore – 327&#8364; (<?php perHour(327, 10); ?> all'ora)
    </p>
  </div>
</div>

<p>
    È obbligatorio il rilascio di una tessera associativa del costo di 40&#8364;.
</p>
<p>
    Nel corso sono <b>compresi</b>: il manuale, attività linguistico-culturali: tè del sabato, laboratori del lessico e gli eventi speciali.
</p>
<p>
  I corsi e attività si svolgano online su Zoom oppure in sede a Bologna.
</p>

