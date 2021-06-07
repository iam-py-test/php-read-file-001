<?php
function readfile($fname){
$c = fread($fname,filesize($fname));
fclose($fname);
return $c;
}
?>
