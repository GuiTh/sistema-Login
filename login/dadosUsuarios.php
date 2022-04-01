<?php

require_once "Cadastro.php"

$dados['username'] = $_POST['username'];
$dados['password'] = $_POST['password'];

$db = new Cadastro()

if($db->login($dados) == true){
    header('Location: confirmacao.php')
}else {
    header('Location: index.html')

}

?>