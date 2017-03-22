<?php

// load Smarty library
require("smarty/libs/Smarty.class.php");
class objeto_smarty extends Smarty {
 
   function objeto_smarty()
   {

        // Class Constructor. 
        // These automatically get set with each new instance.

        $this->Smarty();
		
        $this->template_dir = 'smarty/templates/';
        $this->compile_dir  = 'smarty/templates_c/';
        $this->config_dir   = 'smarty/configs/';
        $this->cache_dir    = 'smarty/cache/';

        $this->caching = true;
        $this->assign('app_name', 'Guest Book');
   }

}
?>