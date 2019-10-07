<?php include "Includes/Cabecalho.php";?>
	<div class="container">
	<?php include "Includes/menu_lateral.php";?>
		<section class="col-2">
			<h2>Minha conta</h2>
			<div>
				<form action="" method="post" id="form-contato">
					<fieldset>
						<legend><strong>Já possui cadastro?</strong></legend>
					    <div class="form-item">
					      <label for="usuario" class="rotulo">Login ou e-mail:</label>
					      <input type="text" id="usuario" name="usuario" size="50">   
					    </div>
					    <div class="form-item">
					      <label for="senha" class="rotulo">Senha:</label>
					      <input type="password" id="senha" name="senha" size="50">   
					    </div>					    				    			
					    <div class="form-item">
							<input type="submit" id="botao" value="Entrar">
					    </div>
					</fieldset>
					<br>
					<fieldset>
						<legend>
							<strong>Ainda não é nosso cliente?</strong>
						</legend>
						<p>
							<a href="cad_cliente.php">
							Cadastre-se</a> agora para utilizar nossos serviços
						</p>
					</fieldset>
				</form>
			</div>			
		</section>

		<?php include "Includes/maisvendidos.php";?>
	</div>
	<?php include "Includes/rodape.php";?>
    <script src="js/index.js"></script>
	<script src="js/cad_cliente.js"></script>
</body>
</html>