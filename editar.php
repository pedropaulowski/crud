<?php
include 'contato.class.php';
$contato = new Contato();

if(!empty($_GET['id'])){
	$id = $_GET['id'];

	$info = $contato->getInfo($id);

	if (empty($info['email'])) {
		header("Location: index.php");
		exit;
	}
} else {
	header("Location: index.php");
	exit;
}
?>
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
	<h1 class="text-center">Editar</h1>
	<form method="POST" action="editar_submit.php">
		<input type="hidden" name="id" value="<?php echo $info['id'];?>"/>
		<h6>Nome</h6>
		<input type="text" name="nome" value="<?php echo $info['nome'];?>"/><br/><br/>
		<h6>E-mail</h6>
		<input type="email" name="email" value="<?php echo $info['email'];?>"/>	<br/><br/>
		<input type="submit" value="Salvar"class="btn btn-success" />
	</form>
</div>