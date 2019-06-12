<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      
      <!-- Login Form -->
      <form action="<?php echo RUTA_URL ?>/paginas/security/login" method="POST">
        <input type="text" id="login" class="fadeIn second" name="user" placeholder="login">
        <input type="text" id="password" class="fadeIn third" name="pass" placeholder="password">
        <input type="submit" class="fadeIn fourth" value="login">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>

    </div>
  </div>
</body>
</html>
