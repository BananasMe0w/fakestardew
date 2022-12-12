<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>Fake Stardew</title>
  </head>
  <body>
    <?php include "checknav.php"; ?>

    <div class="container mt-3">
      <table class="table table-responsive-lg">
        <thead>
          <th>Name</th>
          <th>Image</th>
          <th>amount</th>
          <th>price</th>
          <th>action:
            <a href="print.php">
              <button class="btn btn-success" type="button">buy</button>
            </a>
          </th>
        </thead>
        <tbody>
        <?php
          $sql = "SELECT * FROM tbl_bill WHERE user_id='$_SESSION[sess_id]'";
          $result = $con->query($sql);

          while ($row = $result->fetch_assoc()) {
            $sql2 = "SELECT * FROM tbl_product WHERE product_id='$row[product_id]'";
            $result2 = $con->query($sql2);

            while ($row2 = $result2->fetch_assoc()) {
              $total = $total + $row2['price']*$row['amount'];
        ?>
          <tr>
            <td><?php echo $row2['product_name']; ?></td>
            <td><img src="<?php echo $row2['product_url']; ?>"></td>
            <td><?php echo $row['amount']; ?></td>
            <td><?php echo $row2['price']; ?></td>
            <td>
              <a href="delete_cart.php?product_id=<?php echo $row['product_id']; ?>">
                <button class="btn btn-danger" type="button">delete</button>
              </a>
            </td>
          </tr>
          <?php }} ?>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>Total: <?php echo $total ?></td>
        </tr>
      </tbody>
      </table>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
