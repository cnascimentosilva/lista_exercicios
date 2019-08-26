<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
 
<h3> Questão 10 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o ano </label>
          <input type="number" step="1" name="q8" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>

    <?php
        $valor1 = isset($_POST['valor1']) ? $_POST['valor1'] : 0;
        $valor2 = isset($_POST['valor2']) ? $_POST['valor2'] : 0;

        if($valor2 > ($valor1*(20/100))){
            echo "empréstimo não concedido";
        }
        else if ($valor2 == ($valor1*(20/100))){ 
            echo "enpréstimo em analise";
        }
        else if ($valor2 < ($valor1*(20/100))){ 
            echo "enpréstimo concedido";
        }
    ?>
  </body>
</html>


