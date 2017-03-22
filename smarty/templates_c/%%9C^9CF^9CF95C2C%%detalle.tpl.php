<?php /* Smarty version 2.6.9, created on 2017-03-21 22:09:18
         compiled from admin/hotel/detalle.tpl */ ?>
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
<script type="text/javascript" src="/js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="/css/jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript">
$(function() {
	$(\'#gallery a\').lightBox();
});
</script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&sensor=true"></script>

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
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" class="normal">
  <tr>
    <th colspan="2" align="center"><img src="/imagenes/cuadros.png" width="14" height="14" align="left" /><?php echo $this->_tpl_vars['accion']; ?>
<img src="/imagenes/cuadritos.png" alt="" width="37" height="11" align="right" /></th>
  </tr>
  <tr>
    <td width="372" align="left" valign="top" class="subtituloWeb3">
    <table width="100%" border="0" cellpadding="0" cellspacing="4">
      <tr>
        <th colspan="2" align="center">Datos Principales</th>
        </tr>
      <tr>
        <td align="left" class="subtituloWeb3">Nombre:</td>
        <td class="adminContenido"><?php echo $this->_tpl_vars['nombres']; ?>

          <div style="float:right; "><a title="Editar" href="/admin/hotel/editar.php?id=<?php echo $this->_tpl_vars['id']; ?>
"> <img class="opacidad" src="/imagenes/editar.png" width="25" height="25" border="0" align="absmiddle" /></a></div></td>
      </tr>
      <tr>
    <td align="left" class="subtituloWeb3">Codigo:</td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['codigo']; ?>
</td>
    </tr>
  <tr>
    <td align="left" class="subtituloWeb3">Categoria:</td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['categoria']; ?>
 <img border="0" align="absmiddle" src="/imagenes/<?php echo $this->_tpl_vars['categoria']; ?>
.png" width="60" /></td>
    </tr>
  <tr>
    <td align="left" valign="top" class="subtituloWeb3">Tipo de Tarifa:</td>
    <td class="adminContenido">Por <?php echo $this->_tpl_vars['tipo']; ?>
</td>
  </tr>
  <tr>
    <td width="91" align="left" valign="top" class="subtituloWeb3">Pais:</td>
    <td width="310" class="adminContenido"><?php echo $this->_tpl_vars['pais']; ?>
 <img border="0" align="absmiddle" src="/imagenes/banderas/<?php echo $this->_tpl_vars['bandera']; ?>
.png" width="16" height="11" /></td>
    </tr>
  <tr>
    <td valign="top" align="left" class="subtituloWeb3">Estado:</td>
    <td class="adminContenido">
    	<?php echo $this->_tpl_vars['estado']; ?>
</td>
  </tr>
  <tr>
    <td align="left" class="subtituloWeb3">Ciudad:</td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['ciudad']; ?>
</td>
  </tr>
  <tr>
    <td align="left" class="subtituloWeb3">Ubicaci&oacute;n:</td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['ubicacion']; ?>
</td>
  </tr>
  <tr>
    <td align="left" class="subtituloWeb3">Prioridad:</td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['prioridad']; ?>
</td>
  </tr>
  <tr>
    <td valign="top" align="left" class="subtituloWeb3">Condiciones:</td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['condiciones']; ?>
</td>
    </tr>
  <tr>
    <td align="left" valign="top" class="subtituloWeb3">Calves:</td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['claves']; ?>
</td>
    </tr>
  <tr>
    <td align="left" class="subtituloWeb3">Publicar en Inicio:</td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['principal']; ?>
</td>
    </tr>
  <tr>
    <td align="left" valign="top" class="subtituloWeb3">Vistas:</td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['vistas']; ?>
</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="subtituloWeb3">Fecha de &Uacute;ltima Edici&oacute;n:</td>
    <td class="adminContenido"><?php echo $this->_tpl_vars['fecha']; ?>
</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="subtituloWeb3">Facilidades:</td>
    <td class="adminContenido">
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
      <div class="fotos6">
        <?php if ($this->_tpl_vars['facilidad'][$this->_sections['i']['index']]['directorio_image'] != ""): ?>
        <img title="<?php echo $this->_tpl_vars['facilidad'][$this->_sections['i']['index']]['nombre_fac']; ?>
" border="0" align="absmiddle" src="/imagenes/miniaturas/<?php echo $this->_tpl_vars['facilidad'][$this->_sections['i']['index']]['directorio_image']; ?>
" class="opacidad" height="50" width="50" />
        <?php endif; ?>
        </div>
      <?php endfor; endif; ?>
      </td>
  </tr>
    </table></td>
    <td width="372" align="center" valign="top" class="adminContenido">
    <table width="100%" border="0" cellspacing="4" cellpadding="0">
          <tr>
            <th align="center" colspan="4">Im&aacute;genes Asignadas</th>
          </tr>
          <?php $this->assign('cont', 0); ?>
          <?php if ($this->_tpl_vars['mensaje'] == ""): ?>
          <tr> <?php unset($this->_sections['i']);
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
            <td width="25%" align="center" bgcolor="#eeeeee" class="normalContenido2">
            <div id="gallery">
            <a href="/imagenes/<?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['directorio_image']; ?>
" title="<?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['nombre_image']; ?>
" ><img border="0" src="/imagenes/miniaturas/<?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['directorio_image']; ?>
" class="fotos" width="100" /></a></div><br />
              <?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['nombre_image']; ?>
 <a onclick="javascript: return confirmar('&iquest;Esta seguro que desea borrar la imagen?');" href="../galeria/imagen_borrar.php?id=<?php echo $this->_tpl_vars['listado'][$this->_sections['i']['index']]['id_image']; ?>
&amp;back=<?php echo $this->_tpl_vars['id']; ?>
&amp;tabla=hotel"><img border="0" src="/imagenes/eliminar.png" width="15" height="15" align="absmiddle" /></a></td>
            <?php $this->assign('cont', $this->_tpl_vars['cont']+1); ?>
            <?php if ($this->_tpl_vars['cont'] == 3): ?>
            <?php $this->assign('cont', 0); ?> </tr>
          <tr> <?php endif; ?>
            <?php endfor; endif; ?> </tr>
          <?php else: ?>
          <?php echo $this->_tpl_vars['mensaje']; ?>

          <?php endif; ?>
  <tr>
    <td colspan="4" align="center"><a href="../hotel/imagen.php?id=<?php echo $this->_tpl_vars['id']; ?>
"><img src="/imagenes/dale.jpg" width="12" height="12" border="0" align="absmiddle" /> Insertar Imagen</a></td>
  </tr>
        </table>
    </td>
  </tr>
  <tr>
    <th colspan="2" align="center"><img src="/imagenes/cuadros.png" width="14" height="14" align="left" />Descripci&oacute;n<img src="/imagenes/cuadritos.png" alt="" width="37" height="11" align="right" /></th>
  </tr>
  <tr>
    <td colspan="2" align="left"><?php echo $this->_tpl_vars['descripcion']; ?>
</td>
    </tr>
  <tr>
    <th colspan="2" align="center"><img src="/imagenes/cuadros.png" width="14" height="14" align="left" />Ubicaci&oacute;n en Mapa<img src="/imagenes/cuadritos.png" alt="" width="37" height="11" align="right" /></th>
    </tr>
  <tr>
    <td colspan="2" align="center">
    	<?php echo $this->_tpl_vars['mapas']; ?>

      <div id="map"></div>
      <br />
      </td>
  </tr>
  <tr>
    <th colspan="2" align="center"><a id="tarifas"></a><img src="/imagenes/cuadros.png" width="14" height="14" align="left" />Temporadas del <?php echo $this->_tpl_vars['nombres']; ?>
<img src="/imagenes/cuadritos.png" alt="" width="37" height="11" align="right" /></th>
    </tr>
  <?php if ($this->_tpl_vars['mensaje2'] == ""): ?>
  <tr>
    <td colspan="2" align="center">
    	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['temporadas']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="normal">
    	      <tr>
    	        <td bgcolor="#CCCCCC" align="center"><a id="tarifas<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
"></a><?php if ($this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['activa'] == '0'): ?> <a onclick="javascript: return confirmar('&iquest; Seguro desea publicar &eacute;ste temporada?');" href="editar3	.php?id=<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
&valor=1&back=<?php echo $this->_tpl_vars['id']; ?>
" title="Publicar"> <img src="/imagenes/no.png" width="20" height="20" border="0" /></a> <?php else: ?> <a onclick="javascript: return confirmar('&iquest; Seguro desea ocultar &eacute;ste temporada?');" href="editar3.php?id=<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
&valor=0&back=<?php echo $this->_tpl_vars['id']; ?>
" title="Ocultar"> <img src="/imagenes/si.png" width="20" height="20" border="0" /></a> <?php endif; ?> </td>
    	        <td class="titulo_alt" colspan="6" bgcolor="#CCCCCC">
                <form action="editar_plan3.php" method="post" name="form<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" id="form<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
">
                <strong>Temporada Del
    	          <input readonly="readonly" class="interno_fecha editar_ajax3<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" type="text" name="desde" id="fecha_inicio<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['fecha_inicio']; ?>
" />
                  <button id="f_btn1-<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
">...</button> 
<?php echo '
    <script type="text/javascript">//<![CDATA[
      Calendar.setup({
        inputField : "fecha_inicio';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '",
        trigger    : "f_btn1-';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '",
        onSelect   : function() { this.hide();
		
		$("#spinner_';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '").show();
				$.post("editar_temporada2.php", $("#form';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '").serialize())
				
				.done(function() {
					$("#spinner_';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '").hide();
					console.log("esconder spinner");
				});
				
				console.log ("submit?");
				
		 },
        showTime   : false,
        dateFormat : "%d/%m/%Y"
      });
    //]]></script>'; ?>

    
    	          al
    	          <input readonly="readonly" class="interno_fecha editar_ajax3<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" type="text" name="hasta" id="fecha_fin<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['fecha_fin']; ?>
" />
                  <button id="f_btn2-<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
">...</button> 

    <?php echo '
    <script type="text/javascript">//<![CDATA[
      Calendar.setup({
        inputField : "fecha_fin';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '",
        trigger    : "f_btn2-';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '",
        onSelect   : function() { this.hide();
		
				$("#spinner_';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '").show();
				$.post("editar_temporada2.php", $("#form';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '").serialize())
				
				.done(function() {
					$("#spinner_';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '").hide();
					console.log("esconder spinner");
				});
				
				console.log ("submit?");
		 },
        showTime   : false,
        dateFormat : "%d/%m/%Y"
      });
    //]]></script>'; ?>

    
    	          </strong> | Texto Alternativo:
    	          <input class="interno3 editar_ajax2<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" type="text" name="alternativo" id="alternativo" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['texto_alternativo']; ?>
" />
                  
                  <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" />
                  <input type="hidden" name="prioridad" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['orden']; ?>
" />
                  <input type="hidden" name="publica" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['activa']; ?>
" />
                  <input type="hidden" name="envio" value="Guardar" />
                  
                  <input type="hidden" name="desde_a" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['edadNinosDesde1']; ?>
" />
                  <input type="hidden" name="hasta_a" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['edadNinosHasta1']; ?>
" />
                  <input type="hidden" name="precio_a" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['precio_ninos']; ?>
" />
                  
                  <input type="hidden" name="desde_b" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['edadNinosDesde2']; ?>
" />
                  <input type="hidden" name="hasta_b" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['edadNinosHasta2']; ?>
" />
                  <input type="hidden" name="precio_b" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['precio_ninos2']; ?>
" />
                  
                  </form>
                  
                  
    <?php echo '
    <script type="text/javascript">
    $(\'.editar_ajax2';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '\').blur(function(event) {
		event.preventDefault();
		console.log($("#form';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '").serialize())
		
		$("#spinner_';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '").show();
		$.post("editar_temporada2.php", $("#form';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '").serialize())
		
		.done(function() {
			$("#spinner_';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '").hide();
			console.log("esconder spinner");
		});
		
		console.log ("submit?");
	});
	
    </script>
	'; ?>

    
                  </td>
                  <td bgcolor="#CCCCCC"><img id="spinner_<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
