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
    <form action="insert1.php" method="post">
    Imię
    <div class="input"><input type="text" class="editInput" name="i0" required></div>
    Nazwisko
    <div class="input"><input type="text" class="editInput" name="i1" required></div>
    Id pojazdu
    <div class="input"><input type="number" class="editInput" name="i2" required></div>
    Wynagrodzenie
    <div class="input"><input type="number" class="editInput" name="i3" required></div>
    <input type="submit" value="dodaj"><br>
    <a href="tabela1.php"><input type="button" value="anuluj" name="anuluj"></a>
    </form>
  </div>
  
</body>
</html>