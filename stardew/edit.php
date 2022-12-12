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
              <h3 class="text-light">Edit</h3>
            </div>
            <div class="card-body">
              <?php
                include "connect.php";
                $id = $_GET['id'];

                $sql = "SELECT * FROM tbl_product WHERE product_id='$id'";
                $result = $con->query($sql);
                $row = $result->fetch_assoc();
              ?>
              <form action="edit_script.php?id=<?php echo $row['product_id']; ?>" method="post">
                <div class="row">
                  <div class="col-12">
                    <label>Season :</label>
                    <select class="form-control" name="season" disabled value="<?php echo $row['season']; ?>">
                      <option>all_year_round</option>
                      <option>spring</option>
                      <option>summer</option>
                      <option>fall</option>
                    </select>
                  </div>
                  <div class="col-12 mt-3">
                    <label>Name :</label>
                    <input class="form-control" type="text" name="name_edit" required value="<?php echo $row['product_name']; ?>">
                  </div>
                  <div class="col-12 mt-3">
                    <label>Description :</label>
                    <input class="form-control" type="text" name="des_edit" required value="<?php echo $row['description']; ?>">
                  </div>
                  <div class="col-12 mt-3">
                    <label>Price :</label>
                    <input class="form-control" type="text" name="price_edit" required value="<?php echo $row['price']; ?>">
                  </div>
                  <div class="col-12 mt-3">
                    <label>Price out of season :</label>
                    <input class="form-control" type="text" name="price_out_season_edit" required value="<?php echo $row['price_out_season']; ?>">
                  </div>
                  <div class="col-12 mt-3">
                    <label>Storage :</label>
                    <input class="form-control" type="text" name="storage_edit" required value="<?php echo $row['storage']; ?>">
                  </div>
                  <div class="col-12 mt-3">
                    <label>Product url :</label>
                    <input class="form-control" type="text" name="img_edit" required value="<?php echo $row['product_url']; ?>">
                  </div>
                  <div class="col-12 mt-3">
                    <button class="btn btn-info" type="submit" name="button">edit</button>
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
