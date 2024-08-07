<!DOCTYPE html>
<html>

<head>
  <title>StarTur - web-сервіс гарячих турів</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <script async src="https://kit.fontawesome.com/54bb8b5ea5.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0" />
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css" />
  <style>
    .image-container {
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .image-container img {
      max-width: 100%;
      height: auto;
      display: block;
      margin: 0 auto;
    }

    .text-container {
      font-size: 24px;
      padding: 20px;
    }

    .bold {
      font-weight: bold;
    }

    .map-container {
      position: relative;
      overflow: hidden;
      height: 300px;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .map-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="header">
      <div class="head">
        <div class="top-logo-img">
          <img class="burger-menu" src="./img/menu.svg" />
          <img class="logotip" src="img/startour_big.png" />
        </div>
        <div class="HeadSearch">
          <div class="search">
            <input class="SearchInput" type="text" placeholder="Search" />
            <img class="SearchIcon" src="img/ico_search.png" />
          </div>
          <ul class="Menu">
            <li class="MenuItem"><a href="./login.php">Увійти</a></li>
            <li class="MenuItem"><a href="./index.php">Головна</a></li>
            <li class="MenuItem"><a href="./oform.php">Оформленні тури</a></li>
            <li class="MenuItem"><a href="./contact.php">Контакти</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 text-container">
        <h4>
          ТОВ «STARTUR»
        </h4>
        <p>
          <span class="bold">Запоріжжя</span>
          <br> проспект Металургів, 25, поверх 3, офіс 203
          <br> <span class="bold">Дніпро</span>
          <br> вул. Івана Акінфієва 23/17, поверх 2, офіс 178
          <br> Виникли питання? Зв'яжіться з нами:
          <br> Telegram/Viber/Whatsapp (044) 465-32-22
          <br> Email: startur@gmail.com
        </p>
      </div>
      <div class="col-md-6 map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2817.273982841202!2d35.1007123155689!3d47.85434520901302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc0f6eb306b70da79!2z0YPQuy4g0J_Rg9C60LjRgtCw!5e0!3m2!1sru!2sua!4v1617611412985!5m2!1sru!2sua"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
    <footer>
      <div id="footer_first">
        <div>
          <ul>
            <li><a href="./login.php">Увійти</a></li>
            <li><a href="./index.php">Головна</a></li>
            <li><a href="./oform.php">Оформленні тури</a></li>
            <li><a href="./contact.php">Контакти</a></li>
          </ul>
        </div>
      </div>
      <div id="footer_second">
        <p>StarTur © 2024</p>
      </div>
    </footer>
  </div>
</body>

</html>