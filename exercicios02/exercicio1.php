

    Lista 2:



<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h3> Questão 1 </h3>  
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="valor01" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
      </form>
    </fieldset>  
  </div>

    <?php
     $valor01 = isset($_POST['valor01']) ? ($_POST['valor01']) : 0;
     if($valor01 < 0){
       echo "o modulo do é: " .($valor01 * -1);
     }else {
       echo "O modulo do {$valor01} é: ". $valor01;
     };
     echo "<hr>"
    ?>
  
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
<hr>
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
<hr>
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

<h3> Questão 9 </h3>
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

        if($valor1/$valor2 % 2 == 0){
            echo "o resto da divisão é zero";
        }
        else { 
            echo "o resto da divisão não é zero";
        }
    ?>

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


