<!DOCTYPE html>
<html><!-- InstanceBegin template="../../../../../Users/jazmin/Documents/Web/Escape Travel/Templates/plantilla_padre2.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="title" content="{$accion} | Agencia de Viajes | Venezuela" />
    <meta name="author" content="SCAPE TRAVEL, Agencia de Viajes | Venezuela" />
    <meta name="subject" content="{$accion} | Agencia de Viajes | Venezuela" />
    <meta name="description" content="{$descripcion}" />
    
    <meta name="Keywords" content="{$claves}" /> 

    <link rel="icon" href="/imagenes/icono.ico" /> 
    <meta name="Language" content="Spanish" />
    <meta name="Revisit" content="2 days" />
    <meta name="Distribution" content="Global"/>
    <meta name="Robots" content="All" />
    <title>{$accion} | Agencia de Viajes | Venezuela</title>
    
    <script src="/js/validar.js"></script>
    <link href="/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/assets/js/ie-emulation-modes-warning.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="/css/navbar-fixed-top.css" rel="stylesheet">
    <link href="/css/personalizado/personalizado.css" rel="stylesheet">
    <link  href="/font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <script src="/js/jquery.js"></script>
      
    <!-- InstanceBeginEditable name="head" -->
{literal}
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'es'}
</script>

<script type="text/javascript" src="/js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="/css/jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript">
$(function() {
	$('#gallery a').lightBox();
});
</script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&sensor=true"></script>
	<script type="text/javascript" src="/js/transition.js"></script>
	<script type="text/javascript" src="/js/collapse.js"></script>
    {/literal}
    <!-- InstanceEndEditable -->
    {literal}
    <script>
	
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-6623041-31', 'auto');
	  ga('send', 'pageview');
	
	</script>
    {/literal} 
  </head>
<!-- Fin Cabecera
================================================== -->
  <body class="secundario">
  <!--NavBar 1 
        ===============================================-->
  <nav class="navbar navbar-default altura-2 navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button> 
             <a title="Scape travel" href="/index.php" id="logo1"><img src="/imagenes/logo.png"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
              	{section name=i loop=$enlaces_A} 
                	{if $enlaces_A[i].enlaces neq ""}
                    	<li {if $enlaces_A[i].id_cat eq $activo}class="dropdown active" {else} class="dropdown"{/if}>
                          <a title="{$enlaces_A[i].etiqueta_cat}" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{$enlaces_A[i].nombre_cat}<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                        
                        {section name=j loop=$enlaces_A[i].enlaces}
                        	
                         <li><a title="{$enlaces_A[i].enlaces[j].nombre_cat}" href="/contenido.php?cont={$enlaces_A[i].id_cat}&cat={$enlaces_A[i].enlaces[j].id_cat}">{$enlaces_A[i].enlaces[j].nombre_cat}</a>
                            </li>
                          
                        {/section}
                        
                        </ul>
                        </li>
                    {else}
                    {if $enlaces_A[i].id_cat eq '52'}
                    <li {if $enlaces_A[i].id_cat eq $activo}class="active"{/if}><a title="{$enlaces_A[i].etiqueta_cat}" href="/hoteles.php?cont={$enlaces_A[i].id_cat}">{$enlaces_A[i].icono_cat} {$enlaces_A[i].nombre_cat}</a></li>
                     {else}
                     	{if $enlaces_A[i].id_cat eq '53' or $enlaces_A[i].id_cat eq '54' or $enlaces_A[i].id_cat eq '55'}
                    <li {if $enlaces_A[i].id_cat eq $activo}class="active"{/if}><a title="{$enlaces_A[i].etiqueta_cat}" href="/catalogo_opcion.php?cont={$enlaces_A[i].id_cat}">{$enlaces_A[i].icono_cat} {$enlaces_A[i].nombre_cat}</a></li> 
                    	{else}	
                    <li {if $enlaces_A[i].id_cat eq $activo}class="active"{/if}><a title="{$enlaces_A[i].etiqueta_cat}" href="/contenido.php?cont={$enlaces_A[i].id_cat}">{$enlaces_A[i].icono_cat} {$enlaces_A[i].nombre_cat}</a></li>
                    	{/if}
                  {/if}
                 {/if}
               	{/section}
              </ul>
              <a title="Scape travel" href="/index.php" id="logo2"><img src="/imagenes/logotipo2.png"></a>
               <ul class="nav navbar-nav navbar-right">
                	{section name=i loop=$enlaces_B}
                	<li {if $enlaces_B[i].id_cat eq $activo}class="active"{/if}><a title="{$enlaces_B[i].etiqueta_cat}" href="/contenido.php?cont={$enlaces_B[i].id_cat}">{$enlaces_B[i].icono_cat} {$enlaces_B[i].nombre_cat}</a></li>
                	{/section}
                    
              </ul>
              
            </div>
            
          </div>
        </nav> <!--Fin NavBar 1 
        ===============================================--> 
        
        <!--NavBar 2 
        ===============================================-->
        <nav class="navbar navbar-inverse barra2">
        <div class="navbar-header">
          <span class="texto_navbar hidden">Reserva con Scape Travel</span>
          <button type="button" class="navbar-toggle collapsed" id="boton-navegacion2" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>  
        </div>
                       
        <div id="navbar2" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                  <li><a title="Añade productos al carrito" href="" style="padding-top:10px; padding-bottom:10px;"><i class="fa fa-shopping-cart fa-2x"></i></a></li>
                  <li><a title="cantidad de productos" href="">Items</a></li>
                  <li><a title="Total a Pagar" href="" class="separador-izq">Total Bs:</a></li>            
            </ul>
        <!--<a title="Scape Travel" href="/index.php" style="color:#6b5500; text-align:center; font-weight: bold;">Tour Operador</a>-->
            <ul class="nav navbar-nav navbar-right">
            	<li><a title="" href="https://www.facebook.com/Scape-Travel-Marketing-CA-337376754709/?fref=ts" style="padding-top:10px; padding-bottom:10px;"><i class="fa fa-facebook-square fa-2x"></i>
