<?php
$salt = 'Solkdasoh54353%$#%h!21das';
$password = '123456' . $salt;

echo md5($password);
echo "\n";
echo sha1($password);
echo "\n";
echo crypt($password, $salt);
echo "\n";

//$passCr = base64_decode($password);
//echo $passCr;
//echo "\n";
//echo base64_decode($passCr);

//echo hash('sha512', $password);

function cryptFn($hash){
    $hash = crypt($hash, 'Solkdasoh54353%$#%h!21das');
    $hash = md5($hash);
    $hash = sha1($hash);
    $hash = hash('sha512', $hash);
    return $hash;
}

echo cryptFn($password);