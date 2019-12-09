<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "controle_finaceiro";
 
    $c = mysqli_connect($host,$usuario,$senha);
    if(!$c){
        echo "erro de conexão";
        echo mysqli_error($c);
        die();
    }
    if(!mysqli_select_db($c,$banco)){
        echo "erro no select_db";
        echo mysqli_error($c);
        mysqli_close($c);
        die();
    }
    
?>