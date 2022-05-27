<!-- alterarProcessa.php -->
<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php';?>
<?php
 
			$matricula =$_GET['matricula']; 
			$nome =     $_GET['nome'];
			 		
			$novoUsuario = new ClassUsuario();//cria um objeto $novoUsuario que instancia da ClassUsuario-get e set
			$novoUsuario->setMatricula($matricula);
			$novoUsuario->setNome($nome);
   		
					
            $classUsuarioDAO = new ClassUsuarioDAO();
            $array = $classUsuarioDAO->alterar($novoUsuario);
			echo $array;
				if ($array==TRUE) {
					header('Location:listar.php');
				}else {
				  echo "Erro";
				}
 ?>
	