<?php
include_once("session.php");
include_once("database.php");
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

      <!-- Dropdown com detalhes da conta de usuário -->
      <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
        <a href="#" class="ls-ico-user">
          <span class="ls-name">User Teste</span>
        </a>

        <nav class="ls-dropdown-nav ls-user-menu">
          <ul>
            <li><a href="logout.php">Sair</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <span class="ls-show-sidebar ls-ico-menu"></span>

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
      <nav class="ls-menu">
        <ul>
          <li><a href="#" class="ls-ico-home" title="Pagina Princial">Pagina Princial</a></li>
          <li><a href="#" class="ls-ico-dashboard" title="Dashboard">Dashboard</a></li>
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
            <th>Forma de pagamento</th>
            <th>Status</th>
            <th class="hidden-xs">Data</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $obj = new Database;
          $resultado = $obj->connect(
          "select transaction.*, transaction_type.description as transactionType, payment_type.description as paymentType
          from
          transaction inner join transaction_type on transaction.transaction_type_id = transaction_type.id
          inner join payment_type on transaction.payment_type_id = payment_type.id"
          );

          while ($linha = mysqli_fetch_array($resultado)) {
            $tipo = $linha['transactionType'];
            $descricao = $linha['description'];
            $valor = $linha['value'];
            $paymentType = $linha['paymentType'];
            $status = $linha['status'] === "paid" ? "pago" : "não pago";
            $data = date('d/m/Y',strtotime($linha['transaction_date']));

            echo "
            <tr>
            <td>$descricao</td>
            <td>R$ $valor</td>
            <td>$tipo</td>
            <td>$paymentType</td>
            <td>$status</td>
            <td>$data</td>
            </tr>";
          }
          ?>
          <!-- <button data-ls-module='modal' data-action='#' data-content='<h2>Título feito dentro do data-content</h2><p>Conteúdo feito dentro do data-content</p>' data-title='Este título é o atributo data-title' data-class='ls-btn-primary' data-save='Salvar' data-close='Fechar' class='ls-btn ls-btn-xs ls-ico-edit-admin'>Editar</button>
          <button data-ls-module='modal' data-action='tabelamovimentacoes.php?clicouExcluir=1&idFINANCAS=idFINANCAS&mesFiltro=mesFiltro&parcelado=parcelado' data-content='<h2>Deseja excluir o registro?</h2><br><p>Os dados serão apagados definitivamente! Caso esse registro tenha parcelamento, <b>todos</b> os parcelamentos serão excluídos.</p>' data-title='Excluir' data-class='ls-btn-primary' data-save='Excluir' data-close='Fechar' class='ls-btn-primary-danger ls-btn-xs ls-ico-remove'>Excluir</button> -->
        </tbody>
      </table>

    </div>
  </main>

  <!-- We recommended use jQuery 1.10 or up -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
</body>

</html>