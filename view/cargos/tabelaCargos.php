
<?php 

require_once "../../classes/conexao.php";
	$c = new conectar();
		$conexao=$c->conexao();

	$sql = "SELECT id_cargos, cargos FROM cargos";
	$result = mysqli_query($conexao, $sql);

	 ?>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
	<caption><label>Tabela de Cargos</label></caption>
	<tr>
		<td>Nome do Plano</td>
		<td>Valor</td>
		<td>Editar</td>
		<td>Excluir</td>
	</tr>
	<?php while($mostrar=mysqli_fetch_row($result)): ?> 
	<tr>
		<?php //var_dump($result);?>
		<td><?php echo $mostrar[1]; ?></td>		
		<?php //var_dump($result);?>
		<td><?php echo $mostrar[1]; ?></td>		
		<td>
		<span  data-toggle="modal" data-target="#atualizaCategoria1" class="btn btn-warning btn-xs" onclick="addDadosProduto('<?php echo $mostrar[0];?>')">
				<span class="glyphicon glyphicon-pencil"></span>
			</span>
		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="eliminaCargo('<?php echo $mostrar[0] ?>')">
				<span class="glyphicon glyphicon-remove"></span>
			</span>
		</td>
	</tr>
<?php endwhile; ?>
</table>