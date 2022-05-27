<!-- excluir.php -->
<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php'; ?>
<?php
   $classUsuarioDAO = new ClassUsuarioDAO();
   $array           = $classUsuarioDAO->listar();
   
	if (isset($_GET['matricula'])) {
            $matricula = $_GET['matricula'];
			 		
			$novoUsuario = new ClassUsuario();//cria um objeto $novoUsuario que instancia da ClassUsuario-get e set
			$novoUsuario->setMatricula($matricula);
			
			
            $classUsuarioDAO = new ClassUsuarioDAO();
            $array = $classUsuarioDAO->excluir($novoUsuario);
            if ($array==TRUE) {
                 header('Location:listar.php');
            }else {
              echo "Erro";
			}
    }
?>
 


