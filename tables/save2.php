<?php

  for ($i = 0; $i < 2; $i ++) {
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
      mysqli_query($connect,"UPDATE autobusy
      SET
        Rejestracja = '$data[1]'
      WHERE
        IDA = '$data[0]';
      ");
      header('Location: tabela2.php');
    }
?>