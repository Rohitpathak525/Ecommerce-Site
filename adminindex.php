<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminindex.css" type="text/css">
    <title>Admin Index</title>
</head>
<body>

<?php
if ($_POST["loginsuccess"] == 1)
{

?> <div class="img">       

<div class="grid-container">

<div class="grid-item">
<button>View Customers</h1></button></div>
<div class="grid-item">
<button ><a href="productindex.php">Products</a></button>
</div>
<div class="grid-item">
<button>View Orders</button>
</div>
<div class="grid-item" href="addadmin.php">
            <button>Add Admin</button>
        </div>
  
</div>

    <?php
}
else
{
    header("Location: adminlogin.php");
}


?>

</body>
</html>
