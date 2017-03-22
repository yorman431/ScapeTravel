<?php /* Smarty version 2.6.9, created on 2017-01-20 17:13:23
         compiled from admin/hotel/formulario.tpl */ ?>
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
<?php echo '
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/ckfinder/ckfinder.js"></script>
<script type="text/javascript">
	window.onload = function()
	{
		var editor2 = CKEDITOR.replace( \'contenido\',
			{
		toolbar :
			[
            		[\'Font\',\'FontSize\',\'TextColor\',\'RemoveFormat\',\'-\',\'Table\',\'Image\',\'Source\',\'Templates\' ],\'/\',

            		[\'Bold\', \'Italic\',\'Underline\', \'-\', \'NumberedList\', \'BulletedList\', \'-\', \'Link\',\'Unlink\'],[\'JustifyLeft\',\'JustifyCenter\',\'JustifyRight\',\'JustifyBlock\'],[\'Maximize\', \'ShowBlocks\']

        		]
 
    		}
		);
		
		var editor = CKEDITOR.replace( \'condiciones\',
			{
		toolbar :
			[
            		[\'Font\',\'FontSize\',\'TextColor\',\'RemoveFormat\',\'-\',\'Table\',\'Image\',\'Source\',\'Templates\' ],\'/\',

            		[\'Bold\', \'Italic\',\'Underline\', \'-\', \'NumberedList\', \'BulletedList\', \'-\', \'Link\',\'Unlink\'],[\'JustifyLeft\',\'JustifyCenter\',\'JustifyRight\',\'JustifyBlock\'],[\'Maximize\', \'ShowBlocks\']

        		]
 
    		}
		);
	};
</script>
	
'; ?>

<link  href="/font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<!-- InstanceEndEditable -->

</head>  
<body>
<br />
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="marco">
  <tr>
    <td colspan="3" align="left" background="/imagenes/fondo_admin.jpg" class="subtituloWeb3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="42%"><img src="/imagenes/logo.jpg" width="400" height="122" /> </td>
          <td width="56%" align="right" valign="middle" class="normalContenido">Panel Central de Utilidades - <span class="subtituloWeb3">Usuario:</span> <?php echo $this->_tpl_vars['nombre']; ?>
 <?php echo $this->_tpl_vars['apellido']; ?>
 <img src="/imagenes/user.png" width="30" height="30" align="absmiddle" />
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
            <th width="768" align="center"><img src="/imagenes/cuadros.png" width="14" height="14" align="left" /><?php echo $this->_tpl_vars['accion']; ?>
<img src="/imagenes/cuadritos.png" width="37" height="11" align="right" /></th>
          </tr>
          <tr>
            <td align="right" class="tituloWeb"><table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
              <?php echo $this->_tpl_vars['mensaje']; ?>

                  <tr>
                    <td align="left" class="subtituloWeb3">Pais:</td>
                    <td class="adminContenido">
                    <select name="pais" id="pais" class="tamano">
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['paises']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                        <option <?php if ($this->_tpl_vars['paises'][$this->_sections['i']['index']]['id_pais'] == $this->_tpl_vars['pais']): ?> selected='selected'<?php endif; ?> value="<?php echo $this->_tpl_vars['paises'][$this->_sections['i']['index']]['id_pais']; ?>
"><?php echo $this->_tpl_vars['paises'][$this->_sections['i']['index']]['nombre_pais']; ?>
</option>
                    <?php endfor; endif; ?> 
                  </select> 
                    *</td>
                  </tr>
                  <tr>
                    <td align="left" class="subtituloWeb3">Estado:</td>
                    <td class="adminContenido"><select name="estado" id="estado" class="tamano">
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['estados']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                        <option <?php if ($this->_tpl_vars['estados'][$this->_sections['i']['index']]['id_est'] == $this->_tpl_vars['estado']): ?> selected='selected'<?php endif; ?> value="<?php echo $this->_tpl_vars['estados'][$this->_sections['i']['index']]['id_est']; ?>
"><?php echo $this->_tpl_vars['estados'][$this->_sections['i']['index']]['nombre_est']; ?>
</option>
                    <?php endfor; endif; ?> 
                  </select> 
                    *
                    </td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" class="subtituloWeb3">Precio:</td>
                    <td align="left"><input  name="precio" type="text" class="normalContenido" id="precio" value="<?php echo $this->_tpl_vars['precio']; ?>
" size="71" maxlength="20" onkeypress="javascripts: return validarnum(event);" /></td>
                  </tr>
                  <tr>
                    <td align="left" class="subtituloWeb3">Ciudad:</td>
                    <td class="adminContenido"><input onkeypress="javascripts: return validarletras(event);" name="ciudad" type="text" id="ciudad" value="<?php echo $this->_tpl_vars['ciudad']; ?>
" size="71" maxlength="150" /> 
                      *</td>
                  </tr>
                <tr>
                    <td align="left" class="subtituloWeb3">Ubicaci&oacute;n:</td>
                    <td class="adminContenido"><input name="ubicacion" type="text" id="ubicacion" value="<?php echo $this->_tpl_vars['ubicacion']; ?>
" size="71" maxlength="150" /> 
                      *</td>
                </tr>
                <tr>
                  <td align="left" class="subtituloWeb3">Sector:</td>
                  <td class="adminContenido">
                    <select name="sector" id="sector" class="tamano">
                      <option value="" <?php if ($this->_tpl_vars['sector'] == ''): ?> selected hidden<?php endif; ?>>Seleccione una opcion</option>
                      <option <?php if ($this->_tpl_vars['sector'] == 'Norte'): ?> selected <?php endif; ?> value="Norte">Norte</option>
                      <option <?php if ($this->_tpl_vars['sector'] == 'Sur'): ?> selected <?php endif; ?> value="Sur">Sur</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td align="left" class="subtituloWeb3">Nombre</td>
                  <td class="adminContenido"><input name="nombre" type="text" id="nombre" value="<?php echo $this->_tpl_vars['nombres']; ?>
" size="71" maxlength="150" />
                  *</td>
                </tr>
                
                
  <tr>
    <td width="205" align="left" valign="top" class="subtituloWeb3">Categor&iacute;a:</td>
    <td width="563" class="adminContenido">
      <select name="categoria" id="categoria" class="tamano">
        	<option <?php if ($this->_tpl_vars['categoria'] == '2'): ?> selected='selected'<?php endif; ?> value="2">2 Estrellas</option>
            <option <?php if ($this->_tpl_vars['categoria'] == '3'): ?> selected='selected'<?php endif; ?> value="3">3 Estrellas</option>
            <option <?php if ($this->_tpl_vars['categoria'] == '4'): ?> selected='selected'<?php endif; ?> value="4">4 Estrellas</option>
            <option <?php if ($this->_tpl_vars['categoria'] == '5'): ?> selected='selected'<?php endif; ?> value="5">5 Estrellas</option>
            <option <?php if ($this->_tpl_vars['categoria'] == '6'): ?> selected='selected'<?php endif; ?> value="6">Boutique</option>
            <option <?php if ($this->_tpl_vars['categoria'] == '7'): ?> selected='selected'<?php endif; ?> value="7">Posada</option>
            
      </select>
    *</span></td>
  </tr>
  <tr>
    <td align="left" class="subtituloWeb3">Tipo de Tarifa:</td>
    <td><select name="tipo" id="tipo" class="tamano">
        	<option <?php if ($this->_tpl_vars['tipo'] == 'Habitacion'): ?> selected='selected'<?php endif; ?> value="Habitacion">Por Habitaci&oacute;n</option>
            <option <?php if ($this->_tpl_vars['tipo'] == 'Persona'): ?> selected='selected'<?php endif; ?> value="Persona">Por Persona</option>
      </select></td>
  </tr>
  <tr>
    <td align="left" class="subtituloWeb3">Prioridad:</td>
    <td><input name="prioridad" type="text" id="prioridad" value="<?php echo $this->_tpl_vars['prioridad']; ?>
" size="71" maxlength="4" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="subtituloWeb3">Coordenadas:</td>
    <td>Lat: 
      <input  name="latitud" type="text" id="latitud" value="<?php echo $this->_tpl_vars['latitud']; ?>
" size="25" maxlength="50" />
      Long:      
  <input  name="longitud" type="text" id="longitud" value="<?php echo $this->_tpl_vars['longitud']; ?>
" size="25" maxlength="50" />
  <a onclick="javascript: seleccionar_mapa(); return false;" href="#">Mapa</a></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="subtituloWeb3">Condiciones:</td>
    <td><textarea name="condiciones" cols="70" rows="6" id="condiciones"  wrap="physical"><?php echo $this->_tpl_vars['condiciones']; ?>
</textarea></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="subtituloWeb3">Descripci&oacute;n:</td>
    <td><textarea name="contenido" cols="70" rows="6" id="contenido"  wrap="physical"><?php echo $this->_tpl_vars['descripcion']; ?>
</textarea></td> 
  </tr>
  <tr>
    <td align="left" valign="top" class="subtituloWeb3">Claves:</td>
    <td><textarea name="claves" cols="70" rows="6" id="claves"  wrap="physical"><?php echo $this->_tpl_vars['claves']; ?>
</textarea></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="subtituloWeb3">Facilidades:</td>
    <td>
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['facilidad']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
    	<div class="facilidad">
        <div class="nombre_facilidad">
        <input type="checkbox" name="facilidad<?php echo $this->_tpl_vars['facilidad'][$this->_sections['i']['index']]['id_fac']; ?>
" id="facilidad<?php echo $this->_tpl_vars['facilidad'][$this->_sections['i']['index']]['id_fac']; ?>
" title="<?php echo $this->_tpl_vars['facilidad'][$this->_sections['i']['index']]['etiqueta_fac']; ?>
" <?php if ($this->_tpl_vars['facilidad'][$this->_sections['i']['index']]['encendido'] == 'on'): ?> checked="checked" <?php endif; ?> />
        <?php echo $this->_tpl_vars['facilidad'][$this->_sections['i']['index']]['nombre_fac']; ?>
</div>
        <div class="fotos5">
             
            <i class="fa <?php echo $this->_tpl_vars['facilidad'][$this->_sections['i']['index']]['etiqueta_fac']; ?>
 color-fa"></i>
            
        </div>
    	</div>
        
    <?php endfor; endif; ?>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" class="subtituloWeb3">Principal:</td>
    <td><select name="principal" id="principal">
      <option <?php if ($this->_tpl_vars['principal'] == 'si'): ?> selected='selected'<?php endif; ?> value="si">S&iacute;</option>
      <option <?php if ($this->_tpl_vars['principal'] == 'no'): ?> selected='selected'<?php endif; ?> value="no">No</option>
      </select>
      (Valor en S&iacute; aparece recomendado en la principal)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="envio" type="submit" class="componentes" id="button2" onclick="javascript: return confirmar('&iquest;Est&aacute; seguro que desea guardar?');" value="Guardar" />
      &nbsp;
      <input type="button" name="Submit"  class="normalContenido" value="Cancelar" onclick="javascripts: location.href='/admin/hotel/'" /></td>
  </tr>
          <?php echo $this->_tpl_vars['mensaje']; ?>

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