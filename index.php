<?php require "files/config.php"; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1100px, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/css.css">
  <title>Каталог футболистов 2.0</title>
</head>
<body>
  <div class="container" style="width: 60%;">
    <h1>Каталог футболистов 2.0</h1><br>
    <div class="d-flex gap-2 justify-content-center">
      <?php require "files/add.php"; ?>
    </div><br>
    <form action="/catalog.php" method="post" class="catalog">
      <button  type="submit" name="find" class="btn btn-lg btn-success" style="font-size: 15px;">Каталог</button>
    </form>
    <form action="/" method="post">
      <input type="text" name="name" placeholder="Введите имя" class="form-control" autocomplete="off" required><br>
      <input type="text" name="surname" placeholder="Введите фамилию" class="form-control" autocomplete="off" required><br>

      <select class="form-select" name="sex">
        <option value="" selected>Выберите пол</option>
        <option value="М">Мужской</option>
        <option value="Ж">Женский</option>
      </select><br>

      <input type="date" name="dateOfBirth" placeholder="Укажите дату рождения" class="form-control" autocomplete="off" required><br>

      <input type="text" name="team" class="form-control" placeholder="Выберите или напишите название команды" autocomplete="off" list="exampleList" required>
      <datalist id="exampleList">
        <?php require "files/teams.php"; ?>
      </datalist><br>

      <select class="form-select" name="country">
        <option value="" selected>Выберите страну</option>
        <option value="Россия">Россия</option>
        <option value="США">США</option>
        <option value="Италия">Италия</option>
      </select><br>

      <div class="d-flex gap-2 justify-content-center">
        <button  type="submit" name="enter" class="btn btn-lg btn-primary" style="font-size: 15px; width: 50%;">Добавить футболиста</button>
      </div>
    </form>
    </div>
  </div>
</body>
</html>