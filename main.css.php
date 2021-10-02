<?php
// It guarantees the last version of style
$fname = $_SERVER['DOCUMENT_ROOT']."/css/version";
$ver = "";
if (is_file($fname)) {
  $ver = file_get_contents($fname);
}
?>

<link rel="stylesheet" type="text/css" href="/css/main.css?v=<?php echo $ver?>">
