<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="/css/styles.css">

    <style> @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;1,700&display=swap'); </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>/index.php" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog">
        </a>

        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>/index.php" class="nav-link">  Home  </a></li>
                <li><a href="<?= $BASE_URL ?>/categoria.php" class="nav-link">  Categoria  </a></li>
                <li><a href="<?= $BASE_URL ?>/sobre.php" class="nav-link">  Sobre  </a></li>
                <li><a href="<?= $BASE_URL ?>/contato.php" class="nav-link">  Contato </a></li>
            </ul>
        </nav>
    </header>
    
</body>
</html>