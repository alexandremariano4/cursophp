<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando Ajax</title>
</head>
<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $.ajax({
                url:'request.php',
                dataType:'json',
            }).done(function(data){
                console.log(data.nome);
            })
        })
    
    </script>


</body>
</html>