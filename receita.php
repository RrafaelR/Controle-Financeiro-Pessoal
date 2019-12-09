</html>
<head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Foundation for Sites</title>
            <link rel="stylesheet" href="css/foundation.css">
            <link rel="stylesheet" href="css/app.css">
</head>   
<body>
<style>
div.a{
text-align:center
}
</style>
<div class="a">
<h1>Receita</h1>
</div>   
<form method="post" action="receita_salva.php">
<input type="hidden" name="id" >    
<h4>Data</h4>    
<p><input type="date" name="data"></p>
<h4>Valor</h4>
<div class="input-group">
        <span class="input-group-label">$</span>
        <input class="input-group-field" type="number" placeholder="Valor" name="valor">   
</div>
<div>
    <h4>Descrição</h4>
    <input type="text" name="descricao" placeholder="Descrição">
</div>      
<h4>Categoria</h4>
<p>
    <input type="radio" name="Recebimento" value="Emprestimos"/>Empréstimos
    <input type="radio" name="Recebimento" value="Investimentos"/> Investimentos
    <input type="radio" name="Recebimento" value="Outros"/>Outros
    <input type="radio" name="Recebimento" value="Salario"/>Salário
</p>
<p><input type="submit" value="salva"></p>
</form>
</body>
</html>  
