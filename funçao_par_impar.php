<?php
function parOuImpar($num) {
    if ($num % 2 == 0) {
        return "Par";
    } else {
        return "Ímpar";
    }
     
}
      $num = $_POST['num'];

      $resultado = parOuImpar($num);
           echo"<h2>o número $num é $resultado</h2>";
?>