<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hastane otomasyonu</title>
</head>
<body>
    <header>
        <h3>Hastane Otomasyonu</h3>
    </header>
    <div class="giris-tablo">
        <h1>Üye Ol</h1>
        <form action="islem.php" method="POST">
            <input type="text" name="user_name" placeholder="ad soyad"><br>
            <input type="text" name="user_tc" placeholder="TC Kimlik No"><br>
            <input type="password" name="user_password" placeholder="Şifre"><br>
            <button type="submit" class="sub" id="giris" name="kaydet">Üye Ol</button>
            <br>
        </form>
        <a href="index.php"><button type="submit" class="sub" id="uye">Çıkış</button></a>
    </div>
</body>
</html>