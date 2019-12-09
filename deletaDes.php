<?php
$id=$_REQUEST["id"];

$sql = "delete from gastos where id = $id";

include "sql.php";
    $resp = mysqli_query($c,$sql);
    if(!$resp)
    {
        echo "erro na consulta $sql";
        echo mysqli_error($c);
        mysqli_close($c);
        die();
    }
    else{
        header('location:comeco.php');
    }
?>