<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/plantilla_padre2.dwt" codeOutsideHTMLIsLocked="false" -->
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
    <link rel="stylesheet" href="/datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
    <script type="text/javascript" src="/moment-develop/moment.js"></script>
	<script type="text/javascript" src="/js/transition.js"></script>
	<script type="text/javascript" src="/js/collapse.js"></script>
	<script type="text/javascript" src="/datetimepicker/src/js/bootstrap-datetimepicker.js"></script>


    <!-- InstanceBeginEditable name="head" -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&sensor=true"></script>
	<script type="text/javascript" src="/js/transition.js"></script>
	<script type="text/javascript" src="/js/collapse.js"></script>
	<link rel="stylesheet" href="/lightbox-master/dist/ekko-lightbox.css" media="screen">
	<script type="text/javascript" src="/js/lightbox/jquery.lightbox.min.js"></script>
	<link rel="stylesheet" href="/lightbox-master/dist/ekko-lightbox.css" media="screen">
	<script src="/lightbox-master/dist/ekko-lightbox.js"></script>
	<script src="/js/ajax.js"></script>

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
  <nav class="navbar navbar-default navbar-fixed-top altura-2">
       <div class="container-fluid">
           <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed toggle1" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
             <a title="Scape travel" href="/index.php" class="visible-md"><img src="/imagenes/logo.png"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse" align="center">
              <ul class="nav navbar-nav pull-left">
              	{section name=i loop=$enlaces_A}
                	{if $enlaces_A[i].enlaces neq ""}
                    	<li {if $enlaces_A[i].id_cat eq $activo}class="dropdown active" {else} class="dropdown"{/if}>
                          <a title="{$enlaces_A[i].etiqueta_cat}" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" class="botones">{$enlaces_A[i].nombre_cat}<span class="caret"></span></a>
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
                     	{if $enlaces_A[i].id_cat eq '53'}
                    <li {if $enlaces_A[i].id_cat eq $activo}class="active"{/if}><a title="{$enlaces_A[i].etiqueta_cat}" href="/catalogo_opcion.php?cont={$enlaces_A[i].id_cat}&cat=9">{$enlaces_A[i].icono_cat} {$enlaces_A[i].nombre_cat}</a></li>
                    	{else}
                        	{if $enlaces_A[i].id_cat eq '54'}
                            <li {if $enlaces_A[i].id_cat eq $activo}class="active"{/if}><a title="{$enlaces_A[i].etiqueta_cat}" href="/catalogo_opcion.php?cont={$enlaces_A[i].id_cat}&cat=5">{$enlaces_A[i].icono_cat} {$enlaces_A[i].nombre_cat}</a></li>
                            {else}
                            	{if $enlaces_A[i].id_cat eq '55'}
                            <li {if $enlaces_A[i].id_cat eq $activo}class="active"{/if}><a title="{$enlaces_A[i].etiqueta_cat}" href="/catalogo_opcion.php?cont={$enlaces_A[i].id_cat}&cat=4">{$enlaces_A[i].icono_cat} {$enlaces_A[i].nombre_cat}</a></li>


                            	{else}

                    <li {if $enlaces_A[i].id_cat eq $activo}class="active"{/if}><a title="{$enlaces_A[i].etiqueta_cat}" href="/contenido.php?cont={$enlaces_A[i].id_cat}">{$enlaces_A[i].icono_cat} {$enlaces_A[i].nombre_cat}</a></li>
                    	{/if}
                      {/if}
                   {/if}
                 {/if}

                 {/if}
               	{/section}
              </ul>
              <a title="Scape travel" href="/index.php" class="hidden-md"><img src="/imagenes/logo.png"></a>
               <ul class="nav navbar-nav pull-right">
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
           <button type="button" class="navbar-toggle collapsed toggle2" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div id="navbar2" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                  <li><a class="paddingtb10" title="Añade productos al carrito" href="#"><i class="fa fa-shopping-cart fa-2x"></i></a></li>
                  <li><a title="cantidad de productos" href="#">Items</a></li>
                  <li><a title="Total a Pagar" href="#" class="separador-izq">Total Bs:</a></li>
            </ul>
        <!--<a title="Scape Travel" href="/index.php" style="color:#6b5500; text-align:center; font-weight: bold;">Tour Operador</a>-->
            <ul class="nav navbar-nav navbar-right">
            	<li><a title="#" href="https://www.facebook.com/Scape-Travel-Marketing-CA-337376754709/?fref=ts" class="paddingtb10"><i class="fa fa-facebook-square fa-2x"></i>
