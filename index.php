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
<form method="post" action="display_discount.php">
    <div>
        <label>Product Description:</label>
        <input type="text" name="description"/><br/>
        <label>List Price:</label>
        <input type="text" name="price"/><br/>
        <label>Discount Percent:</label>
        <input type="text" name="discount_percent"/>(%)<br/>
    </div>
    <div>
        <label>&nbsp;</label>
        <input type="submit" value="Calculate Discount"/>
    </div>
</form>
</body>
</html>
