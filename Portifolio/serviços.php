<?php
// Inclui o arquivo de conexão
require_once "conexao.php";
$conexao = novaConexao();

try {
    // Consulta para buscar os dados da tabela
    $sql = "SELECT * FROM produtos";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $sql_filtraCat = "SELECT nomeCat FROM produtos";
    $stmt = $conexao->prepare($sql_filtraCat);
    $stmt->execute();
    $filtraCat = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Verifique se há resultados
    if (!$resultados) {
        echo "<p>Nenhum resultado encontrado.</p>";
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['filtraCat'])) {
        $id = $_POST['filtraCat']; // Captura o valor do botão de filtro

        // A consulta SQL agora utiliza um parâmetro para evitar injeção SQL
        $sql = "SELECT * FROM produtos WHERE nomeCat = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR); // Binding do parâmetro
        $stmt->execute(); // Executa a consulta

        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC); // Recupera todos os registros
    }
} catch (PDOException $e) {
    echo "<p>Erro na conexão: " . $e->getMessage() . "</p>";
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
    <link rel="stylesheet" href="style.css?v=1.2">
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
        <section class="hero-section" style="margin-bottom: 5%">
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
    </main>

    <main id="servicos" class="mb-5">
        <div class="container-fluid mb-4">
            <div class="row justify-content-center text-center">
                <div class="dropdown">
                    <form method="POST">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Filtrar
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php foreach ($filtraCat as $registro): ?>
                                <li>
                                    <!-- Botão de envio que envia o cod_func como valor -->
                                    <button type="submit" class="dropdown-item btnFiltro" name="filtraCat" value="<?php echo htmlspecialchars($registro['nomeCat']); ?>">
                                        <?php echo htmlspecialchars($registro['nomeCat']); ?>
                                    </button>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <button type="submit" class="btn btn-outline-danger" name="limpar"
                            value="pendente">limpar
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                <?php
                // Inicializa o contador
                $contagem = 0;

                foreach ($resultados as $resultado) {
                    // Recupera o valor do campo da imagem
                    $imagem = !empty($resultado['imagem']) ? htmlspecialchars($resultado['imagem']) : 'img1/default.jpg';

                    // Inicia uma nova linha a cada 4 cards
                    if ($contagem % 4 === 0 && $contagem > 0) {
                        echo '</div><div class="row justify-content-center text-center">';
                    }
                ?>
                    <div class="col-3 mb-4 servicoImgs">
                        <div class="card">
                            <!-- Exibe a imagem do banco de dados -->
                            <div class="card-header"
                                style="background-image: url(../Sistema/produto/<?php echo $imagem; ?>)"
                                id="<?php echo htmlspecialchars($resultado['nomeCat']); ?>">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo htmlspecialchars($resultado['nomeCat'] . " " . $resultado['medida']); ?></h5>
                                <p>Entre em contato e peça já!</p>
                            </div>
                        </div>
                    </div>
                <?php
                    // Incrementa o contador
                    $contagem++;
                }
                ?>
            </div> <!-- Fecha a última row -->
        </div>


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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>