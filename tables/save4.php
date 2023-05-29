<?php

for ($i = 0; $i < 3; $i++) {
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
  mysqli_query($connect, "UPDATE rozkladjazdy
      SET
        IDA = '$data[1]',
        IDPK = '$data[2]'
      WHERE
        IDT = '$data[0]';
      ");
  header('Location: tabela4.php');
}
?>