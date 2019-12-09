<html>
    <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>MRH</title>
            <link rel="stylesheet" href="css/foundation.css">
            <link rel="stylesheet" href="css/app.css"> 
    </head>
    <body>
      <?php include "ver_receita.php"; ?>
      <?php include "ver_despesa.php"; ?>
      <?php include "mostra_tot.php"; ?>
      <div class="top-bar" id="responsive-menu">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text">RMH</li>
            <li class="has-submenu">
              <a href="receita.php">Receita</a>
            </li>
            <li><a href="despesa.php">Despesa</a></li>
            <li><a href="escrever_csv.php">Gráfico de Saldo</a></li>
            <li><a href="grafico2.html">Gráfico de Receitas e Despesas</a></li>
            <li><a><?php echo "Saldo R$:"; mostratotal();?></a>
          </ul>
        </div>
      </div>
      <div class="grid-container">
        <div class="grid-x grid-margin-x small-up-2 medium-up-3">
            <div class="cell">
              <div class="card" style="overflow:auto; height:500px; width:500px; background-color:lightcoral">
                <h3>Relatorio de Gastos</h3>
                <div class="card-section">
                  <p><?php printargastos() ?></p>
                </div>
              </div>
            </div>
            <div class="cell">
              <div class="card" style="overflow:auto; height:500px; width:500px; background-color:seagreen">
                <h3>Relatorio de Receitas</h3>
                <div class="card-section">
                  <p><?php printareceita() ?></p>
                </div>
              </div>
            </div>
        </div>
      </div>  
    </body>

</html>
