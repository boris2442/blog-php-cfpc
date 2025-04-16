
<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Italianno&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Parkinsans:wght@300..800&family=Playwrite+HU:wght@100..400&family=Playwrite+PE+Guides&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./layouts/style.css">
  <link rel="stylesheet" href="./layouts/paginate.css">
  <title>Cours blog PHP 2024 - <?= $pageTitle ?> </title>
</head>

<body>
  <header>
    <div class="logo">
      <h2>
        <a href="http://localhost/php-2025/cours-php/blog-php/">Blog-2025
        </a>
      </h2>
    </div>

    <nav>
      <ul>
        <?php if (isset($_SESSION['auth'])) : ?>
        <li><a id="gcu" href="logout.php">Se deconnecter</a></li>
        <?php else : ?>
        <li><a id='lien-header' href="register.php">S'inscrire</a></li>
        <li><a href="login.php">Se connecter</a></li>
        <?php endif; ?>
      </ul>
    </nav>

  </header>

  <div class="main">

    <?= $pageContent ?>
  </div>
</body>

</html>