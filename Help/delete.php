<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skorochtenie";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Проверяем, был ли передан ID для удаления
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    
    // SQL-запрос на удаление
    $sql = "DELETE FROM users WHERE id = ?";
    
    // Подготовка запроса
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    // Выполнение запроса
    if ($stmt->execute()) {
        echo "Запись успешно удалена";
    } else {
        echo "Ошибка удаления: " . $conn->error;
    }
    
    // Закрытие соединения
    $stmt->close();
}

$conn->close();
?>
