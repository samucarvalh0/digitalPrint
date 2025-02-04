<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Print CPV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="style.css?v=1.11">
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
                <a href="index.php" class="nav-logo">
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
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="serviços.php" class="nav-link">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php#sobre" class="nav-link">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a href="ctt.php" class="nav-link">Contato</a>
                        </li>
                    </ul>

                    <div class="navBackOpacity">
                        <ul class="nav-menu flex-column d-md-none">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="serviços.php" class="nav-link">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php#sobre" class="nav-link">Sobre</a>
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
        <section class="hero-section">
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <div class="text-center mb-5 msv" style="min-height: 100vh; color: white;">
                    <h1 class="display-4 mb-4">Nossa Missão, Visão e Valores</h1>

                    <div class="row mt-5">
                        <!-- Card para Missão -->
                        <div class="col-md-4 mb-4">
                            <div class="custom-card">
                                <div class="card-body">
                                    <h3 class="card-title">Missão</h3>
                                    <p class="card-text">Atender com excelência, qualidade e agilidade às necessidades e expectativas de nossos clientes, proporcionando uma experiência satisfatória e personalizada.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card para Visão -->
                        <div class="col-md-4 mb-4">
                            <div class="custom-card">
                                <div class="card-body">
                                    <h3 class="card-title">Visão</h3>
                                    <p class="card-text">Tornar-se uma referência comercial na cidade de Caçapava e em toda a região, reconhecida pela confiabilidade e pela superioridade de nossos serviços.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card para Valores -->
                        <div class="col-md-4 mb-4">
                            <div class="custom-card">
                                <div class="card-body">
                                    <h3 class="card-title">Valores</h3>
                                    <p class="card-text">Nosso trabalho é pautado na verdade, coerência, eficiência, qualidade e confiança, garantindo transparência, alinhamento entre discurso e prática, otimização de processos, excelência em produtos e serviços, e a construção de relações sólidas e duradouras com clientes e parceiros.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    </main>

</body>

</html>