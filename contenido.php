<?php
/* header para Smarty */
require('config/setup.php');
$smarty = new objeto_smarty;
/*  Fin header para Smarty */

include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once ("config/class.galeria.php");
include_once ("config/class.publicidad.php");
include_once ("config/class.contenido.php");
include_once ("config/class.configuracion.php");
include_once ("config/class.producto.php");
include_once ("config/class.carro.php");
include_once ("config/class.categoria.php");
include_once ("config/class.noticia.php");
include_once("config/conexion.inc.php");
include_once ("config/class.banner.php");

session_start();

if(!isset($acceso))
	$acceso = new Auth;
if ($_POST){
	if ($_POST['enviar'] == "Entrar"){
		$acceso->asignar_consulta($_POST['login'],$_POST['clave']);
		$acceso->login2($acceso->login, $acceso->password);
	}
	if ($_POST['enviar'] == "Salir")
		$acceso->logout();

	if (isset($_POST['moneda']))
		$_SESSION['moneda_temp']=$_POST['moneda'];
}

if(isset($_GET['msg']) && $_GET['msg']==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>La sesi�n de usuario a caducado! ingrese de nuevo!</td></tr>";
}else if(isset($_GET['msg']) && $_GET['msg']==2){
	$mensaje="<tr><td align='center' colspan='2' class='error'>Usted no posee privilegios pa entrar en esta �rea!</td></tr>";
}else if($acceso->mensaje!=""){
	$mensaje="<tr><td align='center' colspan='2' class='error'>$acceso->mensaje</td></tr>";
}

if(!isset($categoria))
	$categoria= new Categoria;
$categoria->listar_categoria_menu();
$smarty->assign("categorias", $categoria->listado);

if(isset($_GET['cont']) && $_GET['cont']!="")
	$cont=$_GET['cont'];

if($cont==51){
	header("location: index.php");
	exit();
}else if(($cont==37)||($cont==50)){
	header("location: catalogo_opcion.php?cat=13&cont=$cont");
	exit();
}else if($cont==62){
	header("location: contacto.php?cont=$cont");
	exit();
}else if($cont==60){
	header("location: registro.php?cont=$cont");
	exit();
}else if($cont==32){
	header("location: noticias.php");
	exit();
}else if($cont==39){
	header("location: mapas.php");
	exit();
}else if($cont==65){
	header("location: galeria.php");
	exit();
}else if($cont==57){
	header("location: boletos.php?cont=".$_GET['cont']);
	exit();
}else if($cont==58){
	header("location: traslado.php");
	exit();
}else if(($cont==52)){
	header("location: panel_usuario.php");
}else if($cont==51){
	header("location: catalogo_opcion.php?cont=$cont&cat=18");
	exit();
}else if(($cont==34)||($cont==49)){
	header("location: catalogo_opcion.php?cat=9&cont=$cont");
	exit();
}else if($cont==42){
	header("location: carro.php");
	exit();
}

$excursiones = new Producto();
$excursiones->listar_producto_imagen_principal(4);
$paquetes = new Producto();
$paquetes->listar_producto_imagen_principal(9);


if(!isset($link))
	$link= new Link;
$link->listar_link_menu("normal");
$link->mostrar_link_publico($content);
$nombre=$link->get_link($cont);
if(!isset($link2))
	$link2= new Link;
$link2->listar_link_menu("arriba");

if(!isset($link3))
	$link3= new Link;
$link3->listar_link_menu("normal");
$link3->mostrar_link_publico($content);

if(!isset($link4))
	$link4= new Link;
$link4->listar_link_menu("arriba");

if(!isset($link5))
	$link5= new Link;
$link5->listar_link_menu("abajo");

foreach($link->listado as $key=>$valor){
		$link->listado[$key]['icono_cat']=$link->tam_iconos($valor['icono_cat'],'fa-2x');
}
foreach($link2->listado as $key=>$valor){
		$link2->listado[$key]['icono_cat']=$link2->tam_iconos($valor['icono_cat'],'fa-2x');
}
foreach($link3->listado as $key=>$valor){
		$link3->listado[$key]['icono_cat']=$link->tam_iconos($valor['icono_cat'],'fa-3x');
}
foreach($link4->listado as $key=>$valor){
		$link4->listado[$key]['icono_cat']=$link2->tam_iconos($valor['icono_cat'],'fa-3x');
}


if(isset($_GET['cont'])) $content=$_GET['cont']; else $content=1;

if(!isset($catalogo))
	$catalogo= new Producto();
$catalogo->listar_producto_nuevo();
$smarty->assign('nuevos',$catalogo->listado);

if(!isset($publicidad))
	$publicidad= new Publicidad;
$publicidad->cargar_publicidad("Banner Izquierda");
$smarty->assign("publicidad", $publicidad->listado);

if(!isset($publicidad2))
	$publicidad2= new Publicidad;
$publicidad2->cargar_publicidad("Banner Centro");
$smarty->assign("publicidad2", $publicidad2->listado);

if(!isset($publicidad3))
	$publicidad3= new Publicidad;
$publicidad3->cargar_publicidad("Banner Derecha");
$smarty->assign("publicidad3", $publicidad3->listado);

if(!isset($publicidad4))
	$publicidad4= new Publicidad;
$publicidad4->cargar_publicidad("Banner Promocion A");
$smarty->assign("publicidad4", $publicidad4->listado);

if(!isset($publicidad5))
	$publicidad5= new Publicidad;
$publicidad5->cargar_publicidad("Banner Promocion B");
$smarty->assign("publicidad5", $publicidad5->listado);

if(!isset($publicidad6))
	$publicidad6= new Publicidad;
