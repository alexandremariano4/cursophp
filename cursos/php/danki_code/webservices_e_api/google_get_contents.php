<form method="post">
    <input type="text" name="address">
    <input type="submit" name="acao" value="Enviar">
</form>

<?php 

    if(isset($_POST['acao'])){
    $url = urlencode($_POST['address']);
    $str = file_get_contents(
        'https://maps.googleapis.com/maps/api/geocode/json?address='.$url.'&sensor=false&key=KEYDOGOOGLEAPIS');
    
    $endereco = json_decode($str);

    echo '<pre>';
    print_r($endereco->results[0]->address_components[1]->long_name."\n");
    print_r($endereco->results[0]->address_components[0]->long_name."\n");
    print_r($endereco->results[0]->address_components[2]->long_name."\n");
    echo '<br>';
    echo '<hr>';
    // print_r($str);
    echo '</pre>';

    }
?>