<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table style="border-collapse:collapse;">
    <?php
    for ($i = 1; $i <= 9; $i++) {
      echo '<tr>';
      for ($j = 1; $j <= 9; $j++) {
        echo '<td style="border:solid 1px #000000;padding:0;margin:0;">';
        $value = $i * $j;
        echo $value . '</td>';
      }
      echo '</tr>';
    }
    ?>
  </table>
</body>
</html>