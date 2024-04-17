<?php 

$path = getcwd();

$handle = opendir("$path");

while($file = readdir($handle)){
    if($file != '.' && $file != '..' ){
        // echo nl2br($file) . "\n";

        if(is_dir($file)){
            echo "$file É um diretório";
        }
        if(!is_dir($file)){
            echo "$file É do tipo ". pathinfo($file, PATHINFO_EXTENSION) . "\n";
        }
    }

}


?>