<!DOCTYPE html>
<html class="ls-theme-gray">

<head>
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>Login</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link href="stylesheets/locastyle.css" rel="stylesheet" type="text/css" />
</head>

<body class="documentacao documentacao_exemplos documentacao_exemplos_login-screen documentacao_exemplos_login-screen_index">

  <div class="ls-login-parent">
    <div class="ls-login-inner">
      <div class="ls-login-container">
        <div class="ls-login-box">
          <h1 class="ls-login-logo">Login</h1>
          <form role="form" class="ls-form ls-login-form" method="post" action="autentica.php">
            <fieldset>

              <label class="ls-label">
                <b class="ls-label-text ls-hidden-accessible">Usuário</b>
                <input class="ls-login-bg-user ls-field-lg" type="text" name="user" placeholder="Usuário" required autofocus>
              </label>

              <label class="ls-label">
                <b class="ls-label-text ls-hidden-accessible">Senha</b>
                <div class="ls-prefix-group ls-field-lg">
                  <input id="password_field" class="ls-login-bg-password" type="password" name="password" placeholder="Senha" required>
                  <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
                </div>
              </label>

              <p><a class="ls-login-forgot" href="forgot-password">Esqueci minha senha</a></p>

              <input type="submit" value="Entrar" class="ls-btn-primary ls-btn-block ls-btn-lg">

            </fieldset>
          </form>

          <?php
          if (isset($_REQUEST["status"]) == "1") {
            echo "<div class='ls-alert-danger'><strong>Vish!</strong> User nao existe</div>";
          }
          ?>

        </div>

        <div class="ls-login-adv"><img title="banner" style="width:313px; height:250;" src="images/cofre.png" /></div>

      </div>
    </div>
  </div>

  <script src="javascripts/jquery-2.1.0.min.js" type="text/javascript"></script>
  <script src="javascripts/locastyle.js" type="text/javascript"></script>

</body>

</html>