<?php
include_once("session.php");
?>

<!DOCTYPE html>
<html class="ls-theme-blue">

<head>
  <title> Financeiro </title>

  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="description" content="Insira aqui a descrição da página.">
  <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
  <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
  <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
</head>

<body>
  <div class="ls-topbar ">

    <!-- Barra de Notificações -->
    <div class="ls-notification-topbar">

      <!-- Links de apoio -->
      <div class="ls-alerts-list">
        <a href="#" class="ls-ico-bell-o" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Notificações</span></a>
        <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"><span>Ajuda</span></a>
        <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"><span>Sugestões</span></a>
      </div>

      <!-- Dropdown com detalhes da conta de usuário -->
      <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
        <a href="#" class="ls-ico-user">
          <img src="/locawebstyle/assets/images/locastyle/avatar-example.jpg" alt="" />
          <span class="ls-name">User Teste</span>
          (Teste)
        </a>

        <nav class="ls-dropdown-nav ls-user-menu">
          <ul>
            <li><a href="#">Meus dados</a></li>
            <li><a href="#">Troca de conta</a></li>
            <li><a href="#">Faturas</a></li>
            <li><a href="#">Planos</a></li>
            <li><a href="logout.php">Sair</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <span class="ls-show-sidebar ls-ico-menu"></span>

    <a href=" # " class="ls-go-next"><span class="ls-text">Voltar à lista de serviços</span></a>

    <!-- Nome do produto/marca com sidebar -->
    <h1 class="ls-brand-name">
      <a href="home" class="ls-ico-earth">
        <small>Minha Finança</small>
        Financeiro
      </a>
    </h1>

    <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
  </div>


  <aside class="ls-sidebar">

    <div class="ls-sidebar-inner">
      <a href="#" class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>

      <nav class="ls-menu">
        <ul>

          <li><a href="#" class="ls-ico-home" title="Pagina Princial">Pagina Princial</a></li>
          <li><a href="#" class="ls-ico-dashboard" title="Dashboard">Dashboard</a></li>


          <li><a href="#" class="ls-ico-users" title="Clientes">Clientes</a></li>
          <li><a href="#" class="ls-ico-stats" title="Relatórios da revenda">Relatórios da revenda</a></li>
          <li>
            <a href="#" class="ls-ico-cog" title="Configurações">Configurações</a>
            <ul>
              <li><a href="#">Domínios da Revenda</a></li>
              <li><a href="#">E-mail de Remetente</a></li>
              <li><a href="#">Aparência</a></li>
              <li><a href="#">Atendimento</a></li>
              <li><a href="#">Chave de acesso para API</a></li>
            </ul>
          </li>
        </ul>
      </nav>


    </div>
  </aside>


  <main class="ls-main ">
    <div class="container-fluid">
      <h1 class="ls-title-intro ls-ico-home">Página inicial</h1>



      <table class="ls-table">
        <thead>
          <tr>
            <th>Descrição</th>
            <th class="hidden-xs">Valor</th>
            <th class="hidden-xs">Tipo</th>
            <th>Status</th>
            <th class="hidden-xs">Data de envio</th>

          </tr>
        </thead>
        <tbody>
          <tr>

            <div data-ls-module="progressBar" role="progressbar" aria-valuenow="60"></div>

            <table class="ls-table ls-no-hover ls-table-striped">

              <tbody>
                <tr>
                  <td><a href="" title="">Renda Variavel</a></td>
                  <td class="hidden-xs">1.500</td>
                  <td>Receita</td>
                  <td>Recebido</td>
                  <td class="hidden-xs">21/09/2021 as 20:00 PM</td>
                </tr>




              </tbody>
            </table>







          </tr>
        </tbody>
      </table>

    </div>
  </main>

  <aside class="ls-notification">
    <nav class="ls-notification-list" id="ls-notification-curtain" style="left: 1716px;">
      <h3 class="ls-title-2">Notificações</h3>
      <ul>
        <li class="ls-dismissable">
          <a href="#">Blanditiis est est dolorem iure voluptatem eos deleniti repellat et laborum consequatur</a>
          <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
        </li>
        <li class="ls-dismissable">
          <a href="#">Similique eos rerum perferendis voluptatibus</a>
          <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
        </li>
        <li class="ls-dismissable">
          <a href="#">Qui numquam iusto suscipit nisi qui unde</a>
          <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
        </li>
        <li class="ls-dismissable">
          <a href="#">Nisi aut assumenda dignissimos qui ea in deserunt quo deleniti dolorum quo et consequatur</a>
          <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
        </li>
        <li class="ls-dismissable">
          <a href="#">Sunt consequuntur aut aut a molestiae veritatis assumenda voluptas nam placeat eius ad</a>
          <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
        </li>
      </ul>
    </nav>

    <nav class="ls-notification-list" id="ls-help-curtain" style="left: 1756px;">
      <h3 class="ls-title-2">Feedback</h3>
      <ul>
        <li><a href="#">&gt; quo fugiat facilis nulla perspiciatis consequatur</a></li>
        <li><a href="#">&gt; enim et labore repellat enim debitis</a></li>
      </ul>
    </nav>

    <nav class="ls-notification-list" id="ls-feedback-curtain" style="left: 1796px;">
      <h3 class="ls-title-2">Ajuda</h3>
      <ul>
        <li class="ls-txt-center hidden-xs">
          <a href="#" class="ls-btn-dark ls-btn-tour">Fazer um Tour</a>
        </li>
        <li><a href="#">&gt; Guia</a></li>
        <li><a href="#">&gt; Wiki</a></li>
      </ul>
    </nav>
  </aside>

  <!-- We recommended use jQuery 1.10 or up -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
</body>

</html>