<?php
//Galang, Ericson Lemuel N.
$username = "Eric";
$greeting = "Hello, $username";
$productName = "Fries";
$quantity = 5;
$normalPrice = 4;
$discountPrice = 3;
$offer = [$productName, $quantity, $normalPrice, $discountPrice];
$usual_price = $offer[1] * $offer[2];
$offer_price = $offer[2] * $offer[3];
$saving = $usual_price - $offer_price;
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <nav>
    <a href="product.php">PRODUCT</a>
    <a href="footer.php">FOOTER</a>
    <a href="header.php">HEADER</a>
  </nav>

  <h1><?php echo $greeting; ?></h1>

  <p><?php echo $saving; ?></p>

  <p>Here is the quantity of the product you need to buy <?php echo $offer[1]; ?> and the name of the product <?php echo $offer[0]; ?>.</p>

  <p>The discounted price <?php echo $offer_price; ?> and your casual price <?php echo $usual_price; ?></p>
</body>
</html>