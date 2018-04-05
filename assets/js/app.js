$(function() {

	var v1 = $("#form-registro").validate({
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					beforeSubmit: function() { 
						$("#success").hide();
						$(".loading").fadeIn();
					},
					 success:    function(data) { 

					 	$(".loading").fadeOut('fast');
				        console.log(data);
				        $("#success").delay(500).fadeIn();
				        if(data == "error"){
				        	$("#success").html('<div class="alert alert-danger">Existen errores en el formulario. Favor corregir y vuelve a intentarlo.</div>');
				        }else if(data == "ok"){
				        	$("#success").html('<div class="alert alert-success">Gracias, los datos han sido enviados con éxito.</div>');
				        	v1.resetForm();
				        	setTimeout(function(){ $('.alert-success').fadeOut() }, 3000);
				       
				        }else if(data == "existe"){
				        	$("#success").html('<div class="alert alert-warning">Ya estás registrado.</div>');
				        }
				    } 
				});
			}
	});

    

});