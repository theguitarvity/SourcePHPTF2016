<?php

/**
 * Description of Senha
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
class Senha {

    private $senha;
    private $codApoio;
    private $codTF;

    function getSenha() {
        return $this->senha;
    }

    function getCodApoio() {
        return $this->codApoio;
    }

    function getCodTF() {
        return $this->codTF;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setCodApoio($codApoio) {
        $this->codApoio = $codApoio;
    }

    function setCodTF($codTF) {
        $this->codTF = $codTF;
    }

}

?>