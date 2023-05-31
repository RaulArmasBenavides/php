<?php
session_start();
session_destroy();
?>
<html>
<head>
<title>[Administrador de Eventos]</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<script language="JavaScript" type="text/javascript" src="js/prototype.js"></script>
<script language="javascript" type="text/javascript" src="js/scriptaculous/src/scriptaculous.js"></script>
<script language="JavaScript" type="text/javascript" src="js/eventos.js"></script>
<link rel="stylesheet" type="text/css" href="css/eventos.css"/>
</head>

<body>
    <br><br>  
<form name="datosF" action="controllers/procesar.php" method="POST">
    
<table width="660" align="center" border="0" cellpadding="2" cellspacing="2" class="estilo_tabla">
  <tr>
    <td>
<div id="div_login"><!---------MUESTRA LOGIN------->
<table width="660" align="center" border="0" cellpadding="2" cellspacing="2" class="estilo_tabla">
    <tr>
        <td align="center" class="style25"><br><br></td>
    </tr>
    <tr>
        <td align="center" class="style25">Ingrese Usuario y Contraseña de Administrador<br></td>
    </tr>
    <tr>
        <td>
            <table width="250" height="42" border="0" align="center" cellpadding="2" cellspacing="2">
                  <tr>
                    <td width="90"><div align="right"><strong><span class="style7">Usuario:&nbsp;</span></strong></div></td>
                    <td width="160"><div align="left">
                            <input autofocus="yes" type="text" name="login" id="login" class="estilo_input"  size="12" required/></div></td>
                  </tr>
                  <tr>
                    <td width="90"><div align="right"><strong><span class="style7">Clave:&nbsp;</span></strong></div></td>
                    <td width="160"><div align="left">
                       <input type="password" name="clave" id="clave" class="estilo_input" size="12" required/></div>
                     </td>
                  </tr>
                  
				  <tr>
      				<td colspan="2" align="center">
                        <table width="100%" border="0" align="center" cellpadding="3" cellspacing="3">
                            <tr>
                                <td align="center">
                                   <input type="submit" name="enviaradmin" id="enviaradmin" class="boton_personalizado"  value="      Ingresar      "/>
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <input type="reset" name="cancelar" id="cancelar" class="boton_personalizado_red"  value="      Limmpiar      "/>
                                </td></tr>
                        </table>
    				  </td>
    			  </tr>
             </table>
            <br>
    	     
        </td>
    </tr> 
</table>
</div> 
        
    </td>
  </tr>
</table>
</form>

</body>
</html>

