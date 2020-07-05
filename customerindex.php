<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>    

    <link rel="stylesheet" href="customerindex.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>User Home Page</title>
</head>
<body>

<?php
if ($_POST["loginsuccess"] == 1)
{

?>
<div class="row">
    <div class="col-md-4">
    <img src="avatar.png" alt="">
    </div>
    <div class="col-md-4">
    <div class="v1"></div>
</div>

<div class="col-md-4"> <button class="form1" ><a href="customerviewproduct.php">View Products</a></button></div>   
<div class= "col-md-4"><button class="form2">View Orders</button></div>
<div class="col-md-4"> <button class="form3 mt-3"><a href="cart.php">View Cart</a></button> </div>   
<!-- </div> -->
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
