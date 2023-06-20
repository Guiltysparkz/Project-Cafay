<?php

$table = "coffee-products";

session_start();


require_once('connect.php');

$sql = 'SELECT * FROM `$table` WHERE productID = 1';

//je prepare la requete 

$query = $db->prepare($sql);

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $productTable) {
    $productRow1 = array (
    "productID" => $productTable['productID'],
    "productImg" => $productTable['productImage'],
    "productName" => $productTable['productName'],
    "productOrigin" => $productTable['productOrigin'],
    "productCategoryScore" => $productTable['productCategoryScore'],
    "productTorrefactionMethod" => $productTable['productTorrefactionMethod'],
    "productWashingMethod" => $productTable['productWashingMethod'],
    "productProductionType" => $productTable['productProductionType'],
    "productScentProfile" => $productTable['productScentProfile'],
    "productBasePrice" => $productTable['productBasePrice']
    ); 
}


require_once('close.php');

?>