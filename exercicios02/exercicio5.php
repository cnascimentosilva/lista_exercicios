
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
 

    <h3> Questão 5 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="q5" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>

    <?php
        $q5 = isset($_POST['q5']) ? ($_POST['q5']) : 0;
        if($q5 = 5 <=> 20){
            echo "O número {$q5} esta entre 5 e 20";
        }else{
            echo "O número {$q5} não esta entre 5 e 20";
        };
    ?>
