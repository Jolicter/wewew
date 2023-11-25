<html  lang="ru">
<head>

  <meta charset="utf-8">
  <meta name="vievport" content="width=device-width, initial-scale=1.0">
  <meta  http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>Заголовок</title>
</head>
<body class=" h-100 text-center text-bg-dark">
<div class="cover-container d-flex w-100 h-10 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <a href="index.php" style="color: white">
            <h3 class="float-md-start mb-0">Выбери свою профессию</h3>
        </a>
        <div>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0" href="wuz.php">ВУЗы</a>
        </div>
          <div>
            <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0" href="all.php">Все специальности</a>
          </div>
        </nav>
      </div>
    </header>
</div>


<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answers = $_POST['answers'];
    $score = 0;

    // Подсчет баллов на основе ответов
    foreach ($answers as $answer) {
        $score += intval($answer);
    }

    // Определение результата на основе б ллов
    $result = '';
    if ($score < 0) {
        $result ='<a href="test_page.php" button class="my-button2" style="width: 350px; height: 100px;color: white;border-radius: 5px;margin-top: 10px; margin-bottom: 5px;background: #003CC5;box-shadow: none;position: relative;top: 5px;">Рекомендовано гумунитарные спец</button></a>';
    } elseif ($score > 0) {
        $result = '<a href="tehno.php"button class="my-button2" style="width: 350px; height: 100px;color: white;border-radius: 5px;margin-top: 10px; margin-bottom: 5px;background: #003CC5;box-shadow: none;position: relative;left: 5px;">Рекомендовано технические специальности</button></a>';
    } else {
        $result = '<a href="#"<button class="my-button2" style="width: 350px; height: 100px;color: white;border-radius: 5px;margin-top: 10px; margin-bottom: 5px;background: #003CC5;box-shadow: none;position: relative;top: 5px;">недостаточно данных</button></a>';
    }

    echo "Результат: $result";
} else {
    ?>
    <form method="POST" action="">
        <p class = "strr">Тебе нравится общаться с людьми?</p>
        <input type="radio" name="answers[1]" value="-2"> да<br>
        <input type="radio" name="answers[1]" value="0"> незнаю<br>
        <input type="radio" name="answers[1]" value="2"> нет<br>
        <br>
        <p>Как ты относишься к однообразной монотонной работе?</p>
        <input type="radio" name="answers[2]" value="2"> хорошо<br>
        <input type="radio" name="answers[2]" value="0"> незнаю<br>
        <input type="radio" name="answers[2]" value="-2"> плохо<br>
        <br>
        <p>Ты доверяешь своей интуиции?</p>
        <input type="radio" name="answers[3]" value="-2"> да<br>
        <input type="radio" name="answers[3]" value="0"> незнаю<br>
        <input type="radio" name="answers[3]" value="2"> нет<br>
        <br>
        <p>Легко ли ты разбираешься в схемах и чертежах?</p>
        <input type="radio" name="answers[5]" value="2"> да<br>
        <input type="radio" name="answers[5]" value="0"> незнаю<br>
        <input type="radio" name="answers[5]" value="-2"> нет<br>
        <br>
        <p>У тебя есть склонность к импульсивным покупкам?</p>
        <input type="radio" name="answers[4]" value="-2"> да<br>
        <input type="radio" name="answers[4]" value="0"> незнаю<br>
        <input type="radio" name="answers[4]" value="2"> нет<br>
        <br>
        <p>«Логика может привести Вас от пункта А к пункту Б,
          а воображение — куда угодно». Согласишься с Эйнштейном?</p>
        <input type="radio" name="answers[6]" value="-2"> да<br>
        <input type="radio" name="answers[6]" value="0"> незнаю<br>
        <input type="radio" name="answers[6]" value="2"> нет<br>
        <br>
        <p>Как ты относишься к распорядку дня</p>
        <input type="radio" name="answers[7]" value="2"> нормально<br>
        <input type="radio" name="answers[7]" value="0"> незнаю<br>
        <input type="radio" name="answers[7]" value="-2"> плохо<br>
        <br>
        <p>Главное не победа, а участие!</p>
        <input type="radio" name="answers[8]" value="-2"> да<br>
        <input type="radio" name="answers[8]" value="0"> незнаю<br>
        <input type="radio" name="answers[8]" value="2"> нет<br>
        <br>
        <p>Что вы предпочтете? Книгу или компьютер?.</p>
        <input type="radio" name="answers[9]" value="2"> компьютер<br>
        <input type="radio" name="answers[9]" value="0"> незнаю<br>
        <input type="radio" name="answers[9]" value="-2"> книгу<br>
        <br>
        <p>Вы  считаете себя умным человеком?</p>
        <input type="radio" name="answers[10]" value="2"> да<br>
        <input type="radio" name="answers[10]" value="0"> незнаю<br>
        <input type="radio" name="answers[10]" value="-2"> нет<br>
        <br>
      </p>



        <style>
          .my-button {
      width: 250px;
      height: 50px;
      border-radius: 5px;
      margin-top: 10px; margin-bottom: 5px;
    }
      .my-button {
          border: none;
          border-radius: 10px;
          text-decoration: none;
          color: white;
          background: #0B63F6;
          box-shadow: 0 5px 0 #003CC5;
          margin-bottom: 40px;

      }

      .my-button:hover {
          background: #003CC5;
          box-shadow: none;
          position: relative;
          top: 5px;
          margin-top: 10px; margin-bottom: 10px;
      }

      
        </style>
        <div style="text-align: center;">
    <input type="submit" value="Получить результат" class="my-button">
</div>
    </form>
    <?php
}
?>
