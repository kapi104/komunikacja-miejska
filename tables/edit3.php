<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style.css">
</head>

<body>

  <div class="center">
    <h1>Edycja</h1>
    <?php
    $id = $_POST["btn"];
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'Komunikacja';
    $connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (mysqli_connect_errno() != 0) {
      echo mysqli_connect_errno();
    } else {
      $result = mysqli_query($connect, "SELECT IDP as 'ID', Ulica, przyjazd, odjazd FROM przystanki WHERE IDP = $id");
      if ($result === FALSE) {
        echo 'nie udało się połączyć z bazą danych';
      } else {

        while (($row = mysqli_fetch_array($result)) !== NULL) {
          $keys = array_keys($row);
          echo '<form action="save3.php" method="post" class="przeslij">';
          for ($i = 1; $i < count($keys); $i++) {
            if ($i % 2 == 1) {
              $keys2[] = $keys[$i];
            }
          }
          for ($i = 0; $i < count($row) / 2; $i++) {

            echo $keys2[$i];

            if ($i == 0) {
              echo '<div class="input"><input type="text" class="editInput" name="i0" value="' . $row[$i] . '" readonly></div>';
            } else {
              echo '<div class="input"><input type="text" class="editInput" name="i' . $i . '" value="' . $row[$i] . '" required></div>';
            }
          }
          ;
          echo '<input type="submit" value="zapisz" name="zapisz"><br>';
          echo '<a href="../tables/tabela3.php"><input type="button" value="anuluj" name="anuluj"></a>';
          echo '</form>';

          echo '<form action="delete3.php" method="post">';
          echo '<input type="hidden" name="deleteId" value="' . $row[0] . '">';
          echo '<input type="submit" value="usuń">';
          echo '</form>';
        }
      }
    }
    ?>
  </div>

</body>

</html>