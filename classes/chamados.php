<?php 
	class chamados{
	
		public function inserirChamados($dados){
			$c= new conectar();
			$conexao=$c->conexao();	

			$sql="INSERT into ocorrencias (usuario, solicitante, loja, problema, servico1, servico2, datainicio, datafim) 		
							   values ('$dados[0]', '$dados[1]','$dados[2]','$dados[3]','$dados[4]','$dados[5]', '$dados[6]', '$dados[7]')";
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

		public function obterDadosTeste($idproduto){
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

		public function gerarPdf($idcargo){
			$c= new conectar();
			$conexao=$c->conexao();

			$sql="SELECT id, 					    
				from ocorrencias 
				where id='$idcargo'";
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

			$sql="UPDATE chamado set descricao='$dados[1]'			
						where id='$dados[0]'";

								
			return mysqli_query($conexao,$sql);
		}

		public function excluir($idcargo){
			$c= new conectar();
			$conexao=$c->conexao();		

			$sql="DELETE from ocorrencias 
					where id ='$idcargo'";
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

		public function obterDados($id){
			$c = new conectar();
			$conexao=$c->conexao();
	
			$sql = "SELECT id, usuario, solicitante, loja, problema, servico1, servico2 from ocorrencias where id='$id' ";
	
				$result = mysqli_query($conexao, $sql);
				$mostrar = mysqli_fetch_row($result);	
				
				//var_dump ($result);
	
				$dados = array(
					'id_fornecedor' => $mostrar[0],
					'usuario' => $mostrar[1],
					'solicitante' => $mostrar[2],
					'sobrenome' => $mostrar[3],
					'endereco' => $mostrar[4],
					'email' => $mostrar[5],
					'telefone' => $mostrar[6],
					//'cpf' => $mostrar[6],
				);
	
				return $dados;
	
		}

		
	}

 ?>