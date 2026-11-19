<?php require_once("config.php");?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Контакты</title>
</head>
<body>
    <header>
        <nav>
                    <a href="Index.php"><img class="sitename-logo" src="Picture/logo.png"></a>
                    <a href="Index.php" class="sitename"><strong>Grand</strong>Read</a>
                    <a href="Index.php" class="nav-link"><strong>Главная</strong></a>
                    <a href="Catalog.php" class="nav-link"><strong>Каталог</strong></a>
                    <a href="Reviews.php" class="nav-link"><strong>Отзывы</strong></a>
                    <a href="Contacts.php" class="nav-link" id="active"><strong>Контакты</strong></a>
                    <?php
                    if ($_SESSION['login_sess']!='') { ?> 
                    <a href="account.php" class="login-link"><strong>Личный кабинет</strong></a>
                    <?php } else { ?>
                      <a href="account.php" class="login-link"><strong>Войти</strong></a>
                    <?php } ?>
        </nav> 
    </header>
    
    <div class="content">
    <div class="contacts-container">
        <div class="office-contain">
            <p class="social-text"><b>Офис</b></p>
            <p class="social-texttwo"><b>Г. Пенза ул. Московская 191<br>+7 800 555 35 35</b></p>
        </div>
        <div class="social-contain">
            <p class="social-text"><b>Встретимся в социальных сетях</b></p>
            <a href="https://web.telegram.org"><img src="Picture/icon9.png"></a>
            <a href="https://vk.com"><img src="Picture/icon10.png"></a>
        </div>
    </div>

    <div class="content">
    <div class="question-container">
        <h1>Часто задаваемые вопросы</h1>
        <details class="question-details">
            <summary class="question-summary">Как долго будут доступны уроки?</summary>
            <p>Зависит от курса</p>
        </details>
        <details class="question-details">
            <summary class="question-summary">В чем мне помогут онлайн-курсы?</summary>
            <p>В скорочтении</p>
        </details>
        <details class="question-details">
            <summary class="question-summary">На какой возраст рассчитан ваш курс?</summary>
            <p>Почти на любой возраст</p>
        </details>
        <details class="question-details">
            <summary class="question-summary">Смогу ли я читать художественную литературу скорочтением?</summary>
            <p>Сможете</p>
        </details>
        <details class="question-details">
            <summary class="question-summary">Что мне понадобятся для занятий?</summary>
            <p>Рабочая тетрадь, компьютер</p>
        </details>
    </div>
    </div>

    <div class="content">
    <div class="contacts-container">
        <div class="social-contain">
            <p class="textone"><b>Остались вопросы?</b></p>
            <p class="textone"><b>Напишите нам в социальные сети</b></p>
            <a href="https://web.telegram.org"><img src="Picture/icon9.png"></a>
            <a href="https://vk.com"><img src="Picture/icon10.png"></a>
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
