<?php
$domain = 'www.caminhosdamoda.sebraemg.com.br';

echo str_replace('.com.br','',str_replace('www.','',$domain));
echo "\n";
echo str_replace('www.','https://www.',$domain);
echo "\n";
echo substr($domain,0,4);
echo "\n";
echo substr($domain,-15);
echo "\n";
var_dump(substr($domain,4,-7));
echo "\n";
echo strlen($domain);

