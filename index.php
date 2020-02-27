<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS SAS -->
    <link rel="stylesheet" href="dist/app.css">
    <title>Ajax-Dischi</title>
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="header_container">
        <div class="header-top">
          <img src="img/logo_spotify.png" alt="Logo Spotify">
        </div>
      </div>
    </header>
    <!-- /Header -->
    <!-- Main -->
    <main>
      <div class="wrapper">
        <div class="cd_container">
          <!-- <div class="cds">

          </div> -->
        </div>
      </div>
    </main>
    <!-- /Main -->

    <!-- Handlebars Template -->
    <script id="entry-template" type="text/x-handlebars-template">
      <div class="cd_box">
        <div class="cover">
          <img src="{{poster}}" alt="film cover">
        </div>
        <div class="box_text">
          <h3>
            {{title}}
          </h3>
          <span>
            {{author}}
          </span>
          <br>
          <span>
            {{year}}
          </span>
        </div>
      </div>
    </script>
    <!-- Script -->
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
