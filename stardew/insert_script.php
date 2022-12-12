<?php
  include "connect.php";

  $season = $_POST['season'];
  $name = $_POST['name_insert'];
  $des = $_POST['des_insert'];
  $price = $_POST['price_insert'];
  $priceout = $_POST['price_out_season_insert'];
  $storage = $_POST['storage_insert'];
  $image = $_POST['img_insert'];

  $sql = "INSERT INTO `tbl_product`(`season`, `product_name`, `description`, `price`, `price_out_season`, `storage`, `product_url`) VALUES ('$season','$name','$des','$price','$priceout','$storage','$image')";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    alert('success insert');
    location='index.php';
  </script>
  ";
?>
