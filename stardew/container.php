<hr>
  <h2 class="text-center">Product</h2>
<hr>

<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <?php
        if ($_SESSION['sess_status']==2) {
      ?>
      <div align="right">
        <a href="insert.php">
          <button class="btn btn-success" type="button">insert</button>
        </a>
      </div>
      <?php } ?>
    </div>
    <?php
      include "connect.php";
      $sql = "SELECT * FROM tbl_product";
      $result = $con->query($sql);

      while ($row = $result->fetch_assoc()) {
    ?>
    <div class="col-3 col-lg-3 col-mb-3 mt-3">
      <div class="card">
        <div class="card-header text-center" style="height: 8rem;">
          <h2><?php echo $row['product_name']; ?></h2>
        </div>
        <div class="card-body" style="height: 45rem;">
          <img class="d-block w-100" src="<?php echo $row['product_url']; ?>">
          <p class="mt-3"><b>Season:</b> <?php echo $row['season']; ?></p>
          <p class="mt-3"><b>Info:</b> <?php echo $row['description']; ?></p>
          <p class="mt-3"><b>Price:</b> <?php echo number_format($row['price']); ?> baht</p>
          <p><b>Amount:</b> <?php echo number_format($row['storage']); ?> left(s)</p>
        </div>
        <div class="text-center mb-4">
          <?php
            if ($_SESSION['sess_status']==2) {
          ?>
          <a href="edit.php?id=<?php echo $row['product_id']; ?>">
            <button class="btn btn-info" type="button">edit</button>
          </a>
          <a href="delete_product.php?id=<?php echo $row['product_id']; ?>.php">
            <button class="btn btn-danger" type="button">delete</button>
          </a>
        <?php }elseif($_SESSION['sess_status']==1){ ?>
          <a href="cart_script.php?product_id=<?php echo $row['product_id']; ?>.php">
            <button class="btn btn-success" type="button">add to cart</button>
          </a>
        <?php }else{ ?>
          <a href="cart_script.php?product_id=<?php echo $row['product_id']; ?>.php">
            <button class="btn btn-success" type="button" disabled>add to cart</button>
          </a>
          <p class="text-danger">Please log in first</p>
        <?php } ?>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
