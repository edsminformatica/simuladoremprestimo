<?php
$nome = $_POST["campo_nome"];
$email = $_POST["campo_email"];
$fone = $_POST["campo_fone"];
$valordesejado = $_POST["campo_valordesejado"];
$parcelas = $_POST["campo_parcelas"];

if (($valordesejado >= 100) && ($valordesejado < 100000)){   
   $valordaparcela = ($valordesejado / $parcelas);  

   $novoValorDaParcela = $valordaparcela + ($parcelas*0.0167);

   $total = $novoValorDaParcela * $parcelas;
}else{
      echo "ERRO...O Valor desejado tem que ser entre R$100,00 e R$100.000,00!!<br/>";
   }
   if (($parcelas > 24)){
      echo "Numero de parcelas inválidas!!<br/>";
   }
  
echo "<!DOCTYPE html>
<html>
    <head>
        <title> Tabela Simulador de Emprestimo</title>
        <style>
            h1{
             color:#000000;
             background-color:#fffb0a;
             display:inline;
            }
            th{
             color:#ffffff;  
            }
            td{
               color:#ffffff;
            }
            body{
             background-color:#141414;
            }
            </style>
<table border=>
   <h1> Tabela Simulador de Emprestimo</h1>
<tr>
   <th> Quantidade de Parcelas</th>
   <th> Valor (R$)</th>
   <th> Total (R$)</th>
</tr>";

for($parcelas >=1; $parcelas <24; $parcelas++){
   $valordaparcela = ($valordesejado / $parcelas);  

   $novoValorDaParcela = $valordaparcela + ($parcelas*0.0167);

   $total = $novoValorDaParcela * $parcelas; 
   echo"<tr>
   <td> $parcelas </td>
   <td> $novoValorDaParcela </td>
   <td> $total </td>
</tr>";
}

echo "</table>";
?>