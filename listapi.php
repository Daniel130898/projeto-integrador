<?php
session_start();

	include 'conexaoPI.php';
	$sql = "SELECT * FROM dadoseqp ORDER BY prioridade, data";
	$con = mysqli_query($conn, $sql) or die("could not connect to mysql");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista de Chamados</title>
	</head>

	<body>
		<h1>Lista de Chamados</h1>
		<hr>
		<table border="5" width="75%" >
			<tr>
				<td>Prioridade</td>
				<td>Equipamento</td>
				<td>Marca</td>
				<td>Modelo</td>
				<td>Problema</td>
				<td>Descrição</td>
				<td>Data</td>
			</tr>

		<?php while($dados = mysqli_fetch_array($con)) { ?>
				<tr>
					<td><center><?php echo $dados['prioridade']; ?></center></td>
					<td><center><?php echo $dados['nomeeqp']; ?></center></td>
					<td><center><?php echo $dados['marca']; ?></center></td>
					<td><center><?php echo $dados['modelo']; ?></center></td>
					<td><center><?php echo $dados['problema']; ?></center></td>
					<td><center><?php echo $dados['descricao']; ?></center></td>
					<td><center><?php echo $dados['data']; ?></center></td>
					<!--<td><center><a href="del.php?id=<?php echo $dados['id'] ?>"><input type="submit" value="x"></a></center></td>
					<td><center><a href="atualizar.php?id=<?php echo $dados['id'] ?>"><input type="submit" value="editar"></a></center></td>
					-->
				</tr>
		<?php } ?>
		</table>


		<a href="/ticket.php"><input type="submit" value="voltar"></a>
	</body>
</html>
