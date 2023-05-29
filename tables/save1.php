<?php

  for ($i = 0; $i < 5; $i ++) {
    $data[] = $_POST["i".$i];
  }

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'Komunikacja';
    $connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (mysqli_connect_errno() != 0) {
      echo mysqli_connect_errno();
    } else {
      mysqli_query($connect,"UPDATE kierowcy
      SET
        Imie = '$data[1]',
        Nazwisko = '$data[2]',
        IDA = '$data[3]',
        Wynagrodzenie = '$data[4]'
      WHERE
        IDK = '$data[0]';
      ");
      header('Location: tabela1.php');
    }
?>