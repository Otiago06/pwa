<?php $useragent=$_SERVER['HTTP_USER_AGENT']; ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#009578">
        <title>PWA</title>
        <link rel="stylesheet" href="src/master.css">
        <link rel="manifest" href="manifest.json">
        <link rel="apple-touch-icon" href="images/logo192.png">
    </head>
    <body>
        <p>Olá!</p>
        <p style="text-align: justify;">
            <?php echo $useragent; ?>
        </p>
        <p><?php echo date('d/m/Y H:i') ?></p>
        <script src="src/index.js"></script>
    </body>
</html>
