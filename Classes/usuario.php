<?php
    
    class Usuario
    {
          private $pdo;
          public $msgErro ="";
          public function conectar($nome, $host, $usuario, $senha)
          {
            global $pdo;
            try{
                $pdo = new PDO("mysql:dbname=" .$nome,$usuario,$senha);
            }
            catch(PDOexception $erro)
            {
                 $msgErro = $erro->getMessage();
            }
          } 
    }

?>