<?php 
	include_once 'php_action/conexao_bd.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbPets WHERE codPet = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);



	}



?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar pet</h3>
			
			<form action="php_action/alterar_pets.php" method="POST">

				<input type="hidden" name = "codPet" value="<?php echo $dados['codPet']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="nomePet" id="nomePet" value="<?php echo $dados['nomePet']; ?>">
					<label for="nomePet">Nome Pet</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="idadePet" id="idadePet" value="<?php echo $dados['idadePet']; ?>">
					<label for="idadePet">Idade Pet</label>
				</div>

					<div class="input-field col s12">
					<input type="text" name="racaPet" id="racaPet" value="<?php echo $dados['racaPet']; ?>"
					>
					<label for="racaPet">Raça</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="obsPet" id="obsPet" value="<?php echo $dados['obsPet']; ?>">
					<label for="obsPet">Observação</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="nomeTutor" id="nomeTutor" value="<?php echo $dados['nomeTutor']; ?>">
					<label for="nomeTutor">Nome Tutor</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="emailTutor" id="emailTutor" value="<?php echo $dados['emailTutor']; ?>">
					<label for="emailTutor">E-mail Tutor</label>
				</div>

					<div class="input-field col s12">
					<input type="text" name="telCelular" id="telCelular" value="<?php echo $dados['telCelular']; ?>"
					>
					<label for="telCelular">Celular</label>
				</div>

				<button href="index.php" name="btn-alterar" class="btn">Alterar</button>
				<a href="index.php" name="btn-alterar" class="btn">Alterar</a>			
				<a href="index.php" class="btn green">Lista de Pets</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>