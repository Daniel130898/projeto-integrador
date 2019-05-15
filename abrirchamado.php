<?php
	include 'conexaoPI.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Chamado</title>
	</head>

<body>
	<h1>Cadastro de Chamado</h1>
	<hr>
	<form method="post" action= "">

			<label class="tarja" for="equipamento">Equipamento:</label>
			<input type="text" name="equipamento" id="equipamento" value="" class=""><br>

			<label class="tarja" for="prioridade">Prioridade:</label>
			<select name="prioridade" id="prioridade" class="">
			<option value="Alta"> Alta </option>
			<option value="Média"> Média </option>
			<option value="Sem gravidade" selected="selected"> Sem gravidade </option><br>
			</select><br>

					<label class="tarja" for="marca">Marca:</label>
					<select name="marca" id="marca" class="">
					<option value=" " selected="selected">   </option><br>
					<option value="HP"> HP </option>
					<option value="Samsung"> Samsung </option>
					<option value="LG"> LG </option>
					</select><br>

							<label class="tarja" for="modelo">Modelo:</label>
							<select name="modelo" id="modelo" class="">
							<option value=" " selected="selected">   </option><br>
							<option value="MF 1214"> MF 1214 </option>
							<option value="SP 123"> SP 1231 </option>
							<option value="KF 1241"> KF 1241 </option>
							</select><br>

								<label class="tarja" for="problema">Problema:</label>
								<select name="problema" id="problema" class="">
								<option value=" " selected="selected">   </option><br>
								<option value="Mal funcionamento"> Mal funcionamento </option>
								<option value="Não liga"> Não liga </option>
								<option value="Sla"> Sla </option>
								</select><br>

									<label class="tarja" for="descricao">Descrição:</label>
									<input type="text" name="descricao" id="descricao" value="" class=""><br>

										<input type="submit" value="Enviar ticket">
	</form>
			<?php
			if (!empty($_POST['equipamento'])){
					$data = date("d/m/y", time());
					$equipamento= $_POST['equipamento'];
					$prioridade = $_POST['prioridade'];
					$marca = $_POST['marca'];
					$modelo = $_POST['modelo'];
					$problema = $_POST['problema'];
					$descricao = $_POST['descricao'];

					//$sql = mysqli_query($conexao, "INSERT INTO pi2(equipamento) VALUES ('$equipamento')");
					$sql = mysqli_query($conexao, "INSERT INTO pi(equipamento, prioridade, marca, modelo, problema, descricao, data) VALUES ('$equipamento', '$prioridade', '$marca', '$modelo', '$problema', '$descricao', '$data')");
					echo '<h1>CADASTRADO COM SUCESSO!</h1>';
				}
			?>
					<a href="listapi.php"><input type="submit" value="Voltar"></a>
</body>
</html>
