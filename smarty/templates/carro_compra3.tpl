
     <div class="panel panel-default">
            
                
                <div class="panel-body">
                    
                    <div class="col-lg-6 col-md-6">         
                            <form action="" method="post" name="form2" id="form2">
                            	<div class="panel panel-default">
                             		<div class="panel-heading" align="center">
                                        Add New Address
                                    </div>
                                    
                                    <div class="panel-body">
                                    
                                          <div class="form-group">
                                          <label class="sr-only" for="pais">Country</label>
                                          <select name="pais"  id="pais" class="form-control">
                                            <option value="" {if $pais eq ""}selected="selected"{/if} >&lt; Country &gt;</option>
                                            {section name=i loop=$paises}
                                            <option value="{$paises[i].code}" {if $pais eq $paises[i].id_pais}selected="selected"{/if} >{$paises[i].full_name}</option>
                                            {/section}
                                          </select>
                                          </div>
                                          
                                          <div class="form-group">
                                          <label class="sr-only" for="direccion">Address</label>
                                          <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                          <textarea placeholder="Address (e.g. Doral Brown Street, Miami, #235)" value="{$direccion}" name="direccion" id="direccion" rows="2" class="form-control" ></textarea> 
                                          </div>
                                          </div>
                                          
                                          <div class="form-group">
                                          <label class="sr-only" for="postal">Postal Number</label>
                                          <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                          <input value="{$postal}" onkeypress="javascripts: return validaletrasrnum(event);" name="postal" type="text" id="postal" size="40" maxlength="100" class="form-control" placeholder="Postal Code (e.g. 6301)"/>
                                          </div>
                                          </div>
                                          
                                          <div class="form-group">
                                          <input onclick="javascript: return validardireccion();" class="btn btn-md btn-primary btn-block" name="envio" type="submit" id="envio" value="Add Address" />
                                          </div>
                                      </div>
                                 </div>
                                 <input name="pas" id="pas" type="hidden" value="{$paso}" />   
                          </form>          
                                          
                                          
                    </div>
                    
                    <div class="col-lg-6 col-md-6">
                    		
                            <form action="" method="post" name="form1" id="form1">
                            
                            <div class="panel panel-default">
                             		<div class="panel-heading" align="center">
                                        Address List Management
                                    </div>
                                    
                                    <div class="panel-body">
                                       {if $direcciones neq ""}
                                            {assign var="vale" value="1"}
                                            {section name=i loop=$direcciones}
                                            
                                            <div class="radio">
                                              <label>
                                                <input type="radio" name="direccion" id="direccion{$direcciones[i].id_dir}" value="{$direcciones[i].id_dir}" {if $vale eq "1"}checked{/if} />
                                                {assign var="vale" value="0"}
                                                {$direcciones[i].estado_dir}, {$direcciones[i].direccion_dir}, {$direcciones[i].postal_dir}
                                              </label>
                                            </div>
											<hr class="divider"></hr>
                                            {/section}
                                            <div class="form-group">
                                          <input class="btn btn-md btn-primary btn-block" name="envio" type="submit" id="envio" value="Continue" />
                                          </div>
                                            
                                       {else}
                                       		<div class="alert alert-warning" role="alert" align="center">{$mensaje3}</div>
                                       {/if}  
                              	   </div>
                                    
                          	</div>       
                            			 
                                    	<input name="pas" id="pas" type="hidden" value="{$paso}" />      
                            </form>
                   </div>   
                    
                </div>
</div>