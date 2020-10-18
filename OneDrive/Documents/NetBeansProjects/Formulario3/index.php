<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $Paciente=$_POST["paciente"];
            $Peso=$_POST["peso"];
            $Estatura=$_POST["estatura"];
            $Imc= number_format(($Peso/($Estatura*$Estatura)),1);
            $categoria="";
            if($Imc<18.5){
            $categoria="Por debajo del peso";
            }else if ($Imc>=18.5 && $Imc<=24.9) {
            $categoria="Saludable";
            }else if($Imc>=25 && $Imc<=29.9){
            $categoria="Con sobrepeso";
            }else if($Imc>=30 && $Imc<=39.9){
            $categoria="Obeso";
            }else if($Imc>=40){
            $categoria="Obesidad morbida";
            }
            echo "El IMC del paciente: ".$Paciente." es de : ".$Imc." perteneciente a la categoria: ".$categoria ;
        ?>
    </body>
</html>
