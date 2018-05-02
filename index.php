<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Welcome to XAMPP</title>
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
  <link rel="stylesheet" href="css/estilos-jm.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="images/favicon-xampp.png" rel="icon" type="image/png" />

</head>
<body>


<!-- Cabecera
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


  <?php include 'includes/header.php' ?>


<!-- Franja
–––––––––––––––––––––––––––––––––––––––––––––––––– -->


  <div class="franja-jm">
      <div class="linea-arriba-jm"></div>
        <div class="icono-titulo-jm">
            <div class="contenedor-logo-jm">
                <img class="logo-jm" src="http://localhost/dashboard/images/xampp-logo.svg" alt="Icono">
            </div>
            <div class="contenedor-titulo-jm">
                <h2 class="titulo-jm"><strong>XAMPP</strong> Apache + MariaDB + PHP + Perl</h2>            
            </div>
        </div>
      <div class="linea-abajo-jm"></div>
  </div>


<!-- Cuerpo
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


  <div class="container">
    <div class="row">
      <div class="twelve columns cuerpo-jm">

          <h3>Welcome to XAMPP for Windows 7.2.4</h3>
          <p class="parrafos-jm">You have successfully installed XAMPP on this system! Now you can start using Apache, MariaDB, PHP and other components. You can find more info in the <a class="tanslate-jm" href="faq.php">FAQs</a> section or check the <a class="tanslate-jm" href="guides.php">HOW-TO Guides</a> for getting started with PHP applications.</p>
          <p class="parrafos-jm">XAMPP is meant only for development purposes. It has certain configuration settings that make it easy to develop locally but that are insecure if you want to have your installation accessible to others. If you want have your XAMPP accessible from the internet, make sure you understand the implications and you checked the <a class="tanslate-jm" href="faqs.php">FAQs</a> to learn how to protect your site. Alternatively you can use <a class="tanslate-jm" href="">WAMP</a>, <a class="tanslate-jm" href="">MAMP</a> or <a class="tanslate-jm" href="">LAMP</a> which are similar packages which are more suitable for production.</p>
          <p class="parrafos-jm">Start the XAMPP Control Panel to check the server status.</p>

          <h4>Community</h4>
          <p class="parrafos-jm">XAMPP has been around for more than 10 years – there is a huge community behind it. You can get involved by joining our <a class="tanslate-jm" href="">Forums</a>, adding yourself to the <a class="tanslate-jm" href="">Mailing List</a>, and liking us on <a class="tanslate-jm" href="">Facebook</a>, following our exploits on <a class="tanslate-jm" href="">Twitter</a>, or adding us to your <a class="tanslate-jm" href="">Google+</a> circles.</p>

          <h4>Contribute to XAMPP translation at <a class="tanslate-jm" href="">translate.apachefriends.org.</a></h4>
          <p class="parrafos-jm">Can you help translate XAMPP for other community members? We need your help to translate XAMPP into different languages. We have set up a site, <a class="tanslate-jm" href="">translate.apachefriends.org</a>, where users can contribute translations.</p>

          <h4>Install applications on XAMPP using Bitnami</h4>
          <p class="parrafos-jm">Apache Friends and Bitnami are cooperating to make dozens of open source applications available on XAMPP, for free. Bitnami-packaged applications include Wordpress, Drupal, Joomla! and dozens of others and can be deployed with one-click installers. Visit the <a class="tanslate-jm" href="">Bitnami XAMPP page</a> for details on the currently available apps.</p>

          <img src="images/bitnami-xampp.png" alt="Logos" class="img-final-jm">
        
      </div>
    </div>
  </div>


<!-- Footer
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


  <?php include 'includes/footer.php' ?>


</body>
</html>
