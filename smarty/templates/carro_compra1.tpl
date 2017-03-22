<div class="col-lg-12">
            <h3>{$accion}</h3> 
            
            <div class="table-responsive">
            	<table class="table table-hover">
                	<thead>
                        <tr class="active">
                         <td align="center">View</td>
                         <td>Code</td>
                         <td>Model</td>
                         <td>Category</td>
                         <td>Gender</td>
                         <td align="center">Quantity</td>
                         <td align="center">Price</td>
                         <td align="center">Subtotal</td>
                         <td align="center">Remove</td>
                   </tr>
                   </thead>
                   
                   {section name=i loop=$listado}
                  <tr>
                    <td align="center">
                    <a href="/imagenes/{$listado[i].imagen}" data-toggle="lightbox" data-title="{$listado[i].nombre}" data-gallery="multiimages"><img src="/imagenes/miniaturas/{$listado[i].imagen}" width="100" class="img-responsive"/></a>
                    </td>
                    <td>{$listado[i].codigo}</td>
                    <td>{$listado[i].nombre}</td>
                    <td>{$listado[i].categoria}</td>
                    <td>{$listado[i].segmento}</td>
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
                    <td align="center"><a title="Eliminar" onclick="javascript: return confirmar('&iquest;Seguro desea eliminar este registro?')" href="carro.php?pos={$listado[i].codigo}"><i class="fa fa-trash-o fa-lg"></i></a></td>
                    </tr>
           {/section}
           
           			
           
                </table>
            
            	
            </div>
            
        </div>
         
        <div class="col-lg-4">	
        	<div class="form-group">
            	<a href="/catalogo.php" class="btn btn-primary btn-block">Continue Shopping</a>
            </div>
        
        </div>
    
    
        <div class="col-lg-4">	
         	<div class="form-group"> 
            <form id="carro" name="carro" method="post" action="carro.php">  
                <input class="btn btn-success btn-block" {if $total_monto eq "0"} disabled="disabled" {/if} onclick="javascript: location.href='confirmar_compra.php'" type="submit" name="button2" id="button2" value="Check Out" />
                </div>
                
                <input name="descuento" type="hidden" id="descuento" value="{$descuento}" />
                <input name="subtotal" type="hidden" id="subtotal" value="{$total_monto}" />
                <input name="pas" type="hidden" id="pas" value="paso1" />
        	</form>
        </div>
        
        <div class="col-lg-4" align="right">
           <h4>Subtotal: {if $moneda eq ""}${/if}{if $moneda eq "bolivar"}Bs{/if}{if $moneda eq "dollar"}$(USD){/if}{if $moneda eq "euro"}&euro;{/if}{if $moneda eq "COP"}$(COP){/if}{if $moneda eq "MXN"}$(MXN){/if} {$total_monto}</h4>
           <h4>Discount: {if $moneda eq ""}${/if}{if $moneda eq "bolivar"}Bs{/if}{if $moneda eq "dollar"}$(USD){/if}{if $moneda eq "euro"}&euro;{/if}{if $moneda eq "COP"}$(COP){/if}{if $moneda eq "MXN"}$(MXN){/if} {$descuento}</h4>
            <hr class="divider"></hr>
           <h3>Total: {if $moneda eq ""}${/if}{if $moneda eq "bolivar"}Bs{/if}{if $moneda eq "dollar"}$(USD){/if}{if $moneda eq "euro"}&euro;{/if}{if $moneda eq "COP"}$(COP){/if}{if $moneda eq "MXN"}$(MXN){/if} {$total_monto-$descuento}</h3>
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