<?php
$titulo = "Login";
$stylePath = "assets/style_login.css"; // Apenas o caminho do CSS
include __DIR__ . "/header.php";
?>

<section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="">Usuário</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Senha</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Lembrar <a href="#">Esqueci minha senha</a></label>
                    </div>
                    <button>Log in</button>
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