<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla_admin.dwt" codeOutsideHTMLIsLocked="false" --> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Seturs - Panel Administrativo</title> 
<link href="/css/estilos.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/imagenes/icono.ico" />
<script type="text/javascript" language="javascript" src="/js/validar.js"></script>
<script src="/Scripts/swfobject_modified.js" type="text/javascript"></script>
<!-- InstanceBeginEditable name="head" -->
{literal}
<script type="text/javascript" src="/js/prototype.js"></script>
<script type="text/javascript" src="/js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="/js/lightbox.js"></script>
<link rel="stylesheet" href="/css/lightbox.css" type="text/css" media="screen" />
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
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="normal">
  <tr>
    <th colspan="10" align="center" class="titulo"><img src="/imagenes/cuadros.png" width="14" height="14" align="left" />{$accion|escape:"htmlall"}<img src="/imagenes/cuadritos.png" width="37" height="11" align="right" /></th>
  </tr>
  <tr>
    <td width="110" align="right" class="subtituloWeb3">Nombre:</td>
    <td width="177" class="adminContenido">{$nombres|escape:"htmlall"}</td>
    <td width="69" class="subtituloWeb3">Prioridad:</td>
    <td width="214" class="adminContenido">{$prioridad|escape:"htmlall"}</td>
    <td width="68" class="subtituloWeb3">Etiqueta:</td>
    <td width="199" class="adminContenido">{$etiqueta}</td>
    <td width="68" class="subtituloWeb3">Tipo:</td>
    <td width="68" class="adminContenido">{$tipo}</td>
    <td width="68" class="subtituloWeb3">Ciudad</td>
    <td width="68" class="adminContenido">{$ciudad}</td>
  </tr>
  
  <tr>
    <td align="right" valign="top" class="subtituloWeb3">Descripci&oacute;n:</td>
    <td colspan="10" class="adminContenido">{$descripcion}</td>
    </tr>
  <tr>
    <td align="right" valign="top" class="subtituloWeb3">Claves:</td>
    <td colspan="10" class="adminContenido">{$claves}</td>
  </tr>
    
  <tr>
    <td colspan="10" align="center" class="subtituloWeb3"><table width="100%" border="0" cellspacing="4" cellpadding="0">
                <tr>
                  <td align="center" colspan="4" class="subtituloWeb3">Im&aacute;genes Asignadas</td>
                  </tr>
                {assign var="cont" value=0}
                {if $mensaje eq ""}
                <tr> {section name=i loop=$listado}
                  <td width="25%" align="center" class="normalContenido2"><a href="/imagenes/{$listado[i].directorio_image}" title="{$listado[i].nombre_image}" rel="lightbox[roadtrip]" ><img border="0" src="/imagenes/miniaturas/{$listado[i].directorio_image}" class="fotos" height="200" width="200" /></a><br />
                    {$listado[i].nombre_image|escape:"htmlall"} <a onclick="javascript: return confirmar('&iquest;Esta seguro que desea borrar la imagen?');" href="../galeria/imagen_borrar.php?id={$listado[i].id_image}&amp;back={$id}&amp;tabla=categoria"><img border="0" src="/imagenes/eliminar.png" width="15" height="15" align="absmiddle" /></a></td>
                  {assign var="cont" value=$cont+1}
                  {if $cont eq 3}
                  {assign var="cont" value=0} </tr>
                <tr> {/if}
                  {/section} </tr>
                {else}
                {$mensaje}
                {/if}
                <tr>
                  <td colspan="4" align="center"><a href="imagen.php?id={$id}"><img src="/imagenes/dale.jpg" width="12" height="12" border="0" align="absmiddle" /> Insertar Imagen</a></td>
                  </tr>
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
    <td width="50%" align="center"><!-- InstanceBeginEditable name="insetar" --><a href="/admin/categoria">&nbsp;Volver <img src="/imagenes/atras.png" width="25" height="25" border="0" align="absmiddle" /></a><!-- InstanceEndEditable --></td>
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
