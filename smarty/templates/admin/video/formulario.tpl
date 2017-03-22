<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" --> 
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" /> 
<title>Con Soda | Panel Administrativo</title>
<link href="/css/estilos.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/imagenes/icono.ico" /> 

<script type="text/javascript" language="javascript" src="/js/validar.js"></script>
<script src="/Scripts/swfobject_modified.js" type="text/javascript"></script>
<!-- InstanceBeginEditable name="head" -->
{literal}
<link rel="stylesheet" type="text/css" media="all" href="/calendario/calendar-blue.css" title="blue" />

<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	window.onload = function()
	{
		CKEDITOR.replace( 'contenido',
			{
		toolbar :
			[
            		['Font','FontSize','TextColor','RemoveFormat','-','Table','Image','Source','Templates' ],'/',

            		['Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link','Unlink'],['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],['Maximize', 'ShowBlocks']

        		]
 
    		}
		);
	};
</script>
	
{/literal}
<!-- InstanceEndEditable -->
</head>  
<body>  
<br />
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="marco">
  <tr>
    <td colspan="3" align="left" background="/imagenes/fondo_admin.jpg" class="subtituloWeb3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="42%"><img src="/imagenes/logo.jpg" /> </td>
          <td width="56%" align="right" valign="middle" class="normalContenido">Panel Central de Utilidades - <span class="subtituloWeb3">Usuario:</span> {$nombre} {$apellido} <img src="/imagenes/user.png" width="30" height="30" align="absmiddle" />
            <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="597" height="48">
              <param name="movie" value="/swf/redes_hora.swf" />
              <param name="quality" value="high" />
              <param name="wmode" value="transparent" />
              <param name="swfversion" value="6.0.65.0" />
              <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
              <param name="expressinstall" value="/Scripts/expressInstall.swf" />
              <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" data="/swf/redes_hora.swf" width="597" height="48">
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
      <form action="" method="post" name="form1" id="form1" onsubmit="MM_validateForm('nombre','','R','f_date_c','','R');return document.MM_returnValue">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="normal">
          <tr>
            <th width="967" align="center"><span class="titulo"><img src="/imagenes/cuadros.png" width="14" height="14" align="left" /></span>{$accion}<span class="titulo"><img src="/imagenes/cuadritos.png" width="37" height="11" align="right" /></span></th>
          </tr>
          <tr>
            <td align="left" class="tituloWeb"><table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
              {$mensaje}
  <tr>
    <td width="84" align="left" class="subtituloWeb3">Nombre:</td>
    <td width="400" class="normalContenido"><input onkeypress="javascripts: return validarletrasnum(event);" name="nombre" type="text" class="normalContenido" id="nombre" value="{$nombres|escape:'html'}" size="71" maxlength="100" /> 
      *</td>
  </tr>
  <tr>
    <td width="84" align="left" class="subtituloWeb3">Ubicacion:</td>
    <td width="400" class="normalContenido"><input onkeypress="javascripts: return validarletrasnum(event);" name="ubicacion" type="text" class="normalContenido" id="ubicacion" value="{$ubicacion|escape:'html'}" size="71" maxlength="100" /> 
      *</td>
  </tr>
  
  <tr>
    <td align="left" valign="top" class="subtituloWeb3">Codigo:</td>
    <td class="normalContenido"><input name="url" type="text" class="normalContenido" id="url" value="{$url}" size="71" maxlength="100" /> 
      *</td>
  </tr>
  <tr>
            <td width="15%" align="left" class="subtituloWeb3">Categor&iacute;a:</td>
            <td width="75%" class="adminContenido"><span class="adminContenido">
              <select name="categoria" id="categoria">
              {section name=i loop=$listado}
                <option {if $categoria eq $listado[i].nombre_hot || $categoria eq $listado[i].id_hot} selected='selected'{/if} value="{$listado[i].id_hot}">{$listado[i].nombre_hot}</option> 
              {/section}
              </select>
              *
            </span></td>
          </tr>
          <tr>
            <td width="15%" align="left" class="subtituloWeb3">Tipo:</td>
            <td width="75%" class="adminContenido"><span class="adminContenido">
              <select name="tipo" id="tipo">
                <option {if $tipo eq Youtube} selected='selected'{/if} value="Youtube">Youtube</option> 
                <option {if $tipo eq Vimeo} selected='selected'{/if} value="Vimeo">Vimeo</option> 
              </select>
              *
            </span></td>
          </tr>
  
  <tr>
    <td align="left" valign="top" class="subtituloWeb3">Descripci&oacute;n:</td>
    <td class="normalContenido"><textarea name="descripcion" cols="70" rows="6" class="normalContenido" id="contenido"  wrap="physical">{$descripcion|escape:'html'}</textarea>      
      *</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="normalContenido"><input name="envio" type="submit" class="componentes" id="button2" onclick="javascript: return validarcontenido('&iquest;Est&aacute; seguro que desea guardar?');" value="Guardar" />
      &nbsp;
      <input type="button" name="Submit"  class="normalContenido" value="Cancelar" onclick="javascripts: location.href='/admin/video/'" />
      (*) Datos Obligatorios</td>
  </tr>
            </table></td>
          </tr>
          {$mensaje}
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
   Con Soda, C.A.  | Copyright&copy; 2015 All Rights Reserved.</td>
  </tr> 
</table>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
<!-- InstanceEnd --></html>
