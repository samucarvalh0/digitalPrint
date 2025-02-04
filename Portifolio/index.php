<?php

require_once "conexao.php";

$conexao = novaConexao();



session_start();



if (isset($_POST['filtra'])) {

    header('location: serviços.php');

}

?>



<!DOCTYPE html>

<html lang="pt-br">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Digital Print CPV</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="style.css?v=1.10">

    <link rel="icon" href="./img/Dzao.png">



    <!--Link da seta-->

    <link rel="stylesheet"

        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />



    <!--Scroll Revel-->

    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="scripts.js" defer></script>



    <!--Link Swipper CSS-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>



<body>



    <header class="headline">

        <div class="linha" style="border-bottom: white solid 1px;">

            <nav class="navbar navbar-expand-md">

                <a href="#" class="nav-logo">

                    <h2 class="logo-text">Digital Print</h2>

                </a>



                <!-- Menu Hamburguer -->

                <button id="menuButton" class="navbar-toggler navbar-light" data-toggle="collapse" data-target="#navegacao" onclick="tiraLinha()">

                    <span class="navbar-toggler-icon"></span>

                </button>



                <!-- Navegação no menu hambúrguer -->

                <div class="collapse navbar-collapse justify-content-end" id="navegacao">

                    <ul class="nav-menu d-none d-md-flex ml-auto">

                        <li class="nav-item">

                            <a href="#" class="nav-link">Home</a>

                        </li>

                        <li class="nav-item">

                            <a href="serviços.php" class="nav-link">Serviços</a>

                        </li>

                        <li class="nav-item">

                            <a href="#sobre" class="nav-link">Sobre</a>

                        </li>

                        <li class="nav-item">

                            <a href="ctt.php" class="nav-link">Contato</a>

                        </li>

                    </ul>



                    <div class="navBackOpacity">

                        <ul class="nav-menu flex-column d-md-none">

                            <li class="nav-item">

                                <a href="#" class="nav-link">Home</a>

                            </li>

                            <li class="nav-item">

                                <a href="serviços.php" class="nav-link">Serviços</a>

                            </li>

                            <li class="nav-item">

                                <a href="#sobre" class="nav-link">Sobre</a>

                            </li>

                            <li class="nav-item">

                                <a href="ctt.php" class="nav-link">Contato</a>

                            </li>

                        </ul>

                    </div>

                </div>

            </nav>

        </div>

    </header>



    <main>

        <!-- Hero section -->

        <section class="hero-section">

            <div class="section-content efeito-hero-topo">

                <div class="hero-details">

                    <h2 class="title">Digital Print</h2>

                    <h3 class="subtitle">Transformamos suas ideias em arte! Design gráfico criativo para destacar a sua

                        marca.

                    </h3>

                    <p class="description">Dê vida à sua marca com um design gráfico único e memorável!</p>



                    <div class="buttons">

                        <a href="serviços.php" class="button contact-us">Serviços</a>

                        <a href="ctt.php" class="button contact-us">Contato</a>

                    </div>

                </div>

                <div class="hero-image-wrapper">

                    <img src="img/Dzao.png" alt="Coffee" class="hero-image Principal" />

                </div>

            </div>



            <!--Waves Container-->

            <div>

                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"

                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">

                    <defs>

                        <path id="gentle-wave"

                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />

                    </defs>

                    <g class="parallax">

                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />

                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />

                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />

                        <use xlink:href="#gentle-wave" x="48" y="7" fill="rgb(249, 249, 249)" />

                    </g>

                </svg>

            </div>

            <!--Waves end-->

        </section>


        <!--Coluna Mini Galeria-->



        <!-- <hr class="linha"> -->



        <article class="columns">

            <div class="justify-content-center text-center">

                <div>

                    <h1 class="display-5 cont" style="margin-top: 60px; margin-bottom: 60px;">CONHEÇA NOSSOS SERVIÇOS

                    </h1>

                </div>

            </div>

        </article>



        <!--Fim desse conteudo-->



        <!--Coluna Mini Galeria-->



        <div class="container swiper headline">

            <form method="POST">

                <div class="card-wrapper">

                    <div class="card-list">

                        <button type="submit" name="filtra" class="card-item" value="Adesivo">

                            <img src="./img/img1.jpg" alt="Card Image">

                            <span class="developer">Adesivos</span>

                            <h3>Conheça nossos adesivos.</h3>

                            <div class="arrow">

                                <i class="fas fa-arrow-right card-icon"></i>

                            </div>

                        </button>

                        <button type="submit" name="filtra" class="card-item" value="Adesivo">

                            <img src="./img/img2.jpg" alt="Card Image">

                            <span class="designer">Tapetes</span>

                            <h3>Conheça nossos adesivos para tapetes.</h3>

                            <div class="arrow">

                                <i class="fas fa-arrow-right card-icon"></i>

                            </div>

                        </button>

                        <button type="submit" name="filtra" class="card-item" value="Panfleto">

                            <img src="./img/img3.jpg" alt="Card Image">

                            <span class="editor">Panfletos</span>

                            <h3>Conheça nossos panfletos.</h3>

                            <div class="arrow">

                                <i class="fas fa-arrow-right card-icon"></i>

                            </div>

                        </button>

                    </div>

                    <div class="card-list">

                        <button type="submit" name="filtra" class="card-item" value="Cartão de Visita">

                            <img src="./img/img4.png" alt="Card Image">

                            <span class="developer">Cartão</span>

                            <h3>Conheça nossos cartões de visita.</h3>

                            <div class="arrow">

                                <i class="fas fa-arrow-right card-icon"></i>

                            </div>

                        </button>

                        <button type="submit" name="filtra" class="card-item" value="Banner">

                            <img src="./img/banner4.jpg" alt="Card Image">

                            <span class="designer">Banner</span>

                            <h3>Conheça nosso trabalho com banner.</h3>

                            <div class="arrow">

                                <i class="fas fa-arrow-right card-icon"></i>

                            </div>

                        </button>

                        <button type="submit" name="filtra" class="card-item" value="Fachada">

                            <img src="./img/fachada.png" alt="Card Image">

                            <span class="editor">Fachadas</span>

                            <h3>Conheça nosso trabalho com fachadas.</h3>

                            <div class="arrow">

                                <i class="fas fa-arrow-right card-icon"></i>

                            </div>

                        </button>

                    </div>

                    <div class="row justify-content-center">

                        <div class="col-auto mt-5">

                            <a href="serviços.php" class="btn btn-outline-primary" style="font-size: 28px">Ver Mais</a>

                        </div>

                    </div>

                </div>

            </form>

        </div>



        <hr class="linha mt-5">



        <!--Coluna das Imagens e Textos-->



        <section>

            <div class="Home">

                <article class="caixa">

                    <div class="container">

                        <div class="row">

                            <div class="col-md-6 d-flex">

                                <div class="align-self-center">

                                    <h2 class="titulo_conteudo">Resultados Poderosos</h2>

                                    <p class="text_conteudo">

                                        Maximize a visibilidade da sua marca com produtos de impressão que refletem

                                        profissionalismo e estilo. Banners promocionais, folhetos personalizados e

                                        cartões de visita: tudo o que você precisa para deixar sua marca na mente

                                        dos

                                        clientes!

                                    </p>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <img src="img/title1.png" class="img_conteudo">

                            </div>

                        </div>

                    </div>

                </article>

            </div>



            <div class="Home">

                <article class="caixa">

                    <div class="container">

                        <div class="row conteudos_cel">

                            <div class="col-md-6">

                                <div class="card-image tilt"

                                    style="transform: perspective(4000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">

                                    <img src="img/title2.png" class="img_conteudo">

                                </div>

                            </div>

                            <div class="col-md-6 d-flex">

                                <div class="align-self-center">

                                    <h2 class="titulo_conteudo">Sua Fachada, Sua Identidade</h2>

                                    <p class="text_conteudo">

                                        A fachada do seu negócio é uma extensão da sua identidade. Com a

                                        DigitalPrint,

                                        você transforma essa área em um ponto de impacto, transmitindo

                                        profissionalismo

                                        e atraindo clientes com uma comunicação visual irresistível e personalizada.

                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </article>

            </div>



            <!-- ESPAÇO PARA O CARROSSEL -->

            <article class="carrossel">

                <div id="carouselExampleIndicators" class="carousel slide d-none d-md-block"

                    data-bs-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">

                            <div class="col-12 banner-1 align-self-center text-center">

                                <img class="mx-auto d-block" src="./img/banner_carrossel_1.png" alt="First Slide">

                            </div>

                        </div>

                        <div class="carousel-item">

                            <img class="mx-auto d-block" src="./img/banner_carrossel_2.png" alt="Second Slide">

                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"

                        data-bs-slide="prev">

                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                        <span class="sr-only"></span>

                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"

                        data-bs-slide="next">

                        <span class="carousel-control-next-icon" aria-hidden="true"></span>

                        <span class="sr-only"></span>

                    </a>

                </div>

            </article>

            <!--ESPAÇO PARA O CARROSSEL-->



            <!--Cartão e Localização-->



        </section>



        <!--Fim desse conteudo-->



        <!--Coluna da Localização-->



        <article class="sobre" id="sobre">

            <div class="container">

                <div class="row mb-5 title">

                    <div class="col-12">

                        <h1 class="display-4">SOBRE NÓS</h1>

                    </div>

                </div>

                <div class="row">

                    <div class="col-xl-6">

                        <p class="hist">

                            A <span>Digital Print Caçapava</span> teve início no ano de 2021 logo após a pandemia da

                            Covid-19.

                            Com o tempo, a empresa ganhou destaque na região, permitindo que a mesma conseguisse

                            a apropriação de maquinário para confecção dos produtos. Nos dias atuais, a empresa ganhou

                            maior

                            popularidade no comércio local por

                            sua qualidade e responsabilidade com seus produtos.

                            A empresa está localizada na <span><a href="https://maps.app.goo.gl/ouYm5zxe8dUEKRJj6">Rua

                                    Coronel João Dias Guimarães número 300</a></span>, uma

                            pequena

                            empresa mas que oferece serviços de qualidade como banners, adesivos, panfletos, cartões de

                            visita e outros serviços dentro da área da comunicação visual.<br> <span>Horário de

                                funcionamento

                                das 9:00 ás 17:30</span>

                        </p>

                    </div>

                    <div class="col-lg-6 d-none d-xl-block text-center">

                        <!--

                        d-none: imagem não aparece 

                        d-md-block: exibe imagem a partir da tela

                        -->

                        <img src="img/sobre.png" alt="Coffee" class="Principal sobre-img d-none d-md-block" />

                    </div>

                    <section class="mapa">

                        <br>

                        <iframe class=" col-sm-12 Localização"

                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.7805413718193!2d-45.70826989999999!3d-23.1051282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc517bbfeb7107%3A0x5369de60079c1385!2sR.%20Cel.%20Jo%C3%A3o%20Dias%20Guimar%C3%A3es%2C%20300%20-%20Vila%20Sao%20Joao%2C%20Ca%C3%A7apava%20-%20SP%2C%2012281-350!5e0!3m2!1spt-BR!2sbr!4v1729358111770!5m2!1spt-BR!2sbr"

                            width="1300" height="450" style="border:0;" allowfullscreen="" loading="lazy"

                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </section>

                </div>

            </div>

        </article>



        <!--Fim desse conteudo-->



        <section class="art-section">

            <div class="art-section-content">

                <div class="art-content">

                    <h1>Crie sua próxima <span class="highlight">obra de arte</span><br>com o poder da Digital Print

                    </h1>

                    <a href="serviços.php" class="cta-button">Confira os serviços →</a>

                    <p class="note">O melhor para sua marca!</p>

                </div>

            </div>

            <!--Waves Container-->

            <div>

                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"

                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">

                    <defs>

                        <path id="gentle-wave"

                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />

                    </defs>

                    <g class="parallax">

                        <use xlink:href="#gentle-wave" x="48" y="0" fill="var(--color-neutral-10)" />

                        <use xlink:href="#gentle-wave" x="48" y="3" fill="var(--color-neutral-10)" />

                        <use xlink:href="#gentle-wave" x="48" y="5" fill="var(--color-neutral-10)" />

                        <use xlink:href="#gentle-wave" x="48" y="7" fill="var(--color-neutral-10)" />

                    </g>

                </svg>

            </div>

            <!--Waves end-->

        </section>

    </main>

    <footer class="footer_principal">

        <div id="footer_content">

            <div id="footer_contacts">

                <h1><a href="#"><img src="img/Dzao.png" height="80px"></a></h1>

                <p>É tudo sobre seus sonhos</p>

            </div>



            <ul class="footer-list">

                <li>

                    <h3>Normas e Termos</h3>

                </li>

                <li>

                    <a href="normas.php" class="footer-link">Normas de Segurança e Privacidade</a>

                </li>

                <li>

                    <a href="termos.php" class="footer-link">Termos e Condições Gerais de Uso</a>

                </li>

                <li>

                    <a href="msv.php" class="footer-link">Missão, Visão e Valores</a>

                </li>

            </ul>



            <ul class="footer-list">

            </ul>



            <div id="footer_contacts">

                <h3>Contatos</h3>

                <div id="footer_social_media">

                    <a href="https://www.instagram.com/digitalprintcpv?igsh=MW11azY2OTl6bXBvdw==" target="_blank"

                        class="footer_link" id="instagram">

                        <i class="fa-brands fa-instagram"></i>

                    </a>

                    <a href="https://wa.me/5512991671420?text=Ol%C3%A1!%20Gostaria%20de%20fazer%20um%20pedido."

                        class="footer_link" target="_blank" id="whatsapp">

                        <i class="fa-brands fa-whatsapp"></i>

                    </a>

                    <a href="mailto:digitalprint2130@gmail.com" class="footer_link" target="_blank" id="gmail">

                        <i class="fa-solid fa-envelope"></i>

                    </a>

                </div>

            </div>

        </div>



        <div id="footer_copyright">

            &#169

            2024 Todos os direitos reservados

        </div>

    </footer>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"

        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"

        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"

        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"

        crossorigin="anonymous"></script>

    <script src="js/bootstrap.min.js"></script>



    <!--Link SwipperJS script-->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="scripts2.js"></script>



</body>



</html>