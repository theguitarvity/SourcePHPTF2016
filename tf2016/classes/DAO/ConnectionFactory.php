<?php

/**
 * Description of ConnectionFactory
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
class ConnectionFactory {

    //atributos da classe 
    private $user;
    private $pass;
    private $host;
    private $base;
    private $file;
    public $pdo;

    //metodo responsavel por geral a conexao com o banco de dados
    public function Connect() {

        try {
            //atribuindo usuario de acesso ao banco ao atributo user
            $this->user = "root";
            
            //atribuindo a senha de acesso ao banco no atributo pass
            $this->pass = "";

            //atribuindo o endereço do banco no atributoi host    
            $this->host = "localhost";
            
            //atribuindo o nome do banco criado no atributo base
            $this->base = "mydb";



            $parametros = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"); //Definimos a conexão com o banco no padrão URF-8



            // atribuindo os parametros de conexao no atrinuto file
            $this->file = "mysql:host=" . $this->host . ";dbname=" . $this->base;

            //atribuido a linha de comando PDO(para iniciação na conexao) no atributo pdo
            $this->pdo = new PDO($this->file, $this->user, $this->pass, $parametros);



            //atribuindo os atributos complementares PDO no atributo pdo
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            $this->pdo->setAttribute(PDO::ATTR_PERSISTENT, true);

            if (!$this->pdo) {
                echo "Erro na conexão";
            }
            
            return $this->pdo;
        } catch (PDOException $ex) {

            echo "Erro no sistema" . $ex->getMessage();
        }
    }

    
}
