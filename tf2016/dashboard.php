<!DOCTYPE HTML>
<!--
        NGC Transformers 2016 - ByteGod IT Solutions
-->
<?php
require_once ("classes/DAO/ConnectionFactory.php");
require_once("classes/DAO/TransformandoDAO.php");

$tfDao = new TransformandoDAO();
$conn = new ConnectionFactory();
$pdo = $conn->Connect();
?>
<html>

    <head>
        <title>Área do Apoio - Dashboard</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>

    <body>
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header">
                <h1><a href="index.html">NGC</a> TRANSFORMERS 2016</h1>
                <nav id="nav">
                    <ul>
                        <li>Olá, {Nome do apoio}</li>
                        <li>
                            <a href="#" class="icon fa-angle-down">Menu</a>
                            <ul>
                                <li><a href="#">Inscritos</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="button">Sair</a></li>
                    </ul>
                </nav>
            </header>

            <!-- Main -->
            <section id="main" class="container">
                <header>
                    <h2>Inscritos</h2>
                    <p>Lista dos Inscritos</p>
                </header>
                <div class="box">

                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Pago?</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- abaixo se encontra a listagem dos transformandos ja cadatrados --!>
                                <?php
                                $query = $pdo->query("SELECT nomeTransformando,emailTransformando FROM transformando");
                                while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                <tr>
                                    <td><?php echo $linha['nomeTransformando'];?></td>
                                    <td><?php echo $linha['emailTransformando'];?></td>
                                    <td><span class="alt icon fa-check" /></td>
                                    <td><span class="alt icon fa-edit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="alt icon fa-close" /></td>
                                </tr>    
                                <?php
                                }
                                ?> 

                                
                            </tbody>
                        </table>  
                    </div>
                    <h4>Informações</h4>
                    <p>São {<?php echo $query->rowCount();?>} inscritos e {número de não pagos} ainda <b>não</b> pagaram a inscrição.</p>

                    <p>// Imaginei abrir um pop-up para editar e outro para excluir.. no editar teria um formulário com os valores já preenchidos e no excluir, pediria a senha.</p>
                </div>
            </section>

            <!-- Footer -->
            <footer id="footer">
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; Untitled. All rights reserved.</li>
                    <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </footer>

        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/jquery.scrollgress.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>

    </body>

</html>