<?php
function readfile001($fname){
  $f = fopen($fname,"r");
$c = fread($f,filesize($fname));
fclose($f);
return $c;
}
?>
