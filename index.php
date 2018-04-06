<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>JAMESON GINGER AND LIME</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/fonts/stylesheet.css">
	<link rel="stylesheet" href="assets/css/jameson.css">
	<link rel="icon" type="image/png" href="https://www.jamesonwhiskey.com/favicon-96x96.png" sizes="96x96">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116961218-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-116961218-1');
	</script>

    
  </head>
  <body>
    <header>
    	<img src="assets/img/header.jpg" class="img-responsive">
    </header>
	<section id="contenido">
		<div class="container">
			<div class="row">
				<div class="col-md-3 hidden-xs">
					<img src="assets/img/botella.png" class="img-responsive" id="botella">
				</div>
				<div class="col-md-6">
					<div class="row text-center">
						<div class="col-sm-10 col-sm-offset-1" id="titulo">
							<img src="assets/img/tit-top.png" class="img-responsive">
							<h2>Ingresa tus datos<br>y podrás ganar</h2>
							<h1>un año de Jameson </h1>
							<img src="assets/img/tit-bot.png" class="img-responsive">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<form class="form-horizontal" method="post" action="ajax/registrar.php" id="form-registro">
								<h3>Completa tus datos</h3>
								<div class="form-group">
									<label for="input1" class="col-sm-2 control-label">Nombre</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="input1" placeholder="" name="nombre" required="" title="ingresa tu nombre">
									</div>
								</div>
								<div class="form-group">
									<label for="input2" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="input2" placeholder="" name="email" required="" title="ingresa un correo válido">
									</div>
								</div>
								<div class="form-group">
									<label for="input3" class="col-sm-6 control-label">Fecha de Nacimiento</label>
									<div class="col-sm-6">
										<input type="date" class="form-control" id="input3" placeholder="" name="fecha_nac" required="" title="ingresa tu fecha de nacimiento">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<div class="checkbox text-center">
											<label>
												Deseo recibir información sobre Pernod Ricard <input type="checkbox" name="check_info">
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12  text-center">
										<div id="success"></div>
										<div class="loading"></div>
										<button type="submit" class="btn btn-primary">Enviar</button>
									</div>
								</div>
							</form>							
						</div>						
					</div>
					<div class="row visible-xs">

						<div class="col-md-3 text-center">
							<div class="bases text-left" style="display:none;">
								<h4>Bases<br>del concurso<br>Jameson Irish Whiskey</h4>
								<img src="assets/img/adorno.png" class="img-responsive">
								<ul>
									<li>Concurso sólo para mayores de 18 años.</li>
									<li>Hay un ganador por mes entre todos los inscritos, el cual será contactado vía mail en los primeros 7 días hábiles del mes siguiente.</li>
									<li>El ganador tendrá 1 semana para responder, sino se escogerá a otro.</li>
									<li>1 año de Jameson equivale a 12 botellas.</li>
									<li>Promoción válida entre el 1 de abril hasta el 30 de junio del 2018.</li>
								</ul>
							</div>
							<a href="javascript:void(0);" class="btn btn-primary btn-masinfo">Más Información</a>
						</div>						
					</div>
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<div class="row">
								<div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">
									<img src="assets/img/logo.png" class="img-responsive" id="logo">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class="enjoy">Disfruta Jameson con responsabilidad. Producto para mayores de 18 años.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center hidden-xs">
					<div class="bases text-left">
						<h4>Bases<br>del concurso<br>Jameson Irish Whiskey</h4>
						<img src="assets/img/adorno.png" class="img-responsive">
						<ul>
							<li>Concurso sólo para mayores de 18 años.</li>
							<li>Hay un ganador por mes entre todos los inscritos, el cual será contactado vía mail en los primeros 7 días hábiles del mes siguiente.</li>
							<li>El ganador tendrá 1 semana para responder, sino se escogerá a otro.</li>
							<li>1 año de Jameson equivale a 12 botellas.</li>
							<li>Promoción válida entre el 1 de abril hasta el 30 de junio del 2018.</li>
						</ul>
					</div>
					<a href="javascript:void(0);" class="btn btn-primary btn-masinfo">Más Información</a>
				</div>
			</div>
		</div>
	</section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="assets/vendor/jquery.validate.min.js"></script>
	<script src="assets/vendor/jquery.form.min.js"></script>
	<script src="assets/js/app.js"></script>
  </body>
</html>