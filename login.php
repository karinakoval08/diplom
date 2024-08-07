<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarTur - web-сервіс гарячих турів</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .login-container {
            width: 300px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: beige;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: #ff0000;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Вхід на сайт</h2>
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="username">Ім'я користувача:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit">Увійти</button>
            </div>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "kursova";

            session_start();
            //echo $_SESSION['user'];
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Помилка підключення до бази даних: " . $conn->connect_error);
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    $_SESSION['user'] = $username;
                    header('Location: index.php');

                } else {
                    echo "Невірне ім'я користувача або пароль";
                }
            }
            $conn->close();
            ?>
        </form>
    </div>

</body>

</html>