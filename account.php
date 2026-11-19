<?php 
require_once("config.php");

if(!isset($_SESSION["login_sess"])) {
    header("location:login.php"); 
    exit();
}

$email = $_SESSION["login_email"];
$findresult = mysqli_query($dbc, "SELECT * FROM users WHERE email= '$email'");

if($res = mysqli_fetch_array($findresult)) {
    $fio = $res['fio'];   
    $email = $res['email']; 
    $numberphone = $res['numberphone'];  
    $date = $res['date'];
    $role = $res['role']; // Получаем роль из базы данных
    $_SESSION['role'] = $role; // Сохраняем роль в сессии
}
?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <title>Личный кабинет</title>
</head>
<body>

<header>
    <nav>
        <a href="Index.php"><img class="sitename-logo" src="Picture/logo.png"></a>
        <a href="Index.php" class="sitename"><strong>Grand</strong>Read</a>
        <a href="Index.php" class="nav-link"><strong>Главная</strong></a>
        <a href="Catalog.php" class="nav-link"><strong>Каталог</strong></a>
        <a href="Reviews.php" class="nav-link"><strong>Отзывы</strong></a>
        <a href="Contacts.php" class="nav-link"><strong>Контакты</strong></a>
        <?php if (!empty($_SESSION['login_sess'])) { ?> 
            <a href="account.php" class="login-link"><strong>Личный кабинет</strong></a>
        <?php } else { ?>
            <a href="account.php" class="login-link"><strong>Войти</strong></a>
        <?php } ?>
    </nav> 
</header>

<h1 class="title"><br><br>Личный кабинет</h1>
<div class="account-container">
    <div class="content">
        <img src="Picture/icon29.png">
        <p class="textone">Добро пожаловать! <span style="color:#33CC00"><?php echo $fio; ?></span></p>
        <div class="account-catalog-button">
            <a href="course.php" class="account-buttontext">Курс</a>
        </div>
        <?php if (!empty($_SESSION['login_sess']) && isset($_SESSION['role']) && $_SESSION['role'] === 'Admin') { ?> 
            <div class="account-catalog-button">
                <a href="admin.php" class="account-buttontext">Админ-панель</a>
            </div>
        <?php } ?>
        <div class="account-form-input">
            <table class="table">
                <tr class="table-tr">
                    <th>ФИО</th>
                    <td><?php echo $fio; ?></td>
                </tr>
                <tr class="table-tr">
                    <th>Email</th>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr class="table-tr">
                    <th>Номер телефона</th>
                    <td><?php echo $numberphone; ?></td>
                </tr>
                <tr class="table-tr">
                    <th>Дата регистрации</th>
                    <td><?php echo $date; ?></td>
                </tr>
            </table>
        </div>

        <div class="catalog-button">
            <a href="logout.php" class="logout" type="submit" value="Send">Выйти</a>
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

</body>
<script src="index.js"></script>
</html>