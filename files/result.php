<?php
require "files/config.php";

if (isset($_POST['result'])) {

  $id = $_POST['id'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $sex = $_POST['sex'];
  $date = $_POST['dateOfBirth'];
  $country = $_POST['country'];
  $team = $_POST['team'];

  $oldDates = DateTime::createFromFormat('Y-m-d', $date);
  $date = $oldDates->format('d.m.Y');

  if ($sex == NULL) {
    echo "Пол футболиста не выбран!";
  }

  elseif ($country == NULL) {
    echo "Страна не выбрана!";
  }

  if ($country != NULL and $sex != NULL) {

    $object = $pdo->prepare("UPDATE `football` SET `name` = :name, `surname` = :surname, `sex` = :sex, `dateOfBirth` = :date, `country` = :country, `team` = :team WHERE `id` = $id");
    $object->execute(array('name' => $name, 'surname' => $surname, 'sex' => $sex, 'date' => $date, 'country' => $country, 'team' => $team));

    echo "Футболист успешно изменён!";

  }
}