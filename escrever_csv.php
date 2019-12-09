<?php
    include "sql.php";
    $sql = "select * from total order by id desc limit 5";
    $chave = fopen("ler.csv",'w');
    
    $resp = mysqli_query($c,$sql);
    if(!$resp){
        echo "erro na consulta!";
        echo mysqli_error($c);
        mysqli_close($c);
        die();
    }
    $total=0;
    $cont=0;
    $linha = mysqli_fetch_assoc($resp);
    if($linha){
        while($linha)
        {
            if($cont==0){
                fwrite($chave,"label,value\n");
            }
            fwrite($chave,"[".$linha["id"]."]".$linha["data"].",".$linha["tot"]."\n");
            $linha = mysqli_fetch_assoc($resp);
            $cont++;
        }
    }
    else{
        echo 0;
    }
    
    mysqli_free_result($resp);
    mysqli_close($c); 
    fclose($chave);
    header('location:grafico.html');
?>

