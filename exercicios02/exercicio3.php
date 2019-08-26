


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
  

    <h3> Questão 3 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="num1" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="num2" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>

    <?php
        if($num1 = isset($_POST['num1']) && ($_POST['num1'] != 0) && isset($_POST['num2'])) {
          $num1 = ($_POST['num1']);
          $num2 = ($_POST['num2']);
          echo "O primeiro numero é {$num1} e o segundo é {$num2} <br>";
          if($num1 % $num2 == 0){
              echo "O {$num1} é multiplo do {$num2}";
          }else{
              echo "O {$num1} não é multiplo do {$num2}";
          };
          echo "<hr>";
        }
    ?>

 