
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>


    <h3> Questão 4 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="q4" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>

    <?php
        $q4 = isset($_POST['q4']) ? ($_POST['q4']) : 0;
        if($q4 < 0 ){
            echo "O {$q4} é negativo.";
        }if($q4 > 0){
            echo "O {$q4} é positivo.";
        }else{
            echo "O {$q4} é zero.";
        };
    ?>
<hr>
 