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
      <table class="normal" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <th colspan="4" align="left"><img src="/imagenes/cuadros.png" width="14" height="14" align="texttop" /> Lista de Productos</th>
          <th colspan="5" align="right"><form id="form1" name="form1" method="post" action="">
              <input name="buscar" type="text" id="buscar" value="{$busqueda}" size="26" maxlength="60" />
              <input name="Submit" type="submit" id="button" value="Buscar" />
          </form></th>
        </tr>
        <tr>
          <td width="30" class="subtituloWeb3">P&uacute;blico</td>
          <td width="70" class="subtituloWeb3">C&oacute;digo</td>
          <td width="250" class="subtituloWeb3">Nombre</td>
          <td width="100" class="subtituloWeb3">Categor&iacute;a</td>
          <td width="58" class="subtituloWeb3">Prioridad</td>
          <td width="58" class="subtituloWeb3">Existencia</td>
          <td colspan="3" align="center" class="subtituloWeb3">Acciones</td>
        </tr>
        {if $mensaje eq ""}
        {assign var="cont" value=0}
        {section name=i loop=$listado}		
    <tr {if $cont eq '0'} class='listado_a'
        	{assign var='cont' value=1} 
			{else} class='listado_b'
            {assign var='cont' value=0}{/if}>
      <td class="adminContenido" align="center">
       {if $listado[i].disponible_pro eq 0}
            <a onclick="javascript: return confirmar('&iquest; Seguro desea publicar &eacute;ste producto?');" href="editar2.php?id={$listado[i].id_pro}&valor=1" title="Publicar">
            <img src="/imagenes/no.png" width="20" height="20" border="0" /></a>
        {else}
            <a onclick="javascript: return confirmar('&iquest; Seguro desea ocultar &eacute;ste producto?');" href="editar2.php?id={$listado[i].id_pro}&valor=0" title="Ocultar">
            <img src="/imagenes/si.png" width="20" height="20" border="0" /></a>
        {/if}
      </td>
      <td class="adminContenido">{$listado[i].codigo_pro}</td>
    <td class="adminContenido">{$listado[i].nombre_pro}</td>
    <td class="adminContenido">{$listado[i].nombre_cat}</td>
    <td class="adminContenido">{$listado[i].prioridad_pro}</td>
    <td class="adminContenido">{$listado[i].limite_pro}</td>
    <td width="40" align="center"><a title="Detalles" href="../producto/detalle.php?id={$listado[i].id_pro}"><img src="/imagenes/detalle.png" width="30" height="25" border="0" /></a></td>
    <td width="40" align="center"><a title="Editar" href="../producto/editar.php?id={$listado[i].id_pro}"><img src="/imagenes/editar.png" width="25" height="25" border="0" /></a></td>
    <td width="40" align="center"><a title="Eliminar" onclick="javascript: return confirmar('&iquest;Seguro desea eliminar este registro?')" href="../producto/eliminar.php?id={$listado[i].id_pro}"><img src="/imagenes/delete.png" width="25" height="25" border="0" /></a></td>
  </tr>
        {/section}
        {else}
        {$mensaje}
        {/if}
        
        <tr><td colspan="9" align="right" class="paginacion">
        <img src="/imagenes/cuadritos.png" width="37" height="11" align="left" />
        {if $mensaje eq ""}
        {* display pagination header *}
      Productos {$paginate.first}-{$paginate.last} de {$paginate.total} Existentes.
      {* display pagination info *}
      {paginate_prev} {paginate_middle} {paginate_next}
      {/if}
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
    <td width="50%" align="center"><!-- InstanceBeginEditable name="insetar" -->&nbsp;<a href="../producto/insertar.php">Insertar Producto <img src="/imagenes/nuevo.png" width="25" height="25" border="0" align="absmiddle" /></a><!-- InstanceEndEditable --></td>
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