</a></li>
                <li><a title="#" href="https://twitter.com/scapetravel" class="paddingtb10"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                <li><a title="#" href="https://www.instagram.com/scapetravelmarketing/" class="paddingtb10"><i class="fa fa-instagram fa-2x"></i></a></li>
            </ul>
        </div>

</nav>
     <!--Fin NavBar 2
        ===============================================-->



	<!--/. Buscador -->


    <!-- Contenido -->
	<div class="container-fluid vista-previa">

	<!-- InstanceBeginEditable name="contenido" -->
    <div class="row">
    	<div class="col-xs-12 no_padding" align="center">
        	<ol class="breadcrumb no_margin2">
  				<li><a href="#">Home</a></li>
  				<li><a href="#">Library</a></li>
  				<li class="active">Data</li>
			</ol>

        </div>
    </div>
    <div class="container-fluid no_padding">
    	<div class="row">
        	<div class="col-xs-12" align="center">
            	 <h2 style="margin-bottom:30px; margin-top:30px;">{$nombre_hotel}</h2>
          </div>
      <!--Banner detalles -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <!-- Banner Vistas Hotel
    ================================================== -->

    <div id="galeria_hotel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
          {assign var="cont" value=0}
          {section name=i loop=$detalle_hotel}
            <li data-target="#galeria_hotel" data-slide-to="{$cont}" {if $cont eq "0"}class="active"{/if}></li>
          {assign var="cont" value=$cont+1}
          {/section}
          </ol>

          <div class="carousel-inner" role="listbox">

          {assign var="cont" value=0}
          {section name=i loop=$imagenes}
            <div {if $cont eq "0"}class="item active"{else}class="item"{/if}>
              <img class="img-responsive" alt="{$imagenes[i].nombre_image}" src="/imagenes/{$imagenes[i].directorio_image}">
            </div>
          {assign var="cont" value=$cont+1}
          {/section}
          </div>

          <a class="left carousel-control" href="#galeria_hotel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#galeria_hotel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
    <!-- /.Banner -->
        </div>
      <!--Fin banner detalles -->
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
       {if $error eq 'no'}
          {$mensaje2}
       {/if}
    	<div class="panel panel-default panel-cotizacion" align="center">
        	<div class="panel-body no_padding no_padding2" style="border-bottom-color:#ccc; border-left-color:#ccc; border-right-color:#ccc;">
                <ul class="nav nav-tabs" style="background-color:#e6e6e6; border-bottom-color:#ccc;">
                              <li class="active"><a data-toggle="tab" href="#descripcion">Descripci&oacute;n</a></li>
                              {if $videos neq ""}<li><a data-toggle="tab" href="#video">Videos</a></li>{/if}
                              {if $imagenes neq ""}<li><a data-toggle="tab" href="#imagenes">Fotos</a></li>{/if}
                              {if $ubicacion neq ""}<li><a data-toggle="tab" href="#ubicacion">Ubicaci&oacute;n</a></li>{/if}
                              {if $promociones neq ""}<li><a data-toggle="tab" href="#promociones">Promoci&oacute;n</a></li>{/if}
                              {if $condiciones neq ""}<li><a data-toggle="tab" href="#condiciones">Condiciones</a></li>{/if}
                </ul>

                        <div class="tab-content">

                          <div id="descripcion" class="tab-pane fade in active" >
                            <div class="panel panel-default paneltabs">
                              <div class="panel-body">
                                <p>{$contenido}</p>
                                <br>
                                </div>
                            </div>
                          </div>

                          {if $condiciones neq ""}
                          <div id="condiciones" class="tab-pane fade">
                            <div class="panel panel-default paneltabs">
                              <div class="panel-body">

                                <p>{$condiciones}</p>

                                </div>
                            </div>
                          </div>
                         {/if}

                          {if $videos neq ""}
                          <div id="video" class="tab-pane fade">
                             <div class="panel panel-default paneltabs">
                              <div class="panel-body">
                                    <!--Modelo de Video Vimeo-->
                                    {section name=i loop=$videos}
                                    {if $videos[i].tipo_vid eq 'Vimeo'}
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="//player.vimeo.com/video/{$videos[i].url_vid}"  frameborder = "0" webkitallowfullscreen mozallowfullscreen allowfullscreen> </iframe>
                                        </div><br />
                                    {/if}
                                     {/section}

                                   <!--Fin modelo de video Vimeo-->

                                   <!--Modelo de video Youtube-->
                                   {section name=i loop=$videos}
                                    {if $videos[i].tipo_vid eq 'Youtube'}

                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{$videos[i].url_vid}" frameborder="0" allowfullscreen></iframe>
                                        </div><br />
                                    {/if}
                                     {/section}
                                   <!--Fin modelo de video Youtube-->
                                </div>
                              </div>
                          </div>
                          {/if}

                          {if $detalle_hotel neq ""}
                          <div id="imagenes" class="tab-pane fade">
                             <div class="panel panel-default paneltabs">
                              <div class="panel-body">
                                {section name=i loop=$detalle_hotel}
                                  <div class="col-xs-6 col-md-3">
                                <a class="thumbnail" title="{$detalle_hotel[i].nombre_dir}" href="/imagenes/{$detalle_hotel[i].directorio_image}" data-toggle="lightbox" data-title="{$nombres}" data-gallery="multiimages" data-footer="">
                                         <img  src="/imagenes/{$detalle_hotel[i].directorio_image}" alt="{$detalle_hotel[i].nombre_image}" class="img-responsive" width="700" />
                                        </a>
                                    </div>
                                {/section}
                                {literal}
                                    <script>
                                    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event){
                                        event.preventDefault();
                                      $(this).ekkoLightbox();
                                    });
                                    </script>
                                {/literal}
                                </div>
                              </div>
                          </div>
                          {/if}

                         {if $mapas neq ""}
                         <div id="ubicacion" class="tab-pane fade">
                             <div class="panel panel-default paneltabs">
                                <div class="panel-body" align="center">
                                {$mapas}
                                <div id="map"></div>
                                 <br/>
                                </div>
                              </div>
                          </div>

                         {/if}

                         {if $promociones neq ""}

                         <div id="promociones" class="tab-pane fade paneltabs">
                         <div class="row">
                         	{assign var="$cont" value=1}
                         	{section name=i loop=$promociones}
        					{if $cont eq '3'}</div> <div class="row" {if $hot ge '3'} id="visible" style="display:none;"{/if}>				                            {/if}


        						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="padding-left:15px; padding-top:20px;">
                                {assign var="cont" value=$cont+1}
            						<div class="panel panel-default panel-cotizacion">
                						<div class="panel-header" style="background-color:#0073c4; color:#fff;" align="center">
                  								<h3 class="no_margin2" style="padding-bottom:15px; padding-top:15px;">{$promociones[i].nombre_pro|truncate:20}</h3>
                            </div>
                                        <div class="panel-body titulo" align="center">
                                            <p> Desde $ {$promociones[i].detal_pro}</p>
                                        </div>
                    					<div class="panel-body no_padding no_padding2" align="center">
                    					{if $promociones[i].url_dir neq ""}
                                    	<a title="{$promociones[i].nombre_dir}" href="{$promociones[i].url_dir}">
                                        <img src="/imagenes/{$promociones[i].directorio_image}" alt="{$promociones[i].nombre_dir}" class="img-responsive" />
                                    	</a>
                                		{else}
                                    	<img src="/imagenes/{$promociones[i].directorio_image}" alt="{$promociones[i].nombre_dir}" class="img-responsive" />
                                		{/if}
                   						 </div>
                                        <div class="panel-footer">
                                            <a class="btn btn-default btn-block" title="{$paquetes[i].nombre_pro}" href="catalogo_detalle.php?id={$paquetes[i].id_pro}">Ver más  &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                     </div>
                                </div>
            				{/section}
                            {if $promociones|@count gt 3}
      						<div class="container-fluid" style="margin-top:10px; margin-bottom:10px;">
      							<div class="row" id="mostre-todo">
        							<div class="col-xs-12" align="center">
            							<a href="#visible" class="visible btn btn-primary" onclick="mostrar()"><i class="fa fa-refresh"></i>&nbsp;Cargas M&aacute;s</a>
           							 </div>
        						</div>
      						</div>
      						{/if}
                          </div>
                       </div>

                         {/if}


                     </div>
                   </div>
                <!---Termina El panel de promociones --->

                     <div id="facilidades" class="panel-body center-block" style="border:1px solid #ccc;">
                     	{section name=i loop=$facilidades}
                       			 {if $facilidades[i].etiqueta_fac neq ""}
                            		<a title="{$facilidades[i].nombre_fac}"><i class="fa {$facilidades[i].etiqueta_fac} fa-2x color-fa"></i></a>
                        		 {/if}
                    	{/section}
                     </div>
                     <div class="panel-body center-block" style="border:1px solid #ccc; border-top-color:transparent; border-bottom-color:transparent;">
                     	{if $categoria eq '6'}
                        <!--BOUTIQUE -->
                        <h4 class="color-fa no_margin2">Boutique</h4>

                        {elseif $categoria eq '7'}
                        <!--POSADA -->
                        <h4 class="color-fa no_margin2">Boutique</h4>
                        {else}
                            {assign var="estrella" value=1}
                            {section name=j loop=5}
                             <i class="fa fa-star {if $estrella le $categoria} color-fa {else} color-fa2 {/if} fa-2x"></i>
                             {assign var="estrella" value=$estrella+1}


                            {/section}
                        {/if}
                     </div>
                     <div class="panel-footer" style="border: 1px solid #ccc;">
                     	<a class="btn btn-default btn-block" title="Reservar Hotel" href="#" onClick="javascript: mostrar_formulario_reserva();"> <i class="fa fa-calendar-check-o"></i> Solicitar Reserva</a>
                     </div>
                   </div>
             </div>

			</div>

            <a id="reserva"></a>

            <hr class="divider" />

            <div id="formulario_reserva" class="row" hidden="">
                <div class="col-xs-8 col-xs-offset-2">
                    <h3>Solicitud de Reserva {$nombre_hotel}</h3>

                    <div class="row">
                    	<div class="col-sm-4">
                            <div class="form-group">
                                <label for="numero_habitaciones">Seleccione Nº de Habitaciones:</label>
                                <select class="form-control" name="numero_habitaciones" id="numero_habitaciones" onchange="javascripts: asignNumeroHabitacion();">
                                  <option selected hidden value="">Seleccione Habitación</option>
                                  <option value="1">1 Habitación</option>
                                  <option value="2">2 Habitaciones</option>
                                  <option value="3">3 Habitaciones</option>
                                  <option value="4">4 Habitaciones</option>
                                  <option value="5">5 Habitaciones</option>
                                  <option value="6">6 Habitaciones</option>
                                  <option value="7">7 Habitaciones</option>
                                  <option value="8">8 Habitaciones</option>
                                </select>
                            </div>
                    	</div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="llegada">Fecha de entrada</label>
                                <div class='input-group date' id='datetimepicker1'>
                                <input type="text" class="form-control" name="llegada" id="llegada" placeholder="Fecha de entrada*" value="{$llegada}">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                </div>
                            </div>
                         </div>

                         <div class="col-sm-4">
                            <div class="form-group">
                                <label for="salida">Fecha de salida</label>
                                <div class='input-group date' id='datetimepicker2'>
                                <input type="text" class="form-control" name="salida" id="salida" placeholder="Fecha de salida*" value="{$salida}">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                </div>
                            </div>
                    	</div>

                    </div>
                    
                    <div class="modal fade" id="reservacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">

                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-xs-12 text-center titulo-modal">Informacion Personal</div>

                                  <form class="form-horizontal" action="" name="reservacion" method="post">

                                  <div class="col-xs-12">
                                    <div class="form-group">
                                      <input type="text" class="form-control form-contacto form-group-contacto" name="nombre" placeholder="Nombre" value="" required>
                                    </div>
                                  </div>
                                  <div class="col-xs-12">
                                    <div class="form-group">
                                      <input type="text" class="form-control form-contacto form-group-contacto" name="apellido" placeholder="Apellido" value="" required>
                                    </div>
                                  </div>
                                  <div class="col-xs-12">
                                    <div class="form-group">
                                      <input type="number" class="form-control form-contacto form-group-contacto" name="telefono" placeholder="Número Telefónico" value="" required>
                                    </div>
                                  </div>
                                  <div class="col-xs-12">
                                    <div class="form-group">
                                      <input type="text" class="form-control form-contacto form-group-contacto" name="correo" placeholder="Correo Electronico" value="" required>
                                    </div>
                                  </div>
                                  <div class="col-xs-12">
                                    <div class="form-group">
                                      <input type="number" class="form-control form-contacto form-group-contacto" min="18" max="90" name="edad" placeholder="Edad" required>
                                    </div>
                                  </div>
                                  <div class="col-xs-12">
                                    <div class="form-group">
                                      <input type="text" class="form-control form-contacto form-group-contacto" placeholder="Pais" name="pais" required>
                                    </div>
                                  </div>
                                  <div class="col-xs-12">
                                    <div class="form-group">
                                      <input type="text" class="form-control form-contacto form-group-contacto" placeholder="Estado" name="estado" required>
                                    </div>
                                  </div>
                                  <div class="col-xs-12">
                                    <div class="form-group">
                                      <input type="text" class="form-control form-group-contacto form-contacto" name="direccion" placeholder="Direccion" required>
                                    </div>
                                  </div>
                                  <div class="col-xs-12">
                                    <div class="col-xs-6 no_padding">
                                      <button type="button" class="form-control btn btn-default" data-dismiss="modal" >Cancel</button>
                                    </div>
                                    <div class="col-xs-6 no_padding">
                                      <input type="hidden" name="envio" value="Guardar">
                                      <input type="submit" class="form-control btn btn-success" value="RESERVAR">
                                    </div>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                    <div id="panel_habitacion"></div>

                    <div class="col-xs-12 text-right" id="total">
                    </div>

                    <input name="id_hotel" id="id_hotel" type="hidden" value="{$id}">


                  </div><!-- End Row -->

            </div>
        </div>
    <br>

    <link href="/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script src="/js/moment-with-locales.js"></script>
	<script src="/js/bootstrap-datetimepicker.js"></script>

    {literal}
	<script type="text/javascript">
		$(function () {
			$('#datetimepicker1').datetimepicker({
			viewMode: 'days',
			format: 'DD-MM-YYYY'
			});
		});

		$(function () {
			$('#datetimepicker2').datetimepicker({
				viewMode: 'days',
				format: 'DD-MM-YYYY'
			});
		});

		$(function () {
			$('#datetimepicker3').datetimepicker({
				viewMode: 'days',
				format: 'DD-MM-YYYY'
			});
		});


		$("#datetimepicker1").on("dp.change", function (e) {
            $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
        });

    </script>
    {/literal}

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
        	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-15">
            	 {assign var="cont" value=$cont+1}

            	<div class="panel panel-default panel-cotizacion">
                	<div class="panel-header" align="center">
                  		<h4 class="no_margin2">{$paquetes[i].nombre_pro|truncate:20}</h4>
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


                    <div class="col-xs-12 paddingtb3530" align="center">
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
      <div  class="container-fluid">
    	  <div class="row excursiones">
                <div class="col-xs-12" align="center">
                        <h1>Excursiones</h1>
                </div>
         		{assign var="cont" value=0}
        		{section name=i loop=$excursiones}
                {if $cont le 4}
                    {if $cont eq 2}
                <!--Relleno para dejar un espacio segun diseño  -->
                    <div class="col-xs-12 col-sm-6 hidden-md col-lg-15">
                    </div>
                    {assign var="cont" value=$cont+1}
                	{/if}

        		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-15">
             	{assign var="cont" value=$cont+1}
            	<div class="panel panel-default panel-cotizacion">
                	<div class="panel-header" align="center">
                    	<h4 class="no_margin2">{$excursiones[i].nombre_pro|truncate:20}</h4>
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


                    <div class="col-xs-12 paddingtb3530" align="center">
                        <a class="btn btn-primary" href="/catalogo_opcion.php?cont=55&cat=4"><i class="fa fa-gift"></i>&nbsp;Ver Excursiones</a>
                    </div>

         </div>
       </div>
      <!-- Fin excursiones -->

      <!--Categorias -->
      <div class="container-fluid">
      	<div class="row">
  				<div class="col-xs-12 col-lg-7 navbar-categoria" style="background-color:#143058;">
                	<div class="row">
                     	{section name=i loop=$enlaces_A2}
                          {if $enlaces_A2[i].nombre_cat eq 'Inicio'}
                          <div class="col-xs-6 col-sm-15 col-md-15 col-lg-15 categoria" align="center">
                          <a class="text-center iconos-btn" href="/noticias.php">
                          	<i class="fa fa-newspaper-o fa-3x"></i><br>
                            <p class="fuente-categoria">Noticias</p>
                          </a>
                          </div>

                            {else}
                             <div class="col-xs-6 col-sm-15 col-md-15 col-lg-15 categoria" align="center">
                            <a class="text-center iconos-btn" href="{$enlaces_A2[i].enlace_cat}">
        						{$enlaces_A2[i].icono_cat}<br>
                                <p class="fuente-categoria">{$enlaces_A2[i].nombre_cat}</p>
      					  	</a>
                            </div>
                            {/if}
                     	{/section}
                        {section name=i loop=$enlaces_B2}
                         <div class="col-xs-6 col-sm-15 col-md-15 col-lg-15 categoria" align="center">
                          <a class="text-center iconos-btn" href="{$enlaces_B2[i].enlace_cat}">
                           {$enlaces_B2[i].icono_cat}<br>
                                <p class="fuente-categoria">{$enlaces_B2[i].nombre_cat}</p>
                          </a>
                          </div>
                        {/section}
                        </div>
                      </div>
                      <div class="col-xs-12 col-lg-5">
                      		<div class="panel panel-default panel-cotizacion">
                    	<div class="panel-body no_padding no_padding2">
                        			<form action="" method="post" role="form" name="formulario_boletos" id="formulario_boletos">
                            <div class="form-group">
                                {$msj_boletos}
                            </div>
                       <div class="form-group">
                        <div class="input-group">
                           <span class="input-group-addon">
                           <select name="tipo-b" id="tipo-b">
                              <option value="V-" {if $tipob eq "V-"} selected='selected' {/if}>V</option>
                              <option value="E-" {if $tipob eq "E-"} selected='selected' {/if}>E</option>
                              <option value="P-" {if $tipob eq "P-"} selected='selected' {/if}>P</option>
                              <option value="RIF:" {if $tipob eq "RIF:"} selected='selected' {/if}>RIF</option>
                          </select></span>

                         <label class="sr-only" for="identificacion" >Cédula o Pasaporte:</label>
                      <input name="cedula-b" type="text" id="cedula-b" value="{$cedulab}" class="form-control" maxlength="9" onkeypress="javascript: return validarnum(event);" placeholder="Cédula o Pasaporte *" />

                        </div>
                     </div>
                             <div class="form-group">
                                  <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <label class="sr-only" for="nombre">Nombres:</label>
                                    <input name="nombre-b" type="text" id="nombre-b" class="form-control" onkeypress="javascript: return validarletras(event);" value="{$nombreb}" maxlength="100" placeholder="Nombres y Apellidos *" />

                                  </div>
                             </div>



                              <div class="form-group">
                                <div class="input-group">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                  <label class="sr-only" for="correo">Correo:</label>
                                  <input name="email-b" type="text" id="email-b" class="form-control" onkeypress="javascript: return validarcorreo(event);" value="{$emailb}" maxlength="60" placeholder="Correo *" />

                               </div>
                           </div>

                          <div class="form-group">
                                <div class="input-group">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                                 <label class="sr-only" for="telefono">Tel&eacute;fono:</label>
                                <input name="telefono-b" class="form-control" type="text" id="telefono-b" onkeypress="javascript: return validarnum(event);" value="{$telefonob}" maxlength="12" placeholder="Telefono *"/>

                              </div>
                              </div>

                          <div class="container-fluid">
                                    	<div class="row">
                                   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no_padding espaciado-10">
                                            <div class="form-group">
                                   			<div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                                             <label class="sr-only" for="origen">Origen:</label>
                                                <input  name="origen-b" type="text" id="origen-b" class="form-control"  value="{$origenb}" maxlength="50" class="form-control" placeholder="Origen *" />
                                     		</div>
                                         </div>
                                      </div>

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no_padding">
                                	<div class="form-group">
                          			<div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-road"></span></span>
                                            <label class="sr-only" for="destino">Destino:</label>
                                                <input  name="destino-b" type="text" id="destino-b" class="form-control"  value="{$destinob}" maxlength="50" class="form-control" placeholder="Destino *" />
                           			</div>
                                    </div>
                     			</div>

                                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no_padding espaciado-10">
                                                <div class="form-group">
                                            <label class="sr-only" for="fecha partida">Fecha de Partida:</label>


                                            <div class='input-group date' id='datetimepicker'>
                                                 <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-send"></span>
                                                </span>
                                               	<input type='text' class="form-control" id="fecha_ida-b" name="fecha_ida-b" value="{$fecha_idab}" placeholder="Partida *" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>

                                    {literal}
                                        <script type="text/javascript">
                                            $(function () {
                                            $('#datetimepicker').datetimepicker({
                                             format: 'DD-MM-YYYY'
                                            });
                                        });
                                        </script>
                                    {/literal}
                    					</div>
                      				</div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no_padding">
                                    	<div class="form-group">
                    					<label class="sr-only" for="Fecha Salida">Fecha de Regreso:</label>
                    					<div class='input-group date' id='datetimepicker2'>
                        					<span class="input-group-addon">
                                				<span class="glyphicon glyphicon-send fa-rotate-180"></span>
                        					</span>
                           					 <input type='text' class="form-control" id="fecha_vuelta-b" name="fecha_vuelta-b" value="{$fecha_vueltab}" placeholder="Regreso *" />
                        					<span class="input-group-addon">
                                				<span class="glyphicon glyphicon-calendar"></span>
                        					</span>
                    					</div>
                                        {literal}
                                            <script type="text/javascript">
                                                $(function () {

                                                $('#datetimepicker2').datetimepicker({
                                                 format: 'DD-MM-YYYY'
                                                });
                                            });
                                            </script>
                                        {/literal}
                    						</div>
                    					</div>

                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no_padding espaciado-10">
                                        	<div class="form-group">
                                        	<div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                            <label class="sr-only" for="adultos"># Adultos:</label>
                                                <input  name="adultos-b" type="text" id="adultos-b" onkeypress="javascript: return validarnum(event);" class="form-control" onblur="javascript: return numero_adultos();" value="{$adultosb}" maxlength="4" class="form-control" placeholder="Adultos *" />
                                        	</div>
                                            </div>
                                    	</div>
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no_padding espaciado-10">
                                        	<div class="form-group">
                                     		<div class="input-group">
                                     			<span class="input-group-addon">&nbsp;<i class="fa fa-child"></i>  </span>
                                     				<label class="sr-only" for="Pax">Menores:</label>
                                         			<input class="form-control" name="menores-b" type="text" id="menores-b" onkeypress="javascript: return validarnum(event);" onblur="javascript: return numero_ninos();" value="{$menoresb}" maxlength="4" placeholder="Menores *" />
                                     		</div>
                                          </div>
                                    	</div>
                                   <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no_padding">
                                   <div class="form-group">
                                     <div class="input-group">
                                        <span class="input-group-addon">Edad</span>
                                        <label class="sr-only" for="niños">Edades de ni&ntilde;os:</label>
                                        <input class="form-control" name="edades-b" type="text" id="edades-b" onkeypress="javascript: return validarnum_coma(event);" value="{$edadesb}" maxlength="20" placeholder="Ej 3,6" />
                                     </div>
                                     </div>
                                     </div>
                                     </div>
                                       </div>
                                      </div>

                                       <div class="panel-footer">
                        						<input name="enviar" type="hidden" id="enviar"  value="Enviar Solicitud-bol" />
                                                <button type="submit" class="btn btn-default btn-block" title="Cotización de boletos" ><i class="fa fa-calendar-check-o"></i> &nbsp; Cotizar Boletos</button>

                    				   </div>
                            	</form>                        </div>
                     </div>
                      </div>

			</div>
      </div>

       <!-- Fin Categorias -->

 <!-- Pie de Pagina -->
   <footer>
    	<div class="container-fluid">
            <div class="row pinta1">

            	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="tam-info">

                	<div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                        <!--<h5>Menú Principal</h5>-->
                            <ul class="items">
                            <li><img src="/imagenes/logo-footer.png"></li>

                            <li class="paddingt7">
    							<a class="foot-btn">Scape Travel C.A</a>
                            </li>
                             <li class="paddingt7">
    							<a class="foot-btn">RIF J-30991795-1</a>
                            </li>
                              <li class="paddingt7">
    							<a class="foot-btn">VT:2631 | T</a>
                            </li>
                              <li class="paddingt7">
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

            	<div  class="col-xs-12 col-sm-12 col-md-4 col-lg-2">

                	<div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                        <!--<h5>Menú Principal</h5>-->
                             <ul class="items">
                            <li><strong>SCAPE TRAVEL</strong></li>
                            {section name=j loop=$enlaces_A}
                            {if $enlaces_A[j].nombre_cat eq 'Inicio'}
                            	 <li class="paddingt7">
    <a  class="foot-btn" title="Noticias" href="/noticias.php">Noticias</a>
                            </li>

                            {else}
                           	 <li class="paddingt7">
    <a  class="foot-btn" title="{$enlaces_A[j].etiqueta_cat}" href="/contenido.php?cont={$enlaces_A[j].id_cat}">{$enlaces_A[j].nombre_cat}</a>
                            </li>
                            {/if}
                            {/section}
                             {section name=j loop=$enlaces_C}
                            <li class="paddingt7"><a class="foot-btn" title="{$enlaces_C[j].etiqueta_cat}" href="/contenido.php?cont={$enlaces_C[j].id_cat}">{$enlaces_C[j].nombre_cat}</a></li>
                            {/section}
                            </ul>
                        </div>
                    </div>

                </div>
                <div  class="col-xs-12 col-sm-12 col-md-4 col-lg-2">

                	<div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                        <!--<h5>Menú Principal</h5>-->
                            <ul class="items">
                            <li><strong>QUE OFRECEMOS</strong></li>
                            {section name=j loop=$enlaces_B}
                            <li class="paddingt7">
    <a  class="foot-btn" title="{$enlaces_B[j].etiqueta_cat}" href="/contenido.php?cont={$enlaces_B[j].id_cat}">{$enlaces_B[j].nombre_cat|lower|capitalize:true}</a>
                            </li>
                            {/section}

                            </ul>
                        </div>
                    </div>

                </div>

            	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" align="center">
                	<div class="container-fluid">
                    	<div class="row">
                        <div class="col-xs-12" align="center">
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
                        <div class="col-xs-8" align="center">
                         <h6 class="pull-right">Dise&ntilde;o y Desarrollo:&nbsp; <a class="enlace" href="http://www.diazcreativos.net.ve" target="_blank">D&iacute;az Creativos</a></h6>
                         </div>
                        <div class="col-xs-4">
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
