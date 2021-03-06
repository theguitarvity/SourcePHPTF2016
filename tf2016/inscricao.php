<!DOCTYPE HTML>
<!--
        Transformers 2016 - Desenvolvido por ByteGod IT Solutions - Todos dos direitos reservados
-->
<html>
    <head>
        <title>Inscrição - Transformers 2016 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]--> 

        <script>
        </script>
        <?php
        //correção do bug no case de metodo get, aplicação do isset na estrutura
        if (isset($GET['t'])) {
            switch ($_GET['t']) {

                case '1':
                    echo "<script>alert('Cadastrado com sucesso!');</script>";
                    break;

                case '2':
                    echo "<script>alert('Um erro inesperado ocorreu!');</script>";
                    break;

                case '3':
                    echo "<script>alert('E-mail ja cadastrado!');</script>";
                    break;

                case '4':
                    echo "<script>alert('Senha não identica!');</script>";
                    break;
                default: break;
            }
        }
        ?>
    </head>
    <body>
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header" class="alt">
                <h1><a href="index.html">NGC</a> Transformers 2016</h1>
                <nav id="nav">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>
                            <a href="#" class="icon fa-angle-down">Menu</a>
                            <ul>
                                <li><a href="sobre.html">Sobre</a></li>
                                <li><a href="inscricao.php">Inscrição</a></li>
                                <li>
                                    <a href="#">Área do Apoio</a>
                                    <ul>
                                        <li><a href="#">Inscrição</a></li>
                                        <li><a href="#">Acesso ao Apoio</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#" class="button">Minha Inscrição</a></li>
                    </ul>
                </nav>
            </header>


            <!-- Main -->
            <section id="main" class="container 75%">
                <header>
                    <h2>Inscrição</h2>
                    <p class="text-uppercase">Preencha abaixo seus dados pessoais para reservar sua vaga.</p>
                </header>
                <div class="box">
                    <form name="form" action="cadastrar.php" method="post">
                        <h3 class="text-uppercase">Dados Pessoais</h3>
                        <div class="row uniform 50%"> 
                            <div class="6u 12u(mobilep)">
                                <input type="text" name="nome" placeholder="Nome" id="nome" required/>
                            </div>
                            <div class="6u 12u(mobilep)">
                                <input type="email" name="email" id="email" placeholder="E-Mail" required/>
                            </div>
                        </div>
                        <div class="row uniform 50%"> 
                            <div class="6u 12u(mobilep)">
                                <input type="text" name="rg" id="rg" placeholder="RG" required/>
                            </div>
                            <div class="6u 12u(mobilep)">
                                <input type="text" onblur="cpfValidate(this.value)" name="cpf" id="cpf" maxlength="14" placeholder="CPF" required/>
                            </div>
                        </div>
                        <div class="row uniform 50%"> 
                            <div class="6u 12u(mobilep)">
                                <input type="date" name="data" onblur="calcular(this.value)" id="data" placeholder="Data de Nascimento" required/>
                            </div>
                            <div class="6u 12u(mobilep)">
                                <input type="text" name="idade" id="idade" placeholder="Idade" />
                            </div>
                        </div><br  />
                        <h3>Endereço</h3>
                        <div class="row uniform 50%"> 
                            <div class="6u 12u(mobilep)">
                                <input type="text" name="rua" id="rua" placeholder="Rua" required/>
                            </div>
                            <div class="6u 12u(mobilep)">
                                <input type="text" name="num" id="num" placeholder="Numero" required/>
                            </div>
                        </div>
                        <div class="row uniform 50%"> 
                            <div class="6u 12u(mobilep)">
                                <input type="text" name="bairro" id="bairro" placeholder="Bairro" required/>
                            </div>
                            <div class="6u 12u(mobilep)">
                                <input type="text" name="cid" id="cid" placeholder="Cidade" required/>
                            </div>
                        </div>
                        <div class="row uniform 50%"> 
                            <div class="6u 12u(mobilep)">
                                <input type="text" name="estado" id="estado" placeholder="Estado" required/>
                            </div>
                            <div class="6u 12u(mobilep)">
                                <input type="text" name="cep" id="cep" placeholder="CEP" required/>
                            </div>
                        </div>
                        <br  />
                        <h3 class="text-uppercase">Forma de Pagamento</h3>
                        <div class="row uniform 50%">
                            <div class="12u">
                                <div class="select-wrapper">
                                    <select name="pagto" id="pagto">
                                        <option value="dinheiro">Dinheiro</option>
                                        <option value="cartaoP">Cartão parcelado</option>
                                        <option value="cartaoV">cartão à vista</option>
                                        <option value="bc ">Boleto Bancário</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <br  />
                        <h3 class="text-uppercase">Senha de acesso</h3>
                        <div class="row uniform 50%"> 
                            <div class="6u 12u(mobilep)">
                                <input type="password" name="senha" id="senha" placeholder="Senha" required/>
                            </div>
                            <div class="6u 12u(mobilep)">
                                <input type="password" name="conf" id="conf" placeholder="Confirme a Senha" required/>
                            </div>
                        </div>
                        <div class="row uniform">
                            <div class="12u">
                                <ul class="actions align-center">
                                    <li><input type="submit" value="Cadastrar" name="btn_cad"/></li>
                                </ul>
                            </div>
                        </div>

                    </form>
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
                    <li>&copy; NGC Transformers 2016. Todos os direitos reservados.</li><li>Desenvolvido por: <a href="http://bytegod.com.br">ByteGod IT Solutions</a></li>
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