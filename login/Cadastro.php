<?php

    require_once("Conexao.php");
    class Cadastro extends Conexao{

        public function login($dados){
            $query = "SELECT * FROM usuario Where username= :email and senha=:senha;";
            $resultado = $this->conn->prepare($sql);
            $resultado->bindParam(':username', $dados['username'])
            $resultado->bindParam(':senha', $dados['senha'])
            $resultado->execute()
            $dados = $resultado->fetch(PDO::FETCH_ASSOC)
            if ($dados){
                return true
            }else{
                return false
            }

        }
    }


?> 