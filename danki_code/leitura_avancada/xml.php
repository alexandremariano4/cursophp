<?php 

    $xml = simplexml_load_file('file.xml');

    print_r($xml);
    echo $xml->informacoes->item->nome . "\n";
    echo $xml->informacoes2->item->nome . "\n";

    $test_array = array(
        'Caroline' => 'nome',
        'Moreira' => 'sobrenome',
        '23' => 'idade',
        'barney,cacto' => 'animais'
    );

    $xml = new SimpleXMLElement('<root/>');

    array_walk_recursive($test_array, array ($xml, 'addChild'));

    file_put_contents('new_file.xml',$xml->asXML());

    print $xml->asXML();


?>