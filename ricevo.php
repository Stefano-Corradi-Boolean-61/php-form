<?php


//var_dump($_POST);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ricevo form</title>
</head>
<body>
<p>
  Grazie per esserti registrato! <br>
  Ecco i tuoi dati:
</p>
<ul>
  <?php foreach($_POST as $key => $value): ?>
    <li> <?php echo "$key: $value"  ?> </li>
  <?php endforeach; ?>
</ul>
  
</body>
</html>