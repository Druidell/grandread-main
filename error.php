<?php require_once("config.php");?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Уроки</title>
</head>
<body>
    <header>
        <nav>
                    <a href="Index.php"><img class="sitename-logo" src="Picture/logo.png"></a>
                    <a href="Index.php" class="sitename"><strong>Grand</strong>Read</a>
                    <a href="Index.php" class="nav-link"><strong>Главная</strong></a>
                    <a href="Catalog.php" class="nav-link" ><strong>Каталог</strong></a>
                    <a href="Reviews.php" class="nav-link" ><strong>Отзывы</strong></a>
                    <a href="Contacts.php" class="nav-link" ><strong>Контакты</strong></a>
                    <?php
                    if ($_SESSION['login_sess']!='') { ?> 
                    <a href="account.php" class="login-link"><strong>Личный кабинет</strong></a>
                    <?php } else { ?>
                      <a href="account.php" class="login-link"><strong>Войти</strong></a>
                    <?php } ?>
        </nav> 
    </header>

    <div class="sertif-container">
    <div class="content">
        <div class="error-contain">
        <img class="error-img" src="Picture/icon22.png">
        </div>
    </div>
    </div>
<script src="index.js"></script>
</body>
</html>