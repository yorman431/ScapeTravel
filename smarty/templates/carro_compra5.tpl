<div class="panel panel-default">
	<div class="panel-body">
    	<div class="col-lg-4 col-sm-offset-2 no_padding">
            <h3>Pay with Paypal</h3> 
            <p>
           you can make your order payment through paypal system in a very easy and safe way.
            </p>
            
            <p>
            
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="business" value="SPJVA7CHA773J">
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="item_name" value="Order Number: {$id}">
                <input type="hidden" name="item_number" value="{$id}">
                <input type="hidden" name="amount" value="{$total_pago}">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="button_subtype" value="services">
                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynowCC_LG.gif:NonHosted">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>

            </p>
            
        </div>
        
        <div class="col-lg-4 col-sm-offset-1 no_padding">	
        	<h3>Pay with Credit Cards</h3>
            <p>
            You can also make payment for your order by credit card or debit card of any bank anywhere in the world.
            </p>
            <form action="/payment_result.php" method="POST">
              <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="{$pkey}"
                data-image="/imagenes/loguito.png"
                data-name="CAMPELLO EYEWEAR"
                data-description="Order Number: {$id}"
                data-amount="{$total_pago}00"
                data-locale="auto">
              </script>
              <input type="hidden" name="id" value="{$id}">
              <input type="hidden" name="order" value="{$orden}">
              <input type="hidden" name="monto" value="{$total_pago}00">
            </form>
        </div>
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