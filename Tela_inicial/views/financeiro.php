<?php
$titulo = "Financeiro";
$styleFile = "../assets/css/style_financeiro.css"; // Defina o nome do arquivo de estilo em uma variável
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
    <div class="titulo titulo--variante2">
        <i class="fa-solid fa-face-frown-open"></i>
        <h4>OH NÃO! VOCÊ TEM PENDÊNCIAS FINANCEIRAS!</h4>
    </div>
    <div class="conteudo01">
        <h4>Relação de Parcelas</h4>
        <div class="scrollable">
            <table>
                <thead>
                <tr>
                    <th>Parcela</th>
                    <th>Vencimento</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr class="pago">
                    <td>1</td>
                    <td>10/01/24</td>
                    <td>R$869,00</td>
                    <td>Faculdade em Análise e Desenvolvimento de Sistemas</td>
                    <td><i class="fa-solid fa-circle-check"></i> PAGO</td>
                </tr>
                <tr class="pago">
                    <td>2</td>
                    <td>10/02/24</td>
                    <td>R$869,00</td>
                    <td>Faculdade em Análise e Desenvolvimento de Sistemas</td>
                    <td><i class="fa-solid fa-circle-check"></i> PAGO</td>
                </tr>
                <tr class="pago">
                    <td>3</td>
                    <td>10/03/24</td>
                    <td>R$869,00</td>
                    <td>Faculdade em Análise e Desenvolvimento de Sistemas</td>
                    <td><i class="fa-solid fa-circle-check"></i> PAGO</td>
                </tr>
                <tr class="pago">
                    <td>4</td>
                    <td>10/04/24</td>
                    <td>R$869,00</td>
                    <td>Faculdade em Análise e Desenvolvimento de Sistemas</td>
                    <td><i class="fa-solid fa-circle-check"></i> PAGO</td>
                </tr>
                <tr class="pago">
                    <td>5</td>
                    <td>10/05/24</td>
                    <td>R$869,00</td>
                    <td>Faculdade em Análise e Desenvolvimento de Sistemas</td>
                    <td><i class="fa-solid fa-circle-check"></i> PAGO</td>
                </tr>
                <tr class="pago">
                    <td>6</td>
                    <td>10/06/24</td>
                    <td>R$869,00</td>
                    <td>Faculdade em Análise e Desenvolvimento de Sistemas</td>
                    <td><i class="fa-solid fa-circle-check"></i> PAGO</td>
                </tr>
                <tr class="pago">
                    <td>7</td>
                    <td>10/07/24</td>
                    <td>R$869,00</td>
                    <td>Faculdade em Análise e Desenvolvimento de Sistemas</td>
                    <td><i class="fa-solid fa-circle-check"></i> PAGO</td>
                </tr>
                <tr class="pago">
                    <td>8</td>
                    <td>10/08/24</td>
                    <td>R$869,00</td>
                    <td>Faculdade em Análise e Desenvolvimento de Sistemas</td>
                    <td><i class="fa-solid fa-circle-check"></i> PAGO</td>
                </tr>
                <tr class="pendente">
                    <td>9</td>
                    <td>10/09/24</td>
                    <td>R$869,00</td>
                    <td>Faculdade em Análise e Desenvolvimento de Sistemas</td>
                    <td><i class="fa-solid fa-circle-xmark"></i> Pendente</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>10/10/24</td>
                    <td>R$869,00</td>
                    <td>Faculdade em Análise e Desenvolvimento de Sistemas</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>10/11/24</td>
                    <td>R$869,00</td>
                    <td>Faculdade em Análise e Desenvolvimento de Sistemas</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>10/12/24</td>
                    <td>R$869,00</td>
                    <td>Faculdade em Análise e Desenvolvimento de Sistemas</td>
                    <td>-</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="contato">
            <p>número para CONTATO COM O FINANCEIRO: 47 99926-1533</p>
        </div>
    </div>
</div>

<?php 
include __DIR__ . "/../assets/includes/footer.php";
?>