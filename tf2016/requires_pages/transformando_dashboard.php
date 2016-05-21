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
        <title>Área do Transformando - Dashboard</title>
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
                        <li>Olá, {Nome do transformando}</li>
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
                    <h2>Transformando</h2>
                    <p>Área dos abençoados.</p>
                </header>
                <div class="box">

                    <h3>Status</h3>
                    <p>Pagamento confirmado sucesso! ??????????????</p>
                    <p><b>Pagamento ainda não realizado</b></p>
                    
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