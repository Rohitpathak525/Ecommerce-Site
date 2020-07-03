<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <title>product inventory</title>
</head>
<body>

<?php
if($_POST["addproduct"] == 1)
{

?>

<form action="productdb.php" method="POST">
<div class="container">
    <div class="grid-item">
        <label for="productname">Product Name</label>
        <input type="text" name="productname">
    </div>
    <div class="grid-item">
        <label for="productimage">Product Image</label>
        <input type="text" name="productimage">
    </div>
    <div class="grid-item">
        <label for="priceperunit">Price per Piece</label>
        <input type="text" name="priceperunit">
    </div>
    <div class="grid-item">
        <label for="inventoryquantity">Number of Pieces</label>
        <input type="text" name="inventoryquantity">
    </div>
    <div class="grid-item">
        <label for="manufacturingdate">Manufacturing Date</label>
        <input type="date" name="manufacturingdate">
    </div>
    <div class="grid-item">
        <label for="tags">Tags</label>
        <input type="text" name="tags">
    </div>
    <div class="grid-item">
        <input type="hidden" name="addproduct" value=1>
        <input class="addbutton" type="submit"  value="Add to Inventory">
    </div>
   
</div>
</form>



<?php

}

?>

</body>
</html>
