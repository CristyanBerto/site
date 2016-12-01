<?php
require_once 'dao/DaoCategoria.php';
$DaoCategoria = DaoCategoria::getInstance();
$dadosCategoria = $DaoCategoria->listar();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pesadão Eletrônicos</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/sitecss.css" type="text/css"/> 
        <link rel="icon" href="img/inhegascartoon.jpg" type="image/x-icon"/>    
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <img src="img/logo.jpg"/>
            </div>
            <div id="navigation"> 
                <ul>
                    <li><a class="<?= ($_GET["pg"] == "home" ? "active" : "") ?>" href="?pg=home"><i class="fa fa-home"></i><br> Home</a></li>
                    <li class="dropdown"><a class="<?= ($_GET["pg"] == "produtos" || $_GET["pg"] == "Celulares" || $_GET["pg"] == "Computadores" || $_GET["pg"] == "Notebooks" || $_GET["pg"] == "Acessórios" ? "active" : "") ?>" href="?pg=produtos"><i class="fa fa-dropbox"></i><br>Produtos</a>
                        <ul>
                            <li>
                                <div class="dropdown-content">
                                    <?php
                                    foreach ($dadosCategoria as $rowCategoria) {
                                        ?>
                                        <a href="?pg=produtos&cat=<?= $rowCategoria["id"] ?>"><?= $rowCategoria["descricao"] ?></a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown"><a class="<?= ($_GET["pg"] == "servicos" || $_GET["pg"] == "faq" || $_GET["pg"] == "mapa" || $_GET["pg"] == "faq" || $_GET["pg"] == "descarte" ? "active" : "") ?>" href="?pg=servicos" class="dropbtn"><i class="fa fa-wrench"></i><br> Serviços</a>
                        <ul>
                            <li>
                                <div class="dropdown-content">
                                    <a class="<?= ($_GET["pg"] == "faq" ? "active" : "") ?>" href="?pg=faq">FAQ</a>
                                    <a class="<?= ($_GET["pg"] == "mapa" ? "active" : "") ?>" href="?pg=mapa">Mapa de riscos</a>
                                    <a class="<?= ($_GET["pg"] == "descarte" ? "active" : "") ?>" href="?pg=descarte">Programa de descarte</a>
                                    <a class="<?= ($_GET["pg"] == "manutencao" ? "active" : "") ?>" href="?pg=manutencao">Manutenção</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a class="<?= ($_GET["pg"] == "equipe" ? "active" : "") ?>" href="?pg=equipe"><i class="fa fa-users"></i><br>Equipe</a></li>
                    <li><a class="<?= ($_GET["pg"] == "contato" ? "active" : "") ?>" href="?pg=contato"><i class="fa fa-book"></i><br>Contato</a></li>
                    <li style="float: right;"><a class="<?= ($_GET["pg"] == "sobre" ? "active" : "") ?>" href="?pg=sobre "><i class="fa fa-search"></i><br>Sobre</a></li>
                </ul>
            </div>
            <div id="content">
                <div id="aa">
                    <?php
                    @$pg = $_GET["pg"];
                    if (isset($pg)) {
                        include_once $pg . '.php';
                    }
                    ?>
                </div>
                <div id="bb">
                    <div align="center"><img src="img/bannerpromo.jpg"></div>
                    <p>
                </div>
            </div>
            <div id="footer">
                <p>Aprendizagem Industrial em Informática &copy; Todos os direitos reservados - 2016</p>
            </div>

        </div>
    </body>
</html>
