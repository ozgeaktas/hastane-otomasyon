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
    <table>
    <tr>
        <th>Hastane</th>
        <th>Klinik</th>
        <th>Doktor</th>
        <th>İl</th>
        <th>Tarih</th>
    </tr>

    <?php 
    $randevu_sor=$db->prepare("SELECT * FROM randevular INNER JOIN user ON randevular.randevu_hasta_id=user.user_id WHERE user_tc=:user_tc");
    $randevu_sor->execute([
        'user_tc'=>$_SESSION['userkullanici_tc']
    ]);
    while($randevu_cek=$randevu_sor->fetch(PDO::FETCH_ASSOC)){ ?>
    
    <tr>
        <td><?php echo $randevu_cek['randevu_hastane']; ?> </td>
        <td><?php echo $randevu_cek['randevu_klinik']; ?></td>
        <td><?php echo $randevu_cek['randevu_doktor']; ?></td>
        <td><?php echo $randevu_cek['randevu_sehir']; ?></td>
        <td><?php echo $randevu_cek['randevu_tarih']; ?></td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>