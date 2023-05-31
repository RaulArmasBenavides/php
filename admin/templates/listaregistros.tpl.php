<?php
if (isset($_SESSION['nom_admin'])){
?>

<form method="post" action="../templates/listaregistros.tpl.php">    
<table width=850" align="center" border="1" cellpadding="2" cellspacing="0" bordercolor="#F3F1E9">
    <tr bgcolor="#F8F8F8">
       <td>
           <table border='0' width='100%'>
               <tr height="20">
                   <td align="left" class="style21">Total Registros: <?=$rows?></td>
                   <td align="right" class='style15' width="100">Todos
                    </td>
               </tr>
           </table>
       </td>
    </tr>
</table>
<div id="div_listado" align="center">
<table width=850" align="center" border="1" cellpadding="2" cellspacing="0" bordercolor="#F3F1E9">
  <tr bgcolor="#F8F8F8">
    <td height="25" width="20" class='style15'>Nro</td>
    <td height="25" width="30" class='style15'>Tipo</td>
    <!--<td height="25" width="30" class='style15'>TipoDoc</td>-->
    <td height="25" width="70" class='style15'>NroDoc</td>
    <td height="25" width="*%" class='style15'>Apellidos y Nombres</td>
    <td height="25" width="30" class='style15'>Sex</td>
    <!--<td height="25" width="70"  class='style15'>Celular</td>-->
    <td height="25" width="40" class='style15' align="center">Pa&iacute;s</td>
    <td height="25" width="130" class='style15'>Fecha Reg</td>
    <td height="25" width="50" class='style15' align="center">Estado</td>
    <td height="25" width="30" class='style15' align="center">Mat</td>
    <td height="25" width="30" class='style15' align="center">Dip</td>
    
  <tr>
      
<?php
    $c=$inicio+1;
    $mt=0;//materiales
    $dp=0;//diplomass
    $codigo='';
    while ($fila= mysqli_fetch_array($result)){
        $idasistente=$fila['idasistente'];
        $idtipoasistente=$fila['idtipoasistente'];
        $apaterno=utf8_encode($fila['apaterno']);
        $amaterno=utf8_encode($fila['amaterno']);
        $nombres=utf8_encode($fila['nombres']);
        $abrevtipodoc=$fila['abrevtipodoc'];
        $nrodoc=$fila['nrodoc'];
        $codestudiante=$fila['codestudiante'];
        $genero=$fila['genero'];
        $direccion=$fila['direccion'];
        $tfijo=$fila['tfijo'];
        $tmovil=$fila['tmovil'];	
        $email=$fila['email'];
        $fechareg=$fila['fechareg'];
        $idregistro=$fila['idregistro'];
        if (($idtipoasistente=='1')||($idtipoasistente=='2')){
            $nomasistente="$apaterno $amaterno, $nombres [$codestudiante]";
        }
        else{
            $nomasistente="$apaterno $amaterno, $nombres";
        }
        $target='div_'.$idasistente;
        
        switch ($idtipoasistente){
            case '1':
            case '2':$codigo=$codestudiante;break;
            case '4':
            case '5':$codigo=$nrodoc.'0';
        }        
        
        
        
        echo "<tr bgcolor='#F8F8F8'><td height=20 class='style16'>$c</td>
            <td height=20 class='style16' align=center>$idtipoasistente</td>
            <td height=20 class='style16'>$nrodoc</td>
            <td height=20 class='style16'><a href='javascript:void(0)' onclick=\"verInscrito('".$target."','".$idasistente."')\" title='Ver Detalle'>$nomasistente</a><br><div id='$target'></div></td>    
            <td height=20 class='style16'>$genero</td>   
            <!--<td height=20 class='style16'>$tmovil</td>   -->
            <td height=20 class='style16'></td>
            <td height=20 class='style16'>$fechareg</td>
            <td height=20 class='style16' align=center></td>
            <td height=20 class='style16' align=center></td>
            <td height=20 class='style16' align=center></td>
        </tr>";
        $c++;
    }

?>
  <tr bgcolor="#F8F8F8">
    <td height="25" width="20" class='style15'></td>
    <td height="25" width="30" class='style15'></td>
    <!--<td height="25" width="30" class='style15'>TipoDoc</td>-->
    <td height="25" width="70" class='style15'></td>
    <td height="25" width="*%" class='style15'></td>
    <td height="25" width="30" class='style15'></td>
    <!--<td height="25" width="70"  class='style15'>Celular</td>-->
    <td height="25" width="40" class='style15' align="center"></td>
    <td height="25" width="130" class='style15'></td>
    <td height="25" width="50" class='style15' align="right"></td>
    <td height="25" width="30" class='style15' align="center"><?=$mt?></td>
    <td height="25" width="30" class='style15' align="center"><?=$dp?></td>
    
  <tr>
</table>
</div>
<br>
</form>
<?php
}
?>