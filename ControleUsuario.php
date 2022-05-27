<!--  ControleUsuario.php -->
<?php
require_once 'ClassUsuario.php';
require_once 'ClassUsuarioDAO.php'; 

$matricula = $_POST['matricula'];
$nome =      $_POST['nome'];

    $novoUsuario = new ClassUsuario();//cria um objeto $novoUsuario que instancia da ClassUsuario-get e set
    $novoUsuario->setMatricula($matricula);
	$novoUsuario->setNome($nome);
   
    $classUsuarioDAO = new ClassUsuarioDAO();//cria um objeto  $classUsuarioDAO
    $classUsuarioDAO->cadastrar($novoUsuario);  	
?>



