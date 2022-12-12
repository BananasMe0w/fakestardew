<?php
  include "connect.php";

  $id = $_GET['id'];

  $sql = "DELETE FROM `tbl_product` WHERE product_id='$id'";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    alert('product deleted');
    location='index.php';
  </script>
  ";
?>
