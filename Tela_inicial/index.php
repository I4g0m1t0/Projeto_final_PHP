<?php
$titulo = "Tela Inicial";
$styleFile = "assets/css/style_tela_inicial.css"; // Defina o nome do arquivo de estilo em uma variável
$imageFile = "images/Senac_logo.svg";
$indexRoute = "index.php";
$rematriculaRoute = "views/rematricula.php";
$documentosRoute = "views/documentos.php";
$financeiroRoute = "views/financeiro.php";
$diplomaRoute = "views/diploma.php";
$descontosBolsasRoute = "views/descontos_bolsas.php"; // Adicionei a rota para a nova página

include __DIR__ . "/assets/includes/header.php";
include __DIR__ . "/assets/includes/components/navbar.php";
include __DIR__ . "/assets/includes/components/sidebar.php";

require __DIR__ . '/../config/db.php';

try {
    $reference = $database->getReference('alunos/1');
    $snapshot = $reference->getSnapshot();
    $aluno = $snapshot->getValue();

    $mensagemEnvelope = 'Nenhuma notificação encontrada.';
    $mensagemBell = 'Nenhuma notificação encontrada.';
    if ($aluno) {
        if (isset($aluno['emails']) && !empty($aluno['emails'])) {
            $mensagemEnvelope = $aluno['emails'][0]['mensagem'] ?? 'Nenhuma notificação encontrada.';
        }
        if (isset($aluno['notificacoes']) && !empty($aluno['notificacoes'])) {
            $mensagemBell = $aluno['notificacoes'][0]['mensagem'] ?? 'Nenhuma notificação encontrada.';
        }
    }
} catch (Exception $e) {
    $mensagemEnvelope = 'Erro ao acessar o banco de dados: ' . $e->getMessage();
    $mensagemBell = 'Erro ao acessar o banco de dados: ' . $e->getMessage();
}
?>

<div class="main-content">
    <div class="titulo">
        <i class="fa-solid fa-face-smile"></i>
        <h4>PARABÉNS VOCÊ NÃO TEM PENDÊNCIAS FINANCEIRAS!</h4>
    </div>
    <div class="conteudo01">
        <h4>Cronogramas das aulas!</h4>
        <p>Aqui você poderá ver o cronograma mais recente disponibilizado por seu coordenador!</p>
        <p>Constam nesse arquivo todas as aulas e encontros aos Sábados!</p>
        <a href="https://link.sc.senac.br/2NVBaE" target="_blank"><button>Download</button></a>
    </div>
    <div class="conteudo02">
        <h4>Descontos e Bolsas</h4>
        <p>Você sabia que nossa faculdade tem opções de bolsas, financiamentos e descontos imperdíveis para empresas parceiras?</p>
        <p>Fale agora com um vendedor e veja suas oportunidades!</p>
        <a href="<?php echo $descontosBolsasRoute; ?>"><button>Acessar</button></a>
    </div> 
</div>

<?php 
include __DIR__ . "/assets/includes/footer.php";
?>
