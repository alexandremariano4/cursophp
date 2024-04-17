<?php 

date_default_timezone_set("Australia/Sydney");

$data = date("d/M/Y H:i:s", time() + (60 * 10) ); //adiciona 10 minutos ao tempo atual

echo $data;

?>