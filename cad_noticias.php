<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ✎ NOTÍCIAS : : Cadastro 📰</title>
    <link rel="stylesheet" href="./css/grids.css">
    <link rel="stylesheet" href="./css/formulario.css">
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>

    <div class="container">
        <!--Titulo da Página-->
        <div class="row centralizar-h">
            <h1 style="color: white; font-weight:700 ;"> ✎ CADASTRO DE NOTÍCIAS 📰 </h1>
        </div>
        
        <!--Menu-->
        <div class="row centralizar-h">
            <ul class="centralizar-v">
                <a href="cad_noticias.php"><li>CADASTRAR ✍</li></a>
                <a href="view_noticias.php"><li>VISUALIZAR 👓</li></a>
            </ul>
        </div>
 
    </div>

    <div class="espaco-v"></div> <!--Espaço entre os containers-->

<!--chamada da conexão com o BD-->
    <?php
        require_once("./app/conexao/conexao.php"); 
    ?>

    <form action="./app/noticias/cad_noticiasbd.php" method="POST" enctype="multipart/form-data" >
    <div class="container">

<!--Titulo-->
        <div class="row">
            <div class="col-2">
                <label for="Titulo">Titulo</label>
            </div>
            <div class="col-8">
                <input type="text" name="Titulo" id="Titulo" placeholder="Título da Notícia">                 
            </div>
        </div>

<!--Autor-->
        <div class="row">
            <div class="col-2">
                <label for="Autor">Autor</label>
            </div>
            <div class="col-8">
                <input type="text" name="Autor" id="Autor" placeholder="Nome do autor">
            </div>
        </div>

<!--Data da Publicacao-->
        <div class="row">
            <div class="col-2">
                <label for="Data_Publicacao">Data de Publicação</label>
            </div>
            <div class="col-8">
                <input type="date" name="Data_Publicacao" id="Data_Publicacao">
            </div>
        </div>

<!--Imagem-->
        <div class="row">
            <div class="col-2">
                <label for="Imagem">Imagem</label>
            </div>
            <div class="col-8">
                <input type="file" name="Imagem" id="Imagem" class="inputfile">
                 <label for="Imagem">Imagem</label>
            </div>
        </div>

<!-- Texto -->

      <div class="row">
            <div class="col-2">
                <label for="Texto">Texto</label>
            </div>
            <div class="col-8">
                   <textarea id="Texto" name="Texto" rows="7" cols="33"style="width: 100%;">
"Digite seu texto aqui..."   
                    </textarea>
            </div>
        </div>


<!--Categoria-->
        <div class="row">
            <div class="col-2">
                <label for="Categoria">Categoria</label>
            </div>
            <div class="col-8">
                <select name="Categoria" id="Categoria">
                    <!--Dá a opção de seleção na tela-->
                    <option value="Tecnologia">Tecnologia</option>
                    <option value="Dicas">Dicas</option>
                    <option value="Tendência">Tendência</option>
                    <option value="Curiosidades">Curiosidades</option>
                    <option value="Ciência">Ciência</option>
                </select>
            </div>
        </div>

<!-- Resumo -->
        <div class="row">
            <div class="col-2">
                <label for="Resumo">Resumo</label>
            </div>
            <div class="col-8">
            <textarea id="Resumo" name="Resumo" rows="3" cols="20"style="width: 100%;">
"Digite seu resumo aqui..."   
                    </textarea>
            </div>
        </div>
        
<!-- Fonte -->
        <div class="row">
            <div class="col-2">
                <label for="Fonte">Fonte</label>
            </div>
            <div class="col-8">
                <input type="text" name="Fonte" id="Fonte"placeholder="Digite a Fonte"> 
            </div>
        </div>

<!--Botões de envio e limpar-->
        <div class="row">
            <div class="col-10 centralizar-h">
                <!-- botão limpar -->
                <input type="reset" value="Limpar" class="botao">
                <!-- botão enviar --> 
                <input type="submit" value="Enviar" class="botao">  
            </div>
        </div>
    
    </div>
    </form>

<div class="espaco-v"></div> <!--abre um espaço entre os containers-->
<div class="espaco-v"></div> <!--abre um espaço entre os containers-->
<div class="espaco-v"></div> <!--abre um espaço entre os containers-->

<!--desenvolvedora-->    
<div class="container" style="background-color: rgb(203, 107, 72); padding: 2px 20px;
         border-radius:20px; font-style: italic; font-family: 'Courier New', Courier, monospace;
         letter-spacing: 4px;  font-size:xx-small;text-align:right; margin-bottom: 10px;">
            
            <h2>Desenvolvido por | ✿ Klair de Lizarraga ✿ : : 1sem2022</h2>
        
</div>

</body>

</html>