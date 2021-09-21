<?php
// Returns local representation of a given full Italian phone number like +393456789012
function getPhoneLocalized($phone) {
  return sprintf("%s %s %s", substr($phone, 3, 3), substr($phone, 6, 3), substr($phone, 9, 4)); 
}
?>
