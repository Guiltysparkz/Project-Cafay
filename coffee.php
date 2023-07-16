<!DOCTYPE html>
<?php session_start();
session_destroy();
var_dump($_SESSION);
?>
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

    .product-quantity button {
      padding: 5px 10px;
      font-size: 16px;
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
if (!$db) {
    die("Database connection failed.");
}

$id = $_GET['id'];

// Check if the product is added to the cart
if (isset($_POST['add_to_cart'])) {
    $productID = intval($_POST['productID']);
    $quantity = intval($_POST['quantity']);

    // Validate if both values are valid integers
    if ($productID > 0 && $quantity > 0) {
        // Store the quantity in the session
        $_SESSION['cart'][$productID] = [
            'quantity' => $quantity
        ];

        // Retrieve the product details from the database
        $stmt = $db->prepare("SELECT productName, productBasePrice FROM coffee WHERE productID = :productID");
        $stmt->bindParam(':productID', $productID);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the product is found
        if ($product) {
            // Store the product in the database
            $stmt = $db->prepare("INSERT INTO panier (productID, productName, price, quantity) VALUES (:productID, :productName, :productPrice, :quantity)");
            $stmt->bindParam(':productID', $productID);
            $stmt->bindParam(':productName', $product['productName']);
            $stmt->bindParam(':productPrice', $product['productBasePrice']);
            $stmt->bindParam(':quantity', $quantity);
            $result = $stmt->execute();

            // Check if the insertion was successful
            if ($result) {
                echo "Product added to the cart successfully.";
            } else {
                echo "Error adding the product to the cart.";
            }
        } else {
            echo "Product not found.";
        }
    } else {
        // Handle the case where the values are not valid integers
        echo "Invalid productID or quantity.";
    }
}

$sql = "SELECT * FROM coffee WHERE productID = $id";
$query = $db->prepare($sql);
$query->execute();
$errorInfo = $query->errorInfo();
if ($errorInfo[0] !== '00000') {
    echo "Error executing query: " . $errorInfo[2];
}
$result = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $product) {
    ?>
    <div class="container">
        <div class="product">
            <div class="image-container">
                <img id="product-image" src="<?= $product['productImage'] ?>" height="300px" width="300px">
                <img id="product-image" src="<?= $product['productAltImage'] ?>" height="300px" width="300px">
            </div>
            <div class="product-info">
                <h1 class="product-title"><?= $product['productName'] ?></h1>
                <p class="product-description"><?= $product['productDescription'] ?></p>
                <div class="card" id="card">
                    <div class="containerCard">
                        <p id="product-price">A partir de <?= $product['productBasePrice'] ?> €</p>
                    </div>
                </div>
                <form method="POST" action="panier.php">
                    <div class="product-quantity">
                        <label for="quantity">Quantity:</label>
                        <button type="button" id="decrement-quantity">-</button>
                        <input type="number" id="quantity" name="quantity" value="1" min="1">
                        <button type="button" id="increment-quantity">+</button>
                    </div>
                    <div class="product-add-to-cart">
                        <input type="hidden" name="productID" value="<?= $product['productID'] ?>">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
}
?>
<script>
    var quantityInput = document.getElementById('quantity');
    var incrementButton = document.getElementById('increment-quantity');
    var decrementButton = document.getElementById('decrement-quantity');

    incrementButton.addEventListener('click', function() {
        var currentQuantity = parseInt(quantityInput.value);
        quantityInput.value = currentQuantity + 1;
    });

    decrementButton.addEventListener('click', function() {
        var currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
        }
    });
</script>
</body>
</html>
