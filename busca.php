<?php
	//Incluir a conexão com banco de dados
	include_once('conexao.php');
	
	//Recuperar o valor da palavra
	$produto = $_POST['palavra'];
	

				$pegaProduto ="SELECT * FROM safra WHERE produto LIKE '%$produto%' "; 
					$resultadoProduto = mysqli_query($conn, $pegaProduto);

					if(mysqli_num_rows($resultadoProduto) <= 0){
		echo "<h1>Nenhum Produto encontrado...</h1>";
	}else{
					while($row_produto = mysqli_fetch_assoc($resultadoProduto)){
						$produto1 = utf8_encode($row_produto['produto']);
						$descricao1= utf8_encode($row_produto['descricao']);
						$preco1 = utf8_encode($row_produto['preco']);
						$usuario1 = utf8_encode($row_produto['usuario']);
						$imagem1 = utf8_encode($row_produto['imagem']);
						$quantidade1 = utf8_encode($row_produto['quantidade']);
						$unidade1 = ucfirst(utf8_encode($row_produto['unidade']));

							$pegaUsuario ="SELECT nome, contato FROM usuarios WHERE user = '$usuario1'"; 
							$resultadoUsuario = mysqli_query($conn, $pegaUsuario);
							$row_usuario = mysqli_fetch_assoc($resultadoUsuario);
							$nome2 = utf8_encode($row_usuario['nome']);
							$contato2 = utf8_encode($row_usuario['contato']);
				echo "<li>
					<p class='date'><img src='images/".$imagem1."' /></p>
					<h3>".$produto1." R$<b> ".$preco1."</b></h3>
					<p>".$descricao1."</p>
					<p color:'green'><i>Estoque aproximado: <b>".$quantidade1."</b>".$unidade1."s</i></p>
					<p class='vendedor'><b> Vendedor: ".$nome2." Contato: ".$contato2."</b></p>

				</li>";
}}
 ?>