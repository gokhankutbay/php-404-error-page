<?php

$error = $SERVER["REDIRECT_STATUS"];
$error_title= '';
$error_message= '';

if($error == 404)
{
    $error_title= '404 Page Not Gound';
    $error_message= 'The document/file requested not found on this server.';
}

?>

<!DOCTYPE html>
<html lang="tr">
    <head>
      <style>
        /*===== GOOGLE FONTS =====*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

/*===== VARIABLES CSS =====*/
:root{
  --header-height: 3rem;

  /*===== Colors =====*/
  --first-color: #3E0E12;
  --first-color-dark: #2F0A0D;
  --text-color: #524748;
  --first-color-light: #7B6F71;
  --first-color-lighten: #ffffff;

  /*===== Font and typography =====*/
  --body-font: 'Poppins', sans-serif;
  --biggest-font-size: 2.5rem;
  --h1-font-size: 1.5rem;
  --h2-font-size: 1.25rem;
  --h3-font-size: 1.125rem;
  --normal-font-size: .938rem;
  --small-font-size: .813rem;
  --smaller-font-size: .75rem;

  /*===== Font weight =====*/
  --font-medium: 500;
  --font-semi-bold: 600;
  --font-bold: 700;

  /*===== Margenes =====*/
  --mb-1: .5rem;
  --mb-2: 1rem;
  --mb-3: 1.5rem;
  --mb-4: 2rem;
  --mb-5: 2.5rem;
  --mb-6: 3rem;

  /*===== z index =====*/
  --z-normal: 1;
  --z-tooltip: 10;
  --z-fixed: 100;
}
  
@media screen and (min-width: 768px){
  :root{
    --biggest-font-size: 4.5rem;
    --h1-font-size: 2.25rem;
    --h2-font-size: 1.5rem;
    --h3-font-size: 1.25rem;
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    --smaller-font-size: .813rem;
  }
}

a:link {
    color: green;    
    text-decoration: none;
}
a:visited {
    color: #CC4B2C;   
    text-decoration: none;
}
a:hover {
    color: #662616;
    text-decoration: underline;
}
a:active {
    color: black;    
}

/*===== BASE =====*/
*,::before,::after{
  box-sizing: border-box;
}

html{
  scroll-behavior: smooth;
}

body{
  margin: var(--header-height) 0 0 0;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  font-weight: var(--font-medium);
  background-color: var(--first-color-lighten);
  color: var(--text-color);
  line-height: 1.6;
}

h1,h2,h3,ul,p{
  margin: 0;
}

h2,h3{
  font-weight: var(--font-semi-bold);
}

ul{
  padding: 0;
  list-style: none;
}

a{
  text-decoration: none;
}

img{
  max-width: 100%;
  height: auto;
  display: block;
}


      </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== SWIPER CSS ===== -->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        
        <!-- ===== BOX ICONS ===== -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>  

        <title>404 - Sayfa Bulunamadı</title>
    </head>
    <body>
      <div><br><br><br><br>
        <center><h1>404</h1></center>
        
        
        <center><h3>Aradığınız sayfa kaldırılmış, adı değiştirilmiş ya da geçici olarak kullanım dışı olabilir. Ana sayfaya dönmek için <a href="https://www.gokhankutbay.ml">tıklayın...</a></h3></center><BR><BR>
        
      </div>
        
        <!-- ===== MIXITUP FILTER ===== -->
        <script src="assets/js/mixitup.min.js"></script>
        
        <!-- ===== SWIPER JS ===== -->
        <script src="assets/js/swiper-bundle.min.js"></script>
        
        <!-- ===== GSAP ===== -->
        <script src="assets/js/gsap.min.js"></script>
        
        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>