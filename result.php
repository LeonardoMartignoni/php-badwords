<?php
$word = $_POST['paragraph'];
$length_word = strlen($word);
$filtered_word = str_replace('ipsum', '***', $word);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  <h1>PHP Badword</h1>
  <h3>Hai inserito questa frase:</h3>
  <p>
    <?= $word ?>
  </p>

  <h3>Il risultato è:</h3>
  <p>
    <?= $filtered_word ?>
  </p>
  <p>
    La frase è lunga <?= $length_word ?> caratteri
  </p>
</body>
</html>