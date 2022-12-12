<?php
  include "connect.php";

  $id = $_GET['id'];

  $season = $_POST['season'];
  $name = $_POST['name_edit'];
  $des = $_POST['des_edit'];
  $price = $_POST['price_edit'];
  $priceout = $_POST['price_out_season_edit'];
  $storage = $_POST['storage_edit'];
  $image = $_POST['img_edit'];

  $sql = "UPDATE `tbl_product` SET `season`='$season',`product_name`='$name',`description`='$des',`price`='$price',`price_out_season`='$priceout',`storage`='$storage',`product_url`='$image' WHERE product_id='$id'";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    alert('success edit');
    location='index.php';
  </script>
  ";
?>
