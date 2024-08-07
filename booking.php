<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бронювання готелю</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="date"],
        input[type="tel"],
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Бронювання готелю</h2>
        <form action="process_booking.php" method="POST">
            <?php
            if (isset($_GET['hotel_name'])) {
                $hotel_name = $_GET['hotel_name'];
            } else {
                $hotel_name = "Назва отеля не указана";
            }
            ?>
            <label for="hotel_name">Назва готелю:</label><br>
            <input type="text" id="hotel_name" name="hotel_name"
                value="<?php echo htmlspecialchars($hotel_name); ?>"><br><br>

            <label for="first_name">Ім'я та прізвище:</label><br>
            <input type="text" id="first_name" name="first_name"><br><br>

            <label for="phone_number">Номер телефону:</label><br>
            <input type="tel" id="phone_number" name="phone_number"><br><br>

            <label for="number_of_people">Кількість людей:</label><br>
            <input type="number" id="number_of_people" name="number_of_people" min="1"><br><br>

            <label for="check_in_date">Дата заїзду:</label><br>
            <input type="date" id="check_in_date" name="check_in_date"><br><br>

            <label for="check_out_date">Дата виїзду:</label><br>
            <input type="date" id="check_out_date" name="check_out_date"><br><br>

            <input type="submit" value="Забронювати">
        </form>
    </div>

</body>

</html>