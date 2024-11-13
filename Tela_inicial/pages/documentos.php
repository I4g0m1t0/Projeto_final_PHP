<?php
// Inclui a configuração do banco de dados
include __DIR__ . '/../../Tela_login/assets/config/dataBase.php';

// Verifica se a variável $database está definida
if (!isset($database)) {
    die('Erro: Conexão com o banco de dados não estabelecida.');
}

// Verifica se o formulário foi enviado via método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $documentos = $_POST['input_documentos'];

    // Prepara os dados para inserir no Firebase
    $data = [
        'solicitacao' => $documentos,
        'status' => 'Pendente'
    ];

    // Insere os dados no Firebase
    $newPostKey = $database->getReference('solicitacoes')->push($data);

    if ($newPostKey) {
        // Redireciona para a página de sucesso
        header("Location: ../pages/sucessodocumentos.html");
        exit;
    } else {
        echo "Erro ao enviar solicitação.";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documentos</title>
    <link rel="stylesheet" href="../assets/css/style_documentos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <header>
        <nav class="navbar">
            <div class="menu-left">
                <i class="fa-solid fa-bars" onclick="openmenu()"></i>
                <a href="../index.html">
                    <img src="../images/Senac_logo.svg" alt="Senac_logo">
                </a>
            </div>
            <div class="menu-right">
                <i class="fa-solid fa-envelope"></i>
                <i class="fa-solid fa-bell"></i>
            </div>
        </nav>
    </header>
    
    <div class="content">
        <div class="sidebar">
            <a href="../pages/rematricula.html">
                <div class="menu">
                    <i class="fa-sharp fa-solid fa-user-graduate" href="pages/rematricula.html"></i>
                </div>  
            </a>
            <a href="../pages/documentos.php">
                <div class="menu" style="background-color: #F59323;">
                    <i class="fa-solid fa-file"></i>
                </div>
            </a>
            <a href="../pages/financeiro.html">    
                <div class="menu">
                    <i class="fa-solid fa-money-bill-transfer"></i>
                </div>
            </a>
            <a href="../pages/diploma.html">
                <div class="menu">
                    <i class="fa-solid fa-qrcode"></i>
                </div>
            </a>
        </div>
    
        <div class="main-content">
            <div class="conteudo01">
                <h4>SOLICITAÇÃO DE DOCUMENTOS</h4>
                <p>Informe a secretaria os documentos que precisa:</p>
                <form action="" method="POST">
                    <textarea name="input_documentos" id="input_documentos" required></textarea>
                    <button type="submit">Enviar Solicitação</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://kit.fontawesome.com/5865c25890.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