</a></li>
                <li><a title="" href="https://twitter.com/scapetravel" style="padding-top:10px; padding-bottom:10px;"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                <li><a title="" href="https://www.instagram.com/scapetravelmarketing/" style="padding-top:10px; padding-bottom:10px;"><i class="fa fa-instagram fa-2x"></i></a></li>
            </ul>
        </div>
            
</nav>
     <!--Fin NavBar 2
        ===============================================-->   
       
    
     
	<!--/. Buscador -->
   
    
    <!-- Contenido -->
	<div class="container-fluid no_padding">
    
	<!-- InstanceBeginEditable name="contenido" -->
     <div class="row no_padding">
    	<div class="col-xs-12" align="center">
        	<ol class="breadcrumb no_margin2">
  				<li><a href="#"><i class="fa fa-hospital-o"></i>&nbsp;Reserva de Hoteles</a></li>
			</ol>

        </div>
    </div>
    <div class="container-fluid">
    	<div class="row" style=" height:766px; background-image:url(/imagenes/formularios.jpg); background-repeat:no-repeat; padding-top:75.5px;">
        	<div class=" col-md-push-4 col-md-4 col-xs-12">
            	<div class="panel panel-cotizacion">
                	<div class="panel-heading" align="center">
                    	<i class="fa fa-pencil fa-2x"></i>
					</div>

                    <div class="panel-body">
                    	<form action="" method="post" role="form" name="formulario_reserva" id="formulario_reserva" onsubmit="MM_validateForm('telefono','','RisNum','email','','RisEmail');return document.MM_returnValue">
                        
                        
                            <div class="form-group">
                                {$mensaje2}
                            </div>
                        
                        
                        <div class="form-group">
                        <div class="input-group">
                           <span class="input-group-addon">       
                          <select name="tipo" id="tipo">
                              <option value="V-" {if $tipo eq "V-"} selected='selected' {/if}>V</option>
                              <option value="E-" {if $tipo eq "E-"} selected='selected' {/if}>E</option>
                              <option value="P-" {if $tipo eq "P-"} selected='selected' {/if}>P</option>
                              <option value="RIF:" {if $tipo eq "RIF:"} selected='selected' {/if}>RIF</option>
                          </select> </span>
                          
                          <label class="sr-only" for="identificacion" >Cédula o Pasaporte:</label>
                      <input name="cedula" type="text" id="cedula" value="{$cedula}" class="form-control" maxlength="9" onkeypress="javascript: return validarnum(event);" placeholder="Cédula o Pasaporte *" />
                      
                      	</div>
                     </div>
                   
                  
                              <div class="form-group">
                                  <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                  <label class="sr-only" for="nombre">Nombres y Apellidos:</label>
                                    <input name="nombre" type="text" id="nombre" class="form-control" onkeypress="javascript: return validarletras(event);" value="{$nombre}" maxlength="100" placeholder="Nombres y Apellidos *" /> 
                                    
                                  </div>
                             </div>
                            
                              <div class="form-group">
                              	<div class="input-group">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                                <label class="sr-only" for="telefono">Tel&eacute;fono:</label>
                                <input name="telefono" class="form-control" type="text" id="telefono" onkeypress="javascript: return validarnum(event);" value="{$telefono}" maxlength="12" placeholder="Telefono *"/>
                                  
                              </div>
                              </div>
                              
                              <div class="form-group">
                              	<div class="input-group">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>                                
                              		<label class="sr-only" for="correo">Correo:</label>
                                	<input name="email" type="text" id="email" class="form-control" onkeypress="javascript: return validarcorreo(event);" value="{$email}" maxlength="60" placeholder="Correo *" /> 
                                  
                               </div>
                           </div>  
                    
                     <div class="form-group">
                     	
                    <label class="sr-only" for="fecha Llegada">Fecha de Llegada:</label>
          
                    <div class='input-group date' id='datetimepicker'>
                    <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <input type='text' class="form-control" id="fecha_ida" name="fecha_ida" value="{$fecha_ida}" placeholder="Fecha de Llegada *" />
                            
                        
                       </div> 
                       
                        {literal}
                        	<script type="text/javascript">
            					$(function () {
                				$('#datetimepicker').datetimepicker({
                   				 format: 'DD/MM/YYYY'
                				});
            				});
        					</script>
                        {/literal}
                    
                  </div>
                  
                 <div class="form-group">
                    <label class="sr-only" for="Fecha Salida">Fecha de Salida:</label>
                    <div class='input-group date' id='datetimepicker2'>
                    	 <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <input type='text' class="form-control" id="fecha_vuelta" name="fecha_vuelta" value="{$fecha_vuelta}" placeholder="Fecha de Salida *" />
                            
                        </div>
                    
                       
                        {literal}
                        	<script type="text/javascript">
            					$(function () {
                				$('#datetimepicker2').datetimepicker({
                   				 format: 'DD/MM/YYYY'
                				});
            				});
        					</script>
                        {/literal}
                    
                      </div>
                 
                  
                       <div class="form-group">
                       		<div class="container-fluid">
                            	<div class="row">
                                	<div class="col-xs-4 no_padding">
                                   <div class="input-group">
                                   
                                            
                                            <span class="input-group-addon"><i class="fa fa-male"></i></span>
                                            <label class="sr-only" for="Pax"># Pax:</label>
                                                <input  name="adultos" type="text" id="adultos" onkeypress="javascript: return validarnum(event);" class="form-control" onblur="javascript: return numero_adultos();" value="{$adultos}" maxlength="4" class="form-control" placeholder="Adultos *" /> 
                                     </div>
                                    </div> 
                                    <div class="col-xs-4 no_padding">
                                     <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-child"></i></span>
                                     <label class="sr-only" for="Pax">Cantidad de Niños:</label>
                                         <input class="form-control" name="ninos" type="text" id="ninos" onkeypress="javascript: return validarnum(event);" onblur="javascript: return numero_ninos();" value="{$ninos}" maxlength="4" placeholder="Niños" />
                                     </div>
                                    </div>
                                    <div class="col-xs-4 no_padding"> 
                                     <div class="input-group">
                                        <span class="input-group-addon">Edad</span>
                                        <label class="sr-only" for="niños">Edades de ni&ntilde;os:</label>
                                        <input class="form-control" name="edades" type="text" id="edades" onkeypress="javascript: return validarnum_coma(event);" value="{$edades}" maxlength="20" placeholder="Ej 3,6" />
                                     </div>
                                     </div>
                             </div>
                           </div>
                       </div>
                                   
                                    
                                  
                             
                              <div class="form-group">
                              <div class="input-group">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                                <label class="sr-only" for="observaciones">Observaciones:</label>
                               <textarea name="comentario" class="form-control" cols="60" rows="6" id="comentario" placeholder="Observaciones">{$comentario}</textarea>
                               </div>
                              </div>
                    </div>
                    
                    <div class="panel-footer">
                    <input name="hotel" type="hidden" id="enviar"  value="{$id}" /> 
                    <input name="enviar" type="hidden" id="enviar"  value="Enviar Solicitud" /> 
    <a class="btn btn-default btn-block" title="Reservar Hotel" href="javascript:document.formulario_reserva.submit();"> <i class="fa fa-calendar-check-o"></i> &nbsp; Reservar</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- InstanceEndEditable -->
    <!-- Fin contenido -->
    </div>
    
    <!-- Publicidad Rotativa Agencia -->
  
    <div class="container-fluid">    
          <div class="row rotativas"> 
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no_padding">
                	<div id="Carousel2" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                              {assign var="cont" value=0}
                                  {section name=i loop=$publicidad}
                                   <li data-target="#Carousel2" data-slide-to="{$cont}" {if $cont eq "0"}class="active"{/if}></li>
                                  {assign var="cont" value=$cont+1}
                              {/section} 
                        </ol>
                
                        <div class="carousel-inner">
                            {assign var="cont" value=1}
                            {section name=i loop=$publicidad}
                            <div class="item {if $cont eq 1}active{/if}" align="center">
                                {if $publicidad[i].url_dir neq ""}
                                    <a title="{$publicidad[i].nombre_dir}" href="{$publicidad[i].url_dir}">
                                        <img style="width:650px;"  src="/imagenes/publicidad/{$publicidad[i].directorio_dir}" alt="{$publicidad[i].nombre_dir}" class="img-responsive no_margin" />
                                    </a>
                                {else}
                                    <img style="width:650px;" src="/imagenes/publicidad/{$publicidad[i].directorio_dir}" alt="{$publicidad[i].nombre_dir}" class="img-responsive no_margin"/>
                                {/if}
                            </div>
                            {assign var="cont" value=$cont+1}
                            {/section}
                        </div>
                        
                        <a class="left carousel-control" href="#Carousel2" data-slide="prev">
                            <!--<span class="glyphicon glyphicon-chevron-left"></span>-->
                        </a>
                        <a class="right carousel-control" href="#Carousel2" data-slide="next">
                            <!--<span class="glyphicon glyphicon-chevron-right"></span>-->
                        </a>
                        
                    </div>
                  
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no_padding">
                	<div id="Carousel3" class="carousel slide carousel-fade" data-ride="carousel">
        		
                        <ol class="carousel-indicators">
                              {assign var="cont" value=0}
                                  {section name=i loop=$publicidad2}
                                    <li data-target="#Carousel3" data-slide-to="{$cont}" {if $cont eq "0"}class="active"{/if}></li>
                                  {assign var="cont" value=$cont+1}
                              {/section} 
                        </ol>
                
                        <div class="carousel-inner">
                            {assign var="cont" value=1}
                            {section name=i loop=$publicidad2}
                            <div class="item {if $cont eq 1}active{/if}" align="center">
                                {if $publicidad2[i].url_dir neq ""}
                                    <a title="{$publicidad2[i].nombre_dir}" href="{$publicidad2[i].url_dir}">
                                        <img style="width:650px;"  src="/imagenes/publicidad/{$publicidad2[i].directorio_dir}" alt="{$publicidad2[i].nombre_dir}" class="img-responsive" />
                                    </a>
                                {else}
                                    <img style="width:650px;" src="/imagenes/publicidad/{$publicidad2[i].directorio_dir}" alt="{$publicidad2[i].nombre_dir}" class="img-responsive" />
                                {/if}
                            </div>
                            {assign var="cont" value=$cont+1}
                            {/section}
                        </div>
                        
                        <a class="left carousel-control" href="#Carousel3" data-slide="prev">
                            <!--<span class="glyphicon glyphicon-chevron-left"></span>-->
                        </a>
                        <a class="right carousel-control" href="#Carousel3" data-slide="next">
                            <!--<span class="glyphicon glyphicon-chevron-right"></span>-->
                        </a>
                        
                    </div>
                </div>
                
            </div>
    	</div>
    <!-- /Fin Publicidad Rotativa Agencia -->
    
   
     
    <!-- Promociones -->
    <div class="container-fluid">
    	<div class="row" style=" height:582px; background-image:url(/imagenes/fondo-promo.jpg); background-repeat:no-repeat;">
        	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cinco-columnas" style=" padding-left:15px; padding-bottom:100px; padding-top:200px;">
            
            	<div class="panel panel-default panel-cotizacion">
                	<div class="panel-header" style="background-color:#0073c4; color:#fff;" align="center">
                    	<h3 class="no_margin2" style="padding-top:15px; padding-bottom:15px;">Prueba Reserva</h3>
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-footer">
                    	<a class="btn btn-default btn-block" title="{$listado[i].nombre_hot}" href="hotel_detalle.php?id={$listado[i].id_hot}">Ver más  &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cinco-columnas" style="padding-bottom:100px; padding-top:200px;">
            	<div class="panel panel-default panel-cotizacion">
                	<div class="panel-header" style="background-color:#0073c4; color:#fff;" align="center">
                    	<h3 class="no_margin2" style="padding-bottom:15px; padding-top:15px;">Prueba Reserva</h3>
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-footer">
                    	<a class="btn btn-default btn-block" title="{$listado[i].nombre_hot}" href="hotel_detalle.php?id={$listado[i].id_hot}">Ver más  &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
             <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cinco-columnas" style="padding-bottom:150px; padding-top:200px;">
            		<div class="panel panel-default panel-cotizacion">
                	<div class="panel-header" style="background-color:#0073c4; color:#fff;" align="center">
                    	<h3 class="no_margin2" style="padding-bottom:15px; padding-top:15px;">Prueba Reserva</h3>
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-footer">
                    	<a class="btn btn-default btn-block" title="{$listado[i].nombre_hot}" href="hotel_detalle.php?id={$listado[i].id_hot}">Ver más  &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>	
       		 </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cinco-columnas" style="padding-bottom:100px; padding-top:200px;">
            	<div class="panel panel-default panel-cotizacion">
                	<div class="panel-header" style="background-color:#0073c4; color:#fff;" align="center">
                    	<h3 class="no_margin2" style="padding-bottom:15px; padding-top:15px;">Prueba Reserva</h3>
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-footer">
                    	<a class="btn btn-default btn-block" title="{$listado[i].nombre_hot}" href="hotel_detalle.php?id={$listado[i].id_hot}">Ver más  &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cinco-columnas" style="padding-right:15px; padding-bottom:100px; padding-top:200px;">
        		<div class="panel panel-default panel-cotizacion">
                	<div class="panel-header" style="background-color:#0073c4; color:#fff;" align="center">
                    	<h3 class="no_margin2" style="padding-bottom:15px; padding-top:15px;">Prueba Reserva</h3>
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-footer">
                    	<a class="btn btn-default btn-block" title="{$listado[i].nombre_hot}" href="hotel_detalle.php?id={$listado[i].id_hot}">Ver más  &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
        </div>
    </div>
   </div>
     <!-- Fin promociones -->
     
     
      <!-- Publicidad Instagram -->
    <div class="container-fluid  no_padding">
    	<div class="row">
        	<div class="col-xs-12">
            	<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/b601946dbb17578696edcf6e46f99551.html" id="lightwidget_b601946dbb" name="lightwidget_b601946dbb"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
            </div>
        </div>
    </div>
     <!-- Fin instagram -->

     
     
      <!-- Excursiones -->
      <div class="container-fluid">
    	<div class="row" style=" height:582px; background-image:url(/imagenes/fondo-excursion.jpg); background-repeat:no-repeat;">
        	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cinco-columnas" style="padding-left:15px; padding-bottom:100px; padding-top:200px;">
            
            	<div class="panel panel-default panel-cotizacion">
                	<div class="panel-header" style="background-color:#0073c4; color:#fff;" align="center">
                    	<h3 class="no_margin2" style="padding-bottom:15px; padding-top:15px;">Prueba Reserva</h3>
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-footer">
                    	<a class="btn btn-default btn-block" title="{$listado[i].nombre_hot}" href="hotel_detalle.php?id={$listado[i].id_hot}">Ver más  &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cinco-columnas" style="padding-left:15px; padding-bottom:100px; padding-top:200px;">
            	<div class="panel panel-default panel-cotizacion">
                	<div class="panel-header" style="background-color:#0073c4; color:#fff;" align="center">
                    	<h3 class="no_margin2" style="padding-bottom:15px; padding-top:15px;">Prueba Reserva</h3>
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-footer">
                    	<a class="btn btn-default btn-block" title="{$listado[i].nombre_hot}" href="hotel_detalle.php?id={$listado[i].id_hot}">Ver más  &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cinco-columnas" style=" padding-left:15px; padding-bottom:100px; padding-top:200px;">
            
            </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cinco-columnas" style=" padding-left:15px; padding-bottom:100px; padding-top:200px;">
            	<div class="panel panel-default panel-cotizacion">
                	<div class="panel-header" style="background-color:#0073c4; color:#fff;" align="center">
                    	<h3 class="no_margin2" style="padding-bottom:15px; padding-top:15px;">Prueba Reserva</h3>
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-footer">
                    	<a class="btn btn-default btn-block" title="{$listado[i].nombre_hot}" href="hotel_detalle.php?id={$listado[i].id_hot}">Ver más  &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3  cinco-columnas" style=" padding-left:15px; padding-bottom:150px; padding-top:200px;">
            	<div class="panel panel-default panel-cotizacion">
                	<div class="panel-header" style="background-color:#0073c4; color:#fff;" align="center">
                    	<h3 class="no_margin2" style="padding-bottom:15px; padding-top:15px;">Prueba Reserva</h3>
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-body">
                    </div>
                    <div class="panel-footer">
                    	<a class="btn btn-default btn-block" title="{$listado[i].nombre_hot}" href="hotel_detalle.php?id={$listado[i].id_hot}">Ver más  &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            
         </div>
       </div>
      <!-- Fin excursiones -->
     
      <!--Categorias --> 
      <div class="container-fluid no_padding">
      	<nav class="navbar navbar-default navbar-categoria">
  				<div class="container-fluid"  align="center">
   					 <div class="navbar-header">
                     	{section name=i loop=$enlaces_A2}
                     	  <a class="navbar-brand" href="{$enlaces_A2[i].enlace_cat}">
        						{$enlaces_A2[i].icono_cat}<br>
                                <p class="fuente-categoria" style="font-size: 12px;">{$enlaces_A2[i].nombre_cat}</p>
      					  </a>
                     	{/section}
                        {section name=i loop=$enlaces_B2}
                          <a class="navbar-brand" href="{$enlaces_B2[i].enlace_cat}">
                           {$enlaces_B2[i].icono_cat}<br>
                                <p class="fuente-categoria" style="font-size: 12px;">{$enlaces_B2[i].nombre_cat}</p>
                          </a>
                        {/section}
      
    				</div>
  				</div>
			</nav>
      </div>
      
       <!-- Fin Categorias -->
      
    <!-- Pie de Pagina -->
   <footer>
    	<div class="container-fluid">
            <div class="row pinta1">
            
            	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="padding-top:30px;">
                
                	<div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                        <!--<h5>Menú Principal</h5>-->
                            <ul class="items">
                            <li><img src="/imagenes/logo-footer.png"></li>
                            {section name=j loop=$enlaces_A}
                            <li style="padding-top:7px;">
    <a  class="foot-btn" title="{$enlaces_A[j].etiqueta_cat}" href="/contenido.php?cont={$enlaces_A[j].id_cat}">{$enlaces_A[j].nombre_cat|lower|capitalize:true}</a>
                            </li>
                            {/section}
                            </ul>
                        </div>
                    </div>
                    
                </div>
                
            	<div  class="col-xs-12 col-sm-12 col-md-4 col-lg-2" style="padding-top:30px;">
                
                	<div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                        <!--<h5>Menú Principal</h5>-->
                            <ul class="items">
                            <li><strong>SCAPE TRAVEL</strong></li>
                            {section name=j loop=$enlaces_A}
                            <li style="padding-top:7px;">
    <a  class="foot-btn" title="{$enlaces_A[j].etiqueta_cat}" href="/contenido.php?cont={$enlaces_A[j].id_cat}">{$enlaces_A[j].nombre_cat|lower|capitalize:true}</a>
                            </li>
                            {/section}
                            </ul>
                        </div>
                    </div>
                	
                </div>
                <div  class="col-xs-12 col-sm-12 col-md-4 col-lg-2" style="padding-top:30px;">
                
                	<div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                        <!--<h5>Menú Principal</h5>-->
                            <ul class="items">
                            <li><strong>QUE OFRECEMOS</strong></li>
                            {section name=j loop=$enlaces_B}
                            <li style="padding-top:7px;">
    <a  class="foot-btn" title="{$enlaces_B[j].etiqueta_cat}" href="/contenido.php?cont={$enlaces_B[j].id_cat}">{$enlaces_B[j].nombre_cat|lower|capitalize:true}</a>
                            </li>
                            {/section}
                            </ul>
                        </div>
                    </div>
                	
                </div>
                 
            	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" align="center" style="padding-top:30px;">
                	<div class="container-fluid">
                    	<div class="row">
                        <div class="col-xs-12" style="padding-top:40px;">
                        	<form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                	<div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                  	<input type="text" class="form-control" placeholder="Ingrese su Email">
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-default" style="background-color:#ffcb00;">Suscribirse</button>
                             </form>
                        </div>
                        <div class="col-xs-8" style="padding-top:50px;">
                         <h6 class="pull-right">Programación por:&nbsp; <a class="enlace" href="http://www.diazcreativos.net.ve" target="_blank">D&iacute;az Creativos</a></h6>
                         </div>
                        <div class="col-xs-4" style="padding-top:50px;">
                        	<p align="center" class="pull-right"><i class="fa fa-arrow-circle-up fa-2x ir-arriba"></i></p>
                        </div>
                        
                        
                        </div>
                    
                    
                    </div>
                  
                    
                </div>
            
             
              
                
                	 
                
                
            </div>
           
      </div>
      
