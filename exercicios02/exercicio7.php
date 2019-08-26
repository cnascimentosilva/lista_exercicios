

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
 
<h3> Questão 7 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="q7" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="q71" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>

    <?php
         $q7 = isset($_POST['q7']) ? ($_POST['q7']) : 0;
         $q71 = isset($_POST['q71']) ? ($_POST['q71']) : 0;
         
         if($q7 > $q71){
             echo "O {$q7} é maior que o {$q71}.";
         }if($q7 = $q71){
             echo "Os números são iguais";
         }else{
            "O {$q71} é maior que o {$q7}.";
         };
    ?>
