<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Bebuntu / <?php echo $title ?></title>
    <?php load_css('reset') ?>
    <?php load_css('style') ?>
  </head>
  <body>
    <div id="content">
          <div class="message">
            <?php global $message; echo $message ?>
          </div>
      <?php include $runtime['view'] ?>
    </div>
  </body>
</html>