<?php 
session_start();
require_once "../../classes/conexao.php";
	$c = new conectar();
	$conexao=$c->conexao();

	/*$id = $_SESSION['iduser']; 
	//$id = "admin";
	//$sql = "SELECT * FROM chamado where id_usuario = '".$_SESSION['iduser']. "'"; 
		//$sql = "SELECT id, usuario, tipo, loja, descricao, status FROM chamado";*/


	$sql = "SELECT * FROM chamado WHERE id_usuario = '". $_SESSION['iduser']."'  ORDER BY id DESC LIMIT 3 ";	
	$result = mysqli_query($conexao, $sql);
?>
		
			<div class="panel-heading">
				<h3 class="panel-title text-center">HISTÓRICOS DE CHAMADOS</h3>
			</div>
			
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								
								<th>DATA INCLUSÃO</th>
								<th>NECESSIDADE</th>
								<th>STATUS</th>
								<th>EDITAR</th>
								<th>EXCLUIR</th>
							</tr>
							<?php while($mostrar=mysqli_fetch_row($result)): ?>
						</thead>
						<tbody>
							<tr>
							
							<td><?php echo $mostrar[1]; ?></td>
							<td><?php echo $mostrar[6]; ?></td>
							<td><?php echo $mostrar[7]; ?></td>
							<td>


<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#atualizaCategoria" onclick="adicionarDado('<?php echo $mostrar[0]; ?>','<?php echo $mostrar[6]; ?>')">

				<span class="glyphicon glyphicon-pencil"></span>
			</span>
		</td>							
							<td>								
							<a href="#" class="btn btn-danger">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Excluir
									</a>						
							</td>		
							</tr>
<?php endwhile; ?>
						</tbody>					
					</table>
					<a href="listagem_chamado.php" >
					<span class="btn btn-primary" id="btnAdicionarCategoria">Todos Chamados</span></a>

			</div>						
	</div>
</div>	
	
	
