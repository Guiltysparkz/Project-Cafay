<?php
session_start();
// Establish database connection
require('./connect.php');

// Check if the form was submitted with valid data
if (isset($_POST['add_to_cart'])) {
    $productID = $_POST['productID'] ?? null;
    $quantity = $_POST['quantity'] ?? null;

    // Validate if both values are valid integers
    $productID = intval($productID);
    $quantity = intval($quantity);

    if ($productID > 0 && $quantity > 0) {
        // Retrieve the product details from the database
        $stmt = $db->prepare("SELECT productName, productBasePrice FROM coffee WHERE productID = :productID");
        $stmt->bindParam(':productID', $productID);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the product is found
        if ($product) {
            // Calculate the subtotal price
            $subtotal = $product['productBasePrice'] * $quantity;

            // Store the product in the database with the subtotal
            $stmt = $db->prepare("INSERT INTO panier (productID, productName, price, quantity, subtotal) VALUES (:productID, :productName, :productPrice, :quantity, :subtotal)");
            $stmt->bindParam(':productID', $productID);
            $stmt->bindParam(':productName', $product['productName']);
            $stmt->bindParam(':productPrice', $product['productBasePrice']);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->bindParam(':subtotal', $subtotal);
            $result = $stmt->execute();

            // Check if the insertion was successful
            if ($result) {
                //echo "Product added to the cart successfully.";
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

$sql = "SELECT * FROM coffee WHERE productID = $productID";
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
                        <p id="product-price">Le prix par produit: <?= $product['productBasePrice'] ?> €</p>
                    </div>
                </div>
                <div class="product-add-to-cart">
                    <form method="POST" action="">
                        <input type="hidden" name="productID" value="<?= $product['productID'] ?>">
                        <div class="quantity-controls">
                            <button type="button" class="quantity-decrement">-</button>
                            <input type="number" name="quantity" value="<?=$quantity?>" min="1">
                            <button type="button" class="quantity-increment">+</button>
                        </div>
                        <input type="hidden" name="subtotal" value="<?= $product['productBasePrice'] * $quantity ?>">
                        <button type="submit" name="add_to_cart">Mettre à jour votre nombre de produit(s)</button>
                        <p id="subtotal">Le prix total est: <?= $product['productBasePrice'] * $quantity ?> €</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const quantityInput = document.querySelector("input[name='quantity']");
        const decrementButton = document.querySelector(".quantity-decrement");
        const incrementButton = document.querySelector(".quantity-increment");

        decrementButton.addEventListener("click", function() {
            if (quantityInput.value > 1) {
                quantityInput.value--;
            }
        });

        incrementButton.addEventListener("click", function() {
            quantityInput.value++;
        });
    });
</script>
