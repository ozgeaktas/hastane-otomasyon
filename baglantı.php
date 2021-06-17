<?php


try{
    $db=new PDO("mysql:host=sql107.epizy.com; port=3306; dbname=epiz_28902678_hastaneotomasyon; charest=utf8 ", 'epiz_28902678','abGpxkWNwg');
    
}catch(Exception $e){
    echo $e->getMessage();

}


?>
