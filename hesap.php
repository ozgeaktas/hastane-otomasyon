<?php include 'header.php'; ?>

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
    <div class="icerik">
        <div class="label">
             <label>Adı SOYADI:</label><input type="text" placeholder="<?php echo $usercek['user_name']?>"><br>             
        </div>
        <div class="label">
             <label>TC NO:</label><input type="text"placeholder="<?php echo $usercek['user_tc']?>" ><br>             
        </div>
        
    </div>
</body>
</html>