$publicidad6->cargar_publicidad("Banner Promocion C");
$smarty->assign("publicidad6", $publicidad6->listado);

if(!isset($publicidad7))
	$publicidad7= new Publicidad;
$publicidad7->cargar_publicidad("Banner Promocion D");
$smarty->assign("publicidad7", $publicidad7->listado);

if(!isset($contenido))
	$contenido= new Contenido();
$contenido->listar_contenido_imagen($cont);

if($contenido->mensaje!="si"){
	$mensaje2="No existen registros de contenidos en esta secci&oacute;n";
}

/*if(!isset($sublink))
	$sublink= new Link();
$sublink->cargar_sublink();*/

if(!isset($configuracion))
	$configuracion= new Config;
$configuracion->mostrar_config(1);
$smarty->assign("nombre_empresa", $configuracion->empresa);
$smarty->assign("rif_empresa", $configuracion->rif);

//Gestion de carro de compras
if(!isset($_SESSION['procesando_carro']))
	$_SESSION['procesando_carro'] = new Carro_Compra;
$_SESSION['procesando_carro']->total_monto();

$tamano=strlen($contenido->listado[0]['contenido_con']);


if ($_POST['enviar'] == "Enviar Solicitud-bol"){
		$ida =$_POST['fecha_ida'];
		$vuelta=$_POST['fecha_vuelta'];
		$resultado = str_replace("/", "-", $ida);
		$resultado2 = str_replace("/", "-", $vuelta);
		$ida = date_create($resultado);
		$vuelta = date_create($resultado2);
		$hoy = date_create('today');

if(($ida < $hoy)||($vuelta < $ida)){
	$msj_boletos="<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><span class='glyphicon glyphicon-remove'></span></strong>&nbsp;Las Fecha son incorrectas, verifique los intervalos de IDA y VUELTA </div>";
}elseif($_POST['nombre'] =="" ||$_POST['tipo'] ==""||$_POST['cedula'] ==""||$_POST['email'] =="" || $_POST['telefono'] ==""
		|| $_POST['fecha_ida'] =="" || $_POST['fecha_vuelta'] =="" ||$_POST['adultos']==""){

			$msj_boletos="<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><span class='glyphicon glyphicon-remove'></span></strong>&nbsp;No ha completado los campos en su totalidad </div>";
		}elseif((isset($_POST['ninos'])&& isset($_POST['edades'])&& $_POST['ninos']!="" && $_POST['edades']=="")||(isset($_POST['ninos'])&& isset($_POST['edades'])&& $_POST['ninos']=="" && $_POST['edades']!="")){

			$msj_boletos="<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><span class='glyphicon glyphicon-remove'></span></strong>&nbsp;Debe insertar la Cantidad y Edad de &eacute;l o los ni&ntilde;os! </div>";
		}else{

			$acceso->enviar_solicitud_boletos();
			$msj_boletos="<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><span class='glyphicon glyphicon-ok'></span></strong>&nbsp;$acceso->mensaje</div>";
	}
}



if(!isset($suscripcion) and isset($_POST['email'])){
        $correo=$_POST['email'];
	    $suscripcion= new Auth;
	    $suscripcion->insertar_suscripcion($correo);

}

/* footer para Smarty */
$smarty->assign('nombre_uso',$_SESSION['nombre_temporal']);
$smarty->assign('apellido_uso',$_SESSION['apellido_temporal']);
$smarty->assign("categoria", $nombre);
$smarty->assign("accion", $nombre);
/*$smarty->assign("descripcion", $link->get_link_descripcion($cont));
$smarty->assign("claves", $link->get_link_claves($cont));*/
$smarty->assign("nombreb",$_POST['nombre-b']);
$smarty->assign("tipob",$_POST['tipo-b']);
$smarty->assign("cedulab",$_POST['cedula-b']);
$smarty->assign("origenb",$_POST['origen-b']);
$smarty->assign("destinob",$_POST['destino-b']);
$smarty->assign("emailb",$_POST['email-b']);
$smarty->assign("telefonob",$_POST['telefono-b']);
$smarty->assign("fecha_idab",$_POST['fecha_ida-b']);
$smarty->assign("fecha_vueltab",$_POST['fecha_vuelta-b']);
$smarty->assign("adultosb",$_POST['adultos-b']);
$smarty->assign("menoresb",$_POST['menores-b']);
$smarty->assign("edadesb",$_POST['edades-b']);

$smarty->assign("mensaje2", $mensaje2);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("moneda",$_SESSION['moneda_temp']);
$smarty->assign("tamano",$tamano);
$smarty->assign("msj_boletos", $msj_boletos);
$smarty->assign("enlaces_A", $link->listado);
$smarty->assign("enlaces_B", $link2->listado);
$smarty->assign("enlaces_A2", $link3->listado);
$smarty->assign("enlaces_B2", $link4->listado);
$smarty->assign("enlaces_C", $link5->listado);
$smarty->assign("banner", $banner->listado);
$smarty->assign('excursiones', $excursiones->listado);
$smarty->assign('paquetes',$paquetes->listado);
$smarty->assign('noticias', $noticia->listado);
$smarty->assign('subcategorias',$sublink->listado);
$smarty->assign('contenido', $contenido->listado);
 $smarty->assign('activo', $content);
$smarty->assign("descuento", $_SESSION['procesando_carro']->descuento);
$smarty->assign("total_monto", $_SESSION['procesando_carro']->total);
$smarty->assign("cant_producto", $_SESSION['procesando_carro']->numero);

$smarty->force_compile=true;
$smarty->display('contenido.tpl');
/* Fin footer para Smarty */
?>
