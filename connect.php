<?php

//connection a la base 

try{
$db = new PDO('mysql:host=localhost;dbname=cafaydb', 'root','');
$db->exec('SET NAMES "UTF8"');

}catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage();
    die();
}

?>