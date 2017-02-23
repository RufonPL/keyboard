<?php

require_once ('functions.php');

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Klawiatura</h2>
<!--
<button class="button">Q</button>
<button class="button">W</button>
<button class="button">E</button>
<button class="button">R</button>
-->
<div class="keyboard">
  <div>
    KLAWIATURA {{nazwa_placeholder}}
  </div>
  <?php
    showKeyboard();
  ?>
</div>

</body>
</html>