<!doctype html>
<html lang="pt-br">
  <head>
    <title> Projeto Matematica </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body  >
      
    <div id="divcenter">  

      <h5>coloque as informações para saber como procerder</h5>
      <br>

      <form method="POST" action="action.php">
        <div class="form-group">
          <label for="qtditensvendidos">Quantidade de intens vendidos </label>
            <input type="text" class="form-control" id="qtditensvendidos" name="qtdvendidos"  placeholder="informe a quantidade vendida">
        </div>

        <div class="form-group">
          <label for="vlrdevenda"> valor de venda </label>
            <input type="text" class="form-control" id="vlrdevenda" name="vlrvenda"  placeholder="informe o valor de venda de cada produto">
        </div>

        <div class="form-group">
          <label for="qtditensvendidos"> Salario funcionario (Valor refernte a 1 salario)</label>
            <input type="text" class="form-control" id="qtditensvendidos" name="salario"  placeholder="informe o salario do funcionario">
        </div>

        <div class="form-group">
          <label for="qtditensvendidos">valor do aluguel  </label>
            <input type="text" class="form-control" id="qtditensvendidos" name="aluguel"  placeholder="informe o valor do a aluguel">
        </div>
        
        <div class="form-group">
          <label for="qtditensvendidos"> valor dos produtos para a fabricação  </label>
            <input type="text" class="form-control" id="qtditensvendidos" name="vrlprofabri"  placeholder="informe a valor dos produtos de produção">
        </div>
       
        <div class="form-group">
          <label for="qtditensvendidos">valor da agua e luz  </label>
            <input type="text" class="form-control" id="qtditensvendidos" name="vrlagualuz"  placeholder="informe o valor pago em agua e luz">
        </div>

        <div class="form-group">
          <label for="qtditensvendidos">valor da comição por venda   </label>
            <input type="text" class="form-control" id="qtditensvendidos" name="vrlcomicao"  placeholder="informe o valor pago em acomição os funcionairos">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary" id="btn">Enviar</button>
        </div>
      </form> 
      <br>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>