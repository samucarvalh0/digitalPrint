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
                <div class="text-center mb-5" style="min-height: 100vh; margin-top: 35%; color: white;">
                    <h1 class="display-4 mb-4">Termos e Condições Gerais de Uso</h1>
                    <p>Bem-vindo, a seguir apresentaremos a você (USUÁRIO) os Termos e Condições Gerais de Uso, documento que relaciona as principais regras a serem observadas por todos que acessam o portfólio da Digital Print Caçapava.</p>

                    <div class="mt-5 text-start">
                        <h3>Definições</h3>
                        <p>1.1 Para os fins deste documento, devem se considerar as seguintes definições e descrições para seu melhor entendimento:</p>
                        <ul>
                            <li><strong>Usuários</strong>: pessoas que acessam o portfólio.</li>
                            <li><strong>Recursos</strong>: serviços e conteúdos comercializados pela Digital Print no portfólio, os quais possuem termos de uso específicos.</li>
                            <li><strong>Digital Print Caçapava</strong>: Localizada em Caçapava, Estado de São Paulo, na Rua Coronel João Dias Guimarães, nº 300, CEP 12281-350, inscrita no CNPJ/MF sob o nº 39.274.068/001-02.</li>
                        </ul>
                    </div>

                    <div class="mt-5 text-start">
                        <h3>Informações gerais e objeto</h3>
                        <p>2.1. O Portal Digital Print permite ao usuário adquirir os serviços por meio do contato direto com a empresa. Os serviços possuem termos de uso específicos, os quais serão disponibilizados anexos a este documento na Oferta ou ato da contratação pelo usuário.</p>
                    </div>

                    <div class="mt-5 text-start">
                        <h3>Condutas e obrigações dos usuários</h3>
                        <p>3.1 A eventual remoção, bloqueio ou suspensão de qualquer conteúdo ou funcionalidade do portfólio em decorrência de alguma reclamação deverá ser sempre compreendida como demonstração de boa-fé e intenção de solução amigável de conflitos, jamais como reconhecimento de culpa ou de qualquer infração pelo Digital Print a direito de terceiro.</p>
                    </div>

                    <div class="mt-5 text-start">
                        <h3>Isenção e limitações de responsabilidade da Digital Print Caçapava</h3>
                        <p>4.1 A Digital Print Caçapava não se responsabiliza por quaisquer problemas, bugs, glitches ou funcionamentos indevidos que ocorrerem nos dispositivos e equipamentos dos USUÁRIOS e sejam resultantes do uso regular do portfólio.</p>
                        <p>4.2 A Digital Print Caçapava não garante nem se responsabiliza pela disponibilidade contínua e permanente do portfólio, no entanto pode ocorrer, eventualmente, alguma indisponibilidade temporária decorrente de manutenção necessária ou mesmo gerada por motivo de força maior, como desastres naturais, falhas ou colapsos nos sistemas centrais de comunicação e acesso à Internet, ou fatos de terceiro que fogem de sua esfera de vigilância e responsabilidade.</p>
                        <p>4.3 A Digital Print Caçapava não se responsabiliza por qualquer dano direto ou indireto ocasionado por eventos de terceiros, como ataque de hackers, falhas no sistema, no servidor ou na conexão à Internet, inclusive por ações de softwares maliciosos como vírus, cavalos de Troia, e outros que possam, de algum modo, danificar o equipamento ou a conexão dos USUÁRIOS em decorrência do acesso, utilização ou navegação no portfólio.</p>
                        <p>4.4 Os USUÁRIOS não possuem qualquer direito para exigir a disponibilidade do portfólio conforme melhor lhes convêm, tampouco poderão pleitear indenização ou reparação de danos em caso do portfólio permanecer fora do ar, independentemente da motivação.</p>
                        <p>4.5 O USUÁRIO se compromete a não utilizar o portfólio para transmitir, distribuir ou executar qualquer programa, aplicação ou conteúdo de natureza ilegal, maliciosa ou ameaçadora. Isso inclui, mas não se limita, a vírus, "worms", SPAM, ou quaisquer outros softwares ou códigos de comportamento semelhantes. A Digital Print Caçapava, a seu exclusivo critério, reserva-se o direito de analisar, verificar e julgar tais condutas. Caso sejam identificadas ações que violem sua política interna, a empresa poderá tomar as medidas necessárias para garantir a segurança de seus sistemas.</p>
                    </div>

                    <div class="mt-5 text-start">
                        <h3>Privacidade</h3>
                        <p>5.1. A Digital Print possui documento próprio, denominado Política de Segurança e Privacidade da Digital, acessível em “https://…”.</p>
                    </div>

                    <div class="mt-5 text-start">
                        <h3>Disposições Gerais</h3>
                        <p>6.1 A tolerância em relação ao eventual descumprimento de qualquer cláusula ou condição deste documento não implicará em uma nova aceitação das obrigações aqui estabelecidas, nem prejudicará ou limitará sua exigibilidade em qualquer momento.</p>
                        <p>6.2 Se qualquer disposição deste documento for considerada inválida ou inaplicável, as demais cláusulas permanecerão em vigor, sem a necessidade de uma decisão judicial para confirmar essa condição.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer_principal">
        <div id="footer_content">
            <div id="footer_contacts">
                <h1><a href="index.php"><img src="img/Dzao.png" height="80px"></a></h1>
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