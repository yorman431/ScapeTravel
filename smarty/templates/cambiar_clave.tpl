<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/plantilla_padre.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="title" content="{$accion} | Agencia de Viajes Scape Travel Marketing | Venezuela" />
    <meta name="author" content="Scape Travel, C.A." />
    <meta name="subject" content="{$accion} | Agencia de Viajes Scape Travel Marketing | Venezuela" />
    <meta name="description" content="{$descripcion}" />
    
    <meta name="Keywords" content="{$claves}"/> 

    <link rel="icon" href="/imagenes/icono.ico"/> 
    <meta name="Language" content="Spanish" />
    <meta name="Revisit" content="2 days" />
    <meta name="Distribution" content="Global"/>
    <meta name="Robots" content="All" />
    <meta charset="utf-8">
    <title>{$accion} | Agencia de Viajes Scape Travel Marketing | Venezuela</title>
    
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
      
    <!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
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
  <body class="principal">
  <!--NavBar 1 
        ===============================================-->
  <nav class="navbar navbar-default navbar-fixed-top altura-1">
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
          <div id="navbar" class="navbar-collapse collapse" align="center">
               <ul class="nav navbar-nav">
              	   {section name=i loop=$enlaces_A} 
                	  {if $enlaces_A[i].enlaces neq ""}
                    	<li {if $enlaces_A[i].id_cat eq $activo}class="dropdown active" {else} class="dropdown"{/if}>
                          <a title="{$enlaces_A[i].etiqueta_cat}" href="#" class="dropdown-toggle botones" data-toggle="dropdown" role="button" aria-expanded="false">{$enlaces_A[i].nombre_cat}<span class="caret"></span></a>
                        	<ul class="dropdown-menu" role="menu">
                             {section name=j loop=$enlaces_A[i].enlaces}
                        	     <li><a title="{$enlaces_A[i].enlaces[j].nombre_cat}" href="/contenido.php?cont={$enlaces_A[i].id_cat}&cat={$enlaces_A[i].enlaces[j].id_cat}">{$enlaces_A[i].enlaces[j].nombre_cat}</a>
                                 </li>
                              {/section}
                            </ul>
                         </li>
                      {else}
                         {if $enlaces_A[i].id_cat eq '52'}
                            <li {if $enlaces_A[i].id_cat eq $activo}class="active"{/if}><a class="botones on" title="{$enlaces_A[i].etiqueta_cat}" href="/hoteles.php?cont={$enlaces_A[i].id_cat}">{$enlaces_A[i].icono_cat} {$enlaces_A[i].nombre_cat}</a>
                            </li>
                         {else}
                     	    {if $enlaces_A[i].id_cat eq '53'}
                                <li {if $enlaces_A[i].id_cat eq $activo}class="active"{/if}><a class="botones on" title="{$enlaces_A[i].etiqueta_cat}" href="/catalogo_opcion.php?cont={$enlaces_A[i].id_cat}&cat=9">{$enlaces_A[i].icono_cat} {$enlaces_A[i].nombre_cat}</a>
                               </li> 
                    	    {else}
                        	   {if $enlaces_A[i].id_cat eq '54'}
                                  <li {if $enlaces_A[i].id_cat eq $activo}class="active"{/if}><a class="botones on" title="{$enlaces_A[i].etiqueta_cat}" href="/catalogo_opcion.php?cont={$enlaces_A[i].id_cat}&cat=5">{$enlaces_A[i].icono_cat} {$enlaces_A[i].nombre_cat}</a>
                                  </li>
                                    {else}
                            	        {if $enlaces_A[i].id_cat eq '55'}
                                            <li {if $enlaces_A[i].id_cat eq $activo}class="active"{/if}><a class="botones on" title="{$enlaces_A[i].etiqueta_cat}" href="/catalogo_opcion.php?cont={$enlaces_A[i].id_cat}&cat=4">{$enlaces_A[i].icono_cat} {$enlaces_A[i].nombre_cat}</a></li>
                            	        {else}
                    	                    <li {if $enlaces_A[i].id_cat eq $activo}class="active"{/if}><a class="botones on" title="{$enlaces_A[i].etiqueta_cat}"  href="/contenido.php?cont={$enlaces_A[i].id_cat}">{$enlaces_A[i].icono_cat} {$enlaces_A[i].nombre_cat}</a>
                                            </li>
                    	                {/if}
                                     {/if}
                                  {/if}
                               {/if}
                            {/if}
               	    {/section}
                  </ul>
               
            	<a title="Scape travel" class="text-center" href="/index.php" id="logo2"><img  class="imagen-on" src="/imagenes/logotipo.png" style="padding-top:12px;"></a>
                
           
               <ul class="nav navbar-nav navbar-right">
                	{section name=i loop=$enlaces_B}
                	<li {if $enlaces_B[i].id_cat eq $activo}class="active"{/if}><a class="botones on" title="{$enlaces_B[i].etiqueta_cat}" href="/contenido.php?cont={$enlaces_B[i].id_cat}">{$enlaces_B[i].icono_cat} {$enlaces_B[i].nombre_cat}</a></li>
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
           <!--<span class="texto_navbar hidden">Reserva con Scape Travel</span>-->
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar">
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
</a>
               </li>
               <li><a title="" href="https://twitter.com/scapetravel" style="padding-top:10px; padding-bottom:10px;"><i class="fa fa-twitter-square fa-2x"></i></a>
               </li>
               <li><a title="" href="https://www.instagram.com/scapetravelmarketing/" style="padding-top:10px; padding-bottom:10px;"><i class="fa fa-instagram fa-2x"></i></a>
               </li>
            </ul>
        </div>     
     </nav>
     <!--Fin NavBar 2
        ===============================================-->          
	
    
   
     <!-- Contenido -->
	<div class="container-fluid vista-previa">
    
	<!-- InstanceBeginEditable name="contenido" -->
           <div class="titulo_principal">Cambiar Clave de Usuario:</span> <span class="titulo_alt">{$nombre_uso} {$apellido_uso}</span></div>
           <table class="normal" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            {$mensaje2}
           <tr>
                        <th colspan="2" align="center"><img src="/imagenes/cuadros.png" width="14" height="14" align="left" />Formulario de Cambio<img src="/imagenes/cuadritos.png" width="37" height="11" align="right" /></th>
                        </tr>
                <tr>
                  <td width="100%" align="center">
                  	<form action="" method="post" name="form1" id="form1" onsubmit="MM_validateForm('actual','','R','clavenueva','','R','confirmar','','R');return document.MM_returnValue">
                    <table width="86%" border="0" align="center" cellpadding="0" cellspacing="0">
                       
                      <tr>
                        <td width="29%" align="left" class="subtituloWeb3">Clave Actual:</td>
                        <td width="71%" class="adminContenido"><input value="{$actual}" name="actual" type="password" id="actual" size="40" maxlength="50" /> 
                        *</td>
                      </tr>
                      <tr>
                        <td align="left" class="subtituloWeb3">Clave Nueva:</td>
                        <td class="adminContenido"><input value="{$clavenueva}" name="clavenueva" type="password" id="clavenueva" size="40" maxlength="50" /> 
                        *</td>
                      </tr>
                      <tr>
                        <td align="left" class="subtituloWeb3">Confirmar Clave:</td>
                        <td class="adminContenido"><input value="{$confirmar}" name="confirmar" type="password" id="confirmar" size="40" maxlength="100" /> 
                        *</td>
                      </tr>
                      <tr>
                        <td align="left"><a href="/panel_usuario.php"><img src="/imagenes/backto.png" width="25" height="25" border="0" align="absmiddle" /> Volver a Mi Cuenta</a></td>
                        <td align="left"><input type="submit" name="envio" id="envio" value="Cambiar" />
                        <span class="normalContenido"> (*) Datos Obligatorios</span></td>
                      </tr>
    </table>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td align="center"><p>Para el cambio de clave es recomendable que use caracteres en may&uacute;sculas y n&uacute;meros para mayor seguridad.</p></td>
                </tr>
              </table>
              
              
            <!-- InstanceEndEditable -->
    </div>
     <!-- Fin contenido -->
     
             
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
                                        <img src="/imagenes/publicidad/{$publicidad[i].directorio_dir}" alt="{$publicidad[i].nombre_dir}" class="img-responsive" />
                                    </a>
                                {else}
                                    <img src="/imagenes/publicidad/{$publicidad[i].directorio_dir}" alt="{$publicidad[i].nombre_dir}" class="img-responsive"/>
                                {/if}
                            </div>
                            {assign var="cont" value=$cont+1}
                            {/section}
                        </div>
                        
                        <a class="left carousel-control" href="#Carousel2" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#Carousel2" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
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
                                        <img src="/imagenes/publicidad/{$publicidad2[i].directorio_dir}" alt="{$publicidad2[i].nombre_dir}" class="img-responsive" />
                                    </a>
                                {else}
                                    <img  src="/imagenes/publicidad/{$publicidad2[i].directorio_dir}" alt="{$publicidad2[i].nombre_dir}" class="img-responsive"/>
                                {/if}
                            </div>
                            {assign var="cont" value=$cont+1}
                            {/section}
                        </div>
                        
                        <a class="left carousel-control" href="#Carousel3" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#Carousel3" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                        
                    </div>
                </div>
            </div>
    	</div>
    <!-- /Fin Publicidad Rotativa Agencia -->
    
    
    <!-- Promociones -->
    <div class="container-fluid">
    	<div class="row promociones">
        	<div class="col-xs-12" align="center">
            	<h1>Promociones</h1>
            </div>
               {assign var="cont" value=1}
               {section name=i loop=$paquetes}
        		 {if $cont le 5}
        	     <div class="col-xs-12 col-sm-6 col-md-3 col-lg-15" style="padding-left:15px; padding-top:20px;">
            	 {assign var="cont" value=$cont+1}
            	    <div class="panel panel-default panel-cotizacion">
                	  <div class="panel-header" style="background-color:#0073c4; color:#fff;" align="center">
                  		<h4 class="no_margin2" style="padding-bottom:15px; padding-top:15px;">   {$paquetes[i].nombre_pro|truncate:20}
                        </h4>
                      </div>
                      <div class="panel-body titulo" align="center">
                    	  <p> Desde BsF. {$paquetes[i].detal_pro}</p>
                      </div>
                      <div class="panel-body no_padding no_padding2" align="center">
                         {if $paquetes[i].url_dir neq ""}
                             <a title="{$paquetes[i].nombre_dir}" href="{$paquetes[i].url_dir}">
                                  <img src="/imagenes/{$paquetes[i].directorio_image}" alt="{$paquetes[i].nombre_dir}" class="img-responsive" />
                             </a>
                         {else}
                                  <img src="/imagenes/{$paquetes[i].directorio_image}" alt="{$paquetes[i].nombre_dir}" class="img-responsive" />
                         {/if}
                     </div>
                     <div class="panel-footer">
                    	<a class="btn btn-default btn-block" title="{$paquetes[i].nombre_pro}" href="catalogo_detalle.php?id={$paquetes[i].id_pro}">Ver más  &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
               </div>	
            {/if}
           {/section}
 			<div class="col-xs-12" align="center" style="padding-bottom:35px; padding-top:30px;">
                  <a href="/catalogo_opcion.php?cont=53&cat=9" class="btn btn-primary"><i class="fa fa-gift"></i>&nbsp;Ver Paquetes</a>
           </div>	
    	</div>
   </div>
  <!-- Fin promociones -->
  
   <!-- Publicidad Instagram -->
    <div class="container-fluid">
    	<div class="row">
        	<div class="col-xs-12 no_padding">
            	<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/a0ed11940ac45c7c8460e88805c9b315.html" id="lightwidget_a0ed11940a" name="lightwidget_a0ed11940a"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow:hidden;"></iframe>

            </div>
        </div>
    </div>
     <!-- Fin instagram -->
  
   <!-- Excursiones -->
      <div class="container-fluid">
    	  <div class="row excursiones">
                <div class="col-xs-12" align="center">
                        <h1>Excursiones</h1>
                </div>
         		{assign var="cont" value=0}
        		{section name=i loop=$excursiones}
                {if $cont le 4}
                    {if $cont eq 2}
                <!--Relleno para dejar un espacio segun diseño  -->
                    <div class="col-xs-12 col-sm-6 hidden-md col-lg-15" style="padding-left:15px; padding-top:20px;">
                    </div>
                    {assign var="cont" value=$cont+1}
                	{/if}
               
        		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-15" style="padding-left:15px; padding-top:20px;">
             	{assign var="cont" value=$cont+1}
            	<div class="panel panel-default panel-cotizacion">
                	<div class="panel-header" style="background-color:#0073c4; color:#fff;" align="center">
                    	<h4 class="no_margin2" style="padding-bottom:15px; padding-top:15px;">				{$excursiones[i].nombre_pro|truncate:20}</h4>
                    </div>
                    <div class="panel-body titulo" align="center">
                    	<p> Desde BsF. {$excursiones[i].detal_pro}</p>
                    </div>
                    <div class="panel-body no_padding no_padding2" align="center">
                    {if $excursiones[i].url_dir neq ""}
                                    <a title="{$excursiones[i].nombre_dir}" href="{$excursiones[i].url_dir}">
                                        <img src="/imagenes/{$excursiones[i].directorio_image}" alt="{$excursiones[i].nombre_dir}" class="img-responsive" />
                                    </a>
                                {else}
                                    <img src="/imagenes/{$excursiones[i].directorio_image}" alt="{$excursiones[i].nombre_dir}" class="img-responsive" />
                                {/if}
                    </div>
                    <div class="panel-footer">
                    	<a class="btn btn-default btn-block" title="{$excursiones[i].nombre_pro}" href="catalogo_detalle.php?id={$excursiones[i].id_pro}">Ver más  &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            
            </div>
            
            	
            {/if}
            {/section}
            
            
                    <div class="col-xs-12" align="center" style="padding-bottom:35px; padding-top:30px;">
                        <a class="btn btn-primary" href="/catalogo_opcion.php?cont=55&cat=4"><i class="fa fa-gift"></i>&nbsp;Ver Excursiones</a>
                    </div>	
                 
         </div>
       </div>
      <!-- Fin excursiones -->
      
       <!--Categorias --> 
      <div class="container-fluid">
      	<div class="row navbar-categoria" style="background-color:#143058;">
  						
                     	{section name=i loop=$enlaces_A2}
                <div class="col-xs-6 col-sm-15 col-md-15 col-lg-16 categoria" align="center">
                          {if $enlaces_A2[i].nombre_cat eq 'Inicio'}
                          <a class="text-center iconos-btn" href="/noticias.php">
                          	<i class="fa fa-newspaper-o fa-3x"></i><br>
                            <p class="fuente-categoria" style="font-size: 12px;">Noticias</p>
                          </a>
                            {else}
                            
                            <a class="text-center iconos-btn" href="{$enlaces_A2[i].enlace_cat}">
        						{$enlaces_A2[i].icono_cat}<br>
                                <p class="fuente-categoria" style="font-size: 12px;">{$enlaces_A2[i].nombre_cat}</p>
      					  	</a>
                            {/if}
                     	  
                          </div>
                     	{/section}
                        
                       
                        {section name=i loop=$enlaces_B2}
                         <div class="col-xs-6 col-sm-15 col-md-15 col-lg-16 categoria" align="center">
                          <a class="text-center iconos-btn" href="{$enlaces_B2[i].enlace_cat}">
                           {$enlaces_B2[i].icono_cat}<br>
                                <p class="fuente-categoria" style="font-size: 12px;">{$enlaces_B2[i].nombre_cat}</p>
                          </a>
                          </div>
                        {/section}
                       
      
			</div>
      </div>
      
       <!-- Fin Categorias -->


    <footer>
    	<div class="container-fluid">
            <div class="row pinta1">
            
            	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="tam-info">
                
                	<div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                        <!--<h5>Menú Principal</h5>-->
                            <ul class="items">
                            <li><img src="/imagenes/logo-footer.png"></li>
                           
                            <li style="padding-top:7px;">
    							<a class="foot-btn">Scape Travel C.A</a>
                            </li>
                             <li style="padding-top:7px;">
    							<a class="foot-btn">RIF J-30991795-1</a>
                            </li>
                              <li style="padding-top:7px;">
    							<a class="foot-btn">VT:2631 | T</a>
                            </li>
                              <li style="padding-top:7px;">
    							<a class="foot-btn">Todos los Derechos Reservados</a>
                                
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" id="visible-xs" align="center">
                    	<div class="col-xs-12">
                    		<img src="/imagenes/logo-footer.png">
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
                            {if $enlaces_A[j].nombre_cat eq 'Inicio'}
                            	 <li style="padding-top:7px;">
    <a  class="foot-btn" title="Noticias" href="/noticias.php">Noticias</a>
                            </li>
                            	
                            {else}
                           	 <li style="padding-top:7px;">
    <a  class="foot-btn" title="{$enlaces_A[j].etiqueta_cat}" href="/contenido.php?cont={$enlaces_A[j].id_cat}">{$enlaces_A[j].nombre_cat}</a>
                            </li>
                            {/if}
                            {/section}
                             {section name=j loop=$enlaces_C}
                            <li style="padding-top:7px;"><a class="foot-btn" title="{$enlaces_C[j].etiqueta_cat}" href="/contenido.php?cont={$enlaces_C[j].id_cat}">{$enlaces_C[j].nombre_cat}</a></li>
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
    <a  class="foot-btn" title="{$enlaces_B[j].etiqueta_cat}" href="/contenido.php?cont={$enlaces_B[j].id_cat}">{$enlaces_B[j].nombre_cat}</a>
                            </li>
                            {/section}
                           
                            </ul>
                        </div>
                    </div>
                	
                </div>
                 
            	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" align="center" style="padding-top:30px;">
                	<div class="container-fluid">
                    	<div class="row">
                        <div class="col-xs-12" style="padding-top:40px;" align="center">
                        	<form action="" method="post" role="form" name="suscripcion"  class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                	<div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                  	<input name="email" value="{$email}" type="text" class="form-control" placeholder="Ingrese su Email">
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-default" style="background-color:#ffcb00;">Suscribirse</button>
                             </form>
                        </div>
                        <div class="col-xs-8" style="padding-top:50px;" align="center">
                         <h6 class="pull-right">Dise&ntilde;o y Desarrollo:&nbsp; <a class="enlace" href="http://www.diazcreativos.net.ve" target="_blank">D&iacute;az Creativos</a></h6>
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
				var altura = $('.navbar-inverse').offset().top;
				
				$(window).on('scroll', function(){
				 if ( $(window).scrollTop() > altura ){
				  $('body').addClass('secundario');
						$('body').removeClass('principal');
						$('.on').removeClass('botones');
				  $('.navbar-fixed-top').removeClass('altura-1');
				  $('.navbar-fixed-top').addClass('altura-2');
						$('.imagen-on').attr("src","/imagenes/logo.png");
			
				 } else {
						$('body').addClass('principal');
						$('body').removeClass('secundario');
				  $('.on').addClass('botones');
				  $('body').removeClass('secundario');
				  $('.navbar-fixed-top').removeClass('altura-2');
				  $('.navbar-fixed-top').addClass('altura-1');
						$('.imagen-on').attr("src","/imagenes/logotipo.png");
				 }
				});
				
			   });
		
 </script>
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
	   
	  	$(document).ready(function(){
			//nos desplazamos entre todos los divs
			$('a.visible').click(function(e){
			e.preventDefault();
		    enlace  = $(this).attr('href');
		    $('html, body').animate({
		        scrollTop: $(enlace).offset().top
		    }, 1000);
			});
		});
	   
	  </script>
      <script type="text/javascript">
	  
		function mostrar(){
			
		document.getElementById('visible').style.display = 'block';
		document.getElementById('mostre-todo').style.display = 'none';}
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