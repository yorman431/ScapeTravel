<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" --> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Scape Travel - Panel Administrativo</title> 
<link href="/css/estilos.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/imagenes/icono.ico" />
<script type="text/javascript" language="javascript" src="/js/validar.js"></script>
<script src="/Scripts/swfobject_modified.js" type="text/javascript"></script>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->

</head>  
<body>
<br />
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="marco">
  <tr>
    <td colspan="3" align="left" background="/imagenes/fondo_admin.jpg" class="subtituloWeb3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="42%"><img src="/imagenes/logo.jpg" width="400" height="122" /> </td>
          <td width="56%" align="right" valign="middle" class="normalContenido">Panel Central de Utilidades - <span class="subtituloWeb3">Usuario:</span> {$nombre} {$apellido} <img src="/imagenes/user.png" width="30" height="30" align="absmiddle" />
            <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="597" height="48">
              <param name="movie" value="/swf/redes_hora2.swf" />
              <param name="quality" value="high" />
              <param name="wmode" value="transparent" />
              <param name="swfversion" value="6.0.65.0" />
              <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
              <param name="expressinstall" value="/Scripts/expressInstall.swf" />
              <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" data="/swf/redes_hora2.swf" width="597" height="48">
                <!--<![endif]--> 
                <param name="quality" value="high" />
                <param name="wmode" value="transparent" />
                <param name="swfversion" value="6.0.65.0" />
                <param name="expressinstall" value="/Scripts/expressInstall.swf" />
                <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                <div>
                  <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                  <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
                </div>
                <!--[if !IE]>-->
              </object>
              <!--<![endif]-->
          </object></td>
          <td width="2%" align="right" valign="middle" class="normalContenido2">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
 
  <tr>
    <td colspan="3" align="center" class="division"></td>
  </tr>
  <tr>
    <td colspan="3" align="center" class="division2"></td>
  </tr>
  <tr>
    <td colspan="3"><!-- InstanceBeginEditable name="contenido" -->
      <form action="" method="post" name="form1" id="form1" onsubmit="MM_validateForm('nombre','','R','apellido','','R','correo','','RisEmail','login','','R','clave','','R','nivel','','RinRange1:4');return document.MM_returnValue">
        <table border="0" align="center" cellpadding="0" cellspacing="0" class="normal">
          <tr>
            <th width="100%" align="center" class="titulo"><img src="/imagenes/cuadros.png" width="14" height="14" align="left" />{$accion}<img src="/imagenes/cuadritos.png" width="37" height="11" align="right" /></th>
          </tr>
          <tr>
            <td align="center" class="subtituloWeb3"><table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="26%" align="left" class="subtituloWeb3">Nombre:</td>
                <td width="74%" align="left" class="normalContenido"><input name="nombre" type="text" class="componentes" id="nombre" onkeypress="javascripts: return validarletras(event);" value="{$nombres}" size="55" maxlength="20" /> 
                  *</td>
              </tr>
              <tr>
                <td align="left" class="subtituloWeb3">Apellido:</td>
                <td align="left" class="normalContenido"><input name="apellido" type="text" class="componentes" id="apellido" onkeypress="javascripts: return validarletras(event);" value="{$apellidos}" size="55" maxlength="20" /> 
                  *</td>
              </tr>
              <tr>
                <td align="left" class="subtituloWeb3">Correo:</td>
                <td align="left" class="normalContenido"><input name="correo" type="text" class="componentes" id="correo" value="{$correo}" size="55" maxlength="50" /> 
                  *</td>
              </tr>
              <tr>
                <td align="left" class="subtituloWeb3">Login:</td>
                <td align="left" class="normalContenido"><input name="login" type="text" class="componentes" id="login" onkeypress="javascripts: return validarletrasnum(event);" value="{$login}" size="55" maxlength="20" /> 
                  *</td>
              </tr>
              <tr>
                <td align="left" class="subtituloWeb3">Clave:</td>
                <td align="left" class="normalContenido"><input name="clave" type="password" class="componentes" id="clave" size="55" maxlength="20" /> 
                  *</td>
              </tr>
              <tr>
                <td align="left" class="subtituloWeb3">Confirmar Clave:</td>
                <td align="left" class="normalContenido"><input name="confirmar" type="password" class="componentes" id="confirmar" size="55" maxlength="20" /> 
                  *</td>
              </tr>
              <tr>
                <td align="left" class="subtituloWeb3">Tipo:</td>
                <td align="left" class="normalContenido">
                <select name="tipo" id="tipo">
                          <option value="Contenido" {if $tipo eq "Contenido"} selected='selected' {/if}>Contenido</option>
                          <option value="Ventas" {if $tipo eq "Ventas"} selected='selected' {/if}>Ventas</option>
                          <option value="Webmaster" {if $tipo eq "Webmaster"} selected='selected' {/if}>Webmaster</option>
                    </select>
                </td>
              </tr>
              <tr>
                <td align="left" class="subtituloWeb3">Nivel:</td>
                <td align="left" class="normalContenido"><input name="nivel" type="text" class="componentes" id="nivel" onkeypress="javascripts: return validarnum(event);" value="{$nivel}" size="55" maxlength="1" /> 
                  *</td>
              </tr>
              {$mensaje}
  <tr>
  <td>&nbsp;</td>
    <td align="left"><input name="envio" type="submit" class="componentes" id="button3" onclick="javascript: return confirmar('&iquest;Est&aacute; seguro que desea guardar?');" value="Guardar" />
      &nbsp;&nbsp;
      <input name="button" type="button" class="componentes" id="button4" onclick="javascript: location.href='/admin/usuario/'" value="Cancelar" /> <span class="normalContenido">(*) Datos Obligatorios</span></td>
  </tr>
            </table></td>
          </tr>
        </table>
      </form>
    <!-- InstanceEndEditable --></td>
  </tr>
    <tr>
    <td colspan="3" align="center" class="division"></td>
  </tr>
  <tr>
    <td colspan="3" align="center" class="division2"></td>
  </tr>
  <tr>
  <td width="25%" align="center"><a href="/admin/panel_central.php">Panel <img src="/imagenes/atras.png" width="25" height="25" border="0" align="absmiddle" /></a></td>
    <td width="50%" align="center"><!-- InstanceBeginEditable name="insetar" -->&nbsp;<!-- InstanceEndEditable --></td>
    <td width="25%" align="center"><a href="/admin/cerrar_session.php">Cerrar Sesi&oacute;n <img src="/imagenes/cerrar.png" width="25" height="25" border="0" align="absmiddle" /></a></td>
  </tr>
  <tr>
    <td colspan="3" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center" class="pie">
    Scape Travel | Marketing C.A | Copyright&copy; 2016 Todos los Derechos Reservados - Venezuela</td>
  </tr>
</table>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
<!-- InstanceEnd --></html>
