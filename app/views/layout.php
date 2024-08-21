<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Raiz</title>
    <link rel="stylesheet" href="<?= Config::getUrlBase() ?>css/style.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="<?= Config::getUrlBase() ?>img/logo.png" >
        </div>
        
        <?= $content ?>
    </div>
</body>
</html>
