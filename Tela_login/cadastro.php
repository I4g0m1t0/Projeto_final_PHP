<?php
$titulo = "Cadastro";
$erro = false;

// Verifica se o formulário foi enviado via método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $nome = $_POST['nomeCadastro'];
    $email = $_POST['emailCadastro'];
    $senha = $_POST['senhaCadastro'];

    // Inclui a configuração do banco de dados
    include __DIR__ . '../assets/config/db.php';

    // Cria um hash da senha
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Prepara a consulta SQL para inserir os dados na tabela 'usuarios'
    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
    
    // Vincula os parâmetros da consulta às variáveis
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":senha", $senhaHash);
    
    // Executa a consulta
    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        $erro = "Erro ao cadastrar usuário.";
    }
}

include __DIR__ . "/header.php";
?>

<section>
    <div class="form-box-cadastro">
        <div class="form-value">
            <form action="" method="POST">
                <h2>Cadastre-se</h2>
                <div class="inputbox">
                    <input type="text" name="nomeCadastro" required id="nomeCadastro" />
                    <label for="nomeCadastro">Nome</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="emailCadastro" required id="emailCadastro" />
                    <label for="emailCadastro">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="senhaCadastro" required id="senhaCadastro" />
                    <label for="senhaCadastro">Senha</label>
                </div>
                <button id="btn_signUp" type="submit">
                    Cadastrar
                </button>
                <?php if ($erro): ?>
                    <div class="error"><?php echo $erro; ?></div>
                <?php endif; ?>
                <div class="register">
                    <p>Já tem uma conta? <a href="index.php">Log in</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
<script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
></script>
<script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
></script>

<script src="assets/js/cadastro.js"></script>

<?php
include __DIR__ . "/footer.php";
?>
