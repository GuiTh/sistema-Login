<?php

class Conexao extends PDO{

        protected $dns = ("mysql:dbname=sistema_login;localhost");
        protected $usuario = "root";
        protected $senha = "";
        protected $conn;

        public function __construct(){
            $this->conn = new PDO($this->dns, $this->usuario, $this->senha)
        }
        

}

?>