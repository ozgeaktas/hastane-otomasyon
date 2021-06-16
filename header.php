<?php


ob_start();
session_start();


  include 'baglantı.php';


  $user_sor=$db->prepare("SELECT * FROM user WHERE user_tc=:user_tc");
  $user_sor->execute([
      'user_tc'=>$_SESSION['userkullanici_tc']
  ]);

  $say=$user_sor->rowCount();

  $usercek=$user_sor->fetch(PDO::FETCH_ASSOC);

  if($say==0){
      header('location:index.php?izinsizgiriş');
      exit;
  }






?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hastane Otomasyonu</title>
</head>
<body>
    <div class="ust-bar">
         <a href="anasayfa.php"><h1>Hastane Otomasyonu</h1></a>
         <div class="menu">
            <a href="hesap.php"><h5>Hesap Bilgileri</h5></a>
            <a href="randevu.php"><h5>Randevu Bilgileri</h5></a>
         </div>
    </div>
   <a href="logout.php"> <div class="cikis">
         Çıkış Yap
    </div></a>
</body>
</html>