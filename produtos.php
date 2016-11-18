<head>
    <style>
        div.img {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 200px;
            opacity: 0.3;
        }

        div.img:hover{
            border: 1px solid #777;
            opacity: 1;
        }

        div.img img {
            width: 100%;
            height: auto;
        }
        div.desc  {
            display: none;
            padding: 15px;
            text-align: center;
        }
        div.img:hover > div.desc  {
            padding: 15px;
            text-align: center;
            display: block;
        }
    </style>
</head>
<br>
<fieldset>
    <h1 style="text-align: center; padding: 0">Os Melhores do Mercado!</h1>
</fieldset>
<div class="img">
    <a href="?pg=pcdesc">
        <img src="img/pcgamer.jpg" alt="PC GAMER" width="600" height="400">
    </a>
    <div class="desc">PC GAMER R$1200,00</div>
</div>

<div class="img">
    <a href="?pg=ps4desc">
        <img src="img/ps4.jpg" alt="PS4" width="600" height="400">
    </a>
    <div class="desc">PS4 R$1800,00</div>
</div>

<div class="img">
    <a href="?pg=xboxdesc">
        <img src="img/xboxone.jpg" alt="XBOX One" width="600" height="400">
    </a>
    <div class="desc">XBOX One R$1600,00</div>
</div>
<div>
    <?php
    @$pg = $_GET["pg"];
    if (isset($pg)) {
        include_once $pg . '.php';
    }
    ?>
</div>
