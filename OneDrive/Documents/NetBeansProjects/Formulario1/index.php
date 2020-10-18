<html>
    <head>
        <meta charset="UTF-8">
        <title>Nota Final</title>
    </head>
    <body>
        <?php   
            $Parcial1=$_POST["parcial1"];
            $Parcial2=$_POST["parcial2"];
            $Parcial3=$_POST["parcial3"];
            $ExamenFinal=$_POST["examenfinal"];
            $TrabajoFinal=$_POST["trabajofinal"];
            $NotaFinal=((($Parcial1+$Parcial2+$Parcial3)/3)*0.35)+($ExamenFinal*0.35)+($TrabajoFinal*0.30);
            $NotaFinal= number_format($NotaFinal, 2);
        if($NotaFinal>=3){
                echo "El Estudiante Aprobo con una Nota Final de ".$NotaFinal;
            } else {
                echo "El Estudiante No Aprobo con una Nota Final de ".$NotaFinal;
            }
        ?>
    </body>
</html>
