
     <div class="panel panel-default">
            
                
                <div class="panel-body">
                    
                    <div class="col-lg-6 col-md-6">
                             <div class="panel panel-default">
                             		<div class="panel-heading" align="center">
                                        Sign In Campello Eyewear
                                    </div>
                                    
                                    <div class="panel-body">
                                    	<div class="row">
                                        	<div class="col-lg-10 col-lg-offset-1">
                                            
                                            {if $mensaje2 neq ""}<div class="alert alert-danger" role="alert" align="center">{$mensaje2}</div>{/if}
                                            
                                                <form action="" method="post" name="form1" id="form1" onSubmit="MM_validateForm('login','','R','clave','','R');return document.MM_returnValue">
                                                    <fieldset>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                            <input maxlength="60" class="form-control" placeholder="Email" name="login" id="login" type="text" autofocus>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                            <input maxlength="40" class="form-control" placeholder="Password" name="clave" type="password" id="clave" value="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <input class="btn btn-md btn-success btn-block" name="envio" type="submit" id="envio" value="Enter" />
                                                    </div>
                                                        
                                                        
                                                    	<a class="btn btn-link" href="recuperar_clave.php">Forgot your password?</a>
                                                       
                                                    
                                                    <input name="pas" id="pas" type="hidden" value="{$paso}" />
                                                    
                                                    </fieldset>
                                                </form>
                        
                                            </div>
                                        </div>
                                    </div>
                                    
                             </div>
                            
                    </div>
                    
                    <div class="col-lg-6 col-md-6">
                    		
                            <form action="" method="post" name="form1" id="form1" onsubmit="MM_validateForm('cedula','','RisNum','nombre','','R','apellido','','R','correo','','RisEmail','celular','','RisNum','telefono','','NisNum');return document.MM_returnValue">
                            
                            <div class="panel panel-default">
                             		<div class="panel-heading" align="center">
                                        New User Registration
                                    </div>
                                    
                                    <div class="panel-body">
                                    	<div class="row">
                                        	<div class="col-lg-10 col-lg-offset-1">
                                    	{if $mensaje3 neq ""}<div class="alert alert-danger" role="alert" align="center">{$mensaje3}</div>{/if}
                                  
                                          <div class="form-group">
                                          <label class="sr-only" for="nombre">Name</label>
                                          <input  onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="nombre" id="nombre" placeholder="Name*" value="{$nombres}">
                                          </div>
                                          
                                          <div class="form-group">
                                          <label class="sr-only" for="apellido">Lastname</label>
                                          <input  onkeypress="javascrip: return validarletrasnum(event);" type="text" class="form-control" name="apellido" id="apellido" placeholder="Lastname*" value="{$apellidos}">
                                          </div>
                                          
                                          <div class="form-group">
                                          <label class="sr-only" for="correo">Email</label>
                                          <div class="input-group">
                                           	<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                          <input  onkeypress="javascrip: return validarcorreo(event);" type="text" class="form-control" name="correo" id="correo" placeholder="Email*" value="{$correo}">
                                          </div>
                                          </div>
                                          
                                          
                                          <div class="form-group">
                                          <label class="sr-only" for="celular">Phone</label>
                                          <div class="input-group">
                                           	<span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                          <input  onkeypress="javascrip: return validarnum(event);" type="text" class="form-control" name="celular" id="celular" placeholder="Phone*" value="{$celular}">
                                          </div>
                                          </div>
                                          
                                          <div class="form-group">
                                          <input class="btn btn-md btn-primary btn-block" name="envio" type="submit" id="envio" value="Sign me up" />
                                          </div>
                                          
                                    </div>
                                 </div>
                              </div>
                                    
                          </div>        
                                    	<input name="pas" id="pas" type="hidden" value="{$paso}" />      
                            </form>
                    </div>
                    
                </div>
</div>