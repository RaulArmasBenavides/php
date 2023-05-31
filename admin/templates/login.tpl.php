<div id="div_login"><!---------MUESTRA LOGIN------->
<table width="660" align="center" border="0" cellpadding="2" cellspacing="2" class="estilo_tabla"> 
    <tr>
        <td align="center" class="style7">Ingrese usuario y contraseña de la Intranet<br></td>
    </tr>
    <tr>
        <td>
            <table width="250" height="42" border="0" align="center" cellpadding="2" cellspacing="2">
                  <tr>
                    <td width="100"><div align="right"><strong><span class="style7">Usuario:&nbsp;</span></strong></div></td>
                    <td width="150"><div align="left">
                      <input type="text" name="login" id="login" class="estilo_input"  size="12" required/></div></td>
                  </tr>
                  <tr>
                    <td width="100"><div align="right"><strong><span class="style7">Clave:&nbsp;</span></strong></div></td>
                    <td width="150"><div align="left">
                       <input type="password" name="clave" id="clave" class="estilo_input" size="12" required/></div>
                     </td>
                  </tr>
                  
				  <tr>
      				<td colspan="2" align="center">
                        <table width="100%" border="0" align="center" cellpadding="3" cellspacing="3">
                            <tr><td align="center">
                                <input type="button" name="enviar" id="enviar" class="boton_personalizado"  value="                Ingresar                " onclick="verificauser('div_login','1')"/>
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