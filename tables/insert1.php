<?php

  for ($i = 0; $i < 4; $i ++) {
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
      mysqli_query($connect,"
      INSERT INTO kierowcy(Imie, Nazwisko, IDA, Wynagrodzenie)
      VALUES('$data[0]','$data[1]','$data[2]','$data[3]');
      ");
      header('Location: tabela1.php');
    }
?>