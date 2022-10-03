<?php
require "config.php";

$query=$pdo->query("SELECT DISTINCT `team` FROM football");
$query->execute();
while ($team = $query->fetch(PDO::FETCH_OBJ)) { ?>

    <option value="<?php echo $team->team; ?>"> 

<?php } ?>