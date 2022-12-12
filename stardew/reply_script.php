<?php
  include "connect.php";

  $id = $_GET['id'];
  $user_id = $_SESSION['sess_id'];
  $info = $_POST['reply_info'];

  $sql = "INSERT INTO `tbl_reply`(`blog_id`, `user_id`, `reply_content`, `reply_date`) VALUES ('$id','$user_id','$info',now())";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    alert('replied');
    location='community.php';
  </script>
  ";
?>
