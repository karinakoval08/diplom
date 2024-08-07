<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "kursova";

// Подключение к базе данных
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение максимального номера бронирования
$sql_max_booking_number = "SELECT MAX(`Номер бронювання`) AS max_booking_number FROM `Оформленні тури`";
$result_max_booking_number = $conn->query($sql_max_booking_number);
if ($result_max_booking_number === FALSE) {
    echo "Ошибка получения максимального номера бронирования: " . $conn->error;
    exit();
}

$max_booking_number_row = $result_max_booking_number->fetch_assoc();
$max_booking_number = $max_booking_number_row['max_booking_number'];
$new_booking_number = $max_booking_number + 1;

// Получение данных из формы
$hotel_name = $_POST['hotel_name'];
$full_name = $_POST['first_name'];
$phone_number = $_POST['phone_number'];
$number_of_people = (int) $_POST['number_of_people']; // Преобразование в целое число
$check_in_date = $_POST['check_in_date'];
$check_out_date = $_POST['check_out_date'];

// Расчет количества дней
$date1 = new DateTime($check_in_date);
$date2 = new DateTime($check_out_date);
$diff = $date1->diff($date2);
$number_of_days = $diff->days;

// Получение цены за день и фото отеля
$sql_price = "SELECT `Ціна (за 1 добу)`, `Фото готелю` FROM `Готелі` WHERE `Назва готелю` = '$hotel_name'";
$result_price = $conn->query($sql_price);
if ($result_price->num_rows > 0) {
    $row_price = $result_price->fetch_assoc();
    $price_per_day = $row_price['Ціна (за 1 добу)'];
    $hotel_photo = $row_price['Фото готелю'];
} else {
    $price_per_day = 100; // Значение по умолчанию
    $hotel_photo = ''; // Значение по умолчанию
}

// Расчет общей суммы
$total_amount = $number_of_days * $price_per_day * $number_of_people;

// Отладочный вывод значений
echo "Количество людей: " . $number_of_people . "<br>";
echo "Количество дней: " . $number_of_days . "<br>";
echo "Цена за день: " . $price_per_day . "<br>";
echo "Сумма к оплате: " . $total_amount . "<br>";

// Вставка данных в таблицу `Оформленні тури`
$sql = "INSERT INTO `Оформленні тури` (`Номер бронювання`, `Назва готелю`, `Ім'я та прізвище`, `Номер телефону`, `Кількість людей`, `Кількість днів`, `Ціна (за 1 добу)`, `Сума до сплати`, `Фото готелю`)
        VALUES ('$new_booking_number', '$hotel_name', '$full_name', '$phone_number', '$number_of_people', '$number_of_days', '$price_per_day', '$total_amount', '$hotel_photo')";

if ($conn->query($sql) === TRUE) {
    echo "Запись успешно добавлена!";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

// Закрытие подключения
$conn->close();

// Перенаправление на страницу `oform.php`
header("Location: oform.php");
exit();
?>