"src="/imagenes/loading_back.gif" width="25" height="24" align="absmiddle" style="display: none;" /></td>
                
    	        <td bgcolor="#CCCCCC" align="center" width="30"><a href="editar_temporada.php?id=<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" title="Editar"><img src="/imagenes/editar.png" width="25" height="25" border="0" /></a></td>
    	        <td bgcolor="#CCCCCC" align="center" width="30"><a onclick="javascript: return confirmar('&iquest;Seguro desea eliminar este registro?')" href="eliminar_temporada.php?temp=<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
&id=<?php echo $this->_tpl_vars['id']; ?>
" title="Eliminar"><img src="/imagenes/delete.png" width="25" height="25" border="0" /></a></td>
  	        </tr>
            <?php if ($this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['rangokids'] != ""): ?>
            <tr  bgcolor="#eee">
            	<td colspan="8" class="titulo_alt">
                     <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['rangokids']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                	 <?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['rangokids'][$this->_sections['j']['index']]['etiqueta_ran']; ?>
 de <?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['rangokids'][$this->_sections['j']['index']]['min_ran']; ?>
 a <?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['rangokids'][$this->_sections['j']['index']]['max_ran']; ?>
 a&ntilde;os, Bs. <?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['rangokids'][$this->_sections['j']['index']]['precio_ran']; ?>
 |
                     <?php endfor; endif; ?>
                </td>
                <td colspan="2" align="center"><a href="lista_rangos.php?temp=<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
