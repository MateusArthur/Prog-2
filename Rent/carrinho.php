<?php include "Includes/Cabecalho.php";?>
	<div class="container">
	<?php include "Includes/menu_lateral.php";?>
		<section class="col-2">
			<h2>Carrinho</h2>
			<div class="carrinho">
				<table rules="rows" border="1" class="tab-prod">
					<tr>
						<td class="menu-tab"></td>
						<td class="menu-tab"></td>
						<td class="menu-tab">PRODUTO</td>
						<td class="menu-tab">PREÇO(UNIDADE)</td>
						<td class="menu-tab"><div class="spd">QUANTIDADE</div></td>
					</tr>
					<tr>
						<td><i class="fa fa-close" id="x" style="font-size:20px"></i></td>
						<td><img src="img/produtos/projetor.jpg" alt="miniatura1"></td>
						<td class="nome-prod">Projeto Multimídia</td>
						<td class="valor-prod" id="valor_prod1">R$20,00(R$20,00)</td>
						<td><input class="form-control" id="qnt_prod1" type="number" value="1" min="1" max="10" onchange="mudar_one()"/></td>
					</tr>
					<tr>
						<td><i class="fa fa-close" id="x" style="font-size:20px"></i></td>
						<td><img src="img/produtos/lavadora.jpg" alt="miniatura1"></td>
						<td class="nome-prod">Lavadora de alta pressão</td>
						<td class="valor-prod" id="valor_prod2">R$20,00(R$20,00)</td>
						<td><input class="form-control" id="qnt_prod2" type="number" value="1" min="1" max="10" onchange="mudar_two()"/></td>
					</tr>
					<tr>
						<td><i class="fa fa-close" id="x" style="font-size:20px"></i></td>
						<td><img src="img/produtos/serra3.jpg" alt="miniatura1"></td>
						<td><a class="nome-prod">Serra elétrica</a></td>
						<td><a class="valor-prod" id="valor_prod3">R$20,00(R$20,00)</a></td>
						<td><input class="form-control" id="qnt_prod3" type="number" value="1" min="1" max="10" onchange="mudar_three()"/></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>
							<div class="att">ATUALIZAR CARRINHO</div>
						</td>
					</tr>
				</table>
				<table border ="1" class="conclusao">
					<td colspan="2" class="menu-total">
						<p>Total no carrinho</p>
					</td>
					<tr>
						<td class="direita">Subtotal</td>
						<td id="stotal">R$60,00</td>
					</tr>
					<tr>
						<td class="direita">Entrega</td>
						<td><label><input type="radio" name="cal_frete" value="l" id="r_local" checked>Retirar no Local <a class="verde">R$0,00</a></label>
							<br>
							<br>
							<label><input type="radio" name="cal_frete" value="c" id="r_frete">Receber em casa <a class="verde">R$20,00</a></label>
						</td>
					</tr>
					<tr>
						<td class="direita">Total</td>
						<td id="ftotal">R$60,00</td>
					</tr>
						<td colspan="2">
						<div class="finalizar">Finalizar</div> 
					</td>
					</tr>
				</table>
			</div>			
		</section>

		<?php include "Includes/maisvendidos.php";?>
	</div>
	<?php include "Includes/rodape.php";?>
</body>
</html>