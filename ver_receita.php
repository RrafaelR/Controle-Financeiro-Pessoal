<?php
function printareceita()
{
    include "sql.php";
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
$form = <<<EOT
        <div class="card" style="width: 300px;">
            <div class="card-divider">
                data: <b>{$linha["data"]}</b><br>
            </div>
            <div class="card-section">
                valor:<b>{$linha["valor"]}</b><br>
                descricao: <b>{$linha["descricao"]}</b><br>
                tipo:<b>{$linha["recebimento"]}</b><br>
                <a href=\"deletaRec.php?id={$linha["id"]}\">Deleta</a>
            </div>
        </div>
EOT;
            echo $form;
            $total+=$linha["valor"];
            $linha = mysqli_fetch_assoc($resp);
        }
    }
    else{
        echo "Não há Receita";
    }
    echo "<h5>O total de receitas é:$total</h5>";
    mysqli_free_result($resp);
    mysqli_close($c);
} 
        
?>