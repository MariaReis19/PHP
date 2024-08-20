<?php 
	//cabeçalho
	include_once 'includes/header.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Novo Pet</h3>
			
			<form action="php_action/criar_pet.php" method="POST">
				
				<div class="input-field col s12">
					<input type="text" name="nomePet" id="nomePet">
					<label for="nomePet">Nome Pet</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="idadePet" id="idadePet">
					<label for="idadePet">Idade Pet</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="racaPet" id="racaPet">
					<label for="racaPet">Raça</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="obsPet" id="obsPet">
					<label for="obsPet">Observações</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="nomeTutor" id="nomeTutor">
					<label for="nomeTutor">Nome Tutor</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="emailTutor" id="emailTutor">
					<label for="emailTutor">E-mail Tutor</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="telCelular" id="telCelular">
					<label for="telCelular">Celular Tutor</label>
				</div>
				

				<button href="index.php" name = "btn-cadastrar" class="btn">Cadastrar</button>

				
				<a href="index.php" class="btn green">Lista de Pets</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>