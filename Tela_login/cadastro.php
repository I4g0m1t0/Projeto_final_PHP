<?php
$titulo = "Cadastro";
$stylePath = "assets/style_cadastro.css"; 
include __DIR__ . "/header.php";
?>

<section>
      <div class="form-box">
        <div class="form-value">
          <form action="">
            <h2>Cadastre-se</h2>
            <div class="inputbox">
              <input type="text" required id="name" />
              <label for="">Nome</label>
            </div>
            <div class="inputbox">
              <ion-icon name="mail-outline"></ion-icon>
              <input type="email" required id="email" />
              <label for="">Email</label>
            </div>
            <div class="inputbox">
              <ion-icon name="lock-closed-outline"></ion-icon>
              <input type="password" required id="password" />
              <label for="">Senha</label>
            </div>
            <button id="btn_signUp" type="button">
              Cadastrar
            </button>
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
    
    <?php
    include __DIR__ . "/footer.php";
    ?>