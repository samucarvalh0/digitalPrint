<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Print CPV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="style.css?v=1.1">
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
            <a href="index.php" class="nav-logo">
                <h2 class="logo-text">Digital Print</h2>
            </a>

            <ul class="nav-menu">
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
        </nav>
    </header>

    <main>
        <!-- Hero section -->
        <section class="hero-section">
            <div class="section-content efeito-hero-topo">
                <div class="hero-details">
                    <h2 class="title">Digital Print</h2>
                    <h3 class="subtitle">
                        Arte digital que transcende a imaginação e dá vida às suas ideias!
                    </h3>
                    <p class="description">Transforme pixels em emoções com a nossa arte digital única!</p>

                    <div class="buttons">
                        <a href="index.php" class="button contact-us">Home</a>
                        <a href="ctt.php" class="button contact-us">Contato</a>
                    </div>
                </div>
                <div class="hero-image-wrapper">
                    <img src="img/inovadorV2.png" class="hero-image-2 Principal d-none d-md-block" />
                </div>
            </div>
            <img src="./img/bagulhola.png" style="width: 100%;" class="ondas">
        </section>
    </main>

    <main>
        <?php
        // Inclui o arquivo de conexão
        require_once "conexao.php";
        $conexao = novaConexao();

        try {
            // Consulta para buscar os dados da tabela
            $sql = "SELECT * FROM imagens";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Verifique se há resultados
            if (!$resultados) {
                echo "<p>Nenhum resultado encontrado.</p>";
            }

            // Loop para exibir os resultados dentro dos cards
            foreach ($resultados as $resultado) {
                // Recupera o valor do campo que contém o caminho ou nome do arquivo de imagem
                $imagem = htmlspecialchars($resultado['imagem']) ? $resultado['imagem'] : 'img1/default.jpg';

                ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- Exibe a imagem do banco de dados -->
                        <img src="<?php echo htmlspecialchars($imagem); ?>" class="card-img-top" alt="Imagem do Card">

                        <div class="card-body">
                            <h5 class="card-title">Nome: <?php echo htmlspecialchars($resultado['Nome']); ?></h5>
                            <p class="card-text">Descrição: <?php echo htmlspecialchars($resultado['Descricao']); ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        } catch (PDOException $e) {
            echo "<p>Erro na conexão: " . $e->getMessage() . "</p>";
        }

        // Fecha a conexão
        $conexao = null;
        ?>
    </main>

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
</body>

</html>