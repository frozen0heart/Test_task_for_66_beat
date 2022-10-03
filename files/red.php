<?php
require "files/config.php";

if (isset($_POST['red'])) {

  $id = $_POST['id'];

  $foot = $pdo->query("SELECT * FROM football WHERE `id` = $id");
  $foot->execute();
  $football = $foot->fetch(PDO::FETCH_OBJ);

  $oldDates = DateTime::createFromFormat('d.m.Y', $football->dateOfBirth);
  $date = $oldDates->format('Y-m-d');

  ?>
  <div id="zatemnenie" style="position: fixed;">
    <a href="" class="popup__overlay"></a>
    <div id="okno">
      <form action="/catalog.php" method="post" id="for">
        <h1 class="center">Редактирование футболиста</h1>
        <input type="text" name="name" value="<?php echo $football->name; ?>" placeholder="Введите имя" class="form-control" autocomplete="off" required><br>
        <input type="text" name="surname" value="<?php echo $football->surname; ?>" placeholder="Введите фамилию" class="form-control" autocomplete="off" required><br>

        <select class="form-select" name="sex">
          <option value="" selected>Выберите пол</option>
          <option <?php if ($football->sex == "М") { ?> selected <?php } ?> value="М">Мужской</option>
          <option <?php if ($football->sex == "Ж") { ?> selected <?php } ?> value="Ж">Женский</option>
        </select><br>

        <input type="date" value="<?php echo $date; ?>" name="dateOfBirth" placeholder="Укажите дату рождения" class="form-control" autocomplete="off" required><br>

        <input type="text" value="<?php echo $football->team; ?>" name="team" class="form-control" placeholder="Выберите или напишите название команды" autocomplete="off" list="exampleList" required>
        <datalist id="exampleList">
          <?php require "teams.php"; ?>
        </datalist><br>

        <select class="form-select" name="country">
          <option value="" selected>Выберите страну</option>
          <option <?php if ($football->country == "Россия") { ?> selected <?php } ?> value="Россия">Россия</option>
          <option <?php if ($football->country == "США") { ?> selected <?php } ?> value="США">США</option>
          <option <?php if ($football->country == "Италия") { ?> selected <?php } ?> value="Италия">Италия</option>
        </select><br>

        <input type="hidden" name="id" value="<?php echo $football->id; ?>">

        <button type="submit" name="result" class="btn fw-bold border-success" style="margin-top: 10px; width: 250px">Сохранить изменения</button>
      </form>
    </div>
  </div>
<?php } ?>