&id=<?php echo $this->_tpl_vars['id']; ?>
" title="Tarifas Niños"><img src="/imagenes/editar.png" width="25" height="25" border="0" /></a></td>
            </tr>
            <?php else: ?>
            	<tr>
                	<td colspan='8' align='center' class='error'>No hay rango de tarifas de ni&ntilde;os asignadas a esta temporada!</td>
                    <td colspan="2" align="center" class='error'><a href="lista_rangos.php?temp=<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
&id=<?php echo $this->_tpl_vars['id']; ?>
" title="Tarifas Niños"><img src="/imagenes/editar.png" width="25" height="25" border="0" /></a></td>
                </tr>
            <?php endif; ?>
    	      <tr>
    	        <td width="10" align="center" class="subtituloWeb3">P&uacute;blico</td>
    	        <td width="20" class="subtituloWeb3">N&ordm; Adultos</td>
    	        <td width="280" class="subtituloWeb3">Habitaci&oacute;n</td>
                <td width="80" class="subtituloWeb3">R&eacute;gimen</td>
                <td width="80" class="subtituloWeb3">Tipo Tarifa</td>
    	        <td width="110" class="subtituloWeb3">Semana</td>
    	        <td width="20" class="subtituloWeb3">Orden</td>
    	        <td colspan="3" align="center" class="subtituloWeb3">Acciones</td>
  	        </tr>
    	      <?php if ($this->_tpl_vars['mensaje3'] == ""): ?>
    	      <?php $this->assign('cont', 0); ?>
    	      <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
              
    	    <tr <?php if ($this->_tpl_vars['cont'] == '0'): ?> class='listado_a'
        	<?php $this->assign('cont', 1); ?> 
			<?php else: ?> class='listado_b'
            <?php $this->assign('cont', 0);  endif; ?>>
              <form action="editar_plan2.php" method="post" name="form<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id']; ?>
