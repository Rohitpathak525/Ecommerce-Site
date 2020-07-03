<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminindex.css" type="text/css">
    <title>Admin Index</title>
</head>
<body>
    <div class="container">
        <div class="tile1">
            <h1>View Customers</h1>
        </div>
        <div class="tile2">
            <h1>Products</h1>
            <form action="product.php" method="POST">
                <input type="hidden" name="addproduct" value=1>
                <input type="submit" value="Add Product">
            </form>
        </div>
        <div class="tile3">
            <h1>View Orders</h1>
        </div>
    </div>
</body>
</html>