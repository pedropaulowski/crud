<head>
	<meta charset="utf-8"/>
	<title>CRUD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="bootstrap.min.css"/>
	<script type="text/javascript" src="popper.min.js"></script>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</head>

<div class="container" >
	<h1 class="text-center">Adicionar</h1>	
	<form method="POST" action="adicionar_submit.php">
		<h6>Nome</h6>
		<input type="text" name="nome" placeholder="Nome" /><br/><br/>
		<h6>E-mail</h6>
		<input type="email" name="email" placeholder="E-mail" /><br/><br/>
		<input type="submit" value="Enviar"class="btn btn-success" />
	</form>
</div>