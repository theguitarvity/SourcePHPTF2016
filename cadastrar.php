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

if (isset($_POST['btn_cad'])) {
    $tf->setNomeTransformando($_POST['nome']);
    $tf->setEmailTransformando($_POST['email']);
    $tf->setRgTransformando($_POST['rg']);
    $tf->setCpfTransformando($_POST['cpf']);
    $tf->setDataNasc($_POST['data']);
    $tf->setCepTransformando($_POST['cep']);
    $tf->setIdadeTransformando($_POST['idade']);
    $tf->setEndTransformando($_POST['rua'] . ', ' . $_POST['num']);
    $tf->setBairroTransformando($_POST['bairro']);
    $tf->setCidadeTransformando($_POST['cid']);
    $tf->setUfTransformando($_POST['estado']);
    $tf->setTipoPagto($_POST['pagto']);

    $conf = $_POST['conf'];

    if($conf == $_POST['senha']) {
        if (!$tfDAO->consultarEmail($_POST['email'])) {
            if ($tfDAO->cadastrar($tf)) {

                $codTF = $tfDAO->consultarCodTransformando($_POST['email']);
                $codApoio = $tfDAO->estabeleceId();
                $senha->setSenha($_POST['senha']);
                $senha->setCodTF($codTF);
                $senha->setCodApoio($codApoio);
                if($senhaDAO->cadadastrarTF($senha)){
                    echo "<script>alert('Cadastrado com sucesso!');</script>";
                    header("Location:inscricao.html");
                }
                else{
                    echo "<script>alert('erro');</script>";
                }
            }
        } else {
            echo "<script>alert('E-mail ja cadastrado!');</script>";
        }
    }
    else{
        echo "senha nao identicas";
    }
}
?>