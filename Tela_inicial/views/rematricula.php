<?php
$titulo = "Rematrícula";
$styleFile = "../assets/css/style_rematricula.css"; // Defina o nome do arquivo de estilo em uma variável
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
    // Prepara os dados para inserir no Firebase
    $data = [
        'nome' => 'Cristiano pelé messi dos santos junior',
        'data_nascimento' => '19/19/1999',
        'curso' => 'ANÁLISE E DESENVOLVIMENTO DE SISTEMAS',
        'alertas' => 'ALUNO POSSUI 3 ALERTAS',
        'pendencias' => [
            'PENDENCIAS FINANCEIRAS NA BIBLIOTECA',
            'FALTAS EXCEDERAM 75% DE FREQUÊNCIA',
            'ALUNO TEM MENSALIDADES ATRASADAS'
        ],
        'turma' => '2024 0015 2401 0002',
        'horario' => '19H ÀS 22H20',
        'frequencia' => 'SEGUNDA À SEXTA',
        'mensalidade' => 'R$ 869,00'
    ];

    // Insere os dados no Firebase
    $newPostKey = $database->getReference('rematriculas')->push($data);

    if ($newPostKey) {
        // Redireciona para a página de sucesso
        header("Location: ../views/secretariaSucesso.php");
        exit;
    } else {
        echo "Erro ao enviar solicitação.";
    }
}
?>

<div class="main-content">
    <div class="titulo titulo--variante1">
        <h4>PERÍODO DE REMATRÍCULA ABERTO! DIAS 15/11 À 15/12</h4>
    </div>
    <div class="conteudo01">
        <h4>INFORMAÇÕES DO ALUNO:</h4>
        <div class="info-aluno">
            <div class="nome">
                <p>Nome: </p> <p>Cristiano pelé messi dos santos junior</p>
            </div>
            <div class="dtNasc">
                <p>Data de Nascimento: </p> <p>19/19/1999</p>
            </div>
            <div class="curso">
                <p>Curso: </p> <p>ANÁLISE E DESENVOLVIMENTO DE SISTEMAS</p>
            </div>
            <div class="alertas">
                <p>Alertas: </p> <p id="alertas">ALUNO POSSUI 3 ALERTAS</p>
            </div>
        </div>
        <div class="alerta-aluno">
            <p>1 - PENDÊNCIAS FINANCEIRAS NA BIBLIOTECA</p>
            <p>2 - FALTAS EXCEDERAM 75% DE FREQUÊNCIA</p>
            <p>3 - ALUNO TEM MENSALIDADES ATRASADAS</p>
        </div>
    </div>
    <div class="conteudo02">
        <h4>INFORMAÇÕES DO CURSO:</h4>
        <div class="info-curso">
            <div class="turma">
                <p>Turma: </p> <p>2024 0015 2401 0002</p>
            </div>
            <div class="horario">
                <p>Horário: </p> <p>19H ÀS 22H20</p>
            </div>
            <div class="frequencia">
                <p>Frequência: </p> <p>SEGUNDA À SEXTA</p>
            </div>
            <div class="mensalidade">
                <p>Valor de Mensalidade: </p> <p>R$ 869,00</p>
            </div>
        </div>
        <form action="" method="POST">
            <button type="submit">Rematrícula Online</button>
        </form>
    </div> 
</div>

<?php 
include __DIR__ . "/../assets/includes/footer.php";
?>
