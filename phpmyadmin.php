<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  
  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

<?php include 'includes/header.php'; ?>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
  <center><h1 class="bienvenido-i">Bienvenido a phpMyAdmin</h1>
  </center>
  
<div class="caja-i">
<br />
  <table cellpadding="0" cellspacing="3" class= "tabla-i" width="80%">

        <div class="error-i"><h1>Error</h1>

 <tr>
      <td>
        <p><strong>MySQL ha dicho: </strong><img src="images/triste.png" title="" alt="" class="img-i" /> </p>
        <code>No se estableció la conexión: los parámetros están incorrectos.</code>
        <br/>
        </div>
            </td>
  </tr>
  <tr>
      <td>
        <div>mysqli_real_connect(): (HY000/2002): No se puede establecer una conexi�n ya que el equipo de destino deneg� expresamente dicha conexi�n.
        </div>
        <div> La conexión para controluser, como está definida en su configuración, fracasó.
        </div>
        <div>mysqli_real_connect(): (HY000/2002): No se puede establecer una conexi�n ya que el equipo de destino deneg� expresamente dicha conexi�n.
        </div>
        <div> phpMyAdmin intentó conectarse con el servidor MySQL, y el servidor rechazó esta conexión. Deberá revisar el host, nombre de usuario y contraseña en config.inc.php y asegurarse que corresponden con la información provista por el administrador del servidor MySQL.
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <a href="index.php" class="button">Reintentar conexión</a>
      </td>
    </tr>
</table>
</div>
</div>

<?php include 'includes/footer.php'; ?>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
