<?php
function mostratotal()
{
    include "sql.php";
    $sql = "select * from total";
    
    $resp = mysqli_query($c,$sql);
    if(!$resp){
        echo "erro na consulta!";
        echo mysqli_error($c);
        mysqli_close($c);
        die();
    }
    $total=0;
    $linha = mysqli_fetch_assoc($resp);
    if($linha){
        while($linha)
        {
            $total=$linha["tot"];
            $linha = mysqli_fetch_assoc($resp);
        }
        echo $total;
    }
    else{
        echo 0;
    }
    mysqli_free_result($resp);
    mysqli_close($c);
} 
        
?>