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