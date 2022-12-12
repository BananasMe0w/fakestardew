<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>Fake Stardew</title>
  </head>
  <body>
    <?php include "navbar.php"; ?>
    <div class="container mt-4">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-info">
              <h3 class="text-light">Sign up</h3>
            </div>
            <div class="card-body">
              <form action="signup_script.php" method="post">
                <div class="row">
                  <div class="col-12">
                    <label>Email :</label>
                    <input class="form-control" type="email" name="email_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Password :</label>
                    <input class="form-control" type="password" name="password_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Re-Password :</label>
                    <input class="form-control" type="password" name="repassword_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <hr>
                  </div>
                  <div class="col-6 mt-2">
                    <label>Name :</label>
                    <input class="form-control" type="text" name="name_signup" required>
                  </div>
                  <div class="col-6 mt-2">
                    <label>Surname :</label>
                    <input class="form-control" type="text" name="surname_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Phone number :</label>
                    <input class="form-control" type="text" name="tel_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Address :</label>
                    <input class="form-control" type="text" name="address_signup" required>
                  </div>
                  <div class="col-6 mt-4">
                    <button class="btn btn-success" type="submit" name="button">submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
