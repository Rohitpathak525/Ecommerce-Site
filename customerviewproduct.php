<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customerviewproduct.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Buy Products</title>
</head>

<body>

<?php

    
    $conn = new mysqli("localhost", "root", "", "charliestore");
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
    else
    {
        $sql="select * from products" ;
        $r=mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($r))
        {
?>


    <div class="card">
        <!-- <div class="image">
            <img src="productpic.jpg" alt="#" style="width:100%">
        </div> -->
        <div class="cost">
            <h3>Per Piece Cost: 
            <?php 
            
            echo $row["priceperunit"];  
            
            ?></h3>
        </div>
        <div class="name">
            <p><?php echo $row["productname"]; ?></p>
        </div>
        <div class="btn">
            <form action=addtocart.php method="post">
                <input type="hidden" name="productid" value=<?php echo $row["productid"]; ?>>
                <input type="number" name="orderquantity" placeholder="Quantity" >
                <input type="submit"  value="Add to cart">
            </form>
        </div>
    </div>

<?php
        }
    }
    mysqli_close($conn);

?>



</body>
</html>