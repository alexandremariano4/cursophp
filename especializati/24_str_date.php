<?php
echo date_default_timezone_get();

echo "\n";

date_default_timezone_set('America/Sao_Paulo');
echo date_default_timezone_get();
echo "\n";

echo 'O ano atual é : '. date('Y' . "\n");
echo 'O mês atual é : '. date('m' . "\n");
echo 'O dia atual é : '. date('d' . "\n");
echo 'Data completa : '. date('d/m/Y' . "\n");
echo 'A hora atual é : '. date('H' . "\n");
echo 'O minuto atual é : '. date('i' . "\n");
echo 'O segundo atual é : '. date('s' . "\n");
echo 'Hora completa : '. date('H:i:s' . "\n");
