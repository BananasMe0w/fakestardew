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
            <div class="card-header bg-success">
              <h3 class="text-light">Insert</h3>
            </div>
            <div class="card-body">
              <form action="insert_script.php" method="post">
                <div class="row">
                  <div class="col-12">
                    <label>Season :</label>
                    <select class="form-control" name="season">
                      <option>all_year_round</option>
                      <option>spring</option>
                      <option>summer</option>
                      <option>fall</option>
                    </select>
                  </div>
                  <div class="col-12 mt-3">
                    <label>Name :</label>
                    <input class="form-control" type="text" name="name_insert" required>
                  </div>
                  <div class="col-12 mt-3">
                    <label>Description :</label>
                    <input class="form-control" type="text" name="des_insert" required>
                  </div>
                  <div class="col-12 mt-3">
                    <label>Price :</label>
                    <input class="form-control" type="text" name="price_insert" required>
                  </div>
                  <div class="col-12 mt-3">
                    <label>Price out of season :</label>
                    <input class="form-control" type="text" name="price_out_season_insert" required>
                  </div>
                  <div class="col-12 mt-3">
                    <label>Storage :</label>
                    <input class="form-control" type="text" name="storage_insert" required>
                  </div>
                  <div class="col-12 mt-3">
                    <label>Product url :</label>
                    <input class="form-control" type="text" name="img_insert" required>
                  </div>
                  <div class="col-12 mt-3">
                    <button class="btn btn-success" type="submit" name="button">insert</button>
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
