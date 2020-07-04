<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addproduct.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <title>product inventory</title>
</head>
<body>

<?php
if($_POST["addproduct"] == 1)
{

?>

<form action="addproductdb.php" method="POST">
<div class="grid-container">
    <div class="grid-item">
        <label for="productname">Product Name</label>
        </div>
        <div class="grid-item">
        <input type="text" name="productname">
    </div>
    <div class="grid-item">
        <label for="productimage">Product Image</label>
        </div>
        <div class="grid-item">
        <input type="text" name="productimage">
    </div>
    <div class="grid-item">
        <label for="priceperunit">Price per Piece</label>
        </div><div class="grid-item">
        <input type="text" name="priceperunit">
    </div>
    <div class="grid-item">
        <label for="inventoryquantity">Number of Pieces</label>
        </div><div class="grid-item">
        <input type="text" name="inventoryquantity">
    </div>
    <div class="grid-item">
        <label for="manufacturingdate">Manufacturing Date</label>
</div><div class="grid-item">
        <input type="date" name="manufacturingdate">
    </div>
    <div class="grid-item">
        <label for="tags">Tags</label>
</div><div class="grid-item">
        <input type="text" name="tags">
    </div>
    <div class="grid-item">
        <input type="hidden" name="addproduct" value=1>
        </div><div class="inventory">
        <input class="addbutton" type="submit"  value="Add to Inventory">
    </div>
   
</div>
</form>



<?php

}

?>

</body>
</html>