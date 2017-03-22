<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" --> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Scape Travel - Panel Administrativo</title> 
<link href="/css/estilos.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/imagenes/icono.ico" />
<script type="text/javascript" language="javascript" src="/js/validar.js"></script>
<script src="/Scripts/swfobject_modified.js" type="text/javascript"></script>
<!-- InstanceBeginEditable name="head" -->
{literal}
<link rel="stylesheet" type="text/css" media="all" href="/calendario/calendar-blue.css" title="blue" />
<script type="text/javascript" src="/calendario/calendar.js"></script>
<script type="text/javascript" src="/calendario/lang/calendar-en.js"></script>
<script type="text/javascript" src="/calendario/calendar-setup.js"></script>
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/ckfinder/ckfinder.js"></script>
<script type="text/javascript">
	window.onload = function()
	{
		var editor = CKEDITOR.replace( 'contenido',
			{
		toolbar :
			[
            		['Font','FontSize','TextColor','RemoveFormat','-','Table','Image','Source','Templates' ],'/',

            		['Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link','Unlink'],['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],['Maximize', 'ShowBlocks']

        		]
 
    		}
		);
		CKFinder.setupCKEditor( editor, '../../ckfinder/' ) ;
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
      <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="MM_validateForm('etiqueta','','R');return document.MM_returnValue">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="normal">
          <tr>
            <th width="967" align="center"><span class="titulo"><img src="/imagenes/cuadros.png" width="14" height="14" align="left" /></span>{$accion}<span class="titulo"><img src="/imagenes/cuadritos.png" width="37" height="11" align="right" /></span></th>
          </tr>
          <tr>
            <td align="left" class="tituloWeb"><table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
            {$mensaje}
                <tr>
                  <td align="left" class="subtituloWeb3">Enlace:</td>
                  <td>
               <select name="categoria" id="categoria" onchange="javascripts: document.form1.submit();">
              {section name=i  loop=$listado}
                <option {if $categoria eq $listado[i].nombre_cat || $categoria eq $listado[i].id_cat} selected='selected'{/if} value="{$listado[i].id_cat}">{$listado[i].nombre_cat}</option> 
              {/section}
              </select>
                  </td>
                </tr>
                <tr>
                  <td align="left" class="subtituloWeb3">Subenlace:</td>
                  <td><select name="subcategoria" id="subcategoria">
    			<option value="1">Ninguno(Principal)</option>
              {section name=j loop=$listado2}   
                <option {if $subcategoria eq $listado2[j].nombre_sub}selected='selected'{/if} value="{$listado2[j].id_sub}">{$listado2[j].nombre_sub}</option>
              {/section}
              </select>
                  
                  </td>
                </tr>
                <tr>
                <td width="90" align="left" class="subtituloWeb3">Etiqueta:</td>
                <td width="405"><input name="etiqueta" type="text" id="etiqueta" value="{$etiqueta}" size="71" maxlength="100" />
                *</td>
              </tr>
                <tr>
                  <td align="left" class="subtituloWeb3">Prioridad:</td>
                  <td><input onkeypress="javascripts: return validarletrasnum(event);" name="prioridad" type="text" class="normalContenido" id="prioridad" value="{$prioridad}" size="71" maxlength="100" /> *</td>
                </tr>
                <tr>
                <td align="left" class="subtituloWeb3">Efecto:</td>
                <td><select name="efecto" id="efecto">
<option value="showBars" {if $efecto eq "showBars"} selected='selected' {/if}>Show Bars</option>
<option value="cube" {if $efecto eq "cube"} selected='selected' {/if}>Cube</option>
<option value="showBarsRandom" {if $efecto eq "showBarsRandom"} selected='selected' {/if}>Show Bars Random</option>
<option value="tube" {if $efecto eq "tube"} selected='selected' {/if}>Tube</option>
<option value="cubeStop" {if $efecto eq "cubeStop"} selected='selected' {/if}>Cube Stop</option>
<option value="cubeHide" {if $efecto eq "cubeHide"} selected='selected' {/if}>Cube Hide</option>
<option value="cubeSize" {if $efecto eq "cubeSize"} selected='selected' {/if}>Cube Size</option>
<option value="horizontal" {if $efecto eq "horizontal"} selected='selected' {/if}>Horizontal</option>
<option value="cubeRandom" {if $efecto eq "cubeRandom"} selected='selected' {/if}>Cube Random</option>
<option value="fade" {if $efecto eq "fade"} selected='selected' {/if}>Fade</option>
<option value="fadeFour" {if $efecto eq "fadeFour"} selected='selected' {/if}>Fade Four</option>
<option value="paralell" {if $efecto eq "paralell"} selected='selected' {/if}>Paralell</option>
<option value="blind" {if $efecto eq "blind"} selected='selected' {/if}>Blind</option>
<option value="blindHeight" {if $efecto eq "blindHeight"} selected='selected' {/if}>Blind Height</option>
<option value="directionLeft" {if $efecto eq "directionLeft"} selected='selected' {/if}>Direction Left</option>
<option value="directionTop" {if $efecto eq "directionTop"} selected='selected' {/if}>Direction Top</option>
<option value="directionBottom" {if $efecto eq "directionBottom"} selected='selected' {/if}>Direction Bottom</option>
<option value="directionRight" {if $efecto eq "directionRight"} selected='selected' {/if}>Direction Right</option>
                </select>
                  *</td>
              </tr>
              <tr>
                <td align="left" class="subtituloWeb3">Vinculo:</td>
                <td class="normalContenido"><input name="vinculo" type="text" id="vinculo" value="{$vinculo}" size="71" maxlength="200" /></td>
              </tr>
              <tr>
                <td align="left" class="subtituloWeb3">Imagen:</td>
                <td class="normalContenido"><input type="file" name="documento" id="documento" />                  
                  *                  
                  (1 Mb m&aacute;x)</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="normalContenido"><input name="envio" type="submit" id="envio" onclick="javascript: return confirmar('&iquest;Est&aacute; seguro que desea guardar?');" value="Guardar"/>
                  &nbsp;
                  <input type="button" name="Submit" value="Cancelar" onclick="javascripts: location.href='/admin/banner'" /> 
                  (*) Datos Obligatorios</td>
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
