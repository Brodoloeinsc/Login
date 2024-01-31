<?php?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <form action="login.php" method="post">
      <h2>Login</h2>
      <input
        type="text"
        name="nome"
        placeholder="Digite seu nome"
      /><br /><br />
      <input
        type="password"
        name="senha"
        placeholder="Digite sua senha"
      /><br /><br />
      <button type="submit">Logar</button><br /><br />
      <span>Não tem conta ainda? <a href="#">Crie uma conta</a></span>
    </form>
  </body>
</html>
