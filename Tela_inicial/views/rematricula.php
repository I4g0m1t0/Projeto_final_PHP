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
?>

<div class="main-content">
    <div class="titulo">
        <h4>PERÍDO DE REMATRICULA ABERTO! DIAS 15/11 À 15/12</h4>
    </div>
    <div class="conteudo01">
        <h4>INFORMAÇÕES DO ALUNO:</h4>
        <div class="info-aluno">
            <div class="nome">
                <p>nome: </p> <p>Cristiano pelé messi dos santos junior</p>
            </div>
            <div class="dtNasc">
                <p>data de nascimento: </p> <p>19/19/1999</p>
            </div>
            <div class="curso">
                <p>curso: </p> <p>ANáLISE E DESENVOLVIMENTO DE SISTEMAS</p>
            </div>
            <div class="alertas">
                <p>alertas: </p> <p id="alertas">ALUNO POSSUI 3 ALERTAS</p>
            </div>
        </div>
        <div class="alerta-aluno">
            <p>1 - PENDENCIAS FINANCEIRAS NA BIBLIOTECA</p>
            <p>2 - FALTAS EXCEDEREM 75% DE FREQUENCIA</p>
            <p>3 - ALUNO TEM MENSALIDADES ATRASADAS</p>
        </div>
    </div>
    <div class="conteudo02">
        <h4>INFORMAÇõES DO CURSO:</h4>
        <div class="info-curso">
            <div class="turma">
                <p>turma: </p> <p>2024 0015 2401 0002</p>
            </div>
            <div class="horario">
                <p>HORÁRIO: </p> <p>19H ÀS 22H20</p>
            </div>
            <div class="frequencia">
                <p>FREQUÊNCIA: </p> <p>SEGUNDA À SEXTA</p>
            </div>
            <div class="mensalidade">
                <p>VALOR DE MENSALIDADE: </p> <p>R$ 869,00</p>
            </div>
        </div>
            <button>Rematrícula Online</button>
    </div> 
</div>

<?php 
include __DIR__ . "/../assets/includes/footer.php";
?>