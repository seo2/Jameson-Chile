$(function() {
    $('#side-menu').metisMenu();
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        var topOffset = 50;
        var width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        var height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    // var element = $('ul.nav a').filter(function() {
    //     return this.href == url;
    // }).addClass('active').parent().parent().addClass('in').parent();
    var element = $('ul.nav a').filter(function() {
        return this.href == url;
    }).addClass('active').parent();

    while (true) {
        if (element.is('li')) {
            element = element.parent().addClass('in').parent();
        } else {
            break;
        }
    }

$( "#btn-login" ).click(function() {
    $.ajax({
  	url: "ajax/login.php",
  	method: "POST",
  	beforeSend: function() {
    	//xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
  	},
  	data: $('#login-form').serialize()
})
  .done(function( data ) {
    
      console.log( "Sample of data: " + data) ;
      if(data == 1){
      	window.location.replace("index.php");
      }
   
  });
 });


$( "#selectEvento" ).change(function() {
  
  id = $( this ).val();
  
  getresult("ajax/inscripciones.php?id_evento="+id);

});

});


$( "#adddate" ).click(function() {
	//alert("agregar fecha");
	$( ".line-fecha:last" ).clone().insertBefore( ".caja-btn" );
	$( ".line-fecha:last .box-del" ).show();

});


$("body").on("click",".btn-del", function(){
	//alert("borrar linea");
	$(this).closest('.line-fecha').remove();
});



function logout(){

    $.ajax({
  	url: "ajax/logout.php",
  	method: "POST"
  	}).done(function( data ) {
  		window.location.replace("login.php");
  	});
}