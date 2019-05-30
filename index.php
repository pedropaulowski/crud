<?php
include 'contato.class.php';
$contato = new Contato();
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
<body class="bg-secondary">
	<div class="container">
		<h1 class="text-center text-white">Contatos</h1>

		<table class= "table table-dark table-hover" border="1">
			<tr>
				<th>#ID</th>
				<th>NOME</th>
				<th>E-MAIL</th>
				<th>AÇÕES</th>	
			</tr>
			<?php
			$lista = $contato->getAll();
			foreach ($lista as $item):
			?>
			<tr>
				<td>#<?php echo $item['id']; ?></td>
				<td><?php echo $item['nome']; ?></td>
				<td><?php echo $item['email']; ?></td>
				<td><button class="btn btn-warning "><a class="text-dark" href="editar.php?id=<?php echo $item['id']; ?>">EDITAR</a></button>
					<button class="btn btn-danger "><a class="text-white" href="excluir.php?id=<?php echo $item['id']; ?>">EXCLUIR</a></button></td>
			</tr>
			<?php endforeach; ?>

		</table>
		<button class="btn btn-dark"><a class="text-white" href="adicionar.php">Adicionar Contato</a></button>
	</div>
</body>