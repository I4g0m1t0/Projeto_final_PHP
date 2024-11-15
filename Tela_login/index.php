<?php
$titulo = "Login";
session_start();

$erro = false;

require __DIR__ . '/../config/db.php';

if (isset($_POST['email'])) {
    // Recebe o e-mail e a senha enviados pelo formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Busca o usuário no Firebase
    $reference = $database->getReference('usuarios');
    $snapshot = $reference->orderByChild('email')->equalTo($email)->getSnapshot();
    $usuarios = $snapshot->getValue();

    // Verifica se o usuário foi encontrado
    if ($usuarios) {
        foreach ($usuarios as $usuario) {
            if (password_verify($senha, $usuario['senha'])) {
                $_SESSION['logado'] = true;
                header("Location: ../Tela_inicial/index.php");
                exit;
            }
        }
    }
    $erro = "Usuário ou senha incorretos.";
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
