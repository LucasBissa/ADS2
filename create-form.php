<?php
function getMessage()
{
  if (isset($_SESSION['flash'])) {
    $message =  $_SESSION['flash'];
    unset($_SESSION['flash']);
    echo $message ?? '';
  }
}
?>

<main class="ls-main ">
  <div class="container-fluid">
    <h1 class="ls-title-intro ls-ico-home">Lançamentos</h1>
    <?php getMessage(); ?>
    <form action="/submmit-transaction.php" method="POST">

      <div class="form-group col-md-6">
        <label for="description">Descrição</label>
        <input type="text" name="description" class="form-control" placeholder="Descrição">
      </div>

      <div class="form-group col-md-6">
        <label for="">Valor</label>
        <input type="number" name="value" class="form-control" placeholder="Valor">
      </div>

      <div class="form-group col-md-6">
        <label for="">Tipo</label>
        <select name="transaction_type_id" class="form-control" placeholder="Tipo">
          <option value="">Escolha uma opção</option>
          <?php
          $obj = new Database;
          $resultado = $obj->connect(
            "select id, description from transaction_type"
          );

          while ($linha = mysqli_fetch_array($resultado)) {
            $id = $linha['id'];
            $description = $linha['description'];

            echo "
              <option value='$id'>$description</option>
            ";
          }
          ?>
        </select>
      </div>

      <div class="form-group col-md-6">
        <label for="">Categoria</label>
        <select name="category_type_id" class="form-control" placeholder="Categoria">
          <option value="">Escolha uma opção</option>
          <?php
          $obj = new Database;
          $resultado = $obj->connect(
            "select id, description from transaction_category"
          );

          while ($linha = mysqli_fetch_array($resultado)) {
            $id = $linha['id'];
            $description = $linha['description'];

            echo "
              <option value='$id'>$description</option>
            ";
          }
          ?>
        </select>
      </div>

      <div class="form-group col-md-6">
        <label for="">Tipo de pagamento</label>
        <select name="payment_type_id" class="form-control" placeholder="Tipo de pagamento">
          <option value="">Escolha uma opção</option>
          <?php
          $obj = new Database;
          $resultado = $obj->connect(
            "select id, description from payment_type"
          );

          while ($linha = mysqli_fetch_array($resultado)) {
            $id = $linha['id'];
            $description = $linha['description'];

            echo "
              <option value='$id'>$description</option>
            ";
          }
          ?>
        </select>
      </div>

      <div class="form-group col-md-6">
        <label for="">Status</label>
        <select name="status" class="form-control" placeholder="Status">
          <option value="">Escolha uma opção</option>
          <option value="paid">Pago</option>
          <option value="late">Atrasado</option>
          <option value="pending">Pendente</option>
        </select>
      </div>

      <div class="col-md-12">
        <button type="submit" class="btn btn-success">Lançar</button>
      </div>
    </form>
  </div>
</main>