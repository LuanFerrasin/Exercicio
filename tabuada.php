<?php

/*importando arquivo de funções para realizar calculos*/
require_once('functions/variaveis.php');
require_once('functions/calculos.php');


/*
 String tipo de dados Texto
 int tipo de dados numericos inteiros
 double topo de dados numericos com casas decimais(maior)
 float tipo de dados numericos com casas decimais (menor)
 boorlean ou bool tipos de dados (true or false)
 array vetores e matrizes
 object referenciar objeto
 */

 


 


if(isset($_POST['btncalc']))
 { 

  if($_POST['txtn1'] =='' || $_POST['txtn2'] =='')
    echo(ERRO_CAIXA_VAZIA);
  else
  {
    $valor1 = $_POST['txtn1'];
    $valor2 = $_POST['txtn2'];

    if(isset($_POST ['rdocalculo']))
    {
      $operacao = strtoupper ($_POST['rdocalculo']);

        if(is_numeric($valor1) && is_numeric($valor2))
        {
          $resultado = calcular($valor1, $valor2, $operacao);

        if($operacao == 'SOMAR')
        {
        $resultado = $valor1 + $valor2;
        }elseif($operacao == 'SUBTRAIR')
        {
        $resultado = $valor1 - $valor2;
        }elseif($operacao == 'MULTIPLICAR')
        {
        $resultado = $valor1 * $valor2;
        }elseif($operacao == 'DIVIDIR')
        $resultado = round($valor1 / $valor2, 2);
        
        

      }else
      echo(ERROS_DADOS_NAO_NUMERICOS);

  }else
   echo(ERRO_CAIXA_VAZIA);
   
  }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Tabuada</title>
       <link rel="stylesheet" type="text/css" href="css/calcu.css">
        <meta charset="utf-8">
    </head>
	<body>
        
        <div id="conteudo">
            <header id="titulo">
                Tabuada
            </header>

            <div id="form">
                <form name="frmMedia" method="post" action="">
                    <div>
                        <label>Tabuada:</label>
                        <input type="text" name="txtn1" placeholder="Insira um Valor:" value="<?=$valor1?>" >
                       </div>
                     <div>
                     <label>Contador:</label>
                        <input type="text" name="txtn2"  placeholder="Insira um Valor:" value="<?=$valor2?>"> 
                    </div>
                       <div>
                        <input type="radio" name="rdocalculo" value="Multiplicar"<?php
                        if($operacao == 'MULTIPLICAR')
                         echo('checked');
                      ?> > Multiplicar
                      </div>
                      <div>
                        <input id="input" type="submit" name="btncalc" value ="Multiplicar" >
                      </div>
                         </form>
                </div>
              <footer id="resultado">
                Os Valores são: <?=$resultado  ?>
             </footer>
           </div>
        </body>
</html>