" id="form<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id']; ?>
">
    	        
    	        <td class="adminContenido" align="center"> <?php if ($this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['listar'] == '0'): ?> <a onclick="javascript: return confirmar('&iquest; Seguro desea publicar &eacute;ste registro?');" href="editar2.php?id=<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id']; ?>
&valor=1&back=<?php echo $this->_tpl_vars['id']; ?>
&ancla=<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" title="Publicar"> <img src="/imagenes/no.png" width="20" height="20" border="0" /></a> <?php else: ?> <a onclick="javascript: return confirmar('&iquest; Seguro desea ocultar &eacute;ste registro?');" href="editar2.php?id=<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id']; ?>
&valor=0&back=<?php echo $this->_tpl_vars['id']; ?>
&ancla=<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" title="Ocultar"> <img src="/imagenes/si.png" width="20" height="20" border="0" /></a> <?php endif; ?>
                </td>

    	        <td class="adminContenido">
                	<input onkeypress="javascript: return validarnum(event);" class="interno_corto editar_ajax<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id']; ?>
" type="text" name="maxadultos" id="maxadultos" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['maxAdultos']; ?>
" />
                </td>
                
                <td class="adminContenido">
                	<input class="interno editar_ajax<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id']; ?>
" type="text" name="nombre_plan" id="nombre_plan" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['nombre']; ?>
" />
                </td>
                
                <td class="adminContenido">
                	<select name="regimen_plan" id="regimen_plan" class="interno_select editar_ajax<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id']; ?>
