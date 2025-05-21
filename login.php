<?php

$dogru_mail = "ebubekir.dogan@ogr.sakarya.edu.tr";
$dogru_sifre = "123456789";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $sifre = $_POST["sifre"];

    
    if ($email === $dogru_mail && $sifre === $dogru_sifre) {
        echo "<!DOCTYPE html>
        <html lang='tr'>
        <head>
          <meta charset='UTF-8'>
          <title>Giriş Başarılı</title>
          <style>
            body {
              background-color: #000;
              color: white;
              display: flex;
              justify-content: center;
              align-items: center;
              height: 100vh;
              font-family: Arial, sans-serif;
            }
          </style>
        </head>
        <body>
          <h2>Hoşgeldiniz,<br> </br> $email</h2>
          
        </body>
        </html>";
    } else {
        
        header("Location: login.html");
        exit();
    }
}
?>
