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
?>

<div class="main-content">
    <div class="conteudo01">
        <h4>SOLICITAÇÃO DE DOCUMENTOS</h4>
        <p>Informe a secretaria os documentos que precisa:</p>
        <textarea name="input_documentos" id="input_documentos"></textarea>
        <button>Enviar Solicitação</button>
    </div>
</div>

<?php 
include __DIR__ . "/../assets/includes/footer.php";
?>