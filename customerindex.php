<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customerindex.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>User Home Page</title>
</head>
<body>

<?php
if ($_POST["loginsuccess"] == 1)
{

?>
    <div class="container">
        <div class="tile1">
            <h1>Buy</h1>
        </div>
        <div class="tile2">
            <h1>View Orders</h1>
        </div>
        <div class="tile3">
            <h1>Cart</h1>
        </div>
    </div>

<?php
}
else
{
    header("Location: customerlogin.php");
}


?>

</body>
</html>