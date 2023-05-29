<?php

for ($i = 0; $i < 4; $i++) {
  $data[] = $_POST["i" . $i];
}

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'Komunikacja';
$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno() != 0) {
  echo mysqli_connect_errno();
} else {
  mysqli_query($connect, "UPDATE przystanki
      SET
        Ulica = '$data[1]',
        przyjazd = '$data[2]',
        odjazd = '$data[3]'
      WHERE
        IDP = '$data[0]';
      ");
  header('Location: tabela3.php');
}
?>