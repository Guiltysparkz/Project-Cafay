<!DOCTYPE html>
<html>
<head>
  <title>Product Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 20px;
    }

    .product {
      display: flex;
      align-items: flex-start;
    }

    .product-image {
      flex: 0 0 300px;
      margin-right: 20px;
    }

    .product-image img {
      width: 100%;
      height: auto;
    }

    .product-info {
      flex: 1;
    }

    .product-title {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .product-description {
      margin-bottom: 20px;
    }

    .product-price {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .product-quantity {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .product-quantity label {
      margin-right: 10px;
    }

    .product-quantity input {
      width: 50px;
      padding: 5px;
    }

    .product-add-to-cart {
      margin-bottom: 20px;
    }

    .product-add-to-cart button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #555;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    .image-container {
        display: flex;
        flex-direction: column;
    }
  </style>
</head>
<header>
        <?php include ('./Cafay-Boutique-header.php') ?>
    </header>
<body>
<?php 

require_once('connect.php');

$sql = "SELECT * FROM coffee WHERE productID = 2";
$query = $db->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
  foreach ($result as $product) {
    ?>
  <div class="container">
    <div class="product">
    <div class="image-container">
  <img id="product-image" src="<?= $product['productImage'] ?>" height="300px" width="300px"><img id="product-image" src="<?= $product['productAltImage'] ?>" height="300px" width="300px">
  </div>
      <div class="product-info">
        <h1 class="product-title">Jhoan Vergara Tabi Lave</h1>
        <p class="product-description">Le producteur Jhoan Vergara nous surprenant à nouveau avec un café parfait pour l''été, aux notes de piña colada et d'eucalyptus. On vous recommande de le préparer en café glacé et/ou cold brew.</p>
  <div class="card" id="card">
  <div class="containerCard">
  <p id="product-price">A partir de <?= $product['productBasePrice'] ?> €</p>
  </div>
  </div>
  <?php
  }
?>    
        <div class="product-quantity">
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" value="1">
        </div>
        <div class="product-add-to-cart">
          <button>Add to Cart</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
