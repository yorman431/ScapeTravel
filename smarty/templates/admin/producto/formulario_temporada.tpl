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
<script src="/src/js/jscal2.js"></script>
<script src="/src/js/lang/es.js"></script>
<link rel="stylesheet" type="text/css" href="/src/css/jscal2.css" />
<link rel="stylesheet" type="text/css" href="/src/css/border-radius.css" />
<link rel="stylesheet" type="text/css" href="/src/css/steel/steel.css" />
<link rel="stylesheet" type="text/css" href="/src/css/reduce-spacing.css" />

<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/ckfinder/ckfinder.js"></script>
<script type="text/javascript">
	window.onload = function()
	{
		var editor2 = CKEDITOR.replace( 'contenido',
			{
		toolbar :
			[
            		['Font','FontSize','TextColor','RemoveFormat','-','Table','Image','Source','Templates' ],'/',

            		['Bold', 'Italic','Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link','Unlink'],['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],['Maximize', 'ShowBlocks']

        		]
 
    		}
		);
		
		var editor = CKEDITOR.replace( 'condiciones',
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
      <form action="" method="post" name="form1" id="form1" onsubmit="MM_validateForm('nombre','','R','email','','NisEmail');return document.MM_returnValue">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="normal">
          <tr>
            <th width="768" align="center"><img src="/imagenes/cuadros.png" width="14" height="14" align="left" />{$accion}<img src="/imagenes/cuadritos.png" width="37" height="11" align="right" /></th>
          </tr>
          <tr>
            <td align="right" class="tituloWeb"><table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
              {$mensaje}
                  <tr>
                    <td width="205" align="left" class="subtituloWeb3">Desde:</td>
                    <td width="563" class="adminContenido">
                    <input readonly="readonly" size="20" type="text" id="desde" name="desde" value="{$desde}" /><button id="f_btn1">...</button> 
                    * 
{literal}
    <script type="text/javascript">//<![CDATA[
      Calendar.setup({
        inputField : "desde",
        trigger    : "f_btn1",
        onSelect   : function() { this.hide() },
        showTime   : false,
        dateFormat : "%d/%m/%Y"
      });
    //]]></script>{/literal}  <span class="subtituloWeb3">Hasta:</span>
    <input size="20" readonly="readonly" type="text" id="hasta" name="hasta" value="{$hasta}" /><button id="f_btn2">...</button> *<br />
{literal}
    <script type="text/javascript">//<![CDATA[
      Calendar.setup({
        inputField : "hasta",
        trigger    : "f_btn2",
        onSelect   : function() { this.hide() },
        showTime   : false,
        dateFormat : "%d/%m/%Y"
      });
    //]]></script>{/literal} </td>
                  </tr>
                  <tr>
                    <td align="left" class="subtituloWeb3">Titulo Adicional:</td>
                    <td class="adminContenido"><input 	name="titulo" type="text" id="titulo" value="{$titulo}" size="71" maxlength="150" /> 
                      *</td>
                  </tr>
                <tr>
                    <td align="left" class="subtituloWeb3">Texto Alternativo:</td>
                    <td class="adminContenido"><input name="alternativo" type="text" id="alternativo" value="{$alternativo}" size="71" maxlength="150" /> 
                      *</td>
                </tr>
                <tr>
                  <td align="left" class="subtituloWeb3">PAX adicional Bs.<span class="titulo7"><br />
                  Aplica si la tarifa es por habitaci&oacute;n</span></td>
                  <td class="adminContenido"><input name="paxadicional" type="text" id="paxadicional" value="{$paxadicional}" size="71" maxlength="150" onkeypress="javascripts: return validarnum(event);" />
                  *</td>
                </tr>
  <tr>
    <td align="left" class="subtituloWeb3">Orden:</td>
    <td><input name="prioridad" type="text" id="prioridad" value="{$prioridad}" size="71" maxlength="4" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="subtituloWeb3">Publica:</td>
    <td><select name="publica" id="publica">
      <option {if $publica eq "1"} selected='selected'{/if} value="1">S&iacute;</option>
      <option {if $publica eq "0"} selected='selected'{/if} value="0">No</option>
      </select>
      (Valor en S&iacute; permite activar la temporada)</td>
  </tr>
  <tr>
    <td colspan="2"><div  class="division2"></div></td>
    </tr>
  <tr>
    <td class="subtituloWeb3">Rango Infantes:</td>
    <td>de  <input name="desde_a" type="text" id="desde_a" value="{$desde_a}" size="11" maxlength="10" onkeypress="javascripts: return validarnum(event);" />
    a
     <input name="hasta_a" type="text" id="hasta_a" value="{$hasta_a}" size="11" maxlength="10" onkeypress="javascripts: return validarnum(event);" />
a&ntilde;os |    precio:
     <input name="precio_a" type="text" id="precio_a" value="{$precio_a}" size="11" maxlength="10" onkeypress="javascripts: return validarnum(event);" /></td>
  </tr>
  <tr>
    <td class="subtituloWeb3">Rango Ni&ntilde;os:</td>
    <td>de  <input name="desde_b" type="text" id="desde_b" value="{$desde_b}" size="11" maxlength="10" onkeypress="javascripts: return validarnum(event);" />
    a
     <input name="hasta_b" type="text" id="hasta_b" value="{$hasta_b}" size="11" maxlength="10" onkeypress="javascripts: return validarnum(event);" />
a&ntilde;os |    precio:
     <input name="precio_b" type="text" id="precio_b" value="{$precio_b}" size="11" maxlength="10" onkeypress="javascripts: return validarnum(event);" /></td>
  </tr>
  <tr>
    <td><input name="id" type="hidden" id="id" value="{$id}" /></td>
    <td><input name="envio" type="submit" class="componentes" id="button2" onclick="javascript: return confirmar('&iquest;Est&aacute; seguro que desea guardar?');" value="Guardar" />
      &nbsp;
      <input type="button" name="Submit"  class="normalContenido" value="Cancelar" onclick="javascripts: location.href='/admin/producto/detalle.php?id={$id}#next'" /></td>
  </tr>
          {$mensaje}
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
