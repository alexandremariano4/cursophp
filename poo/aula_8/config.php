<?php 

function myAutoLoad($class){

    $class = str_replace("\\","/",$class); 
    echo $class."\n";
    if(file_exists('classes/'.$class.'.php')){
        include('classes/'.$class.'.php');
    }
}


?>