<?php
include __DIR__ . '/server.php';
 // var_dump($databaseCd);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.15.0/d3.min.js"></script>
    <!-- CSS SAS -->
    <link rel="stylesheet" href="dist/app.css">
    <title>Ajax-Dischi</title>
  </head>
  <body>
    <!-- Header -->
    <header>

    </header>
    <!-- /Header -->
    <!-- Main -->
    <main>
      <div class="wrapper">
        <div class="cd_container">
        <?php foreach ($databaseCd as $key => $cd) { ?>
            <div class="cd_box">
              <div class="cover">
                <img src="<?php echo $cd['poster']; ?>" alt="">
              </div>
              <div class="box_text">
                <h3>
                  <?php echo $cd['title']; ?>
                </h3>
                <span>
                  <?php echo $cd['author']; ?>
                </span>
                <span>
                  <?php echo $cd['year']; ?>
                </span>
              </div>
            </div>
        <?php } ?>
      </div>
      </div>
    </main>
    <!-- /Main -->
    <!-- Footer -->
    <footer></footer>
    <!-- /Footer -->
    <!-- Script -->
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
