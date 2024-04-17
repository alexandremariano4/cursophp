<?php
$name = 'Alexandre Mariano';

if (isset($name)){
    echo $name;
}
else{
    echo '$name não existe';
}

echo "\n";
unset($name);

if (isset($name)){
    echo $name;
}
else{
    echo '$name não existe';
}
