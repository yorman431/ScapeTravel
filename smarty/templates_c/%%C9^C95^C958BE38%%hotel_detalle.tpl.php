<?php /* Smarty version 2.6.9, created on 2017-03-22 22:43:21
         compiled from hotel_detalle.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'hotel_detalle.tpl', 354, false),array('modifier', 'count', 'hotel_detalle.tpl', 374, false),array('modifier', 'lower', 'hotel_detalle.tpl', 1070, false),array('modifier', 'capitalize', 'hotel_detalle.tpl', 1070, false),)), $this); ?>
<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/plantilla_padre2.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="title" content="<?php echo $this->_tpl_vars['accion']; ?>
 | Agencia de Viajes Scape Travel Marketing | Venezuela" />
    <meta name="author" content="Scape Travel, C.A." />
    <meta name="subject" content="<?php echo $this->_tpl_vars['accion']; ?>
 | Agencia de Viajes Scape Travel Marketing | Venezuela" />
    <meta name="description" content="<?php echo $this->_tpl_vars['descripcion']; ?>
" />

    <meta name="Keywords" content="<?php echo $this->_tpl_vars['claves']; ?>
"/>

    <link rel="icon" href="/imagenes/icono.ico"/>
    <meta name="Language" content="Spanish" />
    <meta name="Revisit" content="2 days" />
    <meta name="Distribution" content="Global"/>
    <meta name="Robots" content="All" />
    <meta charset="utf-8">
    <title><?php echo $this->_tpl_vars['accion']; ?>
 | Agencia de Viajes Scape Travel Marketing | Venezuela</title>

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
    <?php echo '
    <script>

	  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

	  ga(\'create\', \'UA-6623041-31\', \'auto\');
	  ga(\'send\', \'pageview\');

	</script>
    '; ?>

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
              	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['enlaces_A']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                	<?php if ($this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['enlaces'] != ""): ?>
                    	<li <?php if ($this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat'] == $this->_tpl_vars['activo']): ?>class="dropdown active" <?php else: ?> class="dropdown"<?php endif; ?>>
                          <a title="<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['etiqueta_cat']; ?>
" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" class="botones"><?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['nombre_cat']; ?>
<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">

                        <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['enlaces']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                         <li><a title="<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['enlaces'][$this->_sections['j']['index']]['nombre_cat']; ?>
" href="/contenido.php?cont=<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat']; ?>
&cat=<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['enlaces'][$this->_sections['j']['index']]['id_cat']; ?>
"><?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['enlaces'][$this->_sections['j']['index']]['nombre_cat']; ?>
</a>
                            </li>

                        <?php endfor; endif; ?>

                        </ul>
                        </li>
                    <?php else: ?>
                     <?php if ($this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat'] == '52'): ?>
                    <li <?php if ($this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat'] == $this->_tpl_vars['activo']): ?>class="active"<?php endif; ?>><a title="<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['etiqueta_cat']; ?>
" href="/hoteles.php?cont=<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat']; ?>
"><?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['icono_cat']; ?>
 <?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['nombre_cat']; ?>
</a></li>
                    <?php else: ?>
                     	<?php if ($this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat'] == '53'): ?>
                    <li <?php if ($this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat'] == $this->_tpl_vars['activo']): ?>class="active"<?php endif; ?>><a title="<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['etiqueta_cat']; ?>
" href="/catalogo_opcion.php?cont=<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat']; ?>
&cat=9"><?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['icono_cat']; ?>
 <?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['nombre_cat']; ?>
</a></li>
                    	<?php else: ?>
                        	<?php if ($this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat'] == '54'): ?>
                            <li <?php if ($this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat'] == $this->_tpl_vars['activo']): ?>class="active"<?php endif; ?>><a title="<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['etiqueta_cat']; ?>
" href="/catalogo_opcion.php?cont=<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat']; ?>
&cat=5"><?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['icono_cat']; ?>
 <?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['nombre_cat']; ?>
</a></li>
                            <?php else: ?>
                            	<?php if ($this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat'] == '55'): ?>
                            <li <?php if ($this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat'] == $this->_tpl_vars['activo']): ?>class="active"<?php endif; ?>><a title="<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['etiqueta_cat']; ?>
" href="/catalogo_opcion.php?cont=<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat']; ?>
&cat=4"><?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['icono_cat']; ?>
 <?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['nombre_cat']; ?>
</a></li>


                            	<?php else: ?>

                    <li <?php if ($this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat'] == $this->_tpl_vars['activo']): ?>class="active"<?php endif; ?>><a title="<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['etiqueta_cat']; ?>
" href="/contenido.php?cont=<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['id_cat']; ?>
"><?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['icono_cat']; ?>
 <?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['i']['index']]['nombre_cat']; ?>
</a></li>
                    	<?php endif; ?>
                      <?php endif; ?>
                   <?php endif; ?>
                 <?php endif; ?>

                 <?php endif; ?>
               	<?php endfor; endif; ?>
              </ul>
              <a title="Scape travel" href="/index.php" class="hidden-md"><img src="/imagenes/logo.png"></a>
               <ul class="nav navbar-nav pull-right">
                	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['enlaces_B']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                	<li <?php if ($this->_tpl_vars['enlaces_B'][$this->_sections['i']['index']]['id_cat'] == $this->_tpl_vars['activo']): ?>class="active"<?php endif; ?>><a title="<?php echo $this->_tpl_vars['enlaces_B'][$this->_sections['i']['index']]['etiqueta_cat']; ?>
" href="/contenido.php?cont=<?php echo $this->_tpl_vars['enlaces_B'][$this->_sections['i']['index']]['id_cat']; ?>
"><?php echo $this->_tpl_vars['enlaces_B'][$this->_sections['i']['index']]['icono_cat']; ?>
 <?php echo $this->_tpl_vars['enlaces_B'][$this->_sections['i']['index']]['nombre_cat']; ?>
</a></li>
                	<?php endfor; endif; ?>

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
            	 <h2 style="margin-bottom:30px; margin-top:30px;"><?php echo $this->_tpl_vars['nombre_hotel']; ?>
</h2>
          </div>
      <!--Banner detalles -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <!-- Banner Vistas Hotel
    ================================================== -->

    <div id="galeria_hotel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
          <?php $this->assign('cont', 0); ?>
          <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['detalle_hotel']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <li data-target="#galeria_hotel" data-slide-to="<?php echo $this->_tpl_vars['cont']; ?>
" <?php if ($this->_tpl_vars['cont'] == '0'): ?>class="active"<?php endif; ?>></li>
          <?php $this->assign('cont', $this->_tpl_vars['cont']+1); ?>
          <?php endfor; endif; ?>
          </ol>

          <div class="carousel-inner" role="listbox">

          <?php $this->assign('cont', 0); ?>
          <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['imagenes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <div <?php if ($this->_tpl_vars['cont'] == '0'): ?>class="item active"<?php else: ?>class="item"<?php endif; ?>>
              <img class="img-responsive" alt="<?php echo $this->_tpl_vars['imagenes'][$this->_sections['i']['index']]['nombre_image']; ?>
" src="/imagenes/<?php echo $this->_tpl_vars['imagenes'][$this->_sections['i']['index']]['directorio_image']; ?>
">
            </div>
          <?php $this->assign('cont', $this->_tpl_vars['cont']+1); ?>
          <?php endfor; endif; ?>
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
       <?php if ($this->_tpl_vars['error'] == 'no'): ?>
          <?php echo $this->_tpl_vars['mensaje2']; ?>

       <?php endif; ?>
    	<div class="panel panel-default panel-cotizacion" align="center">
        	<div class="panel-body no_padding no_padding2" style="border-bottom-color:#ccc; border-left-color:#ccc; border-right-color:#ccc;">
                <ul class="nav nav-tabs" style="background-color:#e6e6e6; border-bottom-color:#ccc;">
                              <li class="active"><a data-toggle="tab" href="#descripcion">Descripci&oacute;n</a></li>
                              <?php if ($this->_tpl_vars['videos'] != ""): ?><li><a data-toggle="tab" href="#video">Videos</a></li><?php endif; ?>
                              <?php if ($this->_tpl_vars['imagenes'] != ""): ?><li><a data-toggle="tab" href="#imagenes">Fotos</a></li><?php endif; ?>
                              <?php if ($this->_tpl_vars['ubicacion'] != ""): ?><li><a data-toggle="tab" href="#ubicacion">Ubicaci&oacute;n</a></li><?php endif; ?>
                              <?php if ($this->_tpl_vars['promociones'] != ""): ?><li><a data-toggle="tab" href="#promociones">Promoci&oacute;n</a></li><?php endif; ?>
                              <?php if ($this->_tpl_vars['condiciones'] != ""): ?><li><a data-toggle="tab" href="#condiciones">Condiciones</a></li><?php endif; ?>
                </ul>

                        <div class="tab-content">

                          <div id="descripcion" class="tab-pane fade in active" >
                            <div class="panel panel-default paneltabs">
                              <div class="panel-body">
                                <p><?php echo $this->_tpl_vars['contenido']; ?>
</p>
                                <br>
                                </div>
                            </div>
                          </div>

                          <?php if ($this->_tpl_vars['condiciones'] != ""): ?>
                          <div id="condiciones" class="tab-pane fade">
                            <div class="panel panel-default paneltabs">
                              <div class="panel-body">

                                <p><?php echo $this->_tpl_vars['condiciones']; ?>
</p>

                                </div>
                            </div>
                          </div>
                         <?php endif; ?>

                          <?php if ($this->_tpl_vars['videos'] != ""): ?>
                          <div id="video" class="tab-pane fade">
                             <div class="panel panel-default paneltabs">
                              <div class="panel-body">
                                    <!--Modelo de Video Vimeo-->
                                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['videos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['tipo_vid'] == 'Vimeo'): ?>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="//player.vimeo.com/video/<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['url_vid']; ?>
"  frameborder = "0" webkitallowfullscreen mozallowfullscreen allowfullscreen> </iframe>
                                        </div><br />
                                    <?php endif; ?>
                                     <?php endfor; endif; ?>

                                   <!--Fin modelo de video Vimeo-->

                                   <!--Modelo de video Youtube-->
                                   <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['videos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['tipo_vid'] == 'Youtube'): ?>

                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['url_vid']; ?>
" frameborder="0" allowfullscreen></iframe>
                                        </div><br />
                                    <?php endif; ?>
                                     <?php endfor; endif; ?>
                                   <!--Fin modelo de video Youtube-->
                                </div>
                              </div>
                          </div>
                          <?php endif; ?>

                          <?php if ($this->_tpl_vars['detalle_hotel'] != ""): ?>
                          <div id="imagenes" class="tab-pane fade">
                             <div class="panel panel-default paneltabs">
                              <div class="panel-body">
                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['detalle_hotel']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                  <div class="col-xs-6 col-md-3">
                                <a class="thumbnail" title="<?php echo $this->_tpl_vars['detalle_hotel'][$this->_sections['i']['index']]['nombre_dir']; ?>
" href="/imagenes/<?php echo $this->_tpl_vars['detalle_hotel'][$this->_sections['i']['index']]['directorio_image']; ?>
" data-toggle="lightbox" data-title="<?php echo $this->_tpl_vars['nombres']; ?>
" data-gallery="multiimages" data-footer="">
                                         <img  src="/imagenes/<?php echo $this->_tpl_vars['detalle_hotel'][$this->_sections['i']['index']]['directorio_image']; ?>
" alt="<?php echo $this->_tpl_vars['detalle_hotel'][$this->_sections['i']['index']]['nombre_image']; ?>
" class="img-responsive" width="700" />
                                        </a>
                                    </div>
                                <?php endfor; endif; ?>
                                <?php echo '
                                    <script>
                                    $(document).delegate(\'*[data-toggle="lightbox"]\', \'click\', function(event){
                                        event.preventDefault();
                                      $(this).ekkoLightbox();
                                    });
                                    </script>
                                '; ?>

                                </div>
                              </div>
                          </div>
                          <?php endif; ?>

                         <?php if ($this->_tpl_vars['mapas'] != ""): ?>
                         <div id="ubicacion" class="tab-pane fade">
                             <div class="panel panel-default paneltabs">
                                <div class="panel-body" align="center">
                                <?php echo $this->_tpl_vars['mapas']; ?>

                                <div id="map"></div>
                                 <br/>
                                </div>
                              </div>
                          </div>

                         <?php endif; ?>

                         <?php if ($this->_tpl_vars['promociones'] != ""): ?>

                         <div id="promociones" class="tab-pane fade paneltabs">
                         <div class="row">
                         	<?php $this->assign(($this->_tpl_vars['cont']), 1); ?>
                         	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['promociones']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        					<?php if ($this->_tpl_vars['cont'] == '3'): ?></div> <div class="row" <?php if ($this->_tpl_vars['hot'] >= '3'): ?> id="visible" style="display:none;"<?php endif; ?>>				                            <?php endif; ?>


        						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="padding-left:15px; padding-top:20px;">
                                <?php $this->assign('cont', $this->_tpl_vars['cont']+1); ?>
            						<div class="panel panel-default panel-cotizacion">
                						<div class="panel-header" style="background-color:#0073c4; color:#fff;" align="center">
                  								<h3 class="no_margin2" style="padding-bottom:15px; padding-top:15px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['promociones'][$this->_sections['i']['index']]['nombre_pro'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
</h3>
                            </div>
                                        <div class="panel-body titulo" align="center">
                                            <p> Desde $ <?php echo $this->_tpl_vars['promociones'][$this->_sections['i']['index']]['detal_pro']; ?>
</p>
                                        </div>
                    					<div class="panel-body no_padding no_padding2" align="center">
                    					<?php if ($this->_tpl_vars['promociones'][$this->_sections['i']['index']]['url_dir'] != ""): ?>
                                    	<a title="<?php echo $this->_tpl_vars['promociones'][$this->_sections['i']['index']]['nombre_dir']; ?>
" href="<?php echo $this->_tpl_vars['promociones'][$this->_sections['i']['index']]['url_dir']; ?>
">
                                        <img src="/imagenes/<?php echo $this->_tpl_vars['promociones'][$this->_sections['i']['index']]['directorio_image']; ?>
" alt="<?php echo $this->_tpl_vars['promociones'][$this->_sections['i']['index']]['nombre_dir']; ?>
" class="img-responsive" />
                                    	</a>
                                		<?php else: ?>
                                    	<img src="/imagenes/<?php echo $this->_tpl_vars['promociones'][$this->_sections['i']['index']]['directorio_image']; ?>
" alt="<?php echo $this->_tpl_vars['promociones'][$this->_sections['i']['index']]['nombre_dir']; ?>
" class="img-responsive" />
                                		<?php endif; ?>
                   						 </div>
                                        <div class="panel-footer">
                                            <a class="btn btn-default btn-block" title="<?php echo $this->_tpl_vars['paquetes'][$this->_sections['i']['index']]['nombre_pro']; ?>
" href="catalogo_detalle.php?id=<?php echo $this->_tpl_vars['paquetes'][$this->_sections['i']['index']]['id_pro']; ?>
">Ver más  &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                     </div>
                                </div>
            				<?php endfor; endif; ?>
                            <?php if (count($this->_tpl_vars['promociones']) > 3): ?>
      						<div class="container-fluid" style="margin-top:10px; margin-bottom:10px;">
      							<div class="row" id="mostre-todo">
        							<div class="col-xs-12" align="center">
            							<a href="#visible" class="visible btn btn-primary" onclick="mostrar()"><i class="fa fa-refresh"></i>&nbsp;Cargas M&aacute;s</a>
           							 </div>
        						</div>
      						</div>
      						<?php endif; ?>
                          </div>
                       </div>

                         <?php endif; ?>


                     </div>
                   </div>
                <!---Termina El panel de promociones --->

                     <div id="facilidades" class="panel-body center-block" style="border:1px solid #ccc;">
                     	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['facilidades']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                       			 <?php if ($this->_tpl_vars['facilidades'][$this->_sections['i']['index']]['etiqueta_fac'] != ""): ?>
                            		<a title="<?php echo $this->_tpl_vars['facilidades'][$this->_sections['i']['index']]['nombre_fac']; ?>
"><i class="fa <?php echo $this->_tpl_vars['facilidades'][$this->_sections['i']['index']]['etiqueta_fac']; ?>
 fa-2x color-fa"></i></a>
                        		 <?php endif; ?>
                    	<?php endfor; endif; ?>
                     </div>
                     <div class="panel-body center-block" style="border:1px solid #ccc; border-top-color:transparent; border-bottom-color:transparent;">
                     	<?php if ($this->_tpl_vars['categoria'] == '6'): ?>
                        <!--BOUTIQUE -->
                        <h4 class="color-fa no_margin2">Boutique</h4>

                        <?php elseif ($this->_tpl_vars['categoria'] == '7'): ?>
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
                             <i class="fa fa-star <?php if ($this->_tpl_vars['estrella'] <= $this->_tpl_vars['categoria']): ?> color-fa <?php else: ?> color-fa2 <?php endif; ?> fa-2x"></i>
                             <?php $this->assign('estrella', $this->_tpl_vars['estrella']+1); ?>


                            <?php endfor; endif; ?>
                        <?php endif; ?>
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
                    <h3>Solicitud de Reserva <?php echo $this->_tpl_vars['nombre_hotel']; ?>
</h3>

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
                                <input type="text" class="form-control" name="llegada" id="llegada" placeholder="Fecha de entrada*" value="<?php echo $this->_tpl_vars['llegada']; ?>
">
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
                                <input type="text" class="form-control" name="salida" id="salida" placeholder="Fecha de salida*" value="<?php echo $this->_tpl_vars['salida']; ?>
">
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

                    <input name="id_hotel" id="id_hotel" type="hidden" value="<?php echo $this->_tpl_vars['id']; ?>
">


                  </div><!-- End Row -->

            </div>
        </div>
    <br>

    <link href="/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script src="/js/moment-with-locales.js"></script>
	<script src="/js/bootstrap-datetimepicker.js"></script>

    <?php echo '
	<script type="text/javascript">
		$(function () {
			$(\'#datetimepicker1\').datetimepicker({
			viewMode: \'days\',
			format: \'DD-MM-YYYY\'
			});
		});

		$(function () {
			$(\'#datetimepicker2\').datetimepicker({
				viewMode: \'days\',
				format: \'DD-MM-YYYY\'
			});
		});

		$(function () {
			$(\'#datetimepicker3\').datetimepicker({
				viewMode: \'days\',
				format: \'DD-MM-YYYY\'
			});
		});


		$("#datetimepicker1").on("dp.change", function (e) {
            $(\'#datetimepicker2\').data("DateTimePicker").minDate(e.date);
        });

    </script>
    '; ?>


    <!-- InstanceEndEditable -->
    <!-- Fin contenido -->
    </div>

    <!-- Publicidad Rotativa Agencia -->

    <div class="container-fluid">
          <div class="row rotativas">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no_padding">
                	<div id="Carousel2" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                              <?php $this->assign('cont', 0); ?>
                                  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['publicidad']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                   <li data-target="#Carousel2" data-slide-to="<?php echo $this->_tpl_vars['cont']; ?>
" <?php if ($this->_tpl_vars['cont'] == '0'): ?>class="active"<?php endif; ?>></li>
                                  <?php $this->assign('cont', $this->_tpl_vars['cont']+1); ?>
                              <?php endfor; endif; ?>
                        </ol>

                        <div class="carousel-inner">
                            <?php $this->assign('cont', 1); ?>
                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['publicidad']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <div class="item <?php if ($this->_tpl_vars['cont'] == 1): ?>active<?php endif; ?>" align="center">
                                <?php if ($this->_tpl_vars['publicidad'][$this->_sections['i']['index']]['url_dir'] != ""): ?>
                                    <a title="<?php echo $this->_tpl_vars['publicidad'][$this->_sections['i']['index']]['nombre_dir']; ?>
" href="<?php echo $this->_tpl_vars['publicidad'][$this->_sections['i']['index']]['url_dir']; ?>
">
                                        <img src="/imagenes/publicidad/<?php echo $this->_tpl_vars['publicidad'][$this->_sections['i']['index']]['directorio_dir']; ?>
" alt="<?php echo $this->_tpl_vars['publicidad'][$this->_sections['i']['index']]['nombre_dir']; ?>
" class="img-responsive" />
                                    </a>
                                <?php else: ?>
                                    <img src="/imagenes/publicidad/<?php echo $this->_tpl_vars['publicidad'][$this->_sections['i']['index']]['directorio_dir']; ?>
" alt="<?php echo $this->_tpl_vars['publicidad'][$this->_sections['i']['index']]['nombre_dir']; ?>
" class="img-responsive"/>
                                <?php endif; ?>
                            </div>
                            <?php $this->assign('cont', $this->_tpl_vars['cont']+1); ?>
                            <?php endfor; endif; ?>
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
                              <?php $this->assign('cont', 0); ?>
                                  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['publicidad2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <li data-target="#Carousel3" data-slide-to="<?php echo $this->_tpl_vars['cont']; ?>
" <?php if ($this->_tpl_vars['cont'] == '0'): ?>class="active"<?php endif; ?>></li>
                                  <?php $this->assign('cont', $this->_tpl_vars['cont']+1); ?>
                              <?php endfor; endif; ?>
                        </ol>

                        <div class="carousel-inner">
                            <?php $this->assign('cont', 1); ?>
                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['publicidad2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <div class="item <?php if ($this->_tpl_vars['cont'] == 1): ?>active<?php endif; ?>" align="center">
                                <?php if ($this->_tpl_vars['publicidad2'][$this->_sections['i']['index']]['url_dir'] != ""): ?>
                                    <a title="<?php echo $this->_tpl_vars['publicidad2'][$this->_sections['i']['index']]['nombre_dir']; ?>
" href="<?php echo $this->_tpl_vars['publicidad2'][$this->_sections['i']['index']]['url_dir']; ?>
">
                                        <img src="/imagenes/publicidad/<?php echo $this->_tpl_vars['publicidad2'][$this->_sections['i']['index']]['directorio_dir']; ?>
" alt="<?php echo $this->_tpl_vars['publicidad2'][$this->_sections['i']['index']]['nombre_dir']; ?>
" class="img-responsive" />
                                    </a>
                                <?php else: ?>
                                    <img  src="/imagenes/publicidad/<?php echo $this->_tpl_vars['publicidad2'][$this->_sections['i']['index']]['directorio_dir']; ?>
" alt="<?php echo $this->_tpl_vars['publicidad2'][$this->_sections['i']['index']]['nombre_dir']; ?>
" class="img-responsive"/>
                                <?php endif; ?>
                            </div>
                            <?php $this->assign('cont', $this->_tpl_vars['cont']+1); ?>
                            <?php endfor; endif; ?>
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
               <?php $this->assign('cont', 1); ?>
                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['paquetes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        		<?php if ($this->_tpl_vars['cont'] <= 5): ?>
        	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-15">
            	 <?php $this->assign('cont', $this->_tpl_vars['cont']+1); ?>

            	<div class="panel panel-default panel-cotizacion">
                	<div class="panel-header" align="center">
                  		<h4 class="no_margin2"><?php echo ((is_array($_tmp=$this->_tpl_vars['paquetes'][$this->_sections['i']['index']]['nombre_pro'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
</h4>
                    </div>
                    <div class="panel-body titulo" align="center">
                    	<p> Desde BsF. <?php echo $this->_tpl_vars['paquetes'][$this->_sections['i']['index']]['detal_pro']; ?>
</p>
                    </div>
                    <div class="panel-body no_padding no_padding2" align="center">
                    <?php if ($this->_tpl_vars['paquetes'][$this->_sections['i']['index']]['url_dir'] != ""): ?>
                                    <a title="<?php echo $this->_tpl_vars['paquetes'][$this->_sections['i']['index']]['nombre_dir']; ?>
" href="<?php echo $this->_tpl_vars['paquetes'][$this->_sections['i']['index']]['url_dir']; ?>
">
                                        <img src="/imagenes/<?php echo $this->_tpl_vars['paquetes'][$this->_sections['i']['index']]['directorio_image']; ?>
" alt="<?php echo $this->_tpl_vars['paquetes'][$this->_sections['i']['index']]['nombre_dir']; ?>
" class="img-responsive" />
                                    </a>
                                <?php else: ?>
                                    <img src="/imagenes/<?php echo $this->_tpl_vars['paquetes'][$this->_sections['i']['index']]['directorio_image']; ?>
" alt="<?php echo $this->_tpl_vars['paquetes'][$this->_sections['i']['index']]['nombre_dir']; ?>
" class="img-responsive" />
                                <?php endif; ?>
                    </div>
                    <div class="panel-footer">
                    	<a class="btn btn-default btn-block" title="<?php echo $this->_tpl_vars['paquetes'][$this->_sections['i']['index']]['nombre_pro']; ?>
" href="catalogo_detalle.php?id=<?php echo $this->_tpl_vars['paquetes'][$this->_sections['i']['index']]['id_pro']; ?>
">Ver más  &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>


            <?php endif; ?>
            <?php endfor; endif; ?>


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
         		<?php $this->assign('cont', 0); ?>
        		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['excursiones']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <?php if ($this->_tpl_vars['cont'] <= 4): ?>
                    <?php if ($this->_tpl_vars['cont'] == 2): ?>
                <!--Relleno para dejar un espacio segun diseño  -->
                    <div class="col-xs-12 col-sm-6 hidden-md col-lg-15">
                    </div>
                    <?php $this->assign('cont', $this->_tpl_vars['cont']+1); ?>
                	<?php endif; ?>

        		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-15">
             	<?php $this->assign('cont', $this->_tpl_vars['cont']+1); ?>
            	<div class="panel panel-default panel-cotizacion">
                	<div class="panel-header" align="center">
                    	<h4 class="no_margin2"><?php echo ((is_array($_tmp=$this->_tpl_vars['excursiones'][$this->_sections['i']['index']]['nombre_pro'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
</h4>
                    </div>
                    <div class="panel-body titulo" align="center">
                    	<p> Desde BsF. <?php echo $this->_tpl_vars['excursiones'][$this->_sections['i']['index']]['detal_pro']; ?>
</p>
                    </div>
                    <div class="panel-body no_padding no_padding2" align="center">
                    <?php if ($this->_tpl_vars['excursiones'][$this->_sections['i']['index']]['url_dir'] != ""): ?>
                                    <a title="<?php echo $this->_tpl_vars['excursiones'][$this->_sections['i']['index']]['nombre_dir']; ?>
" href="<?php echo $this->_tpl_vars['excursiones'][$this->_sections['i']['index']]['url_dir']; ?>
">
                                        <img src="/imagenes/<?php echo $this->_tpl_vars['excursiones'][$this->_sections['i']['index']]['directorio_image']; ?>
" alt="<?php echo $this->_tpl_vars['excursiones'][$this->_sections['i']['index']]['nombre_dir']; ?>
" class="img-responsive" />
                                    </a>
                                <?php else: ?>
                                    <img src="/imagenes/<?php echo $this->_tpl_vars['excursiones'][$this->_sections['i']['index']]['directorio_image']; ?>
" alt="<?php echo $this->_tpl_vars['excursiones'][$this->_sections['i']['index']]['nombre_dir']; ?>
" class="img-responsive" />
                                <?php endif; ?>
                    </div>
                    <div class="panel-footer">
                    	<a class="btn btn-default btn-block" title="<?php echo $this->_tpl_vars['excursiones'][$this->_sections['i']['index']]['nombre_pro']; ?>
" href="catalogo_detalle.php?id=<?php echo $this->_tpl_vars['excursiones'][$this->_sections['i']['index']]['id_pro']; ?>
">Ver más  &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>


            <?php endif; ?>
            <?php endfor; endif; ?>


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
                     	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['enlaces_A2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                          <?php if ($this->_tpl_vars['enlaces_A2'][$this->_sections['i']['index']]['nombre_cat'] == 'Inicio'): ?>
                          <div class="col-xs-6 col-sm-15 col-md-15 col-lg-15 categoria" align="center">
                          <a class="text-center iconos-btn" href="/noticias.php">
                          	<i class="fa fa-newspaper-o fa-3x"></i><br>
                            <p class="fuente-categoria">Noticias</p>
                          </a>
                          </div>

                            <?php else: ?>
                             <div class="col-xs-6 col-sm-15 col-md-15 col-lg-15 categoria" align="center">
                            <a class="text-center iconos-btn" href="<?php echo $this->_tpl_vars['enlaces_A2'][$this->_sections['i']['index']]['enlace_cat']; ?>
">
        						<?php echo $this->_tpl_vars['enlaces_A2'][$this->_sections['i']['index']]['icono_cat']; ?>
<br>
                                <p class="fuente-categoria"><?php echo $this->_tpl_vars['enlaces_A2'][$this->_sections['i']['index']]['nombre_cat']; ?>
</p>
      					  	</a>
                            </div>
                            <?php endif; ?>
                     	<?php endfor; endif; ?>
                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['enlaces_B2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                         <div class="col-xs-6 col-sm-15 col-md-15 col-lg-15 categoria" align="center">
                          <a class="text-center iconos-btn" href="<?php echo $this->_tpl_vars['enlaces_B2'][$this->_sections['i']['index']]['enlace_cat']; ?>
">
                           <?php echo $this->_tpl_vars['enlaces_B2'][$this->_sections['i']['index']]['icono_cat']; ?>
<br>
                                <p class="fuente-categoria"><?php echo $this->_tpl_vars['enlaces_B2'][$this->_sections['i']['index']]['nombre_cat']; ?>
</p>
                          </a>
                          </div>
                        <?php endfor; endif; ?>
                        </div>
                      </div>
                      <div class="col-xs-12 col-lg-5">
                      		<div class="panel panel-default panel-cotizacion">
                    	<div class="panel-body no_padding no_padding2">
                        			<form action="" method="post" role="form" name="formulario_boletos" id="formulario_boletos">
                            <div class="form-group">
                                <?php echo $this->_tpl_vars['msj_boletos']; ?>

                            </div>
                       <div class="form-group">
                        <div class="input-group">
                           <span class="input-group-addon">
                           <select name="tipo-b" id="tipo-b">
                              <option value="V-" <?php if ($this->_tpl_vars['tipob'] == "V-"): ?> selected='selected' <?php endif; ?>>V</option>
                              <option value="E-" <?php if ($this->_tpl_vars['tipob'] == "E-"): ?> selected='selected' <?php endif; ?>>E</option>
                              <option value="P-" <?php if ($this->_tpl_vars['tipob'] == "P-"): ?> selected='selected' <?php endif; ?>>P</option>
                              <option value="RIF:" <?php if ($this->_tpl_vars['tipob'] == "RIF:"): ?> selected='selected' <?php endif; ?>>RIF</option>
                          </select></span>

                         <label class="sr-only" for="identificacion" >Cédula o Pasaporte:</label>
                      <input name="cedula-b" type="text" id="cedula-b" value="<?php echo $this->_tpl_vars['cedulab']; ?>
" class="form-control" maxlength="9" onkeypress="javascript: return validarnum(event);" placeholder="Cédula o Pasaporte *" />

                        </div>
                     </div>
                             <div class="form-group">
                                  <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <label class="sr-only" for="nombre">Nombres:</label>
                                    <input name="nombre-b" type="text" id="nombre-b" class="form-control" onkeypress="javascript: return validarletras(event);" value="<?php echo $this->_tpl_vars['nombreb']; ?>
" maxlength="100" placeholder="Nombres y Apellidos *" />

                                  </div>
                             </div>



                              <div class="form-group">
                                <div class="input-group">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                  <label class="sr-only" for="correo">Correo:</label>
                                  <input name="email-b" type="text" id="email-b" class="form-control" onkeypress="javascript: return validarcorreo(event);" value="<?php echo $this->_tpl_vars['emailb']; ?>
" maxlength="60" placeholder="Correo *" />

                               </div>
                           </div>

                          <div class="form-group">
                                <div class="input-group">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                                 <label class="sr-only" for="telefono">Tel&eacute;fono:</label>
                                <input name="telefono-b" class="form-control" type="text" id="telefono-b" onkeypress="javascript: return validarnum(event);" value="<?php echo $this->_tpl_vars['telefonob']; ?>
" maxlength="12" placeholder="Telefono *"/>

                              </div>
                              </div>

                          <div class="container-fluid">
                                    	<div class="row">
                                   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no_padding espaciado-10">
                                            <div class="form-group">
                                   			<div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                                             <label class="sr-only" for="origen">Origen:</label>
                                                <input  name="origen-b" type="text" id="origen-b" class="form-control"  value="<?php echo $this->_tpl_vars['origenb']; ?>
" maxlength="50" class="form-control" placeholder="Origen *" />
                                     		</div>
                                         </div>
                                      </div>

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no_padding">
                                	<div class="form-group">
                          			<div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-road"></span></span>
                                            <label class="sr-only" for="destino">Destino:</label>
                                                <input  name="destino-b" type="text" id="destino-b" class="form-control"  value="<?php echo $this->_tpl_vars['destinob']; ?>
" maxlength="50" class="form-control" placeholder="Destino *" />
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
                                               	<input type='text' class="form-control" id="fecha_ida-b" name="fecha_ida-b" value="<?php echo $this->_tpl_vars['fecha_idab']; ?>
" placeholder="Partida *" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>

                                    <?php echo '
                                        <script type="text/javascript">
                                            $(function () {
                                            $(\'#datetimepicker\').datetimepicker({
                                             format: \'DD-MM-YYYY\'
                                            });
                                        });
                                        </script>
                                    '; ?>

                    					</div>
                      				</div>

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no_padding">
                                    	<div class="form-group">
                    					<label class="sr-only" for="Fecha Salida">Fecha de Regreso:</label>
                    					<div class='input-group date' id='datetimepicker2'>
                        					<span class="input-group-addon">
                                				<span class="glyphicon glyphicon-send fa-rotate-180"></span>
                        					</span>
                           					 <input type='text' class="form-control" id="fecha_vuelta-b" name="fecha_vuelta-b" value="<?php echo $this->_tpl_vars['fecha_vueltab']; ?>
" placeholder="Regreso *" />
                        					<span class="input-group-addon">
                                				<span class="glyphicon glyphicon-calendar"></span>
                        					</span>
                    					</div>
                                        <?php echo '
                                            <script type="text/javascript">
                                                $(function () {

                                                $(\'#datetimepicker2\').datetimepicker({
                                                 format: \'DD-MM-YYYY\'
                                                });
                                            });
                                            </script>
                                        '; ?>

                    						</div>
                    					</div>

                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no_padding espaciado-10">
                                        	<div class="form-group">
                                        	<div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                            <label class="sr-only" for="adultos"># Adultos:</label>
                                                <input  name="adultos-b" type="text" id="adultos-b" onkeypress="javascript: return validarnum(event);" class="form-control" onblur="javascript: return numero_adultos();" value="<?php echo $this->_tpl_vars['adultosb']; ?>
" maxlength="4" class="form-control" placeholder="Adultos *" />
                                        	</div>
                                            </div>
                                    	</div>
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no_padding espaciado-10">
                                        	<div class="form-group">
                                     		<div class="input-group">
                                     			<span class="input-group-addon">&nbsp;<i class="fa fa-child"></i>  </span>
                                     				<label class="sr-only" for="Pax">Menores:</label>
                                         			<input class="form-control" name="menores-b" type="text" id="menores-b" onkeypress="javascript: return validarnum(event);" onblur="javascript: return numero_ninos();" value="<?php echo $this->_tpl_vars['menoresb']; ?>
" maxlength="4" placeholder="Menores *" />
                                     		</div>
                                          </div>
                                    	</div>
                                   <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no_padding">
                                   <div class="form-group">
                                     <div class="input-group">
                                        <span class="input-group-addon">Edad</span>
                                        <label class="sr-only" for="niños">Edades de ni&ntilde;os:</label>
                                        <input class="form-control" name="edades-b" type="text" id="edades-b" onkeypress="javascript: return validarnum_coma(event);" value="<?php echo $this->_tpl_vars['edadesb']; ?>
" maxlength="20" placeholder="Ej 3,6" />
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
                            <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['enlaces_A']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <?php if ($this->_tpl_vars['enlaces_A'][$this->_sections['j']['index']]['nombre_cat'] == 'Inicio'): ?>
                            	 <li class="paddingt7">
    <a  class="foot-btn" title="Noticias" href="/noticias.php">Noticias</a>
                            </li>

                            <?php else: ?>
                           	 <li class="paddingt7">
    <a  class="foot-btn" title="<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['j']['index']]['etiqueta_cat']; ?>
" href="/contenido.php?cont=<?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['j']['index']]['id_cat']; ?>
"><?php echo $this->_tpl_vars['enlaces_A'][$this->_sections['j']['index']]['nombre_cat']; ?>
</a>
                            </li>
                            <?php endif; ?>
                            <?php endfor; endif; ?>
                             <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['enlaces_C']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <li class="paddingt7"><a class="foot-btn" title="<?php echo $this->_tpl_vars['enlaces_C'][$this->_sections['j']['index']]['etiqueta_cat']; ?>
" href="/contenido.php?cont=<?php echo $this->_tpl_vars['enlaces_C'][$this->_sections['j']['index']]['id_cat']; ?>
"><?php echo $this->_tpl_vars['enlaces_C'][$this->_sections['j']['index']]['nombre_cat']; ?>
</a></li>
                            <?php endfor; endif; ?>
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
                            <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['enlaces_B']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <li class="paddingt7">
    <a  class="foot-btn" title="<?php echo $this->_tpl_vars['enlaces_B'][$this->_sections['j']['index']]['etiqueta_cat']; ?>
" href="/contenido.php?cont=<?php echo $this->_tpl_vars['enlaces_B'][$this->_sections['j']['index']]['id_cat']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['enlaces_B'][$this->_sections['j']['index']]['nombre_cat'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</a>
                            </li>
                            <?php endfor; endif; ?>

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
                                  	<input name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" type="text" class="form-control" placeholder="Ingrese su Email">
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

   <?php echo '

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
	}(document, \'script\', \'facebook-jssdk\'));</script>


    <script type="text/javascript">

			$(document).ready(function(){

		 $(\'.ir-arriba\').click(function(){
			$(\'body, html\').animate({
				scrollTop: \'0px\'
			}, 300);
		});

		$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
		$(\'.ir-arriba\').slideDown(300);
		 } else {
			$(\'.ir-arriba\').slideUp(300);
			 }
		});

	});
  </script>


  <script type="text/javascript">
	$(document).ready(function() {
		$(".imagen-1").hover(function(){

		$(this).find(\'img\').stop().fadeTo(400, 0);

		}, function() {

		$(this).find(\'img\').stop().fadeTo(400, 1);
		});
	});

</script>

 <script type="text/javascript">

	  	$(document).ready(function(){
			//nos desplazamos entre todos los divs
			$(\'a.visible\').click(function(e){
			e.preventDefault();
		    enlace  = $(this).attr(\'href\');
		    $(\'html, body\').animate({
		        scrollTop: $(enlace).offset().top
		    }, 1000);
			});
		});

	  </script>

      <script type="text/javascript">

		function mostrar(){

		document.getElementById(\'visible\').style.display = \'block\';
		document.getElementById(\'mostre-todo\').style.display = \'none\';}
	  </script>
       <script type="text/javascript">

	  	$(document).ready(function(){
			//nos desplazamos entre todos los divs
			$(\'a.vista-previa\').click(function(e){
			e.preventDefault();
		    enlace  = $(this).attr(\'href\');
		    $(\'html, body\').animate({
		        scrollTop: $(enlace).offset().top
		    }, 1000);
			});
		});

	  </script>

	'; ?>

  </body>
<!-- InstanceEnd --></html>