<?php

    $rej = $_POST['i0'];

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'Komunikacja';
    $connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (mysqli_connect_errno() != 0) {
      echo mysqli_connect_errno();
    } else {
      mysqli_query($connect,"
      INSERT INTO autobusy(Rejestracja)
      VALUES('$rej');
      ");
      header('Location: tabela2.php');
    }
?>