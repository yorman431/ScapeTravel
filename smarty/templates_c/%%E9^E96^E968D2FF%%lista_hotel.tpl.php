<?php /* Smarty version 2.6.9, created on 2017-03-21 21:18:01
         compiled from admin/hotel/lista_hotel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'admin/hotel/lista_hotel.tpl', 97, false),array('function', 'paginate_prev', 'admin/hotel/lista_hotel.tpl', 136, false),array('function', 'paginate_middle', 'admin/hotel/lista_hotel.tpl', 136, false),array('function', 'paginate_next', 'admin/hotel/lista_hotel.tpl', 136, false),)), $this); ?>
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
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="normal">
        <tr>
          <th colspan="5" align="left"><img src="/imagenes/cuadros.png" width="14" height="14" align="texttop" /> Lista de Hoteles</th>
          <th colspan="5" align="right">
          <form id="form1" name="form1" method="post" action="">
              <img src="/imagenes/buscar.png" width="25" height="25" align="absmiddle" />
              <input name="buscar" type="text" id="buscar" value="<?php echo $this->_tpl_vars['busqueda']; ?>
" size="26" maxlength="60" />
              <input name="Submit" type="submit" id="button" value="Buscar" />
          </form></th>
        </tr>
        <tr>
          <td width="10" class="subtituloWeb3">P&uacute;blico</td>
          <td width="70" class="subtituloWeb3">C&oacute;digo</td>
          <td width="100" class="subtituloWeb3">Nombre</td>
          <td width="50" class="subtituloWeb3">Categor&iacute;a</td>
          <td width="100" class="subtituloWeb3">Pa&iacute;s</td>
          <td width="58" class="subtituloWeb3">Prioridad</td>
          <td width="58" class="subtituloWeb3">Estado</td>
          <td colspan="4" align="center" class="subtituloWeb3">Acciones</td>
        </tr>
        <?php if ($this->_tpl_vars['mensaje'] == ""): ?>
        <?php $this->assign('cont', 0); ?>
        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['listado']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
  <tr <?php if ($this->_tpl_vars['cont'] == '0'): ?> class='listado_a'
        	<?php $this->assign('cont', 1); ?> 
			<?php else: ?> class='listado_b'
            <?php $this->assign('cont', 0);  endif; ?>>
    <td class="adminContenido">
    	<?php if ($this->_tpl_vars['listado'][$this->_sections['i']['index']]['disponible_hot'] == 0): ?>
            <a onclick="javascript: return confirmar('&iquest; Seguro desea publicar &eacute;ste hotel?');" href="editar4.php?id=<?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['id_hot']; ?>
&valor=1" title="Publicar">
            <img src="/imagenes/no.png" width="20" height="20" border="0" /></a>
        <?php else: ?>
            <a onclick="javascript: return confirmar('&iquest; Seguro desea ocultar &eacute;ste hotel?');" href="editar4.php?id=<?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['id_hot']; ?>
&valor=0" title="Ocultar">
            <img src="/imagenes/si.png" width="20" height="20" border="0" /></a>
        <?php endif; ?>
    </td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['codigo_hot']; ?>
</td>
    <td class="adminContenido"><?php echo ((is_array($_tmp=$this->_tpl_vars['listado'][$this->_sections['i']['index']]['nombre_hot'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
</td>
    <td class="adminContenido">
    <?php if ($this->_tpl_vars['listado'][$this->_sections['i']['index']]['categoria_hot'] == '6'): ?>
    <!--BOUTIQUE -->
    <h4 class="color-fa no_margin2">Boutique</h4>
    
    <?php elseif ($this->_tpl_vars['listado'][$this->_sections['i']['index']]['categoria_hot'] == '7'): ?>
    <!--POSADA -->
    <h4 class="color-fa no_margin2">Boutique</h4>
    <?php else: ?>
    	<?php $this->assign('estrella', 1); ?>
    	<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?> 
         <i class="fa fa-star <?php if ($this->_tpl_vars['estrella'] <= $this->_tpl_vars['listado'][$this->_sections['i']['index']]['categoria_hot']): ?> color-fa <?php else: ?> color-fa2 <?php endif; ?>"></i>
         <?php $this->assign('estrella', $this->_tpl_vars['estrella']+1); ?>
         
     
     	<?php endfor; endif; ?> 
    <?php endif; ?>
    
   
    </td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['pais_hot']; ?>
 <img border="0" align="absmiddle" src="/imagenes/banderas/<?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['bandera_hot']; ?>
.png" width="16" height="11" /></td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['prioridad_hot']; ?>
</td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['estado_hot']; ?>
</td>
    <td width="30" align="center"><a href="actualizar.php?id=<?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['id_hot']; ?>
" title="Actualizar"> <i class="fa fa-upload fa-lg"></i></a></td>
    <td width="30" align="center"><a href="detalle.php?id=<?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['id_hot']; ?>
" title="Detalles"><img src="/imagenes/detalle.png" width="30" height="25" border="0" /></a></td>
    <td width="30" align="center"><a href="editar.php?id=<?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['id_hot']; ?>
" title="Editar"><img src="/imagenes/editar.png" width="25" height="25" border="0" /></a></td>
    <td width="30" align="center"><a onclick="return confirmar('&iquest;Seguro desea eliminar este registro?')" href="eliminar.php?id=<?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['id_hot']; ?>
" title="Eliminar"><img src="/imagenes/delete.png" width="25" height="25" border="0" /></a></td>
  </tr>
        <?php endfor; endif; ?>
        <?php else: ?>
        <?php echo $this->_tpl_vars['mensaje']; ?>

        <?php endif; ?>
        
        <tr><td colspan="9" align="right" class="paginacion">
        <?php if ($this->_tpl_vars['mensaje'] == ""): ?>
              Hoteles <?php echo $this->_tpl_vars['paginate']['first']; ?>
-<?php echo $this->_tpl_vars['paginate']['last']; ?>
 de <?php echo $this->_tpl_vars['paginate']['total']; ?>
 Existentes.
            <?php echo smarty_function_paginate_prev(array(), $this);?>
 <?php echo smarty_function_paginate_middle(array(), $this);?>
 <?php echo smarty_function_paginate_next(array(), $this);?>

      <?php endif; ?>
      </td></tr>
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
    <td width="50%" align="center"><!-- InstanceBeginEditable name="insetar" -->&nbsp;<a href="insertar.php">Insertar Hotel <img src="/imagenes/nuevo.png" width="25" height="25" border="0" align="absmiddle" /></a><!-- InstanceEndEditable --></td>
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