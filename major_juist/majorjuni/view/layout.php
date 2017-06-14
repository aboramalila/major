<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Storycruise</title>
    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

    <div class="container">
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>
      </section>
      <?php echo $content; ?>
    </div>
  </body>
</html>
