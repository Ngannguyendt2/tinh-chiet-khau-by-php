<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<?php
$name = $_POST['description'];
$price = $_POST['price'];
$discountPercent = $_POST['discount_percent'];
$discountAmount = $price * $discountPercent * 0.01;
$discountPrice = $price - $discountAmount;
echo "Product Description: " . $name . "<br>";
echo "List Price: " . $price . "<br>";
echo "Discount Percent:" . $discountPercent . "<br>";
echo "Discount Amount: " . $discountAmount . "<br>";
echo "Discount Price: " . $discountPrice;

?>
</body>
</html>
