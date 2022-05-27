<!-- alterar.php -->
<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php';?>
<?php
$matricula = $_GET['matricula']; 
$nome      = $_GET['nome'];
?>
     <form action="AlterarProcessa.php" method="GET" >
          <center>
          <h1>ALTERAR DADOS</h1>
		   Matrícula:
           <input type="text" name="matricula" value=<?php echo $matricula;?> > <br><br>
           Nome:
           <input type="text" name="nome" size=24 value=<?php echo $nome;?>  ><br><br>
         
		   <input type="submit" value="ALTERAR" />
         </center>
      </form>

 