<!DOCTYPE html>
<html>
<head>
	<title>REQUISIÇÃO - Ajax</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta name="author" content="Kário Freire">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- AJAX CDN -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<!-- CSS -->
	<style type="text/css">
		/* Eliminando marca d'água da Webhost */
		img[alt="www.000webhost.com"]{display:none;}
	</style>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<header class="text-center">
					<h1>ENTRAR</h1>
					<hr>
				</header>
				<div class="form-group has-feedback">
					<label class="control-label">* E-mail:</label>
					<input type="email" id="user_email" name="user_email" class="form-control" placeholder="Digite aqui...">
				</div>
				<div class="form-group has-feedback">
					<label class="control-label">* Senha:</label>
					<input type="password" id="user_senha" name="user_senha" class="form-control" placeholder="Digite sua senha...">
				</div>
				<input type="button" id="button" name="button" value="Entrar" class="btn btn-success btn-lg btn-block">
			</div>
		</div>
	</div>

	<!-- SCRIPT BOOTSTRAP -->
	<script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- SCRIPT -->
	<script type="text/javascript">
		$(document).ready(function(){
			$("#button").click(function(){
				var user_email = $("#user_email").val();
				var user_senha = $("#user_senha").val();

				$.post('received.php', {email: user_email, senha: user_senha}, function(result){
					if (result != null) {
						alert(result);
					}else {
						alert("Ocorreu algum erro.");
					}
				}); 
			});
		});
	</script>
</body>
</html>