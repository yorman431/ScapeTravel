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
      <form action="" method="post" name="form1" class="normal" id="form1" onsubmit="MM_validateForm('nombre','','R');return document.MM_returnValue">
        <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="normal">
          <tr>
            <th align="center"><img src="/imagenes/cuadros.png" width="14" height="14" align="left" />{$accion}<span class="titulo"><img src="/imagenes/cuadritos.png" width="37" height="11" align="right" /></span></th>
          </tr>
          <tr>
            <td align="center" class="subtituloWeb3"><table width="40%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="67" align="left" valign="top" class="subtituloWeb3">Nombre:</td>
                <td width="320" class="normalContenido"><input name="nombre" type="text" class="componentes" id="nombre" value="{$nombres}" size="45" maxlength="50" /> 
                *</td>
              </tr>
              <tr>
                <td align="left" class="subtituloWeb3">Zona:</td>
                <td class="normalContenido">
                <select name="tipo" id="tipo">
                   <option {if $tipo eq "normal"} selected='selected'{/if} value="normal">Normal</option>
                  <option {if $tipo eq "centro"} selected='selected'{/if} value="centro">Centro</option>
                  <option {if $tipo eq "arriba"} selected='selected'{/if} value="arriba">Arriba</option>
                  <option {if $tipo eq "abajo"} selected='selected'{/if} value="abajo">Abajo</option>
                    
          		</select>
                *
          </td>
              </tr>
              <tr>
                <td align="left" valign="top" class="subtituloWeb3">Etiqueta:</td>
                <td><input name="etiqueta" type="text" class="componentes" id="etiqueta" value="{$etiqueta}" size="45" maxlength="100" /></td>
              </tr>
              <tr>
                <td align="left" valign="top" class="subtituloWeb3">Icono:</td>
             <td><input name="icono" type="text" class="componentes" id="icono" value='{$iconos}' size="45" maxlength="100" /></td>
              </tr>
              <tr>
                <td align="left" valign="top" class="subtituloWeb3">Descripci&oacute;n:</td>
                <td><textarea name="descripcion" cols="45" rows="4" class="componentes" id="descripcion">{$descripcion}</textarea></td>
              </tr>
              <tr>
                <td align="left" valign="top" class="subtituloWeb3">Claves:</td>
                <td><textarea name="claves" cols="45" rows="4" class="componentes" id="claves">{$claves}</textarea></td>
              </tr>
              <tr>
                <td align="left" valign="top" class="subtituloWeb3">Prioridad:</td>
                <td><input name="prioridad" type="text" class="componentes" id="prioridad" onkeypress="javascripts: return validarletrasnum(event);" value="{$apellidos|escape:'htmlall'}" size="45" maxlength="20" /></td>
              </tr>
              {$mensaje}
  <tr>
  <td>&nbsp;</td>
    <td align="left"><input name="envio" type="submit" class="componentes" id="button" onclick="javascript: return confirmar('&iquest;Est&aacute; seguro que desea guardar?');" value="Guardar" />
      &nbsp;&nbsp;
      <input name="button2" type="button" class="componentes" id="button2" onclick="javascript: location.href='/admin/link/'" value="Cancelar" /> <span class="normalContenido">(*) Datos Obligatorios</span></td>
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
