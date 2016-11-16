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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/sitecss.css" type="text/css"> 
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <img src="img/logo.jpg"/>
            </div>
            <div id="navigation"> 
                <ul>
                    <li><a class="<?= ($_GET["pg"]=="home"?"active":"") ?>" href="?pg=home"><i class="fa fa-home"></i><br> Home</a></li>
                    <li><a class="<?= ($_GET["pg"]=="produtos"?"active":"") ?>" href="?pg=produtos"><i class="fa fa-dropbox"></i><br>Produtos</a></li>
                    <li><a class="dropdown" class="<?= ($_GET["pg"]=="servicos"?"active":"") ?>" href="?pg=servicos"><i class="fa fa-wrench"></i><br> Serviços</a></li>
                    <li><a class="<?= ($_GET["pg"]=="sobre"?"active":"") ?>" href="?pg=sobre"><i class="fa fa-users"></i><br>Sobre</a></li>
                    <li><a class="<?= ($_GET["pg"]=="contato"?"active":"") ?>" href="?pg=contato"><i class="fa fa-book"></i><br>Contato</a></li>
                </ul>
            </div>
            <div id="content">
                <div>
                    <?php
                    $pg = $_GET["pg"];
                    if (isset($pg)) {
                        include_once $pg . '.php';
                    }
                    ?>
                </div>
                <div id="bb">
                    <img src="img/bannerpromo.jpg">
                </div>
            </div>
            <div id="footer">
                <p>Aprendizagem Industrial em Informática &copy; Todos os direitos reservados - 2016</p>
            </div>

        </div>
    </body>
</html>
