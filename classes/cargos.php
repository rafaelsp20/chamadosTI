

<?php 
	class cargos{
	
		public function inserirCargo($dados){
			$c= new conectar();
			$conexao=$c->conexao();

			$data=date('Y-m-d');

			$sql="INSERT into cargos (cargos) 			
										
							values ('$dados[1]')";

			return mysqli_query($conexao,$sql);
		}

// salvar no banco de dados id produto e id tags

		public function inserirProdutoTag($ver,$dados){
			$c= new conectar();
			$conexao=$c->conexao();
			

			$sql="INSERT into product_tag (product_id, tag_id)
				values ('$ver[0]','$dados[0]')";

											
				return mysqli_query($conexao,$sql);
				

		}	

		public function obterDados($idproduto){
			$c= new conectar();
			$conexao=$c->conexao();

			$sql="SELECT id, 
					    name 
				from product 
				where id='$idproduto'";
			$result=mysqli_query($conexao,$sql);

			$mostrar=mysqli_fetch_row($result);

			$dados=array(
					"id" => $mostrar[0],
					"name" => $mostrar[1]					
						);

			return $dados;
		}



		public function atualizar($dados){
			$c= new conectar();
			$conexao=$c->conexao();

			$sql="UPDATE cargos set cargos='$dados[1]'							
						where id_cargos='$dados[0]'";

					
			return mysqli_query($conexao,$sql);
		}



		public function excluir($idcargo){
			$c= new conectar();
			$conexao=$c->conexao();		

			$sql="DELETE from cargos 
					where id_cargo ='$idcargo'";
		return mysqli_query($conexao, $sql);
		
				echo $sql;	
		}

		
		public function obterUrlImagem($idImg){
			$c= new conectar();
			$conexao=$c->conexao();

			$sql="SELECT url 
					from imagens 
					where id_imagem='$idImg'";

			$result=mysqli_query($conexao,$sql);

			return mysqli_fetch_row($result)[0];
		}

		
	}

 ?>