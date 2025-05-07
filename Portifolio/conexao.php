<?php
function novaConexao()
{
    $usuario = 'if0_37749743';
    $senha = 'aappoo09Digital';
    $database = 'if0_37749743_digital_print';
    $host = 'sql200.infinityfree.com';

    try {
        // Conexão usando PDO
        $conexao = new PDO("mysql:host=$host;dbname=$database", $usuario, $senha);
        // Configurar o PDO para lançar exceções em caso de erro
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    } catch (PDOException $e) {
        // Exibe uma mensagem de erro caso a conexão falhe
        die("Falha ao conectar ao banco de dados: " . $e->getMessage());
    }
}
?>