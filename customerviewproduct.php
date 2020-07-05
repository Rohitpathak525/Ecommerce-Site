<?php

// connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "bravostore";

// create a connection
$con = mysqli_connect($servername, $username, $password, $database);      


if(isset($_POST["addtocart"]))
{
    // echo "Hello";
    // when quantity gets more than 1 check if cookie exists 
    if(isset($_COOKIE["shoppingcart"]))
    {
        $cookiedata = stripslashes($_COOKIE["shoppingcart"]);
        $cartdata = json_decode($cookiedata, true);
    }
    else
    {
        $cartdata = array(); // empty array for new prod
    }

    // getting list of item id
    $itemidlist = array_column($cartdata, "item_id");

    // adding same item in a cart 
    if(in_array($_POST["hidden_id"], $itemidlist))
    {
        foreach($cartdata as $key => $value)
        {
            // ????
            if($cartdata[$key]["item_id"] == $_POST["hidden_id"])
            {
            $cartdata[$key]["item_quantity"] = $cartdata[$key]["item_quantity"] + $_POST["orderquantity"];
            }
            
        }
    }
    else
    {
        $itemarray = array(
        'item_id'   => $_POST["hidden_id"],
        'item_name'   => $_POST["hidden_name"],
        'item_price'  => $_POST["hidden_price"],
        'item_quantity'  => $_POST["orderquantity"]
        );
        $cartdata[] = $itemarray;   // assoc to 2D
    }


    $itemdata = json_encode($cartdata);  // itemdata has encoded array
    setcookie('shoppingcart', $itemdata, time()+ (86400*2), "/");
    header("location:customerviewproduct.php");
}

//remove a product 

// alert messages for success, remove, clearall

if(isset($_GET["success"]))
{
 $message = '
 <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Item Added into Cart
 </div>
 ';
}

if(isset($_GET["success"])) // no bootstrap here 
{
    $msg = ' <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Item Added into Cart
    </div>';
}

?>



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
    
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
    else
    {
        $sql="SELECT * from products" ;
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
            <form name="form" action="customerviewproduct.php" method="post">
                <input type="number" min="1" name="orderquantity" placeholder="Quantity" >

                <input type="hidden" name="hidden_name" value="<?php echo $row["productname"]; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $row["priceperunit"]; ?>" />
                <input type="hidden" name="hidden_id" value="<?php echo $row["productid"]; ?>" />
                <!-- isset addtocart  -->
                <input type="submit" name="addtocart" value="Add to cart" />
            </form>
        </div>
    </div>
   

<?php
        }

       echo " <button> <a  href='cart.php' > Proceed to Cart </a></button>";
    }
    mysqli_close($conn);

?>



</body>
</html>
