<?php
$id=$_REQUEST["id"];
$valor=$_REQUEST["valor"];
$descricao=$_REQUEST["descricao"];
$tipo=$_REQUEST["Recebimento"];
$data=$_REQUEST["data"];

$sql = "insert into receita(id,valor,descricao,recebimento,data) values('$id','$valor','$descricao','$tipo','$data')";

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
    $resp = mysqli_query($c,$sql);
    if(!$resp)
    {
        echo "erro na consulta $sql";
        echo mysqli_error($c);
        mysqli_close($c);
        die();
    }
    else{
        include "salvar_total.php";
        dartotal();
        mysqli_close($c);
        header('location:comeco.php');
    }
?>