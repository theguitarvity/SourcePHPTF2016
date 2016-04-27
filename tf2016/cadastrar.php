<?php

/**
 * Description of cadastrar
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
require_once("classes/DAO/TransformandoDAO.php");
require_once("classes/Entidades/Transformando.php");
require_once("classes/DAO/SenhaDAO.php");
require_once("classes/Entidades/Senha.php");

$tf = new Transformando();
$tfDAO = new TransformandoDAO();
$senha = new Senha();
$senhaDAO = new SenhaDAO();


?>

<?php
    
    if(isset($_POST['btn_cad'])){
        $tf->setNomeTransformando($_POST['nome']);
        $tf->setEmailTransformando($_POST['email']);
        $tf->setRgTransformando($_POST['rg']);
        $tf->setCpfTransformando($_POST['cpf']);
        $tf->setDataNasc($_POST['data']);
        $tf->setCepTransformando($_POST['cep']);
        $tf->setIdadeTransformando($_POST['idade']);
        $tf->setEndTransformando($_POST['rua'].', '.$_POST['num']);
        $tf->setBairroTransformando($_POST['bairro']);
        $tf->setCidadeTransformando($_POST['cid']);
        $tf->setUfTransformando($_POST['estado']);
        
        if(!$tfDAO->consultarEmail($_POST['email'])){
            /*if(){
               //fazer o cadastro aqui amanha 
            }*/
        }
        else{
            echo "<script>alert('E-mail ja cadastrado!');</script>";
        }
        
        
        
    }
?>