<?php require_once("config.php");?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="index.css">
    <title>Главная</title>
</head>
<body>
    <header>
        <nav>
                    <a href="Index.php"><img class="sitename-logo" src="Picture/logo.png"></a>
                    <a href="Index.php" class="sitename"><strong>Grand</strong>Read</a>
                    <a href="Index.php" class="nav-link" id="active"><strong>Главная</strong></a>
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

    <div class="slider-container">
    <div class="content">
        <div class="slider-contain">
            <div class="text-content">
                <p class="slider-text"><strong>Grand Read</strong></p>
                <p class="slider-textdva"><strong>лучшие курсы по скорочтению</strong></p>
                <p class="slider-textthree">Скорочтение — ключ к<br>бесконечному миру знаний.<br>Откройте его и<br>ускорьте свой путь к успеху!</p>
                <div class="price-form-button">
                    <button onclick="window.location.href='catalog.php'" class="price-form-button-text" type="submit" value="Send">Записаться</button>
                </div>
            </div>
            <div class="slider">
                <img class="slide showing" src="Picture/slider1.png">
                <img class="slide" src="Picture/slider1.png">
                <img class="slide" src="Picture/slider1.png">
                <img class="slide" src="Picture/slider1.png">
                <img class="slide" src="Picture/slider1.png">
            </div>
            
        </div>
    </div>
    </div>

    <div class=starter-container>
    <div class="content">
        <h1>Как устроен курс</h1>
        <div class="starter-contain">
            <div class="starter-text">
                <p class="starter-name-first">1 Модуль</p>
                <p class="starter-name-second"><strong>Улучшение дикции!</strong><br>Научим артикуляционной гимнастике. Расскажем, как правильно дышать. Поставим чёткое произношение. Ваша речь станет уверенной и приятной для окружающих.</p>
            </div>
            <div class="starter-text">
                <p class="starter-name-first">2 Модуль</p>
                <p class="starter-name-second"><strong>Развитие внимания!</strong><br>Тренажеры для мозга. Докажем, что можно запоминать и усваивать большие тексты без перечитывания. Научим концентрироваться на чтении. Покажем, как с помощью периферического зрения охватывать взглядом всю строку или целый абзац.</p>
            </div>
            <div class="starter-text">
                <p class="starter-name-first">3 Модуль</p>
                <p class="starter-name-second"><strong>Увеличение скорости чтения!</strong><br>Научим читать в 2 раза быстрее и получать удовольствие от чтения.  На курсе вы прочитаете книги, которые пылятся на полке, и увидите первые результаты нового навыка.</p>
            </div>
        </div>
    </div>
    </div>

    <div class="text-container">
    <div class="content">
        <div class="texter-contain">
            <div class="texter-text">
            <img class="texter-img" src="Picture/icon14.png">
            </div>
            <div class="texter-text">
            <img class="quotes-img" src="Picture/icon16.png">
            <p class="textone"><strong><em>онлайн-курс</em></strong></p>
            <p class="texttwo"><strong style="color:#FF8C00">Быстрое чтение</strong><strong><br>и усвоение информации</strong></h1>
            <p class="textthree"><strong>Вы существенно увеличите скорость чтения, повысите качество работы с информацией и закрепите умение запоминать изучаемый материал.</strong></p>
            <a class="buttonone" href="Catalog.php"><span style="color:#FFFFFF">Старт потока <strong style="color:#FF8C00">1 сентября</strong>, купите заранее</span></a>
            <div class="buttontwo-wrap">
                <a href="Catalog.php" class="buttontwo"><span class="button__icon"></span> <span class="buttontext">Записаться на курс</span></a>
            </div>
            </div>
        </div>
    </div>
   </div>

    <div class="section-container">
    <div class="content">
        <div class="section-contain">
            <h1>Курс вам подходит, если</h1>
                <div class="section-list">
                    <div class="section-item" id="item-first">
                        <img class="iconone" id="icon-first" src="Picture/icon1.png"><p>Вы старше 13 лет и вам нужно много читать и надолго<br>запоминать информацию по учебе.</p>
                    </div>    
                    <div class="section-item" id="item-second">
                        <img class="iconone" id="icon-second" src="Picture/icon2.png"><p>В работе вы имеете дело с большим количеством текстовой информации,<br>которую необходимо осваивать.</p>
                        </div>
                    <div class="section-item" id="item-third">
                        <img class="iconone" id="icon-third" src="Picture/icon3.png"><p>Вы стремитесь к постоянному развитию и много читаете,<br>чтобы улучшать свои профессиональные и личные навыки.</p>
                        </div>
                    <div class="section-item" id="item-fourth">
                        <img class="iconone" id="icon-fourth" src="Picture/icon4.png"><p>Вы часто забываете, о чем была недавно прочитанная книга,<br>не умеете быстро искать нужную информацию и структурировать ее.</p>
                        </div>
                </div>
                <div class="price-form-button">
                    <button onclick="window.location.href='catalog.php'" class="price-form-button-text" type="submit" value="Send">Записаться</button>
                </div>
        </div>
    </div>
    </div>

    <div class="middle-container">
    <h1>Наши преимущества</h1>
    <div class="content">
        <div class="middle-contain">
            <div class="origimg">
                <div class="middle-text">
                    <p class="middle-name">Первое занятие<br>бесплатное</p>
                </div>
                <div class="middle-text">
                    <div class="middle-picture" id="middle-picture-first">Что такое скорочтение. Цели, задачи и результаты программы. История возникновения</div>
                </div>
            </div>
            <div class="origimg">
                <div class="middle-text">
                    <p class="middle-name">Оригинальная техника обучения скорочтению</p>
                </div>
                <div class="middle-text">
                <div class="middle-picture" id="middle-picture-second">Виды чтения. Различия, функции и применение. Измерение скорости чтения</div>
                </div>
            </div>
            <div class="origimg">
                <div class="middle-text">
                    <p class="middle-name">Профессиональные преподаватели</p>
                </div>
                <div class="middle-text">
                <div class="middle-picture" id="middle-picture-third">Методика построения занятий. Дополнительные задания на уроках по скорочтению</div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="sertif-container">
    <div class="content">
        <div class="sertif-contain">
        <div class="sertif-text">
        <img class="quotes-img" src="Picture/icon16.png">
        <p><strong style="color:#000000">Подтверждение ваших знаний</strong></p>
        <p class="sertif-texttwo">После успешного завершения курса, вы получаете официальный документ - Персональный сертификат, подтверждающий ваше участие в обучении и успешное освоение материала. Этот сертификат может быть использован для указания в резюме, подтверждения ваших знаний и навыков перед работодателем или просто как дополнительное достижение в вашем профессиональном росте. Получение Персонального сертификата может стать дополнительным стимулом для вашего обучения и поможет демонстрировать ваши квалификации и компетенции в выбранной области.</p>
        <div class="sertif-form-button">
            <button onclick="window.location.href='catalog.php'" class="price-form-button-text" type="submit" value="Send">Записаться</button>
        </div>
        </div>
        <div>
        <img class="sertif-img" src="Picture/icon8.png">
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
