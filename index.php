<?php
    require __DIR__ . '\\controller\\adminController.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="imagem/png" href="/view/images/Box.png">
    <title>Help to eat</title>
</head>

<body>

<script src="app.js"></script>

    <div class="container">

        <nav>
            <div class="logo">
                <a href=""><img src="images/Logo.png"></a>
            </div>
            <div class="options">
                <a href="#quem-somos">Quem somos</a>
                <a href="#como-funciona">Como funciona?</a>
                <a href="#cestas">Cestas</a>
                <a href="#contato">Contato</a>
                <div class="login">
                    <button id="btn-entrar" onclick="desenvolvimento()">Entrar</button>
                    <a href="/view/cadastro.php"><button id="btn-cadastro">Cadastro</button></a>
                </div>
            </div>
        </nav>

        <div class="home">
            <div class="text-home">
                <h1>Vamos juntos, nesse momento de dificuldades, combater a fome que existe em milhares de lares</h1>
                <a href="#quem-somos"><button id="btn-saiba-mais">Saiba mais</button></a>
            </div>
            <div class="img-home">
                <img src="/view/images/HomePage.png">
            </div>
        </div>

        <div class="quem-somos" id="quem-somos">
            <h1>Quem Somos</h1>
            <p>Somos uma plataforma beneficente que procura sanar uma dor nesse mundo, dor a qual chamamos de fome. Há
                muitas pessoas nesse mundo que não possuem recursos suficientes para se alimentar, nós da <i><b>Help to
                        eat</b></i>, temos os seguintes propósitos:</p>
            <div class="ajudar">
                <h3>Ajudar Ong's a combater a fome por meio de doações de contribuidores.</h3>
                <img src="/view/images/Ajudar.png">
            </div>
            <div class="construir">
                <img src="/view/images/Construir.png">
                <h3>Construir um presente mais justo com menos desigualdades e mais prosperidade.</h3>
            </div>
            <div class="vencer">
                <h3>Vencer esse mal que se espalha e toma milhares de vida no nosso mundo.</h3>
                <img src="/view/images/Vencer.png">
            </div>
        </div>

        <div class="como-funciona" id="como-funciona">
            <h1>Como funciona?</h1>
            <p>Através da nossa plataforma você pode escolher algumas cestas básicas e fazer a doação, o dinheiro será
                direcionado a ONG's selecionadas que irão fornecer a cesta diretamente para a família necessitada.<br>
                Dividimos o valor em duas partes: 50% do valor é comprado cestas básicas que são direcionada para as
                ONG's e os outros 50% do valor é doado para promover agrícolas sustentáveis, por meio do apoio à
                agricultura familiar.
            </p>
            <img src="/view/images/Doacao.png">
        </div>

        <div class="cestas" id="cestas">
            <h1>Cestas</h1>
            <div class="grid-cestas">
                <div class="card-cestas c1">
                    <img src="images/Box.png">
                    <h2><?= $cesta[0]["tipo"] ?></h2>
                    <h6>15 - Alimentos</h6>
                    <h6>5 - Higiene Pessoal</h6>
                    <h2>R$ <?=  $cesta[0]["valor"] ?></h2>
                    <button id="btn-doar" onclick="desenvolvimento()">DOAR</button>
                </div>
                <div class="card-cestas c2">
                    <img src="images/Box.png">
                    <h2>Plus</h2>
                    <h6>30 - Alimentos</h6>
                    <h6>10 - Higiene Pessoal</h6>
                    <h2>R$ 100,00</h2>
                    <button id="btn-doar" onclick="desenvolvimento()">DOAR</button>
                </div>
                <div class="card-cestas c3">
                    <img src="images/Box.png">
                    <h2>Max</h2>
                    <h6>60 - Alimentos</h6>
                    <h6>20 - Higiene Pessoal</h6>
                    <h2>R$ 200,00</h2>
                    <button id="btn-doar" onclick="desenvolvimento()">DOAR</button>
                </div>
            </div>
        </div>

        <div class="contato" id="contato">
            <h1>Contato</h1>
            <div class="grid-contato">
                <div class="form-contato">
                    <form action="" class="form-group">
                        <label for="nome">Nome</label>
                        <input type="nome" class="form-control" id="nome" placeholder="Example" required>
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="example@example.com" required>
                        <label for="tel">Telefone</label>
                        <input type="tel" class="form-control" id="tel" placeholder="(00) 00000-0000" required>
                        <label for="mensagem">Mensagem</label>
                        <textarea class="form-control" id="mensagem" rows="3" placeholder="Digite sua mensagem aqui..." required></textarea>
                        <div class="text-center">
                            <button id="btn-contato" onclick="desenvolvimento()">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="time">
                    <a href="https://curriculumnoviceleo.000webhostapp.com/" target="blank"><div class="integrante">
                        <div class="img-integrante" id="img-leonardo"></div>
                        <div class="info-integrante">
                            <h3>Leonardo Bagatim</h3>
                            <h5><i>E-commerce Coordinator</i></h5>
                        </div>
                    </div></a>
                    <a href=""><div class="integrante">
                        <div class="img-integrante" id="img-reinaldo"></div>
                        <div class="info-integrante">
                            <h3>Reinaldo Vieira</h3>
                            <h5><i>Journalist</i></h5>
                        </div>
                    </div></a>
                    <a href="https://curriculo-renan.000webhostapp.com/" target="blank"><div class="integrante">
                        <div class="img-integrante" id="img-renan"></div>
                        <div class="info-integrante">
                            <h3>Renan Santos</h3>
                            <h5><i>Software Development</i></h5>
                        </div>
                    </div></a>
                    <a href="https://curriculotamires.000webhostapp.com/Curriculo_Tamires.html" target="blank"><div class="integrante">
                        <div class="img-integrante" id="img-tamires"></div>
                        <div class="info-integrante">
                            <h3>Tamires Pereira</h3>
                            <h5><i>Software Development</i></h5>
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.3178124939363!2d-46.66447688440686!3d-23.557026567318815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce582d39a668e7%3A0xddd2aaf3cc79eccc!2sR.%20Bela%20Cintra%2C%201149%20-%20Consola%C3%A7%C3%A3o%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001415-003!5e0!3m2!1spt-BR!2sbr!4v1601478996282!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </div>
    <footer>
        <div class="help-to-eat">
            <img src="/view/images/Logo-white.png">
            <ul>
                <li><a href="#quem-somos">Quem somos</a></li>
                <li><a href="#como-funciona">Como funciona?</a></li>
                <li><a href="#cestas">Cestas</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </div>
        <div class="realizacao">
            <h4>Realização</h4>
            <div class="img-re">
                <img src="/view/images/logo-onu.png">
                <img src="/view/images/ods-logo.png">
            </div>
        </div>
    </footer>
</body>

</html>