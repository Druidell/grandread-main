<?php require_once("config.php");
if(!isset($_SESSION["login_sess"])) 
{
    header("location:login.php"); 
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <title>Админ-панель</title>
</head>
<body>
<?php 
  if(isset($_POST['signup'])){
    extract($_POST);
  if(strlen($email)>50){  
            $error[] = 'Email: максимальная длина 50 символов.';
        }
  if(strlen($password)<5){  
            $error[] = 'Длина пароля составляет 6 символов.';
        }
  if(strlen($password)>20){ 
            $error[] = 'Пароль: максимальная длина 20 символов.';
        }
  $sql="select * from users where (email='$email');";
  $res=mysqli_query($dbc,$sql);
  if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    if($email==$row['email'])
    {
            $error[] ='Email уже существует.';
          } 
    }
    if(!isset($error)){ 
            $date=date('Y-m-d');
            $options = array("cost"=>4);
            $password = password_hash($password,PASSWORD_BCRYPT,$options);
            $result = mysqli_query($dbc,"INSERT into users(role,fio,email,numberphone,password,date) values('$role','$fio','$email','$numberphone','$password','$date')");
    if($result)
    {
    $done=2; 
    }
    else{
            $error[] ='Что-то пошло не так.';
          }
    } 
 } 
?>

<?php 
  if(isset($error)){ 
  foreach($error as $error){ 
  echo '<p>&#x26A0;'.$error.' </p>'; 
}
}
?>

<?php 
  if(isset($_POST['addcourse'])){
    extract($_POST);
  if(strlen($email)>50){  
        $error[] = 'Email: максимальная длина 50 символов.';
    }
  $sql="select * from course where (linkvideo='$linkvideo');";
  $res=mysqli_query($dbc,$sql);
  if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    if($linkvideo==$row['linkvideo'])
    {
            $error[] ='Видео урок уже существует.';
          } 
    }
    if(!isset($error)){ 
            $options = array("cost"=>4);
            $result = mysqli_query($dbc,"INSERT into course(numbercourse,namecourse,linkcourse) values('$numbercourse','$namecourse','$linkcourse')");
    if($result)
    {
    $done=2; 
    }
    else{
            $error[] ='Что-то пошло не так.';
          }
    } 
 } 
?>

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
    

    <h1 class="title"><br><br>Регистрация пользователя</h1>
    <div class="content">
        <div class="price-form-login">  
            <form action="" method="post">
                <div class="price-form-text">
                    <p class="starter-name-second"><strong>Роль</strong></p>
                </div>
                <div class="row-input-login">
                    <input type="text" class="price-form-input-login" name="role" value="<?php if(isset($error)){ echo $_POST['role'];}?>" placeholder="Введите роль" required="">
                </div>
                <div class="price-form-text">
                    <p class="starter-name-second"><strong>ФИО</strong></p>
                </div>
                <div class="row-input-login">
                    <input type="text" class="price-form-input-login" name="fio" value="<?php if(isset($error)){ echo $_POST['fio'];}?>" placeholder="Введите ФИО" required="">
                </div>
                <div class="price-form-text">
                    <p class="starter-name-second"><strong>Email</strong></p>
                </div>
                <div class="row-input-login">
                    <input type="email" class="price-form-input-login" name="email" value="<?php if(isset($error)){ echo $_POST['email'];}?>" placeholder="Введите email" required="">
                </div>
                <div class="price-form-text">
                    <p class="starter-name-second"><strong>Номер телефона</strong></p>
                </div>
                <div class="row-input-login">
                    <input type="number" class="price-form-input-login" name="numberphone" value="<?php if(isset($error)){ echo $_POST['numberphone'];}?>" placeholder="Введите номер телефона" required="">
                </div>
                <div class="price-form-text">
                <p class="starter-name-second"><strong>Пароль</strong></p>
                </div>
                <div class="row-input-login">
                    <input type="password" class="price-form-input-login" name="password" value="<?php if(isset($error)){ echo $_POST['password'];}?>" placeholder="Введите пароль" required="">
                </div>
                <div class="price-form-button">
                <button type="submit" class="price-form-button-text" name="signup">Зарегистрировать</button>
                </div>
            </form>
        </div>
	    </div>
        

    <h1 class="title">Добавление урока</h1>
    <div class="content">
        <div class="price-form-login">  
            <form action="" method="post">
                <div class="price-form-text">
                    <p class="starter-name-second"><strong>Номер модуля</strong></p>
                </div>
                <div class="row-input-login">
                    <input type="text" class="price-form-input-login" name="numbercourse" value="<?php if(isset($error)){ echo $_POST['numbercourse'];}?>" placeholder="Введите номер модуля" required="">
                </div>
                <div class="price-form-text">
                <p class="starter-name-second"><strong>Название урока</strong></p>
                </div>
                <div class="row-input-login">
                    <input type="text" class="price-form-input-login" name="namecourse" value="<?php if(isset($error)){ echo $_POST['namecourse'];}?>" placeholder="Введите название урока" required="">
                </div>
                <div class="price-form-text">
                <p class="starter-name-second"><strong>Ссылка на ресурс</strong></p>
                </div>
                <div class="row-input-login">
                    <input type="text" class="price-form-input-login" name="linkcourse" value="<?php if(isset($error)){ echo $_POST['linkcourse'];}?>" placeholder="Введите ссылку на ресурс" required="">
                </div>
                <div class="price-form-button">
                <button type="submit" class="price-form-button-text" name="addcourse">Добавить</button>
                </div>
            </form>
        </div>
	    </div>

    <div class="reviews-container">
    <div class="content">
        <h1 class="title">Список пользователей</h1>
        <div class="reviews-contain">
            <div class="reviews">
                <div class="reviews-text">
                <?php
                                // Подключение к базе данных
                                $conn = new mysqli("localhost", "root", "", "skorochtenie");

                                // Проверка соединения
                                if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                                }

                                // SQL-запрос для получения данных (какие переменные забираем и из какой БД, просто перечисляйте через запятую)
                                $sql = "SELECT id, role, fio, email, numberphone, password, date FROM skorochtenie.users";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // Вывод данных в таблицу (пишите названия столбцов, которые будут сверху)
                                echo '<table>';
                                echo ' <th>ID</th>
                                        <th>Роль</th>
                                        <th>ФИО</th>
                                        <th>Email</th>
                                        <th>Номер телефона</th>
                                        <th>Пароль</th>
                                        <th>Дата регистрации</th>
                                        <th>Взаимодействие</th>';
                                echo '<tbody>';

                                // Цикл, который выводит данные. В конце пример кнопки удаления данных из БД
                                while ($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row['id'] . '</td>';
                                echo '<td>' . $row['role'] . '</td>';
                                echo '<td>' . $row['fio'] . '</td>';
                                echo '<td>' . $row['email'] . '</td>';
                                echo '<td>' . $row['numberphone'] . '</td>';
                                echo '<td>' . $row['password'] . '</td>';
                                echo '<td>' . $row['date'] . '</td>';
                                echo '<td>' . "<form action='../help/delete.php' method='post'>
                                <input type='hidden' name='id' value='" . $row["id"] . "' />
                                <input type='submit' value='Удалить'>
                                </form>" . '</td>';
                                echo '</tr>';
                                }

                                echo '</tbody></table>';
                                } else {
                                echo "0 результатов";
                                }

                                $conn->close();
                                ?>
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
</body>
<script src="index.js"></script>
</html>