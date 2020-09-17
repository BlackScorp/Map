<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $title ?></title>
        <meta charset="UTF-8"/>
        <base href="<?= BASE_URL.BASE_DIR ?>">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/all.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $styles ?>
    </head>
    <body>

        <div class="container">
        <?= $content ?>
        </div>
      
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>
        <?= $scripts ?>
    </body>
</html>