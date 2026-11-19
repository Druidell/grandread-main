<?php
$conn = new mysqli("localhost", "root", "", "skorochtenie");
if ($conn->connect_error) die("Ошибка: " . $conn->connect_error);

if (!empty($_POST['id'])) {
    $id = (int)$_POST['id'];
    echo $conn->query("DELETE FROM users WHERE id = $id") ? "Запись удалена" : "Ошибка: " . $conn->error;
}
$conn->close();
?>
