<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>

  
    <h3> Questão 2 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="num" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>

     <?php
          $num = isset($_POST['num']) ? ($_POST['num']) : 0;
          if($num % 2 == 0){
            echo "o numero {$num} é par ";
          }else {
            echo "O numero {$num} é impar"; 
          };
          echo "<hr>";
        ?>

    