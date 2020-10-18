<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Valor a pagar de Salario Mensual</title>
    </head>
    <body>
        <?php
            $Vendedor=$_POST["vendedor"];
            $Cantidad=$_POST["cantidad"];
            $Preciototal=$_POST["preciototal"];
            $Salario=737000;
            $Comision=($Cantidad*50000)+($Preciototal*0.05);
            $Total= number_format(($Salario+$Comision), 2);
                
            echo "El valor a pagar al empleado: ".$Vendedor." es de :".$Total ;
        ?>
    </body>
</html>
