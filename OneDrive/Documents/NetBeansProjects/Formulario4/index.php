<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $Cedula=$_POST["cedula"];
        $Nombre=$_POST["nombre"];
        $Credito=$_POST["credito"];
        $Tasa=$_POST["tasa"]/100;
        $Plazo=$_POST["plazo"];
        $Saldoanterior=$Credito;
        $exp1= pow(($Tasa+1), $Plazo);
        $exp2= pow(($Tasa+1), $Plazo)-1;
        $Cuotafija=$Credito*(($Tasa*$exp1)/$exp2);
        $Abonointeres=0;
        $Abonocapital=0;
        $Nuevosaldo=0;
        
    ?>
        <table border="1">
            <thead>
                <tr>
                    <th>No Cuota</th>
                    <th>Saldo Anterior</th>
                    <th>Cuota Fija</th>
                    <th>Abono Interes</th>
                    <th>Abono Capital</th>
                    <th>Nuevo Saldo</th>
                </tr>
            </thead>
            <tbody>
        <?php
            setlocale(LC_MONETARY, "es_ES");
            for ($Numerocuota=1; $Numerocuota <= $Plazo;$Numerocuota++){
                $Abonointeres=$Saldoanterior*$Tasa;
                $Abonocapital=$Cuotafija-$Abonointeres;
                $Nuevosaldo=$Saldoanterior-$Abonocapital;
                
        ?>
                <tr>
                    <td> <?php echo round($Numerocuota); ?> </td>
                    <td> <?php echo round($Saldoanterior,0); ?> </td>
                    <td> <?php echo round($Cuotafija,0); ?> </td>
                    <td> <?php echo round($Abonointeres,0); ?> </td>
                    <td> <?php echo round($Abonocapital,0); ?> </td>
                    <td> <?php echo round($Nuevosaldo,0); ?> </td>
                </tr>
            <?php 
            $Saldoanterior=$Nuevosaldo;
            } ?>
            </tbody>
            </table>
    </body>
</html>
