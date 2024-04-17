<?php

var_dump(touch('teste.txt'));
var_dump(rename('teste.txt', 'teste2.txt'));
var_dump(file_exists('teste2.txt'));
var_dump(copy('teste2.txt', 'teste2copia.txt'));
var_dump(unlink('teste2copia.txt'));