<html>
    <head>
        <title>Fiestas Infantiles &BUBU&</title>
        <link rel="stylesheet" type="text/css" href="css/file.css"/>
    </head>
    <body>
        
        <?php
    
            $nombre = $_POST['nombre'];
            $fecha = $_POST['fecha'];
            $direccion = $_POST['direcc'];
            $distrito = $_POST['dist'];
            $horario = $_POST['horario'];
            $payaso = $_POST['payad'];
            $muñadic = $_POST['muñad'];
            $bailadic = $_POST['bailad'];
            $magoadic = $_POST['magoad'];
            $decorar = $_POST['decora'];
            $grabar = $_POST['grabar'];
            
            
            switch ($horario) {
                case 0: $costo_Horario = 400; break;
                case 1: $costo_Horario = 500; break;
            }
    
            if($payaso > 0){
                $costo_payad = 60*$payaso;
            }else{
                $costo_payad = 0;
            }
    
            if($muñadic > 0){
                $costo_muñad = 50*$muñadic;
            }else{
                $costo_muñad = 0;
            }
    
            if($bailadic > 0){
                $costo_bailad = 40*$bailadic;
            }else{
                $costo_bailad = 0;
            }
    
            if($magoadic > 0){
                $costo_magoad = 80;
            }else{
                $costo_magoad = 0;
            }
    
            switch ($decorar) {
                case 'S': $costo_decorar = 150; break;
                case 'N': $costo_decorar = 0; break;
            }
    
            switch ($grabar) {
                case 'NO': $costo_grabar = 0; break;
                case 'HD': $costo_grabar = 100; break;
                case 'FULL': $costo_grabar = 150; break;
                case 'ULTRA': $costo_grabar = 200; break;
            }
    
            if ($distrito == 'LM' or $distrito == 'AV' or $distrito == 'VS') {
                $costo_mov = 50;
            }else{
                $costo_mov = 0;
            }
    
            $subTotal = $costo_Horario + $costo_bailad + $costo_decorar + $costo_mov + $costo_grabar + $costo_magoad + $costo_muñad + $costo_payad;
            $igv = $subTotal*0.18;
            $total = $subTotal + $igv;
        ?>
        <form>
            <table width="100%">
            <tr>
                <td align="center" class="style24">RESULTADOS DE LA COTIZACIÓN<br><br></td>
            </tr>
            </table>
            <table width="450" border="0" align="center" cellpadding="6" cellspacing="6" class="estilo_tabla">
                <tr>
                    <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Nombre:</td>
                    <td valing="middle" class="style7"><?=$nombre?></td>
                </tr>
                <tr>
                    <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Fecha:</td>
                    <td valing="middle" class="style7"><?=$fecha?></td>
                </tr>
                <tr>
                    <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Dirección:</td>
                    <td valing="middle" class="style7"><?=$direccion?></td>
                </tr>
                <tr>
                    <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Distrito:</td>
                    <td valing="middle" class="style7"><?=$distrito ?></td>
                </tr>
                <tr>
                    <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Costo por horario:</td>
                    <td valing="middle" class="style7"><?=$costo_Horario?></td>
                </tr>
                <tr>
                    <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Costo por payaso adicional:</td>
                    <td valing="middle" class="style7"><?=$costo_payad?></td>
                </tr>
                <tr>
                    <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Costo por muñerco adicional:</td>
                    <td valing="middle" class="style7"><?=$costo_muñad?></td>
                </tr>
                <tr>
                    <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Costo por bailarina adicional:</td>
                    <td valing="middle" class="style7"><?=$costo_bailad?></td>
                </tr>
                <tr>
                    <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Costo por mago adicional:</td>
                    <td valing="middle" class="style7"><?=$costo_magoad?></td>
                </tr>
                <tr>
                    <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Costo por decoración:</td>
                    <td valing="middle" class="style7"><?=$costo_decorar?></td>
                </tr>
                <tr>
                    <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Costo por grabación:</td>
                    <td valing="middle" class="style7"><?=$costo_grabar?></td>
                </tr>
                <tr>
                    <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Costo por movilidad:</td>
                    <td valing="middle" class="style7"><?=$costo_mov?></td>
                </tr>
                <tr>
                    <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Subtotal:</td>
                    <td valing="middle" class="style7"><?=$subTotal?></td>
                </tr>
                <tr>
                    <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">IGV:</td>
                    <td valing="middle" class="style7"><?=$igv?></td>
                </tr>
                <tr>
                    <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Total:</td>
                    <td valing="middle" class="style7"><?=$total?></td>
                </tr>
            </table>
        </form>
    </body>
</html>