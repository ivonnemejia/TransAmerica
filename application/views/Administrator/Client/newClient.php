<form id="newClient" method="post" action="../client/storeNewClient">
	<fieldset>
		<legend>Nuevo Cliente</legend>
		<div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs"  style="text-align:right"><label>Nombre Empresa</label></div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"  style="text-align:left"><input type="text" name="nameClient" class="form-control" placeholder="Nombre Empresa"/>            
        </div>
        </div>
        <div class="row" style="margin-top: 10px;">
        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs"  style="text-align:right"><label>Nombre Contacto</label></div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"  style="text-align:left"><input type="text" class="form-control" name="nameContact" placeholder="Nombre Contacto" />
        </div>
        </div>
        <div class="row" style="margin-top: 10px;">
        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs"  style="text-align:right"><label>Telefono Contacto</label></div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"  style="text-align:left"><input type="text" class="form-control" name="phoneContact" placeholder="Telefono Contacto" />
        </div>
        </div>
        <div class="row" style="margin-top: 10px;">
        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs"  style="text-align:right"><label>Tarifa</label></div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"  style="text-align:left"><input type="text" class="form-control" name="tarifa" placeholder="Tarifa" />
        </div>
        </div>
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="margin-top: 10px;">
            
            
        <input type="button" class="btn btn-primary" value="Nuevo Cliente" id="new" name="newClient"/>
            
            <br />            
            
        </div>
	</fieldset>
</form>
<div id="message">
<?php if(isset($message)) echo $message ; ?>
</div>

<script type="text/javascript">
$("#new").click(function(){
    var $form=$("#newClient"), url=$form.attr("action");
    var posting= $.post(url,{
                nameClient:$form.find("input[name='nameClient']").val(),
                nameContact:$form.find("input[name='nameContact']").val(),
                phoneContact:$form.find("input[name='phoneContact']").val(),
                tarifa:$form.find("input[name='tarifa']").val()
    });
    posting.done(function(data){
        $("#content_fact").html(data);
    });
});
</script>