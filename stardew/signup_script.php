<?php
  include "connect.php";

  $name = $_POST['name_signup'];
  $surname = $_POST['surname_signup'];
  $tel = $_POST['tel_signup'];
  $address = $_POST['address_signup'];
  $email = $_POST['email_signup'];
  $password = $_POST['password_signup'];
  $repassword = $_POST['repassword_signup'];

  if ($name==''||$surname==''||$tel==''||$address==''||$email==''||$password==''||$repassword=='') {
    echo "
    <script type='text/javascript'>
      alert('cannot invalid');
      location='index.php';
    </script>
    ";
  }else if ($password <> $repassword) {
    echo "
    <script type='text/javascript'>
      alert('password not same');
      location='signup.php';
    </script>
    ";
  }else {
    $sql = "SELECT * FROM tbl_user WHERE email='$email'";
    $result = $con->query($sql);

    if ($result->num_rows>0) {
      echo "
      <script type='text/javascript'>
        alert('email has registered');
        location='signup.php';
      </script>
      ";
    }else {
      $sql = "INSERT INTO `tbl_user`(`name`, `surname`, `tel`, `address`, `email`, `password`, `status`) VALUES ('$name','$surname','$tel','$address','$email','$password','1')";
      $result = $con->query($sql);

      if ($result->num_rows>0) {
        echo "
        <script type='text/javascript'>
          alert('error');
          location='signup.php';
        </script>
        ";
      }else {
        echo "
        <script type='text/javascript'>
          alert('success');
          location='login.php';
        </script>
        ";
      }
    }
  }
?>
