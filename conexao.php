<?php //início de qualquer php

//para chamar e abrir o banco de dados, por isso usuário e senha
$_dns = "mysql:host=localhost;dbname=noticias";
$_usuario = "root";
$_senha = ""; 

try {
    $conexao = new PDO($_dns, $_usuario, $_senha);
} catch (PDOException $erro) {
    echo "ERRO".$erro->getCode();
    echo "Mensagem: ".$erro->getMessage();
}