<form method="post" action="../wheel/editWheel2" id="buscarFormWheel">
	<fieldset>
		<legend>Modificar Llanta</legend>
		<div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs form-group"  style="text-align:right"><label>No. Llanta</label></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9 form-group"  style="text-align:left"><input type="text" name="nameWheel" class="form-control" placeholder="No. Llanta"/>            
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <input type="button" class="btn btn-primary" value="Buscar Llanta" name="newWheel" id="buscarWheele"/>            
        </div>
        </div>        

	</fieldset>
</form>
<script type="text/javascript">
$("#buscarWheele").click(function(){
    var $form=$("#buscarFormWheel"), url=$form.attr("action");
    var posting= $.post(url,{
                nameWheel:$form.find("input[name='nameWheel']").val()
    });
    posting.done(function(data){
        $("#content_busqueda").html(data);
    });
});
</script>

<div id="content_busqueda" class="row">
<?php if(isset($message)) echo $message ; ?>
</div>