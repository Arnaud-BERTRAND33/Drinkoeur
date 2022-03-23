<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include('inc/title.php') ?></title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
    <header class="header">
        <nav class="menu">
            <a href="index.php"><h1>Drinkoeur</h1></a>
            <?php include ('inc/menu.php'); ?>
        </nav>
    </header>

    <div class="main">
        <?php include('inc/routes.php'); ?>
    </div>

    <footer class="footer">
        <ul>
            <li><a href="#">Conditions générales</a></li>
            <li> - </li>
            <li><a href="#">Règles communautés</a></li>
            <li> - </li>
            <li><a href="#">Politique de confidentialité</a></li>
            <li> - </li>
            <li><a href="index.php?page=contact">Contact</a></li>
            <li> - </li>
            <li><a href="#">Charte cookies</a></li>
            <li> - </li>
            <li><a href="#">Services</a></li>
        </ul>
    </footer>
    </body>
</html>


