<?php
// $qt_vendido = qantidade de itens vendidos
// CF = custo fixo
// CV = custo variavel 
// CT = custo total  - valor de cv + cf
// PV = preço de venda

// puxando dados via POST do formulario
$qtdvendidos = filter_input(INPUT_POST, 'qtdvendidos', FILTER_SANITIZE_STRING);
$vlrvenda = filter_input(INPUT_POST, 'vlrvenda', FILTER_SANITIZE_STRING);
//__________________________________________________________________________
$salario = filter_input(INPUT_POST, 'salario', FILTER_SANITIZE_STRING);
$aluguel = filter_input(INPUT_POST, 'aluguel', FILTER_SANITIZE_STRING);
$vrlagualuz = filter_input(INPUT_POST, 'vrlagualuz', FILTER_SANITIZE_STRING);
//__________________________________________________________________________
$vrlprofabri = filter_input(INPUT_POST, 'vrlprofabri', FILTER_SANITIZE_STRING);
$vrlcomicao = filter_input(INPUT_POST, 'vrlcomicao', FILTER_SANITIZE_STRING);   

//iniciando as formulas matematicas

$salariototal = $salario *3; // formula para o calculo do valor total do salario referente a  3 empregados 
$impostosalario = $salariototal * 0.40;
$impostocomicao = $vrlcomicao * 0.40;
$CF = $salariototal + $impostosalario + $aluguel  +$vrlagualuz;
$CV = $vrlcomicao + $impostocomicao + $vrlprofabri;
$CT = $CF + $CV;
$funccao_receita = $vlrvenda * $qtdvendidos;
$ponto =  $vlrvenda - $CV ; // variavel para usar o valor de venda - o custo variavel oar usar na função nucleo 
$pontodeequilibrio =  $CF/   $ponto;
 $funcao_lucro = $ponto * $qtdvendidos - $CF ;

?>
<!doctype html>
<html lang="en">
  <head>
  <style type="text/css"> 
    #card{
      margin: 0% 30% 0% 30%;
      background-color: rgb(255, 255, 255);
      border-color: rgb(0, 0, 0);
      border: 5px;
      box-shadow: 10px 5px 5px rgba(95, 95, 95, 0.507);
      border-radius: 10px 40px 40px 10px;
      border-style: solid;
      }
    body{
      background-color:#74b9c7;
        }
    </style>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    
  </head>
  <body style="background-color:#74b9c7;">

    <div class="card" id="card" >
        <div class="card-header"> informações da impresa  </div>
        
        <div class="card-body">
            <h5 class="card-title">valores de lucros,contas fixas, variaveis</h5>
            <div class="card-text" >
                <?php
                echo "<ul class='list-group list-group-flush' >";
                    echo"<li class='list-group-item'  quantidade vendida: ", $qtdvendidos,"</li>";
                    echo"<li class='list-group-item'> valor de venda: ", $vlrvenda,"</li>";
                    echo"<li class='list-group-item'> valor do salario:  ", $salario,"</li>";
                    echo"<li class='list-group-item'> valor mensal de aluguel: ", $aluguel,"</li>";
                    echo"<li class='list-group-item'> valor mensal de agua e luz: ", $vrlagualuz, "</li>";
                    echo"<li class='list-group-item'> valor de custo de produçao: ", $vrlprofabri,"</li>";
                    echo"<li class='list-group-item'> quantidade paga por venda de comçao: ", $vrlcomicao,"</li>";
                    echo"<li class='list-group-item'> salario total refentea 3 funcionarios", $salariototal,"</li>";
                    echo"<li class='list-group-item'>imposto salario ", $impostosalario,"</li>";
                    echo"<li class='list-group-item'> custos fixos:  ",  $CF,"</li>";
                    echo"<li class='list-group-item'> custos variaveis: ", $CV,"</li>";
                    echo"<li class='list-group-item'> custos totais: ", $CT,"</li>";
                    echo"<li class='list-group-item'>receita: ", $funccao_receita,"</li>";
                    echo"<li class='list-group-item'>ponto de equilibrio: ", $pontodeequilibrio,"</li>";
                    echo"<li class='list-group-item'>funçao lucro ", $funcao_lucro,"</li>";
                    
                echo"</ul>";
                ?>
            </div>
            <a href="index.php" class="btn btn-primary">calular novamente</a>
        </div>
    </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>