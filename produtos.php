<?php
require_once 'dao/DaoProduto.php';
$DaoProduto = DaoProduto::getInstance();
if (!isset($_GET["cat"]) || empty($_GET["cat"])) {
    $dadosProduto = $DaoProduto->listar();
} else {
    $dadosProduto = $DaoProduto->listarPorMarca($_GET["cat"]);
}
?>
<div class="titulo">
    <h1>Os Melhores do Mercado!</h1>
</div>
<?php
foreach ($dadosProduto as $rowProduto) {
    ?>
    <div class="boxproduto">
        <div class="boximg">
        <a href="?pg=detalhes&id=<?= $rowProduto["id_produto"] ?>">
            <img src="http://127.0.0.1/software/fotos/<?= $rowProduto["imagem"] ?>">
        </a>
        <div class="boxdesc">
            <?= $rowProduto["descricao"] ?> <br/>
            R$ <?= $rowProduto["preco"] ?>
        </div>
     </div>
        </div>

    <?php
}
?>