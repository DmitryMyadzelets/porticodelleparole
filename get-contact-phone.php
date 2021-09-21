<?php
$main = "+393276617027"; // Olga
$some = "+393297542687"; // Yana

$phone = $main;

$ts = strtotime('2018-07-03');
$te = strtotime('2018-08-21');
$t0 = time();
if ($t0 > $te || $t0 < $ts) {
} else {
  $phone = $some;
}
return $phone;
?>
