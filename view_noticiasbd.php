<?php

require_once("./app/conexao/conexao.php");

try{
    $comandoSQL = "SELECT idNoticia, Titulo, Autor, Data_Publicacao, Imagem,
    Texto, Categoria, Resumo, Fonte FROM noticias";

    $selec = $conexao->query($comandoSQL);
    $result = $selec->fetchAll();

} catch (PDOException $e){
    echo "Erro:".$e->getMessage();
}