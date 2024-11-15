<?php
$titulo = "Documentos";
$styleFile = "../assets/css/style_documentos.css"; // Defina o nome do arquivo de estilo em uma variável
$imageFile = "../images/Senac_logo.svg";
$indexRoute = "../index.php";
$rematriculaRoute = "../views/rematricula.php";
$documentosRoute = "../views/documentos.php";
$financeiroRoute = "../views/financeiro.php";
$diplomaRoute = "../views/diploma.php";

include __DIR__ . "/../assets/includes/header.php";
include __DIR__ . "/../assets/includes/components/navbar.php";
include __DIR__ . "/../assets/includes/components/sidebar.php";

// Inclui a configuração do banco de dados
include __DIR__ . '/../../config/db.php';

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
        header("Location: ../views/documentoSucesso.php");
        exit;
    } else {
        echo "Erro ao enviar solicitação.";
    }
}
?>

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

<?php 
include __DIR__ . "/../assets/includes/footer.php";
?>
