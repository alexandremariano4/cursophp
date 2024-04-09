<?php 
    $curl = curl_init();
    curl_setopt($curl,CURLOPT_URL,"http://localhost/cursophp/webservices_e_api/request.php");
    curl_setopt($curl,CURLOPT_POST,1);
    curl_setopt($curl,CURLOPT_POSTFIELDS,http_build_query(array('request'=>'name_return')));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($curl);
    curl_close($curl);
    print_r($server_output);
    
    echo '<br>';
    $resultado = json_decode($server_output);
    echo $resultado->resultado;
?>