<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style.css">
</head>

<body>
  <div class="tcontainer">
    <div class="tnav">
      <div class="header">
        LOGO
      </div>
      <div class="link"><a href="tabela1.php">Kierowcy</a></div>
      <div class="link"><a href="tabela2.php">Autobusy</a></div>
      <div class="link"><a href="tabela3.php">Przystanki</a></div>
      <div class="link"><a href="tabela4.php">Rozkład jazdy</a></div>
    </div>
    <div class="tableContent">

      <h1>Autobusy</h1>

      <div class="table">
        <div class="top"></div>
        <?php

        session_start();

        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'Komunikacja';

        $connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        $head = false;

        if (mysqli_connect_errno() != 0) {
          echo mysqli_connect_errno();
        } else {
          $result = mysqli_query($connect, "SELECT a.IDA as 'ID', a.Rejestracja, k.Imie as 'Imię', k.Nazwisko FROM autobusy a LEFT OUTER JOIN kierowcy k
          ON k.IDA = a.IDA
          ORDER BY a.IDA ASC");
          mysqli_query($connect, "SET CHARSET utf8");
          mysqli_query($connect, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");



          if ($result === FALSE) {
            echo 'nie udało się połączyć z bazą danych';
          } else {

            $num = 0;
            while (($row = mysqli_fetch_array($result)) !== NULL) {

              $keys = array_keys($row);
              for ($i = 3; $i < count($keys); $i++) {
                if ($i % 2 == 1) {
                  $keys2[] = $keys[$i];
                }
              }
              if ($head == false) {
                echo '<div class="headRow">';
                echo '<form action="" method="post">';
                echo '<div class="idWrap"><input type="text" class="id" disabled value="' . $keys[1] . '"></div>';
                for ($i = 0; $i < count($keys2); $i++) {
                  if ($i % 2 == 0) {
                    $p = 1;
                  } else {
                    $p = 2;
                  }
                  echo '<div class="input"><input type="text" class="p' . $p . '" name="i' . $i . '" value="' . $keys2[$i] . '" disabled></div>';
                }
                echo '</form>';
                echo '</div>';
                $head = true;
              }


              echo '<div class="row" data-number="' . $num . '">';
              echo '<form action="edit2.php" method="post">';
              echo '<div class="edit">
                <button type="submit" name="btn" value="' . $row[0] . '" class="btn">
                  <img src="../img/edit.png" alt="">
                </button>
              </div>';
              echo '<div class="idWrap"><input type="text" class="id" name="id" disabled value="' . $row[0] . '"></div>';
              for ($i = 1; $i < count($row) / 2; $i++) {
                if ($i % 2 == 1) {
                  $p = 1;
                } else {
                  $p = 2;
                }
                echo '<div class="input"><input type="text" class="p' . $p . '" name="i' . $i . '" value="' . $row[$i] . '" disabled data-number="' . $num . '"></div>';
              }
              ;
              echo '</form>';
              echo '</div>';
              $num += 1;
            }
          }
        }
        mysqli_close($connect);

        ?>

      </div>
      <a href="create2.php"><input type="button" value="nowy rekord"></a>
    </div>
  </div>
  <script src="../js/dbEdit.js"></script>
</body>

</html>