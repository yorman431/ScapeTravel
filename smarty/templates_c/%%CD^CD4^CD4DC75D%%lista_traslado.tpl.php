<?php /* Smarty version 2.6.9, created on 2016-12-13 13:51:06
         compiled from admin/traslado/lista_traslado.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'paginate_prev', 'admin/traslado/lista_traslado.tpl', 101, false),array('function', 'paginate_middle', 'admin/traslado/lista_traslado.tpl', 101, false),array('function', 'paginate_next', 'admin/traslado/lista_traslado.tpl', 101, false),)), $this); ?>
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
          <th colspan="3" align="left"><img src="/imagenes/cuadros.png" width="14" height="14" align="texttop" /> Lista de Contenidos por Enlaces</th>
          <th colspan="4" align="right"><form id="form1" name="form1" method="post" action="">
              <img src="/imagenes/buscar.png" width="25" height="25" align="absmiddle" />
              <input name="buscar" type="text" id="buscar" value="<?php echo $this->_tpl_vars['busqueda']; ?>
" size="26" maxlength="60" />
              <input name="Submit" type="submit" id="button" value="Buscar" />
          </form></th>
        </tr>
        <tr>
          <td width="30%" class="subtituloWeb3">Ruta</td>
          <td width="15%" class="subtituloWeb3">Costo Adulto</td>
          <td width="15%" class="subtituloWeb3">Costo Pax Adicional</td>
          <td width="15%" class="subtituloWeb3">Costo CHD</td>
          <td width="15%" class="subtituloWeb3">Condiciones</td>

          <td width="15%" colspan="2" align="center" class="subtituloWeb3">Acciones</td>
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
    <td class="adminContenido"><?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['ruta']; ?>
</td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['costo']; ?>
</td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['costo_pax_adc']; ?>
</td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['costo_nino']; ?>
</td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['condiciones']; ?>
</td>
    <td width="5%" align="center"><a title="Editar" href="editar.php?id=<?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['id']; ?>
"><img src="/imagenes/editar.png" width="25" height="25" border="0" /></a></td>
    <td width="5%" align="center"><a title="Eliminar" onclick="javascript: return confirmar('&iquest;Seguro desea eliminar este registro?')" href="eliminar.php?id=<?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['id']; ?>
"><img src="/imagenes/delete.png" width="25" height="25" border="0" /></a></td>
  </tr>
        <?php endfor; endif; ?>
        <?php else: ?>
        <?php echo $this->_tpl_vars['mensaje']; ?>

        <?php endif; ?>
        <tr>
          <td class="paginacion" align="right" colspan="5">
        <img src="/imagenes/cuadritos.png" width="37" height="11" align="left" />      <?php if ($this->_tpl_vars['mensaje'] == ""): ?>
      <?php echo $this->_tpl_vars['paginate']['first']; ?>
-<?php echo $this->_tpl_vars['paginate']['last']; ?>
 de <?php echo $this->_tpl_vars['paginate']['total']; ?>
 Contenidos.
            <?php echo smarty_function_paginate_prev(array(), $this);?>
 <?php echo smarty_function_paginate_middle(array(), $this);?>
 <?php echo smarty_function_paginate_next(array(), $this);?>

      <?php endif; ?>
        </td>
        <td colspan="2">
          <a href="/admin/traslado/condicion.php">Condicion</a>
        </td>
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
    <td width="50%" align="center"><!-- InstanceBeginEditable name="insetar" -->&nbsp;<a href="insertar.php">Insertar Translado <img src="/imagenes/nuevo.png" width="25" height="25" border="0" align="absmiddle" /></a><!-- InstanceEndEditable --></td>
    <td width="25%" align="center"><a href="/admin/cerrar_session.php">Cerrar Sesi&oacute;n <img src="/imagenes/cerrar.png" width="25" height="25" border="0" align="absmiddle" /></a></td>
  </tr>
  <tr>
    <td colspan="3" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center" class="pie">
    Seturs | Servicios Turisticos C.A | Copyright&copy; 2015 Todos los Derechos Reservados - Venezuela</td>
  </tr>
</table>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
<!-- InstanceEnd --></html>