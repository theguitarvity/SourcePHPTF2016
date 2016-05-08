<?php

/**
 * Description of TransformandoDAO
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
require_once("ConnectionFactory.php");

class TransformandoDAO {

//put your code here
    //metodo construtor, atribuindo os parametros de conexao da Classe ConnectionFactory
    function __construct() {
        $this->conn = new ConnectionFactory();
        $this->pdo = $this->conn->Connect();
    }

    //metodo responsavel pela persistencia na tabela transformando
    function cadastrar(Transformando $transformando) {
        try {
            //variavel responsavel por conter a query de inserção em banco com PDO
            $stmt = $this->pdo->prepare("INSERT INTO transformando(nomeTransformando, emailTransformando, rgTransformando, cpfTransformando, nascTransformando, idadeTransformando, cepTransformando, endTransformando, bairroTransformando, cidadeTransformando, ufTransformando, tipoPgto) VALUES(:nome, :email, :rg, :cpf, :nasc, :idade, :cep, :end, :bairro, :cidade, :uf, :pagto )");

            //atribuindo parametros aos valores ficticios contidos na query de inserção acima
            $param = array(
                ":nome" => $transformando->getNomeTransformando(),
                ":email" => $transformando->getEmailTransformando(),
                ":rg" => $transformando->getRgTransformando(),
                ":cpf" => $transformando->getCpfTransformando(),
                ":nasc" => $transformando->getDataNasc(),
                ":idade" => $transformando->getIdadeTransformando(),
                ":cep" => $transformando->getCepTransformando(),
                ":end" => $transformando->getEndTransformando(),
                ":bairro" => $transformando->getBairroTransformando(),
                ":cidade" => $transformando->getCidadeTransformando(),
                ":uf" => $transformando->getUfTransformando(),
                ":pagto" => $transformando->getTipoPagto()
            );
            return $stmt->execute($param);
        } catch (PDOException $ex) {
            echo $ex->getMessage() . "<br  />";
            echo $ex->getLine() . "<br  />";
            echo $ex->getFile() . "<br  />";
        }
    }

    //metodo responsavel por retornar o codigo do transformando de acordo com o email indicado no parametro
    function consultarCodTransformando($email) {
        try {
            $cons = $this->pdo->prepare("SELECT * FROM transformando WHERE emailTransformando = :email");
            $param = array(
                ":email" => $email,
            );
            $cons->execute($param);

            if ($cons->rowCount() > 0) {
                $consulta = $cons->fetch(PDO::FETCH_ASSOC);
                return $consulta['idTransformando'];
            } else {
                return "";
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage() . "<br  />";
            echo $ex->getLine() . "<br  />";
            echo $ex->getFile() . "<br  />";
        }
    }

    //metodo responsavel por estabelecer um idApoio padrao para cada transformando cadastrado

    function estabeleceId() {
        try {
            $cons = $this->pdo->prepare("SELECT * FROM apoio WHERE idApoio = :id");
            $param = array(
                ":id" => 0
            );
            $cons->execute($param);

            if ($cons->rowCount() > 0) {
                $consulta = $cons->fetch(PDO::FETCH_ASSOC);
                return $consulta['idApoio'];
            } else {
                return "";
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            echo $ex->getLine();
            echo $ex->getFile();
        }
    }

    //metodo responsavel por vericar se ja existe o email digitado no campo no banco 
    function consultarEmail($email) {
        try {
            $cons = $this->pdo->prepare("SELECT * FROM transformando WHERE emailTransformando=:email");
            $param = array(
                ":email" => $email
            );
            $cons->execute($param);

            if ($cons->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            echo $ex->getLine();
            echo $ex->getFile();
        }
    }

}

?>