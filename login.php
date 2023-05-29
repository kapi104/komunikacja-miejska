<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <script src="logowanie.js"></script>
</head>

<body>
  <div class="logo">
    LOGO
  </div>
  <div class="container">
    <div class="login">
      <h1 class="title">Logowanie</h1>
      <div class="formularz">

      </div>
      <a href="#" class="switch">rejestracja</a>
    </div>
  </div>

  <script>
    const form = document.querySelector('.formularz');
    form.innerHTML = loginScript;
    const zmien = document.querySelector('.switch');
    const title = document.querySelector('.title');
    let current = 'log';


    zmien.addEventListener('click', () => {
      if (current == 'log') {
        form.innerHTML = registerScript;
        current = 'reg';
        zmien.innerHTML = 'Logowanie';
        title.innerHTML = 'Rejestracja';
      } else {
        form.innerHTML = loginScript;
        current = 'log';
        zmien.innerHTML = 'Rejestracja';
        title.innerHTML = 'Logowanie';
      }
    })
  </script>
</body>

</html>