">
                        <option <?php if ($this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['regimen'] == 'Todo Incluido'): ?> selected='selected'<?php endif; ?> value="Todo Incluido">Todo Incluido</option>
                        <option <?php if ($this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['regimen'] == 'Solo Desayuno'): ?> selected='selected'<?php endif; ?> value="Solo Desayuno">Solo Desayuno</option>
                        <option <?php if ($this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['regimen'] == 'Desayuno Y Cena'): ?> selected='selected'<?php endif; ?> value="Desayuno Y Cena">Desayuno Y Cena</option>
                        <option <?php if ($this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['regimen'] == 'Pension Completa'): ?> selected='selected'<?php endif; ?> value="Pension Completa">Pensi&oacute;n Completa</option>
                  	</select>
                </td>
                
                <td class="adminContenido">
                	<select name="tipotarifa_plan" id="tipotarifa_plan" class="interno_select editar_ajax<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id']; ?>
">
                    	<option <?php if ($this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['tipotarifa'] == 'Persona'): ?> selected='selected'<?php endif; ?> value="Persona">Persona</option>
                    	<option <?php if ($this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['tipotarifa'] == 'Habitacion'): ?> selected='selected'<?php endif; ?> value="Habitacion">Habitaci&oacute;n</option>
                    </select>
                </td>
                
    	        <td class="adminContenido">Bs.
    	          <input onkeypress="javascript: return validarnum(event);" class="interno_precio editar_ajax<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id']; ?>
" type="text" name="precio_plan" id="precio_plan" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['precio']; ?>
" />
                </td>
                
    	        <td class="adminContenido">
                	<input onkeypress="javascript: return validarnum(event);" class="interno_precio editar_ajax<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id']; ?>
" type="text" name="prioridad" id="prioridad" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['orden']; ?>
"/>
                </td>
                
    	        <td width="30" align="center">
                	<img id="spinner_<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id']; ?>
"src="/imagenes/loading_back.gif" width="25" height="24" align="absmiddle" style="display: none;" />
                </td>
                
    	        <td width="30" align="center">
                	<a href="editar_plan.php?id=<?php echo $this->_tpl_vars['id']; ?>
&temp=<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id']; ?>
&val=<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" title="Editar"><img src="/imagenes/editar.png" width="25" height="25" border="0" /></a>
                </td>
                
    	        <td width="30" align="center">
                	<a onclick="javascript: return confirmar('&iquest;Seguro desea eliminar este registro?')" href="eliminar_plan.php?id=<?php echo $this->_tpl_vars['id']; ?>
&temp=<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
&plan=<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id']; ?>
" title="Eliminar"><img src="/imagenes/delete.png" width="25" height="25" border="0" /></a>
    	          <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
                  <input type="hidden" name="temporada" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id']; ?>
" />
                  <input type="hidden" name="envio" value="Guardar" />
                  <input type="hidden" name="publica" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['listar']; ?>
" />
    	        </td>
              </form>
            <?php echo '
            <script type="text/javascript">
                $(\'.editar_ajax';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id'];  echo '\').blur(function(event) {
                event.preventDefault();
                console.log($("#form';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id'];  echo '").serialize())
                
                $("#spinner_';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id'];  echo '").show();
                $.post("editar_plan2.php", $("#form';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id'];  echo '").serialize())
                
                .done(function() {
                    $("#spinner_';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['habitacion'][$this->_sections['j']['index']]['id'];  echo '").hide();
                    console.log("esconder spinner");
                });
                
                //console.log ("submit?");
            });
            </script>
            '; ?>

  	        </tr> 
            
    	      <?php endfor; endif; ?>
    	      <?php else: ?>
    	      <?php echo $this->_tpl_vars['mensaje3']; ?>

    	      <?php endif; ?>
              <tr bgcolor="#F2CFB1">
              <form action="insertar_plan2.php" method="post" name="form_nuevo<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" id="form_nuevo<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
