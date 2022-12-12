<?php
  include "connect.php";

  $id = $_GET['product_id'];
  $user_id = $_SESSION['sess_id'];

  $sql = "SELECT * FROM tbl_bill WHERE product_id='$id' AND user_id='$user_id'";
  $result = $con->query($sql);
  $row = $result->fetch_assoc();

  if ($result->num_rows>0) {
    $newamount = $row['amount']+1;

    $sql = "UPDATE `tbl_bill` SET `amount`='$newamount' WHERE product_id='$id' AND user_id='$user_id'";
    $result = $con->query($sql);

    echo "
    <script type='text/javascript'>
      alert('increased');
      location='index.php';
    </script>
    ";
  }else {
    $sql = "INSERT INTO `tbl_bill`(`user_id`, `product_id`, `amount`, `date`) VALUES ('$user_id','$id','1',now())";
    $result = $con->query($sql);

    echo "
    <script type='text/javascript'>
      alert('added');
      location='index.php';
    </script>
    ";
  }
?>
