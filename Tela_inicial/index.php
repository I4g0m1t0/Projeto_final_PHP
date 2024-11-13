<?php
require __DIR__ . '/../Tela_login/assets/config/dataBase.php';

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
} catch (DatabaseException $e) {
    $mensagemEnvelope = 'Erro ao acessar o banco de dados: ' . $e->getMessage();
    $mensagemBell = 'Erro ao acessar o banco de dados: ' . $e->getMessage();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="assets/css/style_tela_inicial.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <header>
        <nav class="navbar">
            <div class="menu-left">
                <i class="fa-solid fa-bars" onclick="openmenu()"></i>
                <a href="index.html">
                    <img src="images/Senac_logo.svg" alt="Senac_logo">
                </a>
            </div>
            <div class="menu-right">
                <i id="envelope-icon" class="fa-solid fa-envelope"></i>
                <i id="bell-icon" class="fa-solid fa-bell"></i>
            </div>
        </nav>
    </header>
    
    <div class="content">
        <div class="sidebar">
            <a href="pages/rematricula.html">
                <div class="menu">
                    <i class="fa-sharp fa-solid fa-user-graduate" href="pages/rematricula.html"></i>
                </div>  
            </a>
            <a href="pages/documentos.php">
                <div class="menu">
                    <i class="fa-solid fa-file"></i>
                </div>
            </a>
            <a href="pages/financeiro.html">    
                <div class="menu">
                    <i class="fa-solid fa-money-bill-transfer"></i>
                </div>
            </a>
            <a href="pages/diploma.html">
                <div class="menu">
                    <i class="fa-solid fa-qrcode"></i>
                </div>
            </a>
        </div>
    
        <div class="main-content">
            <div class="titulo">
                <i class="fa-solid fa-face-smile"></i>
                <h4>PARABÉNS VOCÊ NÃO TEM PENDENCIAS FINANCEIRAS!</h4>
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
                <button>Acessar</button>
            </div> 
        </div>
    </div>

    <div class="notificacoes">
        <h4>Notificações:</h4>
        <p id="notificacao-mensagem">Clique em um ícone para ver as notificações.</p>
    </div>
    
    <script src="https://kit.fontawesome.com/5865c25890.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+0iEc5b7AMYl8yVZB6Yk5y5t4h4g7" crossorigin="anonymous"></script>
    <script>
        document.getElementById('envelope-icon').addEventListener('click', function() {
            document.getElementById('notificacao-mensagem').innerText = '<?php echo $mensagemEnvelope; ?>';
        });

        document.getElementById('bell-icon').addEventListener('click', function() {
            document.getElementById('notificacao-mensagem').innerText = '<?php echo $mensagemBell; ?>';
        });
    </script>
  </body>
</html>
