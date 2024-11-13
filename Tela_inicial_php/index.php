<?php
$titulo = "Tela Inicial";
$styleFile = "assets/css/style_tela_inicial.css"; // Defina o nome do arquivo de estilo em uma variável
$imageFile = "images/Senac_logo.svg";
$indexRoute = "index.php";
$rematriculaRoute = "views/rematricula.php";
$documentosRoute = "views/documentos.php";
$financeiroRoute = "views/financeiro.php";
$diplomaRoute = "views/diploma.php";

include __DIR__ . "/assets/includes/header.php";
include __DIR__ . "/assets/includes/components/navbar.php";
include __DIR__ . "/assets/includes/components/sidebar.php";
?>

<div class="main-content">
        <div class="titulo">
            <i class="fa-solid fa-face-smile"></i>
            <h4>PARABÉNS VOCÊ NÃO TEM PENDENCIAS FINANCEIRAS!</h4>
        </div>
        <div class="conteudo01">
            <h4>Cronogramas das aulas!</h4>
            <p>Aqui você poderá ver o cronograma mais recente disponibilizado por seu coordenador!</p>
            <p>Constam nesse arquivo todas as aulas e encontros aos Sábados!</p>
            <button>Acessar</button>
        </div>
        <div class="conteudo02">
            <h4>Descontos e Bolsas</h4>
            <p>Você sabia que nossa faculdade tem opções de bolsas, financiamentos e descontos imperdíveis para empresas parceiras?</p>
            <p>Fale agora com um vendedor e veja suas oportunidades!</p>
            <button>Acessar</button>
        </div> 
    </div>
</div>

<?php 
include __DIR__ . "/assets/includes/footer.php";
?>