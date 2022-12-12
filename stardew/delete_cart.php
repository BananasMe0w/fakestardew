<?php
  include "connect.php";

  $id = $_GET['product_id'];
  $user_id = $_SESSION['sess_id'];

  $sql = "DELETE FROM `tbl_bill` WHERE product_id='$id' AND user_id='$user_id'";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    alert('deleted');
    location='cart.php';
  </script>
  ";
?>
