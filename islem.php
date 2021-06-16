<?php

ob_start();
session_start();
include 'baglantı.php';

if(isset($_POST['kaydet'])){
     $user_tc=isset($_POST['user_tc']) ? $_POST['user_tc']:null;
     $user_name=isset($_POST['user_name']) ? $_POST['user_name']:null;
     $user_password=isset($_POST['user_password']) ? $_POST['user_password']:null;



     //veritabanı ekleme işlemi
     $sorgu=$db->prepare('INSERT INTO user SET
          user_tc=?,
          user_name=?,
          user_password=?
     ');
     $ekle=$sorgu->execute([
         $user_tc,$user_name,$user_password
     ]);
     if($ekle){
         header('location:index.php?durum=basarili');
     }else{
         $hata=$sorgu->errorInfo();
         echo 'mysql hatası'.$hata[2];
     }
}

if(isset($_POST['giris_yap'])){
    $user_tc=$_POST['user_tc'];
    $user_password=$_POST['user_password'];


    $user_sor=$db->prepare("SELECT * FROM user WHERE user_tc=:user_tc and user_password=:user_password");
    $user_sor->execute([
        'user_tc'=>$user_tc,
        'user_password'=>$user_password
    ]);

    $say=$user_sor -> rowCount();


    if($say==1){
        $_SESSION['userkullanici_tc']=$user_tc;
        header('location:anasayfa.php?durum=girisbasarili');
        exit;
    }else{
        header('location:index.php?durum=basarisizgiris');
        exit;
    }
}


if(isset($_POST['kaydet'])){
    $randevu_sehir=isset($_POST['sehir'])? $_POST['sehir']: null;
    $randevu_hastane=isset($_POST['hastane'])? $_POST['hastane']: null;
    $randevu_doktor=isset($_POST['doktor'])? $_POST['doktor']: null;
    $randevu_tarih=isset($_POST['tarih'])? $_POST['tarih']: null;
    $randevu_klinik=isset($_POST['klinik'])? $_POST['klinik']: null;
    $randevu_hasta_id=isset($_POST['user_id'])? $_POST['user_id']: null;



    $kaydet=$db->prepare('INSERT INTO randevular SET
           randevu_sehir=?,
           randevu_hastane=?,
           randevu_doktor=?,
           randevu_tarih=?,
           randevu_klinik=?,
           randevu_hasta_id=?   
    
    ');


$insert=$kaydet->execute([
    $randevu_sehir,$randevu_hastane,$randevu_doktor,$randevu_tarih,$randevu_klinik,$randevu_hasta_id
]);
if($insert){
    header("location:anasayfa.php?kayıt_basarili");
}else{
    header("location:anasayfa.php?kayıt_basarisiz");
}

}


?>