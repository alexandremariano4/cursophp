<?php 

    session_start();
    // $_SESSION['nome'] = "Alexandre";
    // $_SESSION['idade'] = 19;

    // if(isset($_SESSION['nome'])){
    //     echo $_SESSION['nome'];
    // }
    
    // unset($_SESSION['nome']);
    
    // echo "<hr>";

    // session_destroy();
    // echo $_SESSION['nome'];

    setcookie(
        name:'nome',
        value:'Talbeira',
        expires_or_options: time() + (60*3),
        path:'/',
    );

    echo $_COOKIE['nome'];

?>