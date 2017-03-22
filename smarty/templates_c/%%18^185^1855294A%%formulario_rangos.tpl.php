<?php /* Smarty version 2.6.9, created on 2017-01-23 02:37:58
         compiled from admin/hotel/formulario_rangos.tpl */ ?>
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
<script type="text/javascript" src="/js/jquery.js"></script>

<script src="/src/js/jscal2.js"></script>
<script src="/src/js/lang/es.js"></script>
<link rel="stylesheet" type="text/css" href="/src/css/jscal2.css" />
<link rel="stylesheet" type="text/css" href="/src/css/border-radius.css" />
<link rel="stylesheet" type="text/css" href="/src/css/steel/steel.css" />
<link rel="stylesheet" type="text/css" href="/src/css/reduce-spacing.css" />


	
'; ?>

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
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="normal">
          <tr>
            <th align="center"><img src="/imagenes/cuadros.png" width="14" height="14" align="left" /><?php echo $this->_tpl_vars['accion']; ?>
<img src="/imagenes/cuadritos.png" width="37" height="11" align="right" /></th>
          </tr>
          <tr>
            <td align="right" class="tituloWeb"><table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
              <?php echo $this->_tpl_vars['mensaje']; ?>

                  
                
                  <tr>
                    <td class="titulo_promo" colspan="5">Rangos para Niños:</td>
                    <td align="right" class="titulo_promo" colspan="2">Comisionables:</td>
                    <td align="center" class="titulo_promo"><input type="checkbox" name="comisionable" id="comisionable" /></td>
                  </tr>
                  <tr>
                  	<td width="20%">Categoría</td>
                    <td width="10%">Edad Min</td>
                    <td width="10%">Edad Max</td>
                    <td width="20%">Tipo</td>
                    <td width="10%">Tarifa</td>
                    <td width="10%">Weekend</td>
                    <td colspan="2" width="10%" align="center">Acciones</td>
                  </tr>
                  <?php $this->assign('cont', 0); ?>
                  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['rangokids']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                  <form action="editar_rango.php" method="post" name="form<?php echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran']; ?>
" id="form<?php echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran']; ?>
">
                  <tr <?php if ($this->_tpl_vars['cont'] == '0'): ?> class='listado_a'
                    <?php $this->assign('cont', 1); ?> 
                    <?php else: ?> class='listado_b'
                    <?php $this->assign('cont', 0);  endif; ?>>
                    
                    <td class="subtituloWeb3">
                    	<select name="categoria_nuevo" id="categoria_nuevo" class="editar_ajax<?php echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran']; ?>
">
                          <option <?php if ($this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['etiqueta_ran'] == 'Infante'): ?> selected='selected'<?php endif; ?> value="Infante">Infante</option>
                          <option <?php if ($this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['etiqueta_ran'] == "Niño"): ?> selected='selected'<?php endif; ?> value="Niño">Niño</option>
                        </select></td>
                    <td class="subtituloWeb3"><input name="desde_nuevo" type="text" id="desde_nuevo" value="<?php echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['min_ran']; ?>
" size="11" maxlength="10" onkeypress="javascripts: return validarnum(event);" class="editar_ajax<?php echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran']; ?>
" /></td>
                    <td class="subtituloWeb3"><input name="hasta_nuevo" type="text" id="hasta_nuevo" value="<?php echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['max_ran']; ?>
" size="11" maxlength="10" onkeypress="javascripts: return validarnum(event);" class="editar_ajax<?php echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran']; ?>
" /></td>
                    <td>
                    	<select name="tipo_nuevo" id="tipo_nuevo" class="editar_ajax<?php echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran']; ?>
">
                          <option <?php if ($this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['tipo_ran'] == 'precio'): ?> selected='selected'<?php endif; ?> value="precio">Precio</option>
                          <option <?php if ($this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['tipo_ran'] == 'porcentaje'): ?> selected='selected'<?php endif; ?> value="porcentaje">Porcentaje</option>
                        </select>
                	</td>
                    
                    <td>
                    	<input name="precio_nuevo" type="text" id="precio_nuevo" value="<?php echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['precio_ran']; ?>
" size="11" maxlength="10" onkeypress="javascripts: return validarnum(event);" class="editar_ajax<?php echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran']; ?>
" />
                    </td>
                    
                    <td>
                    	<input name="weekend_nuevo" type="text" id="weekend_nuevo" value="<?php echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['weekend_ran']; ?>
