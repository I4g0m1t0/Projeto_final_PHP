<?php
$titulo = "Documentos";
$styleFile = "../assets/css/style_descontos.css"; // Defina o nome do arquivo de estilo em uma variável
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
    <div>
        <h1>VEJA NOSSOS DESCONTOS</h1>
    </div>
</div>            
<div class="tituloDuvidas">
    <div>
        <h5>
            <br>
            SE TIVER DÚVIDAS, FAVOR SE INFORMAR COM A SECRETARIA IMEDIATAMENTE!!!<br>
            <br>CONTATO VIA TELEFONE: 47 99926-1533
        </h5>
    </div>
</div>

    <div class="conteudo01">
        <h4>Informações sobre o FUMDES</h4>
        <p>O Fundo de Apoio à Manutenção e ao Desenvolvimento da Educação Superior (FUMDES) oferece bolsas de estudo para alunos de instituições de ensino superior.</p>
        <p><strong>Regras:</strong></p>
        <ul class="no-bullets">
            <li>Ser aluno regularmente matriculado em uma instituição de ensino superior.</li>
            <li>Comprovar renda familiar per capita de até 1,5 salário mínimo.</li>
            <li>Não possuir outra bolsa de estudo ou financiamento estudantil.</li>
        </ul>
        <p><strong>Períodos de Inscrições:</strong></p>
        <ul class="no-bullets">
            <li>Primeiro semestre: 01/02 a 28/02</li>
            <li>Segundo semestre: 01/08 a 31/08</li>
        </ul>
    </div>
    <div class="conteudo02">
        <h4>Descontos Disponíveis</h4>
        <ul class="no-bullets">
            <li>20% para Ex-Alunos</li>
            <li>20% para Comerciários</li>
            <li>12% para Empresas Parceiras</li>
        </ul>
        <p><strong>Aviso:</strong> Descontos não acumulativos.</p>
    </div>
</div>

<?php 
include __DIR__ . "/../assets/includes/footer.php";
?>
