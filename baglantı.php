<?php

try{
    $db=new PDO("mysql:host=localhost; dbname=hastane-otomasyon; charest=utf8 ", 'root','');
    
}catch(Exception $e){
    echo $e->getMessage();

}


?>