" size="11" maxlength="10" onkeypress="javascripts: return validarnum(event);" class="editar_ajax<?php echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran']; ?>
" />
                    </td>
                    
                    <td width="30" align="center">
                	<img id="spinner_<?php echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran']; ?>
"src="/imagenes/loading_back.gif" width="25" height="24" align="absmiddle" style="display: none;" />
                	</td>
                    
                	<td width="20" align="center">
                    	<a onclick="javascript: return confirmar('&iquest;Seguro desea eliminar este registro?')" title="Eliminar Rango" href="eliminar_rango.php?temp=<?php echo $this->_tpl_vars['temp']; ?>
&id=<?php echo $this->_tpl_vars['id']; ?>
=&del=<?php echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran']; ?>
"><img src="/imagenes/delete.png" width="25" height="25" border="0" /></a>
                    </td>
                    
                  </tr>
                  	<input name="id" type="hidden" id="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
                    <input name="temp" type="hidden" id="temp" value="<?php echo $this->_tpl_vars['temp']; ?>
" />
                    <input name="envio" type="hidden" id="envio" value="Guardar" />
                    <input name="del" type="hidden" id="del" value="<?php echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran']; ?>
" />
                  	
                  </form>
                    <?php echo '
                    <script type="text/javascript">
                        $(\'.editar_ajax';  echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran'];  echo '\').blur(function(event) {
                        event.preventDefault();
                        console.log($("#form';  echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran'];  echo '").serialize())
                        
                        $("#spinner_';  echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran'];  echo '").show();
                        $.post("editar_rango.php", $("#form';  echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran'];  echo '").serialize())
                        
                        .done(function() {
                            $("#spinner_';  echo $this->_tpl_vars['rangokids'][$this->_sections['i']['index']]['id_ran'];  echo '").hide();
                            console.log("esconder spinner");
                        });
                        
                        //console.log ("submit?");
                    });
                    </script>
                    '; ?>

            
                  <?php endfor; endif; ?>
                  
                  <tr bgcolor="#F2CFB1">
                  	<form action="insertar_rango.php" method="post" name="form_nuevo" id="form_nuevo">
                  	<td>
                    	<select name="categoria_nuevo" id="categoria_nuevo">
                          <option selected='selected' value="Infante">Infante</option>
                          <option value="Niño">Niño</option>
                    </select></td>
                    <td>
                    	<input name="desde_nuevo" type="text" id="desde_nuevo" value="" size="11" maxlength="10" onkeypress="javascripts: return validarnum(event);" />
                    </td>
                    <td>
                    	<input name="hasta_nuevo" type="text" id="hasta_nuevo" value="" size="11" maxlength="10" onkeypress="javascripts: return validarnum(event);" />
                    </td>
                    <td>
                    	<select name="tipo_nuevo" id="tipo_nuevo">
                          <option selected='selected' value="precio">Precio</option>
                          <option value="porcentaje">Porcentaje</option>
                        </select>
                	</td>
                    <td>
                    	<input name="precio_nuevo" type="text" id="precio_nuevo" value="" size="11" maxlength="10" onkeypress="javascripts: return validarnum(event);" />
                    </td>
                    
                    <td>
                    	<input name="weekend_nuevo" type="text" id="weekend_nuevo" value="" size="11" maxlength="10" onkeypress="javascripts: return validarnum(event);" />
                    </td>
                    
                    <td>&nbsp;</td>
                    
                	<td align="center">
                    <input name="id" type="hidden" id="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
                    <input name="temp" type="hidden" id="temp" value="<?php echo $this->_tpl_vars['temp']; ?>
" />
                    <input name="envio" type="hidden" id="envio" value="Guardar" />
                    <a  onclick="javascript: return validar_insertar_rango('form_nuevo');" href="#" title="Insertar"><img  src="/imagenes/guardar.png" width="20" height="19" border="0" /></a></td>
                    </form>
                  </tr>
                  
                 
          <?php echo $this->_tpl_vars['mensaje']; ?>

            </table></td>
          </tr>
        </table>
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
    <td width="50%" align="center"><!-- InstanceBeginEditable name="insetar" --><a title="Volver" href="/admin/hotel/detalle.php?temp=<?php echo $this->_tpl_vars['temp']; ?>
&id=<?php echo $this->_tpl_vars['id']; ?>
#tarifas<?php echo $this->_tpl_vars['temp']; ?>
">&nbsp;Volver <img src="/imagenes/atras.png" width="25" height="25" border="0" align="absmiddle" /></a><!-- InstanceEndEditable --></td>
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