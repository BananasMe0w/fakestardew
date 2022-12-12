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
              <h3 class="text-light">Create Blog</h3>
            </div>
            <div class="card-body">
              <form action="create_post_script.php" method="post">
                <div class="row">
                  <div class="col-12">
                    <label>Blog name :</label>
                    <input placeholder="what this blog about..." class="form-control" type="text" name="blog_name" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Blog type:</label>
                    <select class="form-control" name="type">
                      <option>farming</option>
                      <option>fishing</option>
                      <option>mining</option>
                      <option>dating</option>
                    </select>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Blog info</label>
                    <textarea class="form-control" name="blog_info" rows="8" cols="80" placeholder="what you're thinking..."></textarea>
                  </div>
                  <div class="col-12 mt-4">
                    <button class="btn btn-success" type="submit" name="button">create</button>
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
