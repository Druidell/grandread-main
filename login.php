<?php require_once("config.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="index.css">
	<title>Авторизация</title>
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
                    <?php
                    if ($_SESSION['login_sess']!='') { ?> 
                    <a href="account.php" class="login-link"><strong>Личный кабинет</strong></a>
                    <?php } else { ?>
                      <a href="account.php" class="login-link"><strong>Войти</strong></a>
                    <?php } ?>
        </nav> 
    </header>

    <div class="content">
        <div class="price-form-login">  
            
            <h1 class="title"><br><br>Авторизация</h1>
            <form action="login_process.php" method="POST">
<?php 
if(isset($_GET['loginerror'])) {
	$loginerror=$_GET['loginerror'];
}
 if(!empty($loginerror)){  echo '<p>Неверные учетные данные для входа в систему, пожалуйста, повторите Попытку.</p>'; } 
?>
                <div class="price-form-text">
                    <p class="starter-name-second"><strong>Email</strong></p>
                </div>
                <div class="row-input-login">
                    <input type="text" class="price-form-input-login" name="login_var" value="<?php if(!empty($loginerror)){ echo  $loginerror; } ?>" placeholder="Введите email"  required="">
                </div>
                <div class="price-form-text">
                <p class="starter-name-second"><strong>Пароль</strong></p>
                </div>
                <div class="row-input-login">
                    <input type="password" class="price-form-input-login" name="password" placeholder="Введите пароль" required="">
                </div>
                <div class="row-input-login">
                    <p class="row-input-login">Если нет аккаунта? - <a href="Contacts.php" class="row-input-login">напишите сюда</a> </p>
                </div>
                <div class="price-form-button">
                <button type="submit" class="price-form-button-text" name="sublogin">Авторизоваться</button>
                </div>
            </form>
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