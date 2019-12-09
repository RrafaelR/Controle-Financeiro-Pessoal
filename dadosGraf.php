<?php
    include "sql.php";
    $sql = "select * from gastos";
    
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
            $total+=$linha["valor"];
            $linha = mysqli_fetch_assoc($resp);
        }
    }
    $sql = "select * from receita";
    
    $resp = mysqli_query($c,$sql);
    if(!$resp){
        echo "erro na consulta!";
        echo mysqli_error($c);
        mysqli_close($c);
        die();
    }
    $total2=0;
    $linha = mysqli_fetch_assoc($resp);
    if($linha){
        while($linha)
        {
            $total2+=$linha["valor"];
            $linha = mysqli_fetch_assoc($resp);
        }
    }
    $dados = array();
    $dados[] = array("key" => "Gastos", "y" => $total, "cor" => "red");
    $dados[] = array("key" => "Receitas", "y" => $total2, "cor" => "green");
    echo json_encode($dados);
        
?>