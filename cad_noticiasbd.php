<?php
 
    if($_SERVER['REQUEST_METHOD']=="POST"){

    $dir_imagens = "./imagens/";

    $nome_original = str_replace(" ","_", basename($_FILES["Imagem"]["name"]));
    $token = md5(uniqid(rand(),true));  
     $nome_final = $dir_imagens.$token.$nome_original;
     $flag = 1;
 
    if(!getimagesize($_FILES["Imagem"]["tmp_name"])){
        $flag = 0;
    }

    if($_FILES["Imagem"]["size"]>2000000) {//2Mb
        $flag = 0;
    }

    
    $extensao = strtolower(pathinfo($nome_final, PATHINFO_EXTENSION));

    //teste para validar a extensão do arquivo diferente em php é != 
    if (($extensao != "jpg") && ($extensao != "png") &&
     ($extensao != "jpeg") && ($extensao != "gif")){
         $flag = 0;
     }

     if($flag == 1){
        move_uploaded_file($_FILES["Imagem"]["tmp_name"],$nome_final);

        $imagem = $token.$nome_original;
     }
     else{
        $imagem = "sem-foto.jpg";
     }

     //*******************FIM DO UPLOAD ********************************

     // FILTER_SANITIZE_ ...serve para limpar as entradas das informações
     $titulo     = filter_input(INPUT_POST,"Titulo",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $autor = filter_input(INPUT_POST,"Autor",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $data_publicacao = filter_input(INPUT_POST,"Data_Publicacao",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $texto    = filter_input(INPUT_POST,"Texto",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $categoria    = filter_input(INPUT_POST,"Categoria",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $resumo    = filter_input(INPUT_POST,"Resumo",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $fonte   = filter_input(INPUT_POST,"Fonte",FILTER_SANITIZE_FULL_SPECIAL_CHARS);

     require_once("../conexao/conexao.php");

     try {

         $comandoSQL = $conexao->prepare("INSERT INTO noticias
            (Titulo, Autor, Data_Publicacao, Imagem,
             Texto, Categoria, Resumo, Fonte)
            VALUES
            (:Titulo, :Autor, :Data_Publicacao, :Imagem, :Texto, :Categoria, :Resumo, :Fonte)
         ");
     

     $comandoSQL->execute(array(
        ':Titulo'           => $titulo,
        ':Autor'            => $autor,
        ':Data_Publicacao'  => $data_publicacao,
        ':Imagem'           => $imagem,
        ':Texto'            => $texto,
        ':Categoria'        => $categoria,
        ':Resumo'           => $resumo,
        ':Fonte'            => $fonte
     ));
     
        if($comandoSQL->rowCount()>0) 
        {
            echo "Sucesso!";
        }

        else
        {
            echo "erro ao inserir dados no banco";
        }
    }
    catch (PDOException $erro){
        echo "ERRO: ".$erro->getCode()."<br>"; 
        echo($erro->getMessage());
    }

    //fechar a conexão 

    $conexao = null;
}

else {
    echo "NO POST";
}