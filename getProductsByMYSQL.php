<?php
/* require_once('connect.php');
$con=mysqli_connect("localhost","root","","cafaydb");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$table = "coffee-products";
$sql = "SELECT productID, productImage, productName, productOrigin, productCategoryScore FROM `coffee-products` ORDER BY productID";
$result = mysqli_query($con,$sql);

// Numeric array
$row = mysqli_fetch_array($result, MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1], $row[2], $row[3], $row[4]);

// Associative array
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
printf ("%s (%s)\n", $row["productID"], $row["productImage"], $row["productName"]);

// Free result set
mysqli_free_result($result);

mysqli_close($con);
*/
?>
<html>
<?php
$table = "coffee-products";
$sql = new MySQLi("localhost","root","","cafaydb");
$result = $sql->query("SELECT * FROM `$table`;");
for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);
print_r($set[0]);

?>
</html>