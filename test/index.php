<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
        <title>Fiestas Infantiles &BUBU&</title>
        <script language="JavaScript" type="text/javascript" src="js/prototype.js"></script>
        <script language="JavaScript" type="text/javascript" src="js/file.js"></script>
        <link rel="stylesheet" type="text/css" href="css/file.css"/>
    </head>
    <body>
        <form name="datos" method="post" action="registraEvento.php" onSubmit="return validaDatosR()">
            <table width="600" border="0" align="center" cellpadding="6" cellspacing="6" class="estilo_tabla">
                <tr>
                    <td>
                        <table width="100%" height="220" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                            <tr>
                                <td width="100%" borderr="0" colspan="2" align="center" valign="middle">
                                    <table width="80%">
                                        <tr>
                                            <td align="center" class="style24">SISTEMA DE COTIZACIÓN<br><br></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td width="100%" borderr="0" colspan="2" align="center" valign="middle">
                                    <table width="80%">
                                        <tr>
                                            <td align="center" class="style24">Por favor ingrese correctamente los datos<br><br></td>
                                        </tr>
                                    </table>
                                </td>   
                            </tr>
                            <tr>
                                <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Nombre:</td>
                                <td valing="middle" class="style7"><input type="text" autofocus  name="nombre" id="nombre" class="estilo_input" size="25"  maxlength="12" required></td>
                            </tr>
                            <tr>
                                <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Fecha del evento:</td>
                                <td valing="middle" class="style7">
                                    <input type="date" autofocus  name="fecha" id="fecha" class="estilo_input" required>
                                </td>
                            </tr>
                            <tr>
                                <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Dirección:</td>
                                <td valing="middle" class="style7"><input type="text" autofocus  name="direcc" id="direcc" class="estilo_input" size="25" required></td>
                            </tr>
                            <tr>
                                <td width="130" valign="middle" bgcolor="#F3F3F3" class="style14">Distrito:</td>
                                <td valign="middle" class="style7">
                                    <select name="dist" id="dist"  class="estilo_input" required>
                                    <option value="" selected>-Seleccionar-</option>
                                    <option value="L">Lima</option>
                                    <option value="C">Callao</option>
                                    <option value="PL">Pueblo Libre</option>
                                    <option value="SI">San Isidro</option>
                                    <option value="LM">La Molina</option>
                                    <option value="AV">Ate Vitarte</option>
                                    <option value="VS">Villa el Salvador</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="130" valign="middle" bgcolor="#F3F3F3" class="style14">Horario:</td>
                                <td valign="middle" class="style7">
                                    <select name="horario" id="horario"  class="estilo_input" required="">
                                    <option value="" selected>-Seleccionar-</option>
                                    <option value="0">3pm a 5pm</option>
                                    <option value="1">5pm a 7pm</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Payaso Adicional MAX. 5:</td>
                                <td valing="middle" class="style7">
                                    <input type="number" autofocus  name="payad" id="payad" class="estilo_input" max="5" min="0" onkeypress="return ValidarNumeros(event)">
                                    (opcional)
                                </td>
                            </tr>
                            <tr>
                                <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Muñeco Adicional MAX. 6:</td>
                                <td valing="middle" class="style7">
                                    <input type="number" autofocus  name="muñad" id="muñad" class="estilo_input" min="0" max="6" onkeypress="return ValidarNumeros(event)">
                                    (opcional)
                                </td>
                            </tr>
                            <tr>
                                <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Bailarina Adicional MAX. 9:</td>
                                <td valing="middle" class="style7">
                                    <input type="number" autofocus  name="bailad" id="bailad" class="estilo_input" min="0" max="9" onkeypress="return ValidarNumeros(event)">
                                    (opcional)
                                </td>
                            </tr>
                            <tr>
                                <td width="130" valing="middle" bgcolor="#F3F3F3" class="style14">Mago Adicional MAX.1:</td>
                                <td valing="middle" class="style7">
                                    <input type="number" autofocus  name="magoad" id="magoad" class="estilo_input" min="0" max="1" onkeypress="return ValidarNumeros(event)">
                                    (opcional)
                                </td>
                            </tr>
                            <tr>
                                <td width="130" valign="middle" bgcolor="#F3F3F3" class="style14">Decoración:</td>
                                <td valign="middle" class="style7">
                                    <select name="decora" id="decora"  class="estilo_input" required="">
                                    <option value="" selected>-Seleccionar-</option>
                                    <option value="S">Sí</option>
                                    <option value="N">No</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="130" valign="middle" bgcolor="#F3F3F3" class="style14">Grabación:</td>
                                <td valign="middle" class="style7">
                                <select name="grabar" id="grabar"  class="estilo_input">
                                    <option value="NO" selected>Ninguna</option>
                                    <option value="HD">HD</option>
                                    <option value="FULL">Full HD</option>
                                    <option value="ULTRA">Ultra HD</option>
                                </select>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="confirmar" id="confirmar" value="Aceptar" class="boton_personalizado">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" name="cancelar" id="cancelar" value="Limpiar" class="boton_personalizado_red"><br>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