</footer>
      <!-- Fin pie de Pagina -->
	
    {literal}
    
    <script src="/dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/js/jssor.slider.mini.js"></script>
    <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
	  fjs.parentNode.insertBefore(js, fjs);

	}(document, 'script', 'facebook-jssdk'));</script>
    
    <script type="text/javascript">

			$(document).ready(function(){

		 $('.ir-arriba').click(function(){
			$('body, html').animate({
				scrollTop: '0px'
			}, 300);
		});
	 
		$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
		$('.ir-arriba').slideDown(300);
		 } else {
			$('.ir-arriba').slideUp(300);
			 }
		});

	});
  </script>
  
  
  <script type="text/javascript">
	$(document).ready(function() {
		$(".imagen-1").hover(function(){
			
		$(this).find('img').stop().fadeTo(400, 0);
		
		}, function() {
			
		$(this).find('img').stop().fadeTo(400, 1);
		});	
	});	

</script>

 <script type="text/javascript">
	  
		function mostrar(){
			
		document.getElementById('cotizador-boletos').style.display = 'block';
		document.getElementById('cotizador-hoteles').style.display = 'none';}
		
		function mostrar2(){
			
		document.getElementById('cotizador-boletos').style.display = 'none';
		document.getElementById('cotizador-hoteles').style.display = 'block';}
	  </script>
       <script type="text/javascript">
	   
	  	$(document).ready(function(){
			//nos desplazamos entre todos los divs
			$('a.vista-previa').click(function(e){
			e.preventDefault();
		    enlace  = $(this).attr('href');
		    $('html, body').animate({
		        scrollTop: $(enlace).offset().top
		    }, 1000);
			});
		});
	   
	  </script>

                      
                      
	{/literal}
  </body>
<!-- InstanceEnd --></html>