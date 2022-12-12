<?php
  include "connect.php";

  unset($_SESSION['sess_id']);
  unset($_SESSION['sess_name']);
  unset($_SESSION['sess_status']);
  session_destroy();

  echo "
  <script type='text/javascript'>
    alert('log out');
    location='index.php';
  </script>
  ";
?>
