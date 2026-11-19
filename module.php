<?php require_once("config.php");?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Главная</title>
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

    <div class="module-container">
    <h1>Наши преимущества</h1>
    <p class="catalog-desc">Рекомендуется начать с модуля “Модуль 1”, после изучить “Модуль 2” и<br>“Модуль 3”, чтобы приобрести начальные знания в данной области и<br>обеспечить комфортное усвоение материала.</p>
    <div class="content">
        <div class="module-contain">
            <div class="module-origimg">
                <div class="module-avatar">
                    <img src="Picture/icon21.png">
                </div>
                <div class="module-text">
                    <a class="module-name">Модуль 1</a>
                </div>
                <div class="module-text">
                    <div class="starter-name-second"><strong>Улучшение дикции!</strong><br>Научим артикуляционной гимнастике. Расскажем, как правильно дышать. Поставим чёткое произношение.</div>
                </div>
                <div class="module-form-button">
                <a href="Contacts.php" class="module-form-button-text">Модуль - 1</a>
                </div>
            </div>
            <div class="module-origimg">
                <div class="module-avatar">
                    <img src="Picture/icon21.png">
                </div>
                <div class="module-text">
                    <a class="module-name">Модуль 2</a>
                </div>
                <div class="module-text">
                    <div class="starter-name-second"><strong>Развитие внимания!</strong><br>Тренажеры для мозга. Докажем, что можно запоминать и усваивать большие тексты без перечитывания.</div>
                </div>
                <div class="module-form-button">
                <a href="Contacts.php" class="module-form-button-text">Модуль - 2</a>
                </div>
            </div>
            <div class="module-origimg">
                <div class="module-avatar">
                    <img src="Picture/icon21.png">
                </div>
                <div class="module-text">
                    <a class="module-name">Модуль 3</a>
                </div>
                <div class="module-text">
                    <div class="starter-name-second"><strong>Увеличение скорости чтения!</strong><br>Научим читать в 2 разабыстрее и получать удовольствие от чтения.<br><br></div>
                </div>
                <div class="module-form-button">
                <a href="Contacts.php" class="module-form-button-text">Модуль - 3</a>
                </div>
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
