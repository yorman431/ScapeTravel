<?php /* Smarty version 2.6.9, created on 2017-03-22 22:35:16
         compiled from admin/panel_central.tpl */ ?>
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
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <?php echo $this->_tpl_vars['mensaje']; ?>

        <tr>
          <td width="50%" valign="top"><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" class="normal">

            <tr>
              <td align="center" class="subtituloWeb3">Banner</td>
              <td align="center" class="subtituloWeb3">Botonera</td>
              <td align="center" class="subtituloWeb3">Contenido</td>
              <td align="center" class="subtituloWeb3">Publicidad</td>
               <td align="center" class="subtituloWeb3">Configuraci&oacute;n</td>
            </tr>
            <tr>
              <td align="center"><a href="/admin/banner"><img src="/imagenes/graficas.png" width="60" height="60" border="0" /></a></td>
              <td align="center"><a href="/admin/link/"><img src="/imagenes/botonera.png" width="60" height="60" border="0" /></a></td>
              <td align="center"><a href="/admin/contenido/"><img src="/imagenes/mi_pedido.png" width="60" height="60" border="0" /></a></td>
              <td align="center"><a href="/admin/publicidad"><img border="0" src="/imagenes/evento.png" width="60" height="60" /></a></td>
              <td align="center"><a href="/admin/configuracion/"><img src="/imagenes/configuracion.png" width="60" height="60" border="0" /></a></td>
              </tr>


          <tr>
           	 <td width="17%" align="center" class="subtituloWeb3">Administradores</td>
              <td width="17%" align="center" class="subtituloWeb3">Clientes</td>
             <td align="center" class="subtituloWeb3">Categorias</td>
              <td align="center" class="subtituloWeb3">Productos</td>
               <td align="center" class="subtituloWeb3">Facilidades</td>

          </tr>
          <tr>
          	 <td align="center"><a href="/admin/usuario/"><img src="/imagenes/msn.png" width="60" height="60" border="0" /></a></td>
              <td align="center"><a href="/admin/registro/"><img src="/imagenes/participantes.png" width="60" height="60" border="0" /></a></td>
              <td align="center"><a href="/admin/categoria/"><img src="/imagenes/categoria.png" width="60" height="60" border="0" /></a></td>
              <td align="center"><a href="/admin/producto/"><img src="/imagenes/productos.png" width="60" height="60" border="0" /></a></td>
              <td align="center"><a href="/admin/facilidad/"><img src="/imagenes/historial.png" width="60" height="60" border="0" /></a></td>
          </tr>
          <tr>
           <td align="center" class="subtituloWeb3">Hoteles</td>
              <td align="center" class="subtituloWeb3">Noticias</td>
               <td align="center" class="subtituloWeb3">Galeria</td>
               <td align="center" class="subtituloWeb3">Videos</td>
               <td align="center" class="subtituloWeb3">Suscripciones</td>

          </tr>
          <tr>
            <td align="center"><a href="/admin/hotel/"><img src="/imagenes/hoteles.png" width="60" height="60"  border="0" /></a></td>

                 <td align="center"><a href="/admin/noticia/"><img src="/imagenes/noticias.png" width="60" height="60" border="0" /></a></td>
                 <td height="25" align="center"><a href="/admin/galeria/"><img src="/imagenes/galeria.png" width="60" height="60" border="0" /></a></td>
                  <td align="center"><a href="/admin/video/"><img src="/imagenes/videos.png" width="60" height="60" border="0" /></a></td>
                  <td align="center"><a href="/admin/suscripcion/"><img src="/imagenes/suscripcion.png" width="60" height="60" border="0"/></a></td>
          </tr>
          <tr>
            <td align="center" class="subtituloWeb3">Traslado</td>
          </tr>
          <tr>
            <td align="center"><a href="/admin/traslado/"><img src="/imagenes/traslado.png" width="60" height="60" border="0" /></a></td>
          </tr>
          </td>
          </tr>
          </table>
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