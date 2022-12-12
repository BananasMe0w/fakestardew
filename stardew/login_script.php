<?php
  include "connect.php";

  $email = $_POST['email_login'];
  $password = $_POST['password_login'];

  if ($email==''||$password=='') {
    echo "
    <script type='text/javascript'>
      alert('cannot invalid');
      location='index.php';
    </script>
    ";
  }else {
    $sql = "SELECT * FROM tbl_user WHERE email='$email'";
    $result = $con->query($sql);

    if ($result->num_rows<1) {
      echo "
      <script type='text/javascript'>
        alert('email not found');
        location='login.php';
      </script>
      ";
    }else {
      $sql = "SELECT * FROM tbl_user WHERE email='$email' AND password='$password'";
      $result = $con->query($sql);

      if ($result->num_rows<1) {
        echo "
        <script type='text/javascript'>
          alert('password wrong');
          location='login.php';
        </script>
        ";
      }else {
        $row = $result->fetch_assoc();
        $_SESSION['sess_id'] = $row['user_id'];
        $_SESSION['sess_name'] = $row['name'];
        $_SESSION['sess_status'] = $row['status'];

        echo "
        <script type='text/javascript'>
          alert('success');
          location='index.php';
        </script>
        ";
      }
    }
  }
?>