">
    	        
    	          <td align="center" class="adminContenido">
                  	<img src="/imagenes/nuevo.png" width="22" height="22" border="0" align="absmiddle" />
                  </td>

    	          <td class="adminContenido">
                	<input onkeypress="javascript: return validarnum(event);" class="interno_corto" type="text" name="maxadultos" id="maxadultos<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" value="" placeholder="Num" />
                  </td>
                  
                  <td class="adminContenido">
                  	<input class="interno" type="text" name="nombre_plan" id="nombre_plan<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" value="" placeholder="Nombre" />
                  </td>
                  
                  <td class="adminContenido">
                    <select name="regimen_plan" id="regimen_plan<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" class="interno_select">
                        <option selected='selected' value="Todo Incluido">Todo Incluido</option>
                        <option value="Solo Desayuno">Solo Desayuno</option>
                        <option value="Desayuno Y Cena">Desayuno Y Cena</option>
                        <option value="Pension Completa">Pensi&oacute;n Completa</option>
                      </select>
                  </td>
                
                  <td class="adminContenido">
                      <select name="tipotarifa_plan" id="tipotarifa_plan<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" class="interno_select">
                        <option selected='selected' value="Persona">Persona</option>
                        <option value="Habitacion">Habitaci&oacute;n</option>
                      </select>
                  </td>
                
    	          <td class="adminContenido">Bs. 
    	          	<input onkeypress="javascript: return validarnum(event);" class="interno_precio" type="text" name="precio_plan" id="precio_plan<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" value="" placeholder="Precio" />
                  </td>
                  
    	          <td class="adminContenido"><input onkeypress="javascript: return validarnum(event);" class="interno_precio" type="text" name="prioridad" id="prioridad<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" value="" placeholder="Num" /></td>
    	       <td width="30" align="center">
                
                <img id="spinner_<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]; ?>
"src="/imagenes/loading_back.gif" width="22" height="21" align="absmiddle" style="display: none;" /></td>
    	        <td width="30" align="center">
                
                <a  onclick="javascript: return validar_insertar_plan(<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
);" href="#tarifas<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" title="Insertar"><img  src="/imagenes/guardar.png" width="25" height="24" border="0" /></a>
                
                </td>
    	        <td width="30" align="center"><!-- class="insertar_ajax<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" -->
                <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
                  <input type="hidden" name="temporada" value="<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
" />
                  <input type="hidden" name="envio" value="Guardar" />
                  <input type="hidden" name="publica" value="1" />
                  
    	        </td>
              </form>
              <?php echo '
                <script type="text/javascript">
				$(\'.insertar_ajax';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '\').click(function(event) {
					event.preventDefault();
					console.log($("#form_nuevo';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '").serialize())
					
					$("#spinner_';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '").show();
					$.post("insertar_plan2.php", $("#form_nuevo';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '").serialize())
					
					.done(function() {
						$("#spinner_';  echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id'];  echo '").hide();
						console.log("esconder spinner");
					});
					
					//console.log ("submit?");
				});
				</script>
              '; ?>

              </tr>
  <tr>
    <td colspan="12" align="center"><a href="insertar_plan.php?id=<?php echo $this->_tpl_vars['id']; ?>
&temp=<?php echo $this->_tpl_vars['temporadas'][$this->_sections['i']['index']]['id']; ?>
">Insertar Plan <img src="/imagenes/dale.jpg" width="12" height="12" border="0" align="absmiddle" /></a></td>
  </tr>
  	      </table>
      <?php endfor; endif; ?>
      </td>
  </tr>
  <?php else: ?>
        <?php echo $this->_tpl_vars['mensaje2']; ?>

  <?php endif; ?>
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
    <td width="50%" align="center"><!-- InstanceBeginEditable name="insetar" --><a title="Volver" href="/admin/hotel">&nbsp;Volver <img src="/imagenes/atras.png" width="25" height="25" border="0" align="absmiddle" /></a> &nbsp;&nbsp; <a title="Editar" href="/admin/hotel/editar.php?id=<?php echo $this->_tpl_vars['id']; ?>
">Editar <img src="/imagenes/editar.png" width="25" height="25" border="0" align="absmiddle" /></a> &nbsp;&nbsp; <a href="insertar_temporada.php?id=<?php echo $this->_tpl_vars['id']; ?>
">Insertar Temporada <img src="/imagenes/nuevo.png" width="25" height="25" border="0" align="absmiddle" /></a><!-- InstanceEndEditable --></td>
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