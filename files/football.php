<?php
require "config.php";

$obj = $pdo->query("SELECT * FROM football ORDER BY `id` DESC");
$obj->execute();
while ($team = $obj->fetch(PDO::FETCH_OBJ)) { ?>
  <label class="list-group-item d-flex gap-2">
    <form action="/catalog.php" method="post">
      <button type="submit" name="red" class="red"><img src="files/img/red.png" alt="редактировать" class="redicon"></button>
      <input type="hidden" name="id" value="<?php echo $team->id; ?>">
    </form>
    <table>
      <tr>
        <td style="width: 20%"><?php echo $team->name; ?></td>
        <td style="width: 20%"><?php echo $team->surname; ?></td>
        <td style="width: 9%"><?php echo $team->sex; ?></td>
        <td style="width: 10%"><?php echo $team->dateOfBirth; ?></td>
        <td style="width: 15%"><?php echo $team->country; ?></td>
        <td style="width: 26%"><?php echo $team->team; ?></td>
      </tr>
    </table>
  </label>
<?php } ?> 