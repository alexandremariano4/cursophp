<?php

$file = fopen('projeto.log','r');

while(!feof($file)){
    echo fgets($file,4096);
};

assert(fclose($file) == true);