<?php


function calcular($n1, $n2, $tipoCalculo)
 {
    $total = (double)0;

    $numero1 = $n1;
    $numero2 = $n2;
    $opcaoCalculo = $tipoCalculo;
 
    switch ($opcaoCalculo)

    {
      case ('SOMAR'):
        $total = $numero1 + $numero2;
        break;
      case ('SUBTRAIR'):
        $total = $numero1 - $numero2;
          break;
      case ('MULTIPLICAR'):
        $total = $numero1 * $numero2;
            break;
      case ('DIVIDIR'):
         if($numero2 == 0)
            echo(ERRO_DIVISAO_ZERO);
          else
            $total = round($numero1 / $numero2, 2);
          break;

          default:
          echo(ERRO_CAIXA_VAZIA);
    }
    return $total;
  }




?>