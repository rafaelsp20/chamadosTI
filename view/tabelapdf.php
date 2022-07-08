<?php 

//requisitando informações ao banco de dados para gerar o pdf
require_once "../classes/conexao.php";
	$c = new conectar();
	$conexao=$c->conexao();
	$idvenda=$_GET['idvenda'];
	$sql = "SELECT id, usuario, solicitante,loja, problema, servico1, servico2 dataincio FROM ocorrencias WHERE id='$idvenda'";
	$result = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="charset=utf-8" />
    <title>Document</title>
</head>   
<style>
           .right
			{
				text-align: right;
				font-weight: 700;
			}
			.bottom
			{
				text-align: center;
				background-color: #ADD8E6;
			}
			table
			{
				border-collapse: collapse;
				page-break-inside: auto;
                width: 100%;
			}
			td
			{
				border: 1px solid black;
			}
		</style>

<?php while($mostrar=mysqli_fetch_row($result)): ?> 

<body>
<h3>Ocorrencias Técnica<h3>
<p>Ordem de Serviço <?php echo $mostrar[0]; ?></p>	
	<br>
<form action="#" method="post">
			<table>
				<colgroup>
					<col style="width: 150px" />
				</colgroup>			
				<tbody>
					<tr>
						<td class="right">
							<label for="last-name">Solicitante</label>
						</td>
						<td colspan="3">
							<input type="text" id="last-name" size="42" value="<?php echo $mostrar[2]; ?>" />
						</td>
					</tr>
					<tr>
					<tr>
						<td class="right">
							<label for="first-name">loja:</label>
						</td>
						<td colspan="3">
							<input type="text" id="first-name" size="42" value="<?php echo $mostrar[3]; ?>" />
						</td>
					</tr>
						<td class="right">
							<label for="address">Problema</label>
						</td>
						<td colspan="3">
							<textarea id="address" size="42" cols="31"><?php echo $mostrar[4]; ?></textarea>
						</td>
					</tr>
					<tr>
						<td class="right">
							<label for="address">Serviço Executado</label>
						</td>
						<td colspan="3">
							<textarea id="address" size="42" cols="31"><?php echo $mostrar[5]; ?></textarea>
						</td>
					</tr>
					<tr>
						<td class="right">
							<label for="address">Nota complementar</label>
						</td>
						<td colspan="3">
							<textarea id="address" cols="31"><?php echo $mostrar[6]; ?></textarea>
						</td>
					</tr>

					<tr>
						<td class="right">
							<label for="comments">Observações</label>
						</td>
						<td colspan="3">
							<textarea id="comments" cols="31"></textarea>
						</td>
					</tr>
				</tbody>

				<?php endwhile; ?>
			</table>
			<br><br>

			<p>Local e Data </p>
			<br><br>
			======================================
			<br>

			<p>Tecnico Resposavel</p>
			<br><br>
			======================================

		</form>
	</body>
</html>