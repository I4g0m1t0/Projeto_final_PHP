<?php
$titulo = "Diploma";
$styleFile = "../assets/css/style_diploma.css"; // Defina o nome do arquivo de estilo em uma variável
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
        <h4>Diploma digital</h4>
        <div class="tabela">
            <!-- Título 'Curso' -->
            <div class="title">
                <p>Curso</p>
            </div>
            <!-- Título 'Situação' -->
            <div class="title divisao">
                <p>Situação</p>
            </div>
            <!-- Título 'Downloads' -->
            <div class="title">
                <p>Downloads</p>
            </div>
        </div>
        <div class="tabela">
            <!-- Linha com o nome do curso -->
            <div class="linha">
                <p>Análise e Desenvolvimento de Sistemas</p>
            </div>
            <!-- Linha com o status do curso -->
            <div class="linha divisao">
                <p>Concluído</p>
            </div>
            <!-- Linha com os botões de download -->
            <div class="linha">
                <button>Diploma</button>
                <button>Xml Diploma</button>
                <button>Histórico</button>
                <button>Xml Histórico</button>
            </div>
        </div>
    </div>
</div>

<?php 
include __DIR__ . "/../assets/includes/footer.php";
?>