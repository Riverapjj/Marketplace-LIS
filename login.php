<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Incio de sesión</title>
  <link rel="stylesheet" href="assets/css/style2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>LOGIN</header>
    <form action="#">
      <div class="field email">
        <div class="input-area">
          <input type="text" name="usuario" placeholder="Email Address"  value="joel">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Ingrese su usuario</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" name="contra" placeholder="Password"  value="1234">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Ingrese su contraseña</div>
      </div>
      <div class="pass-txt"><a href="#">Olvido su contraseña?</a></div>
      <input type="submit" value="Login">
    </form>
    <div class="sign-txt">Crear cuenta? <a href="#">Iniciar sesión</a></div>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($_POST['usuario'] == 'joel') {
			if ($_POST['contra'] == '1234') {
				echo 'Hola ';
			}else{
				echo 'Has olvidado poner tu nombre';
			}
		}
	}else{
		echo 'Ha ocurrido un error';
	}
    ?>
    
  </div>
</body>
</html>