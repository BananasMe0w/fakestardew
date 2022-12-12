<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>Fake Stardew</title>
  </head>
  <body>
    <?php include "checknav.php"; ?>
    <div class="container mt-4">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-info">
              <h3 class="text-light">Reply Blog</h3>
            </div>
            <div class="card-body">
              <?php
                $id = $_GET['id'];
              ?>
              <form action="reply_script.php?id=<?php echo $id; ?>" method="post">
                <div class="row">
                  <div class="col-12">
                    <label>Reply info</label>
                    <textarea class="form-control" name="reply_info" rows="8" cols="80" placeholder="what you're thinking..."></textarea>
                  </div>
                  <div class="col-12 mt-4">
                    <button class="btn btn-info" type="submit" name="button">reply</button>
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
