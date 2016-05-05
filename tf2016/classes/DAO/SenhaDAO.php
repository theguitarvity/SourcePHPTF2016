<?php

/**
 * Description of SenhaDAO
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */

require_once("ConnectionFactory.php");
class SenhaDAO {
    // criando metodo construtor
    
    function __construct() {
        $this->conn = new ConnectionFactory();
        $this->pdo = $this->conn->Connect();
    }
    
    function cadadastrarTF(Senha $senha){
        try{
            $cad = $this->pdo->prepare("INSERT INTO senha(senha, idTransformando, fk_senha_apoio1) VALUES(:senha, :tf, :ap)");
            $param = array(
                ":senha"=>md5($senha->getSenha()),
                ":tf"=>$senha->getCodTF(),
                ":ap"=>0
            );
            return $cad->execute($param);
            
            
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    
    
    
}
