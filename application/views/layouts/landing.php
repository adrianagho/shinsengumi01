<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to RealE</title>

    <!-- CSS Includes -->
    <link rel="stylesheet" href='<?= "$foundation_css"; ?>'/>
    <link rel="stylesheet" href='<?= "$fa_css"; ?>' />
    <link rel="stylesheet" type="text/css" href='<?= "$landing_css"; ?>' />
    <!-- End of CSS Includes -->
  </head>
  <body>
    <?= $yield; ?>

    <!-- JS Includes -->
    <script src="<?= "$jquery"; ?>"></script> 
    <script src="<?= "$modernizr_js"; ?>"></script>
    <script src='<?= "$foundation_js"; ?>'></script>
    <script src='<?= "$app_js"; ?>'></script>
    <!-- End of JS Includes -->
  </body>
</html>
