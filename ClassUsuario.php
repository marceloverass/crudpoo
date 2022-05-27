<!-- ClassUsuario.php -->
<?php
class ClassUsuario {
    private $matricula;
    private $nome;   
	
    function getMatricula() {
        return $this->matricula;
    }
    function getNome() {
        return $this->nome;
    }
    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }    
}
