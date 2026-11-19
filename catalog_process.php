<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
<?php
$description = $_POST['description'];
$fio = $_POST['fio'];
$email = $_POST['email'];
$number = $_POST['number'];
$description = htmlspecialchars($description);
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$number = htmlspecialchars($number);
$description = urldecode($description);
$fio = urldecode($fio);
$email = urldecode($email);
$number = urldecode($number);
$description = trim($description);
$fio = trim($fio);
$email = trim($email);
$number = trim($number);
$headers = "Content-Type: text/html; charset=UTF-8";
if (mail("druidaccount@mail.ru", "Форма заявки с веб-сайта", "Название курса: $description Имя: $fio E-mail: $email Номер телефона: $number", "From: $email \r\n")) {
    echo '<script>alert("Заявка успешно создана");</script>';
} else {
    echo '<script>alert("При создании заявки произошли ошибки");</script>';
}

echo '<script>window.location.href = "catalog.php";</script>';
exit;
?>
</body>
</html>