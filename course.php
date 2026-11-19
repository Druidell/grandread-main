<?php 
require_once("config.php");
$dbc = mysqli_connect("localhost", "root", "", "skorochtenie");
$result = mysqli_query($dbc, "SELECT * FROM course");
?>
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

        <div class="catalog-container" id="catalog_grid">
            <div class="catalog-lesson" id="catalog_grid">
                <div class="content">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <h1 class="title">Модуль #<?php echo $row['id']; ?> - <?php echo $row['namecourse']; ?></h1>
                    <div class="lesson-container">
                        <div class="lesson-image">
                            <iframe class="lesson-iframe" src="<?php echo $row['linkcourse']; ?>" frameborder="0" allowfullscreen height="202" width="300"  ></iframe>
                        </div>
                    </div>
                <?php } ?>
                    <div class="lesson-form-button">
                        <button href="Catalog.php" class="price-form-button-text" type="submit" value="Send">Задать вопрос</button>
                    </div>
                </div>
            </div>
        </div>


    <footer class="border-top" id="border-top">
        <div class="border-contain">
            <div class="footer-container">
                <div class="footer-text">
                    <p class="footer-name">&copy;GrandRead</p>
                    <a href="Privacy.php" class="nav-link">Политика конфиденциальности</a>
                    </div>
            </div>
            <div class="container">
                <div class="footer-text">
                    <p class="footer-name">Встретимся в соцсетях</p>
                    <div class="footer-avatar">
                        <a href="https://web.telegram.org"><img src="Picture/icon9.png"></a>
                        <a href="https://vk.com"><img src="Picture/icon10.png"></a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-text">
                    <p class="footer-name">Контакты</p>
                    <p>+7 800 555 35 35 <br />Г. Пенза, ул. Московская, д. 191</p>
                </div>
            </div>
        </div>
    </footer>
<script src="index.js"></script>
</body>
</html>