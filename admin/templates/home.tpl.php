<?php
if (isset($_SESSION['id_admin'])){
    if ($_SESSION['nivel_admin']>3){        
        $rol='Admin Master';
    }
    elseif ($_SESSION['nivel_admin']>2){
        $rol='Admin';
    }
    elseif ($_SESSION['nivel_admin']>1){
        $rol='Operador(a)';
    }
    else{
        $rol='Consultor(a)';
    }
?>
<html>
<head>
<title>MODULO DE ADMINISTRACION EVENTOS</title>
<script language="JavaScript" type="text/javascript" src="../js/prototype.js"></script>
<script language="javascript" type="text/javascript" src="../js/scriptaculous/src/scriptaculous.js"></script>
<script language="JavaScript" type="text/javascript" src="../js/eventos.js"></script>
<link rel="stylesheet" type="text/css" href="../css/eventos.css"/>
</head>
<body>
<table width=850" align="center" border="0" cellpadding="2" cellspacing="0" bordercolor="#F3F1E9">
    <tr bgcolor="#F8F8F8" height="20">
        <td align="center" class="style23">MODULO DE ADMINISTRACION</td>
    </tr>
    <tr bgcolor="#F8F8F8">
       <td>
           <table border='0' width='98%' align="center">
               <tr height="20">
                   <?php
                   if ($_SESSION['nivel_admin']>=3){
                   ?>
                   <td align="left" class="style27"><img src='../imagenes/administrador.png'>&nbsp;<?=$rol?>: <?=$_SESSION['nom_admin']?></td>
                   <td align="right" class="style16" width="85" valign="middle"><a href='javascript:void(0)' onclick="listaRegistros('div_principal','0','2|0')"><img src="../imagenes/registros.png">&nbsp;Registros</a></td>                 
                   <td align="right" class='style15' width="60"><a href="http://www.rdr.com/admin/"><img src='../imagenes/exit.png'>&nbsp;Salir</a>
                   </td>
                   <?php
                    }
                    elseif ($_SESSION['nivel_admin']>=2){
                   ?>
                   <td align="left" class="style27"><img src='../imagenes/administrador.png'>&nbsp;<?=$rol?>: <?=$_SESSION['nom_admin']?></td>
                   <td align="right" class='style15' width="60"><a href="http://www.rdr.com/admin/"><img src='../imagenes/exit.png'>&nbsp;Salir</a>
                   </td>
                   
                   <?php
                    }
                    else{
                   ?>
                   <td align="left" class="style27"><img src='../imagenes/administrador.png'>&nbsp;<?=$rol?>: <?=$_SESSION['nom_admin']?></td>
                   <td align="right" class='style15' width="60"><a href="http://www.rdr.com/admin/"><img src='../imagenes/exit.png'>&nbsp;Salir--</a>
                   </td>
                   <?php
                    }
                   ?>
               </tr>
               
           </table>
       </td>
    </tr>
    <tr bgcolor="#F8F8F8" height="20">
        <td align="center" class="style23"><div id="div_principal"><br><br><br><br><br><br><br><br><br></div></td>
    </tr>
</table>


</body>
</html>
<?php
}
?>
