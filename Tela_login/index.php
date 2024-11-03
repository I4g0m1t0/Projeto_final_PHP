<?php
$titulo = "Login";
$stylePath = "assets/css/style_login.css"; // Apenas o caminho do CSS
session_start();

$erro = false;
if (isset($_POST['email'])) {
    // Recebe o e-mail e a senha enviados pelo formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Aqui eu requisito o banco pra encontrar a variável $pdo que foi responsável por instanciar o banco de dados
    include __DIR__ . '../assets/config/db.php';

    // Aqui eu preparo a consulta SQL para buscar o usuário no banco
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    
    // Aqui eu pego o resultado da consulta SQL
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica se o usuário foi encontrado
    if ($row && password_verify($senha, $row['senha'])) {
        // Se sim
        $_SESSION['logado'] = true;
        header("Location: dashboard/dashboard.php");
        exit; // Certifique-se de usar exit após header
    } else {
        // Se não
        $erro = "Usuário ou senha incorretos.";
    }
}

include __DIR__ . "/header.php";
?>

<section>
    <div class="form-box-login">
        <div class="form-value">
            <form action="" method="POST">
                <h2>Login</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" required>
                    <label for="">Usuário</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="senha" required>
                    <label for="">Senha</label>
                </div>
                <div class="forget">
                    <label for=""><input type="checkbox"> Lembrar <a href="#">Esqueci minha senha</a></label>
                </div>
                <button type="submit">Log in</button>
                <?php if ($erro): ?>
                    <div class="error"><?php echo $erro; ?></div>
                <?php endif; ?>
                <div class="register">
                    <p>Não tenho uma conta <a href="cadastro.php">Registrar-se</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<?php
include __DIR__ . "/footer.php";
?>
