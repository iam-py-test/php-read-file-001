<?php
function readfile001($fname){
$c = fread($fname,filesize($fname));
fclose($fname);
return $c;
}
?>
