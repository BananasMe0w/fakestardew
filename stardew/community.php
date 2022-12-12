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
      <a href="create_post.php">
        <button class=" btn btn-success" type="button" name="button">+ Create new post</button>
      </a>
    </div>

    <hr>

    <div class="container mt-4 mb-5 bg-secondary rounded">
      <div class="row">
        <?php
          $sql = "SELECT * FROM tbl_blog";
          $result = $con->query($sql);
          while ($row = $result->fetch_assoc()) {
            $sql2 = "SELECT * FROM tbl_user WHERE user_id='$row[user_id]'";
            $result2 = $con->query($sql2);
            while ($row2 = $result2->fetch_assoc()) {
        ?>
        <div class="col-10 text-white mx-auto pt-4 pb-4">
          <h4>name: <?php echo $row2['name']; ?></h4>
          <p>BlogID: #<?php echo $row['blog_id']; ?></p>
          <p>blog type: &nbsp;<?php echo $row['blog_content_type']; ?></p>
          <p class="bg-light text-dark pl-3 pt-3 rounded" style="height:16rem;"><?php echo $row['blog_info']; ?></p>
          <div align="right">
            <p>when : &nbsp;<?php echo $row['blog_date']; ?></p>
            <?php
              if ($_SESSION['sess_id']==$row['user_id']) {
            ?>
              <a href="delete_blog.php?blog_id=<?php echo $row['blog_id']; ?>">
                <button class="btn btn-danger" type="button">delete</button>
              </a>
            <?php } ?>
          </div>
          <div class="mt-3" align="right">
            <a href="reply_page.php?id=<?php echo $row['blog_id'] ?>">
              <button class="btn btn-info rounded-circle" type="button">reply</button>
            </a>
          </div>
        </div>
        <div class="col-12">
          <hr class="bg-dark">
        </div>
        <?php }} ?>
      </div>
      <div class="ml-5 mr-5 bg-dark text-light">
        <?php
          $sql3 = "SELECT * FROM tbl_reply";
          $result3 = $con->query($sql3);
          while ($row3 = $result3->fetch_assoc()) {
            $sql4 = "SELECT * FROM tbl_user WHERE user_id='$row3[user_id]'";
            $result4 = $con->query($sql4);
            while ($row4 = $result4->fetch_assoc()) {
        ?>
          <div class="p-4">
            <h3>Reply to: #<?php echo $row3['blog_id'] ?></h3>
            <p>name: <?php echo $row4['name']; ?></p>
            <p><?php echo $row3['reply_content']; ?></p>
          </div>
        <?php }} ?>
      </div>
    </div>
    <hr>
    <div class="text-center">
      <a class="" href="#"><button class="btn btn-outline-dark" type="button" name="button">Go to top</button></a>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
