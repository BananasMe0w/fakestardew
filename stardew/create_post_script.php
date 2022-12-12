<?php
  include "connect.php";

  $name = $_POST['blog_name'];
  $type = $_POST['type'];
  $info = $_POST['blog_info'];

  $sql = "INSERT INTO `tbl_blog`(`user_id`, `blog_info`, `blog_content_type`, `blog_name`, `blog_date`) VALUES ('$_SESSION[sess_id]','$info','$type','$name',now())";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    alert('created');
    location='community.php';
  </script>
  ";
?>
