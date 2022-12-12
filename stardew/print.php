<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>Fake Stardew</title>
  </head>
  <body onload="window.print()">

    <div class="container mt-3">
      <div class="mt-3 mb-5">
        <img src="https://stardewvalleywiki.com/mediawiki/images/7/7e/Pierre.png">
      </div>
      
      <h3>Name: <?php echo $_SESSION['sess_name']; ?></h3>
      <table class="table table-responsive-lg">
        <thead>
          <th>Name</th>
          <th>amount</th>
          <th>price</th>
        </thead>
        <tbody>
        <?php
          include "connect.php";
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
            <td><?php echo $row['amount']; ?></td>
            <td><?php echo $row2['price']; ?></td>
          </tr>
          <?php }} ?>
        <tr>
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
