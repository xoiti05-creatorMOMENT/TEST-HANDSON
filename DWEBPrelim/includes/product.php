<?php
$name = "Eric";
$greeting = "Hello, $name";
if (isset($name) && !empty($name)) {
    $greeting = "Hello, " . $name . "! Welcome to our website.";
} else {
    $greeting = "Hello, Guest! Welcome to our website.";
}

$cost = 10;
$product = "banana";
$price = 15; 
$totals = [];

for ($i = 1; $i <= 15; $i++) {
    $subtotal = $price * $i;
    $sdiscount = ($subtotal / 100) * ($i * 4);
    $totals[$i] = $subtotal - $sdiscount;
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <nav>
    <a href="index.php">INDEX</a> |
    <a href="footer.php">FOOTER</a> |
    <a href="header.php">HEADER</a>
  </nav>

  <?php include('header.php'); ?>

  <h1><?php echo $greeting; ?></h1>
  <h2><?php echo $product; ?></h2>

  <table border="1">
    <tr><th>Quantity</th><th>Pack(s)</th><th>Price</th></tr>
    <?php
    foreach ($totals as $quantity => $finalPrice) {
        echo "<tr>";
        $packText = ($quantity == 1) ? "pack" : "packs";
        echo "<td>$quantity</td>";
        echo "<td>$packText</td>";
        echo "<td>$$finalPrice</td>";
        echo "</tr>";
    }
    ?>
  </table>

  <?php include('footer.php'); ?>

</body>
</html>