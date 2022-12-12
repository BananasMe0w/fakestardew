<?php
  include "connect.php";

  $id = $_GET['blog_id'];

  $sql = "DELETE FROM `tbl_blog` WHERE blog_id='$id'";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    alert('blog deleted');
    location='community.php';
  </script>
  ";
?>
