
<h1 class="titulo">Promoções da semana:</h1>

<?php
require_once 'dao/DaoProduto.php';
$DaoProduto = DaoProduto::getInstance();
$dadosProduto = $DaoProduto->listarPromocao();
?>
<?php
foreach ($dadosProduto as $rowProduto) {
    ?>
    <div class="promocao">
        <div class="img">
            <a href="?pg=detalhes&id=<?= $rowProduto["id_produto"] ?>">
                <img src="http://127.0.0.1/software/fotos/<?= $rowProduto["imagem"] ?>" width="300" height="200">
            </a>
            <div class="desc">
                <?= $rowProduto["nome"] ?> <br>
                R$ <?= $rowProduto["preco"] ?>
            </div>
        </div>
    </div>
    <?php
}
?>