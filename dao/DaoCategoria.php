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
class DaoCategoria {
    
    public static $instance;
    private function __construct() {
        //
    }
    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoCategoria();
        return self::$instance;
    }
    
    public function listar() {
        $sql = "SELECT * "
                . " FROM categoria"
                . " ORDER BY descricao";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
