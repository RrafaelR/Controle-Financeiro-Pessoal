<html>
<head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Foundation for Sites</title>
            <link rel="stylesheet" href="css/foundation.css">
            <link rel="stylesheet" href="css/app.css">
            <script src="https://kit.fontawesome.com/ba3b6bbac0.js" crossorigin="anonymous"></script>

</head>   
<body>
<style>
div.a{
text-align:center
}
</style>
<div class="a">
<h1>Gastos</h1>
</div>   
<form method="post" action="despesa_salva.php">
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
    <input type="radio" name="gasto" value="Alimentação">Alimentação
    <input type="radio" name="gasto" value="Assinatura e Serviços">Assinatura e Serviços
    <input type="radio" name="gasto" value="Bares e Restaurantes">Bares e Restaurantes
    <input type="radio" name="gasto" value="Casa">Casa
    <input type="radio" name="gasto" value="Compras">Compras
    <input type="radio" name="gasto" value="Cuidados">Cuidados Pessoais
    <input type="radio" name="gasto" value="Dividas e Emprestimos">Dívidas e Empréstimos
    <input type="radio" name="gasto" value="Educação">Educação 
    <input type="radio" name="gasto" value="Familia">Família e Amigos
    <input type="radio" name="gasto" value="Imposto e taxas">Impostos e Taxas
    <input type="radio" name="gasto" value="Investimentos">Investimentos
    <input type="radio" name="gasto" value="Lazer e Hobbies">Lazer e Hobbies
    <input type="radio" name="gasto" value="Mercado">Mercado
    <input type="radio" name="gasto" value="Outros">Outros
    <input type="radio" name="gasto" value="Pets">Pets
    <input type="radio" name="gasto" value="Presentes e Doações">Presentes e Doações
    <input type="radio" name="gasto" value="Roupas">Roupas
    <input type="radio" name="gasto" value="Saude">Saúde
    <input type="radio" name="gasto" value="Trabalho">Trabalho
    <input type="radio" name="gasto" value="Transporte">Transporte
    <input type="radio" name="gasto" value="Viagem">Viagem
    <p><input type="submit" value="salva"></p>
  </form>
  </body>  
  </html>
