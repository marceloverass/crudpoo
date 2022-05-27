<!-- Conexao.php -->
<?php
abstract class Conexao{
    public static function getInstance() {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=pdocrud","root","senha");
            return $pdo;
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
}
?>
