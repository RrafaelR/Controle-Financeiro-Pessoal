<?php
function dartotal(){
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
$sql = "select * from receita";

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
$sql = "select * from gastos";
    
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
    $tot1=$total-$total2;
    $data = date("d/m/Y");
    $id="";
    $sql = "insert into total(id,data,tot) values('$id','$data','$tot1')";
    $resp = mysqli_query($c,$sql);
    if(!$resp)
    {
        echo "erro na consulta $sql";
        echo mysqli_error($c);
        mysqli_close($c);
        die();
    }
}

?>