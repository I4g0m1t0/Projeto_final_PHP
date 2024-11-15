<?php
$titulo = "Documentos";
$styleFile = "../assets/css/style_documentoSucesso.css"; // Defina o nome do arquivo de estilo em uma variável
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
    <div class="titulo">
        <i class="fa-solid fa-face-smile"></i>
        <div>
            <h4>VOCÊ ACABA DE SOLICITAR SEU DOCUMENTO A SECRETARIA</h4>
            <h5><br>
                SE INFORME COM SUA SECRETARIA E CONFIRME SE O PROCESSO OCORREU COMO PREVISTO!<br>
                <br>CONTATO VIA TELEFONE : 47 99926-1533
            </h5>
        </div>
    </div>
</div>

<?php 
include __DIR__ . "/../assets/includes/footer.php";
?>