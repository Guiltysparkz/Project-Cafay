<?php

//connection a la base 

try{
$db = new PDO('mysql:host=localhost;dbname=cafaydb', 'root','');
$db->exec('SET NAMES "UTF8"');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage();
    die();
}

?>