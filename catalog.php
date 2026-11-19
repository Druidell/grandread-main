<?php require_once("config.php");?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Каталог</title>
</head>
<body>
    <header>
        <nav>
                    <a href="Index.php"><img class="sitename-logo" src="Picture/logo.png"></a>
                    <a href="Index.php" class="sitename"><strong>Grand</strong>Read</a>
                    <a href="Index.php" class="nav-link"><strong>Главная</strong></a>
                    <a href="Catalog.php" class="nav-link" id="active"><strong>Каталог</strong></a>
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

    <div class="catalog-container">
    <div class="content">
        <div class="catalog-contain">
            <div class="catalog-text">
                <p class="catalog-name">Курс - базовый</p>
                <p class="catalog-desc">Действие тарифа - 1 мес.<br>Упражнения, тренажеры, уроки.<br>Рабочая тетрадь.<br>Учиться с телефона, компьютера.</p>
                <p class="catalog-name">Цена: 3000 руб.</p>
                <div class="catalog-button">
                    <a href="#price-container" class="buttontwo"><span class="button__icon"></span> <span class="buttontext">Хочу на курс!</span></a>
                </div>
            </div>
            <div class="catalog-text">
                <div class="catalog-avatar">
                    <img src="Picture/icon18.png" alt="Catalog">
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <div class="catalog-container">
    <div class="content">
        <div class="catalog-contain">
            <div class="catalog-text">
                <p class="catalog-name">Курс - Средний</p>
                <p class="catalog-desc">Действие тарифа - 3 мес.<br>Упражнения, тренажеры, уроки. <br>Рабочая тетрадь. <br>Учиться с телефона, компьютера.</p>
                <p class="catalog-name">Цена: 4000 руб.</p>
                <div class="catalog-button">
                    <a href="#price-container" class="buttontwo"><span class="button__icon"></span> <span class="buttontext">Хочу на курс!</span></a>
                </div>
            </div>
            <div class="catalog-text">
                <div class="catalog-avatar">
                    <img src="Picture/icon15.png" alt="Catalog">
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="catalog-container">
    <div class="content">
        <div class="catalog-contain">
            <div class="catalog-text">
                <p class="catalog-name">Курс - максимум</p>
                <p class="catalog-desc">Действие тарифа - 6 мес.<br>Упражнения, тренажеры, уроки.<br>Рабочая тетрадь.<br>Учиться с телефона, компьютера.<br>Возможность созвониться и задать вопрос.</p>
                <p class="catalog-name">Цена: 5000 руб.</p>
                <div class="catalog-button">
                    <a href="#price-container" class="buttontwo"><span class="button__icon"></span> <span class="buttontext">Хочу на курс!</span></a>
                </div>
            </div>
            <div class="catalog-text">
                <div class="catalog-avatar">
                    <img src="Picture/icon17.png" alt="Catalog">
                </div>
            </div>
        </div>
    </div>
    </div>

   <div class=price-container id="price-container">
   <div class="content">
               <div class="price-form">
                   <h2 class="price-form-title">Введите данные для оплаты</h2>
                   <h2 class="starter-name-second">Выбери курс (c курсами можно ознакомиться в каталоге)</h2>
                   <form action="catalog_process.php" method="post" class="price-row">
                       <div class="row">
                           <div class="row-input">
                            <select type="text" class="price-form-input" name="description" placeholder="Название курса" required="">
                            <option value="apple">Курс - базовый</option>
                            <option value="banana">Курс - средний</option>
                            <option value="orange">Курс - максимум</option>
                            </select>
                            </div>
                           <div class="row-input">
                               <input type="text" class="price-form-input" name="fio" placeholder="ФИО" required>
                           </div>
                           <div class="row-input">
                               <input type="text" class="price-form-input" name="email" placeholder="Электронная почта" required>
                           </div>
                           <div class="row-input">
                               <input type="number" class="price-form-input" name="number" placeholder="Номер телефона" required="">
                           </div>
                       </div>
                       <div class="price-form-button">
                   <button class="catalog-form-button-text" type="submit" value="Send">Отправить заявку</button>
                       </div>
                   </form>
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
