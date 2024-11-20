<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Print CPV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="style.css?v=1.3">
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
        <nav class="navbar">
            <a href="#" class="nav-logo">
                <h2 class="logo-text">Digital Print</h2>
            </a>

            <ul class="nav-menu">
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
                    <a href="cad_cli.php" class="nav-link">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a href="ctt.php" class="nav-link">Contato</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Hero section -->
        <section class="hero-section">
            <div class="section-content efeito-hero-topo">
                <div class="hero-details">
                    <h2 class="title">Digital Print</h2>
                    <h3 class="subtitle">Transformamos suas ideias em arte! Design gráfico criativo para destacar a sua
                        marca.</h3>
                    <p class="description">Dê vida à sua marca com um design gráfico único e memorável!</p>

                    <div class="buttons">
                        <a href="serviços.php" class="button contact-us">Serviços</a>
                        <a href="ctt.php" class="button contact-us">Contato</a>
                    </div>
                </div>
                <div class="hero-image-wrapper">
                    <img src="img/Dzao.png" alt="Coffee" class="hero-image Principal d-none d-md-block" />
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

        <!--COLUNAS EXIB IMAGE-->

        <article class="columns">
            <section class="section-conteudo">
                <div class="produtos">
                    <div class="row justify-content-center text-center">
                        <div class="col-12 cont">
                            <h1 class="display-5 cont" style="margin-top: 50px;">CONFIRA OS MAIS PEDIDOS!</h1>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center text-center columnsImg">
                        <div class="col-xl-2 col-md-4 col-sm-12" id="colImg" style="border: none; background: none;">
                            <img src="./img/ad_mockup.png" class=" cont img-fluid" alt="Imagem">
                            <p class="cont-p mt-5" style="font-size: 21px;">
                                ADESIVO<br>
                            </p>
                            <button class="btn btn-outline-primary p-2" mb-3 style="width:75%;">Ver Mais!</button>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-12" id="colImg" style="border: none; background: none;">
                            <img src="./img/cartao_visita_mockup.png" class=" cont img-fluid" alt="Imagem">
                            <p class="cont-p mt-5" style="font-size: 21px;">
                                CARTÃO DE VISITAS <br>
                            </p>
                            <button class="btn btn-outline-primary p-2" mb-3 style="width:75%;">Ver Mais!</button>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-12" id="colImg" style="border: none; background: none;">
                            <img src="./img/panfleto_mockup.png" class=" cont img-fluid" alt="Imagem">
                            <p class="cont-p mt-5" style="font-size: 21px;">
                                PANFLETO <br>
                            </p>
                            <button class="btn btn-outline-primary p-2" mb-3 style="width:75%;">Ver Mais!</button>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-12" id="colImg" style="border: none; background: none;">
                            <img src="./img/Dzao.png" class=" cont img-fluid" alt="Imagem">
                            <p class="cont-p mt-5" style="font-size: 21px;">
                                D PERSONAL <br>
                            </p>
                            <button class="btn btn-outline-primary p-2 mb-3" style="width:75%;">Ver Mais!</button>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-12" id="colImg" style="border: none; background: none;">
                            <img src="./img/ad_mockup.png" class=" cont img-fluid" alt="Imagem">
                            <p class="cont-p mt-5" style="font-size: 21px;">
                                ADESIVO<br>
                            </p>
                            <button class="btn btn-outline-primary p-2 mb-3" style="width:75%;">Ver Mais!</button>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-12" id="colImg" style="border: none; background: none;">
                            <img src="./img/cartao_visita_mockup.png" class=" cont img-fluid" alt="Imagem">
                            <p class="cont-p mt-5" style="font-size: 21px;">
                                CARTÃO DE VISITAS <br>
                            </p>
                            <button class="btn btn-outline-primary p-2 mb-3" style="width:75%;">Ver Mais!</button>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-12" id="colImg" style="border: none; background: none;">
                            <img src="./img/panfleto_mockup.png" class=" cont img-fluid" alt="Imagem">
                            <p class="cont-p mt-5" style="font-size: 21px;">
                                PANFLETO <br>
                            </p>
                            <button class="btn btn-outline-primary p-2 mb-3" style="width:75%;">Ver Mais!</button>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-12" id="colImg" style="border: none; background: none;">
                            <img src="./img/panfleto_mockup.png" class=" cont img-fluid" alt="Imagem">
                            <p class="cont-p mt-5" style="font-size: 21px;">
                                PANFLETO <br>
                            </p>
                            <button class="btn btn-outline-primary p-2 mb-3" style="width:75%;">Ver Mais!</button>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-12" id="colImg" style="border: none; background: none;">
                            <img src="./img/panfleto_mockup.png" class=" cont img-fluid" alt="Imagem">
                            <p class="cont-p mt-5" style="font-size: 21px;">
                                PANFLETO <br>
                            </p>
                            <button class="btn btn-outline-primary p-2 mb-3" style="width:75%;">Ver Mais!</button>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-12" id="colImg" style="border: none; background: none;">
                            <img src="./img/Dzao.png" class=" cont img-fluid" alt="Imagem">
                            <p class="cont-p mt-5" style="font-size: 21px;">
                                D PERSONAL <br>
                            </p>
                            <button class="btn btn-outline-primary p-2 mb-3" style="width:75%;">Ver Mais!</button>
                        </div>
                    </div>
                </div>
            </section>

            <!--Coluna Mini Galeria-->

            <hr class="linha">

            <article class="columns">
                <div class="row justify-content-center text-center">
                    <div class="col-12 cont">
                        <h1 class="display-5 cont" style="margin-top: 65px; margin-bottom: 65px;">VEJA NOSSO
                            TRABALHO!
                        </h1>
                    </div>
                </div>
            </article>

            <section class="slider_container">

            </section>

            <!--Fim desse conteudo-->

            <!--Coluna Mini Galeria-->

            <div class="container swiper">
                <div class="card-wrapper">
                    <ul class="card-list swiper-wrapper">
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="img/foto1.jpeg" alt="Card Image" class="card-image">
                                <p class="badge Banner">Banner</p>
                                <h2 class="card-title">Conheça nosso trabalho com banner!</h2>
                                <button class="card-button material-symbols-rounded">
                                    arrow_forward
                                </button>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="img/foto2.jpeg" alt="Card Image" class="card-image">
                                <p class="badge Placa">Placa</p>
                                <h2 class="card-title">
                                    Conheça nosso trabalho com placa!
                                </h2>
                                <button class="card-button material-symbols-rounded">
                                    arrow_forward
                                </button>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="img/foto3.jpeg" alt="Card Image" class="card-image">
                                <p class="badge Fachada">Fachada</p>
                                <h2 class="card-title">
                                    Conheça nosso trabalho com fachada!
                                </h2>
                                <button class="card-button material-symbols-rounded">
                                    arrow_forward
                                </button>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="img/foto4.jpeg" alt="Card Image" class="card-image">
                                <p class="badge Banner">Banner</p>
                                <h2 class="card-title">
                                    Conheça nosso trabalho com banner!
                                </h2>
                                <button class="card-button material-symbols-rounded">
                                    arrow_forward
                                </button>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="img/foto5.jpeg" alt="Card Image" class="card-image">
                                <p class="badge Wind-banner">Wind banner</p>
                                <h2 class="card-title">
                                    Conheça nosso trabalho com wind banner!
                                </h2>
                                <button class="card-button material-symbols-rounded">
                                    arrow_forward
                                </button>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="img/foto6.jpeg" alt="Card Image" class="card-image">
                                <p class="badge Adesivo">Adesivo</p>
                                <h2 class="card-title">
                                    Conheça nosso trabalho com adesivo!
                                </h2>
                                <button class="card-button material-symbols-rounded">
                                    arrow_forward
                                </button>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="img/foto7.jpeg" alt="Card Image" class="card-image">
                                <p class="badge cartao">Cartão</p>
                                <h2 class="card-title">
                                    Conheça nosso trabalho com cartão!
                                </h2>
                                <button class="card-button material-symbols-rounded">
                                    arrow_forward
                                </button>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="img/foto8.jpeg" alt="Card Image" class="card-image">
                                <p class="badge Placa">Placa</p>
                                <h2 class="card-title">
                                    Conheça nosso trabalho com placa!
                                </h2>
                                <button class="card-button material-symbols-rounded">
                                    arrow_forward
                                </button>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="img/foto9.jpeg" alt="Card Image" class="card-image">
                                <p class="badge Panfleto">Panfleto</p>
                                <h2 class="card-title">
                                    Conheça nosso trabalho com panfleto!
                                </h2>
                                <button class="card-button material-symbols-rounded">
                                    arrow_forward
                                </button>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="img/foto10.jpeg" alt="Card Image" class="card-image">
                                <p class="badge Wind-banner">Wind banner</p>
                                <h2 class="card-title">
                                    Conheça nosso trabalho com wind banner!
                                </h2>
                                <button class="card-button material-symbols-rounded">
                                    arrow_forward
                                </button>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="img/foto11.jpeg" alt="Card Image" class="card-image">
                                <p class="badge Banner">Banner</p>
                                <h2 class="card-title">
                                    Conheça nosso trabalho com banner!
                                </h2>
                                <button class="card-button material-symbols-rounded">
                                    arrow_forward
                                </button>
                            </a>
                        </li>
                        <li class="card-item swiper-slide">
                            <a href="#" class="card-link">
                                <img src="img/foto12.jpeg" alt="Card Image" class="card-image">
                                <p class="badge Placa">Placa</p>
                                <h2 class="card-title">
                                    Conheça nosso trabalho com placa!
                                </h2>
                                <button class="card-button material-symbols-rounded">
                                    arrow_forward
                                </button>
                            </a>
                        </li>
                    </ul>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

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
                                    <img src="img/title1.png" class="img_conteudo d-none d-md-block">
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="Home">
                    <article class="caixa">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-image tilt"
                                        style="transform: perspective(4000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                                        <img src="img/title2.png" class="img_conteudo d-none d-md-block">
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
        </article>

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
                        <img src="img/Dzao.png" alt="Coffee" class="Principal sobre-img d-none d-md-block" />
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
            <hr class="linha">
        </article>


        </div>
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
        <footer class="footer_principal">
            <div id="footer_content">
                <div id="footer_contacts">
                    <h1><a href="#"><img src="img/Dzao.png" height="80px"></a></h1>
                    <p>It's all about your dreams</p>
                </div>

                <ul class="footer-list">
                    <li>
                        <h3>Blog</h3>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Tech</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Adventures</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Music</a>
                    </li>
                </ul>

                <ul class="footer-list">
                    <li>
                        <h3>Blog</h3>
                    </li>
                    <li>
                        <a href="#" class="footer-link">App</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Desktop</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Cloud</a>
                    </li>
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
                2024 all rights reservet
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
    </main>

</body>

</html>