<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 📰 NOTÍCIAS : : Visualização 📰 </title>
    <link rel="stylesheet" href="./css/grids.css">
    <link rel="stylesheet" href="./css/formulario.css">
    <link rel="stylesheet" href="./css/estilo.css">

</head>
<body>

<div class="container">
        <!--Titulo da Página-->
        <div class="row centralizar-h">
            <h1 style="color: white; font-weight:700 ;">
            . : 📰 NOTÍCIAS 📰 : .
            </h1>
        </div>
        
        <!--Menu-->
        <div class="row centralizar-h">
            <ul class="centralizar-v">
                <a href="cad_noticias.php">
                    <li>CADASTRAR ✍</li>
                </a>
                <a href="view_noticias.php">
                    <li>VISUALIZAR 👓</li>
                </a>
            </ul>
        </div>
</div>
    
<div class="espaco-v"></div> <!--abre um espaço entre os containers-->

    <div class="container">
        <table>            
            <tbody> <!--Vamos mostrar o conteúdo aqui/chamada do BD-->
            <?php
                require_once ("./app/noticias/view_noticiasbd.php");
                foreach($result as $linha){
            ?>

        <!--Visualização da Noticia-->

<!--titulo-->
        <div class="row centralizar-h">         
            <ul class="centralizar-v">
                    <h1 style="color: white; font-weight:700;">
                    <?= $linha ["Titulo"];?>
                    </h1>
            </ul>
        </div>

<!--resumo-->
        <div class="row centralizar-h">
            <div class="row centralizar-v" style="color: white; font-size: 14px; ">
            <p><i> <?= $linha ["Resumo"]; ?></i></p>              
            </div>
        </div>
        
<!--imagem-->

        <h1>
            <img src="./app/noticias/imagens/<?= $linha ["Imagem"];?>"
                alt="" height="300px">
        </h1>


<!--autor e categoria-->
        <h3>               
            <p style="color: white; font-size: 18px;"> <u><b><?= $linha ["Autor"]; ?></b></u>                   
            <i><small>, em <?= $status= $linha ["Categoria"];?></i></small> </p>
        </h3> 
    
        <!--Autor e fonte-->                   
        <li style="color: white; font-size: 12px; text-align:right;"><i>Fonte: <?= $linha ["Fonte"]; ?>
                     &nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;  <!--espaço entre palavras-->
                     Publicado em <?= $linha ["Data_Publicacao"]; ?></i>
        </li>
        <br>

<!--texto-->
        <div class="row centralizar-h">  
            <div class="row centralizar-v"style="color: white; font-size: 16px;margin-bottom: 30px;">
                      <?= $linha ["Texto"]; ?>                    
            </div>
        </div>

<hr color="white" width="100%" size="1"><!--linha separadora--->

        <div class="espaco-v"></div> <!--abre um espaço entre os containers-->
        <div class="espaco-v"></div> <!--abre um espaço entre os containers-->
        <div class="espaco-v"></div> <!--abre um espaço entre os containers-->

                                   
<?php
                }
?>
            </tbody>
        </table>
    </div>


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