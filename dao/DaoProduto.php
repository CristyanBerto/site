<?php
require_once 'Conexao.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoProduto
 *
 * @author vitor_simao
 */
class DaoProduto {
    
    public static $instance;
    private function __construct() {
        //
    }
    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoProduto();
        return self::$instance;
    }
    
    public function listar() {
        $sql = "SELECT produtos.id_produto,"
                . " produtos.descricao,"
                . " produtos.preco,"
                . " produtos.imagem "
                . " FROM produtos"
                . " ORDER BY produtos.descricao";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function listarPorMarca($categoria) {
        $sql = "SELECT produtos.id_produto,"
                . " produtos.descricao,"
                . " produtos.preco,"
                . " produtos.imagem"
                . " FROM produtos"
                . " WHERE produtos.categoria_id =:categoria"
                . " ORDER BY produtos.descricao";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":categoria", $categoria);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function listarPromocao() {
        $sql = "SELECT produtos.id_produto,"
                . " produtos.descricao,"
                . " produtos.preco,"
                . " produtos.imagem"
                . " FROM produtos"
                . " WHERE produtos.promocao = 1 "
                . " ORDER BY produtos.descricao";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
