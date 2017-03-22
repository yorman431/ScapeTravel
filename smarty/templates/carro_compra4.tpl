<div class="panel panel-default">
	<div class="panel-body">
    	<div class="col-lg-6 no_padding">
            <h3>{$accion}</h3> 
            
            <div class="table-responsive">
            	<table class="table table-hover">
                	<thead>
                        <tr class="active">
                         <td align="center">View</td>
                         <td>Model</td>
                         <td align="center">Quantity</td>
                         <td align="center">Price</td>
                         <td align="center">Subtotal</td>
                   </tr>
                   </thead>
                   
                   {section name=i loop=$listado}
                  <tr>
                    <td align="center">
                    <a href="/imagenes/{$listado[i].imagen}" data-toggle="lightbox" data-title="{$listado[i].nombre}" data-gallery="multiimages"><img src="/imagenes/miniaturas/{$listado[i].imagen}" width="100" class="img-responsive"/></a>
                    </td>
                    <td>{$listado[i].nombre}</td>
                    <td align="center">{$listado[i].cantidad}</td>
                    <td align="center">
                        {if $moneda eq ""}$ {$listado[i].precio_det}{/if}
                        {if $moneda eq "bolivar"}Bs. {$listado[i].precio_det}{/if}
                        {if $moneda eq "dollar"}{math equation="ceil(x / y)" x=$listado[i].precio_det y=$valor_dollar format="%.2f"} $(USD){/if}
                    </td>
                    <td align="center">
                        {if $moneda eq ""}
                            $ {$listado[i].cantidad*$listado[i].precio_det}{/if}
                        {if $moneda eq "bolivar"}
                            Bs. {$listado[i].cantidad*$listado[i].precio_det}{/if}
                        {if $moneda eq "dollar"}
                            {math equation="(ceil(x / y) * z)" x=$listado[i].precio_det y=$valor_dollar z=$listado[i].cantidad format="%.2f"} $(USD){/if}
                        </td>
                    
                    </tr>
           {/section}
           
           			
           
                </table>
            
            	
            </div>
            
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8" align="right">
           			<h3 style="margin-top:-10px;">Total: {if $moneda eq ""}${/if}{if $moneda eq "bolivar"}Bs{/if}{if $moneda eq "dollar"}$(USD){/if}{if $moneda eq "euro"}&euro;{/if}{if $moneda eq "COP"}$(COP){/if}{if $moneda eq "MXN"}$(MXN){/if} {$total_monto-$descuento}</h3>
                </div>
             </div>
            
        </div>
        <form id="carro" name="carro" method="post" action="">
        <div class="col-lg-5 col-sm-offset-1 no_padding">	
        	<h3>Shipping Address</h3>
            
            <div class="form-group">
            	{$direccion}
            </div>
            
          <div class="form-group">
              <label for="comentario">Comment</label>
              
              <textarea placeholder="Some comments and observations" value="{$comentario}" name="comentario" id="comentario" rows="3" class="form-control" ></textarea>
          </div>
        	
        	<div class="form-group">
            	<div class="checkbox">
                  <label>
                    <input name="acepto" id="acepto" type="checkbox" value="Si">
                    Yes, I accept the <a target="_blank" href="/contenido.php?cont=19">terms and conditions</a> established by {$nombre_empresa}
                  </label>
                </div>
            </div>
            
         	<div class="form-group"> 
              
                <input onclick="javascript: return validarterminos();" class="btn btn-success btn-block" type="submit" name="envio" id="envio" value="Place Order" />
            </div>
                
            <input name="descuento" type="hidden" id="descuento" value="{$descuento}" />
            <input name="subtotal" type="hidden" id="subtotal" value="{$total_monto}" />
            <input name="pas" type="hidden" id="pas" value="paso4" />
            
        	
        </div>
        </form>
        
       
 	</div>
 </div>       
        
    <link href="/css/ekko-lightbox.min.css" rel="stylesheet">
	<script src="/js/ekko-lightbox.min.js"></script>
	{literal}
	<script type="text/javascript">
        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
    </script>
      	
    {/literal}