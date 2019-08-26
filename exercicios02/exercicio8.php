

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
 
<h3> Questão 8 </h3>
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
        $q8 = isset($_POST['q8']) ? ($_POST['q8']) : 0;
        if($q8 / 4){
          echo "O ano é bisexto.";
        }else{
          echo "O ano não é bisexto";
        }
     ?>

