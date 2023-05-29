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
    <h1>Nowy rekord</h1>
    <form action="insert4.php" method="post">
    ID Autobusu
    <div class="input"><input type="number" class="editInput" name="i0" required></div>
    ID Przystanku Końcowego
    <div class="input"><input type="Number" class="editInput" name="i1" required></div>
    <input type="submit" value="dodaj"><br>
    <a href="tabela4.php"><input type="button" value="anuluj" name="anuluj"></a>
    </form>
  </div>
  
</body>
</html>