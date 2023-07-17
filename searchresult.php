<?php

if(isset($_GET['query'])) {
  $query = $_GET['query'];
  require_once('./connect.php');
  // Perform the search query in your database
  // Replace 'your_table' with the actual name of your table and 'productName' with the corresponding column name
  $sql = "SELECT * FROM coffee WHERE productName LIKE :query";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':query', '%' . $query . '%');
  $stmt->execute();
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Display the search results
  if(count($results) > 0) {
    foreach($results as $result) {
      // Display each product with a link to the product page based on productID
      echo '<a href="coffee.php?id=' . $result['productID'] . '">';
      echo '<img src="' . $result['productImage'] . '" alt="' . $result['productName'] . '">';
      echo '</a>';
    }
  } else {
    echo 'No results found.';
  }
}
?>