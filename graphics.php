<?php
  date_default_timezone_set('America/Sao_Paulo');
  $month = date('m');
  $year = date('Y');

  $obj = new Database;
  $receita = mysqli_fetch_array($obj->connect(
    "select SUM(transaction.value) as total
    from transaction inner join transaction_type on transaction.transaction_type_id = transaction_type.id
    where transaction_type.description like 'receita'
    and month(transaction.transaction_date) = $month and year(transaction.transaction_date) = $year
    "
  ))['total'];

  $despesa = mysqli_fetch_array($obj->connect(
    "select SUM(transaction.value) as total
    from transaction inner join transaction_type on transaction.transaction_type_id = transaction_type.id
    where transaction_type.description like 'despesa'
    and month(transaction.transaction_date) = $month and year(transaction.transaction_date) = $year
    "
  ))['total'];

  $receitaporcategoria = $obj->connect(
    "select SUM(transaction.value) as total, transaction_category.description as category
    from transaction inner join transaction_category on transaction.category_type_id = transaction_category.id
    inner join transaction_type on transaction.transaction_type_id = transaction_type.id
    where transaction_type.description like 'receita'
    and month(transaction.transaction_date) = $month and year(transaction.transaction_date) = $year
    group by transaction.category_type_id
    order by total desc
    "
  );

  $despesaporcategoria = $obj->connect(
    "select SUM(transaction.value) as total, transaction_category.description as category
    from transaction inner join transaction_category on transaction.category_type_id = transaction_category.id
    inner join transaction_type on transaction.transaction_type_id = transaction_type.id
    where transaction_type.description like 'despesa'
    and month(transaction.transaction_date) = $month and year(transaction.transaction_date) = $year
    group by transaction.category_type_id
    order by total desc
    "
  );

?>


<main class="ls-main ">
  <div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-dashboard">Dashboard</h1>

    <div class="ls-box ls-board-box">
      <header class="ls-info-header">
        <p class="ls-float-right ls-float-none-xs ls-small-info">Data: <strong><?php echo date('m/Y');?></strong></p>
        <h2 class="ls-title-3">Informações do mês</h2>
      </header>

      <div id="sending-stats" class="row">
        <div class="col-sm-6 col-md-3">
          <div class="ls-box">
            <div class="ls-box-head">
              <h6 class="ls-title-4">Total receita</h6>
            </div>
            <div class="ls-box-body">
              <span class="ls-board-data">
                <strong>
                R$ <?php echo $receita;?>
                </strong>
              </span>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="ls-box">
            <div class="ls-box-head">
              <h6 class="ls-title-4">Total despesa</h6>
            </div>
            <div class="ls-box-body">
              <span class="ls-board-data">
                <strong>
                  R$ <?php echo $despesa;?>
                </strong>
              </span>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="ls-box">
            <div class="ls-box-head">
              <h6 class="ls-title-4">Saldo do mês</h6>
            </div>
            <div class="ls-box-body">
              <span class="ls-board-data">
                <strong>
                R$ <?php echo $receita - $despesa;?>
                </strong>
              </span>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="ls-box">
          <header class="ls-info-header">
            <h2 class="ls-title-3">Receitas por categoria</h2>
          </header>

          <table class="ls-table">
            <thead>
              <th>Categoria</th>
              <th>Valor</th>
            </thead>
            <tbody>
             <?php
             while ($linha = mysqli_fetch_array($receitaporcategoria)) {
               $category = $linha['category'];
               $value = $linha['total'];

               echo "
                <tr>
                  <td>$category</td>
                  <td>$value</td>
                </tr>";
              }
             ?>
            </tbody>
          </table>
        </div>

      </div>
      <div class="col-md-6">
        <div class="ls-box">
          <header class="ls-info-header">
            <h2 class="ls-title-3">Despesas por categoria</h2>
          </header>

          <table class="ls-table">
            <thead>
              <th>Categoria</th>
              <th>Valor</th>
            </thead>
            <tbody>
            <?php
             while ($linha = mysqli_fetch_array($despesaporcategoria)) {
               $category = $linha['category'];
               $value = $linha['total'];

               echo "
                <tr>
                  <td>$category</td>
                  <td>$value</td>
                </tr>";
              }
             ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</main>