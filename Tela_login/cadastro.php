<?php
$titulo = "Cadastro";

require __DIR__ . '/../vendor/autoload.php';

use Kreait\Firebase\Factory;

// Verifica se o formulário foi enviado via método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $nome = $_POST['nomeCadastro'];
    $email = $_POST['emailCadastro'];
    $senha = $_POST['senhaCadastro'];

    // Inicializa o Firebase
    $firebase = (new Factory)
        ->withServiceAccount(__DIR__ . '/../serviceAccountKey.json')
        ->withDatabaseUri('https://senacaluno-a0710-default-rtdb.firebaseio.com');

    $database = $firebase->createDatabase();

    // Cria um hash da senha
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Prepara os dados para inserir no Firebase
    $novoUsuario = [
        'nome' => $nome,
        'email' => $email,
        'senha' => $senhaHash
    ];

    // Insere os dados no Firebase Realtime Database
    $reference = $database->getReference('usuarios')->push($novoUsuario);

    if ($reference) {
        echo "Usuário cadastrado com sucesso!";
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao cadastrar usuário.";
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
                <div class="register">
                    <p>Já tem uma conta? <a href="index.php">Log in</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script src="assets/js/cadastro.js"></script>

<?php
include __DIR__ . "/footer.php";
?>
