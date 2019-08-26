 <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
  
<h3> Questão 6 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="x" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="y" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>

    <?php
       $x = isset($_POST['x']) ? ($_POST['x']) : 0;
       $y = isset($_POST['y']) ? ($_POST['y']) : 0; 
       if($x > $y){
           echo "{$x} > {$y}, então a adição deles é: " .($x + $y);
        }else{
            echo "{$x} < {$y}, então a multiplicação deles é: " .($x * $y);
        };
    ?>
<hr>
