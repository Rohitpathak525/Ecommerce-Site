<?php


if(isset($_GET["action"]))
{

 if($_GET["action"] == "clear")
 {
  setcookie("shoppingcart", "", time() - 3600, "/");
  header("location:cart.php?clearall=1");
 }

 if($_GET["action"] == "delete")
 {
     $cookiedata = stripslashes($_COOKIE['shoppingcart']);
     $cartdata = json_decode($cookiedata, true);
     var_dump($cartdata);
     foreach($cartdata as $key => $values)
     {
         if($cartdata[$key]['item_id'] == $_GET["id"])
         {
             unset($cartdata[$key]);
             $item_data = json_encode($cartdata);
             setcookie("shoppingcart", $item_data, time() + (86400 * 30), "/");
             header("location:cart.php");
         }
     }
     
 }




}


// connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "bravostore";

// create a connection
$con = mysqli_connect($servername, $username, $password, $database);      


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Font awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Products</title>
  </head>
  <body>
    
  
 
    <div class="container mt-4">
      <div class="row justify-content-center">
        <div class="col-lg-11">
        <div class="table responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                <td colspan="7">
                <h3 text-center> Your Products!</h3>
                </td>
                </tr>
                <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Base price</th>
                <th>GST</th>
                <th>Total amount</th>
                <!-- get request  -->
                <th><a onclick="return confirm('Are you sure you want to clear your cart? ')" href="cart.php?action=clear" class="badge badge-danger"><i class="fa fa-trash"></i> Clear cart</a></th></tr>
            </thead>
                <tbody>

                <?php 

                if(isset($_COOKIE["shoppingcart"]))
                {
                  
                  $total = 0;
                  $gst = 0;
                  $totalamount = 0;
                  $cookiedata = stripslashes($_COOKIE['shoppingcart']);
                  $cartdata = json_decode($cookiedata, true);
                  foreach($cartdata as $keys => $values)
                  {               
                    $productname = $values["item_name"];
                    $priceperunit = $values["item_price"];
                    $buyquantity = $values["item_quantity"];
                    $id = $values["item_id"];
                    $total += $priceperunit*$buyquantity;
                    $gst = 0.05;
                    $totalamount = ($total) + ($total)*$gst;
                    
                  ?>
                      <tr>
                      <td><input type="text" class="form-control text-center" value="<?php echo $productname ;?>"></td>
                      <td><input type="number" class="form-control text-center" min="1" value="<?php echo $buyquantity; ?>" disabled></td>
                      <td><input type="text" class="form-control text-center" width=100px value="<?php echo $priceperunit ;?>" disabled></td>
                      <td><input type="number" class="form-control text-center" min="1" value="<?php echo $total; ?>" disabled></td>
                      <td><input type="number" class="form-control text-center" value=<?php echo $gst?> disabled></td>
                      <td><input type="number" class="form-control text-center"  value="<?php echo $totalamount; ?>" disabled></td>

                      <td><a href="cart.php?action=delete&id=<?php echo $id?>" class="text-danger"><i class="fa fa-trash"></i> </a></td>
                    
                      <!-- <//?php ?> -->

              <?php }?>
                    <tr><td colspan="6"><a href="customerviewproduct.php" class="btn btn-success"><i class="fa fa-cart-plus"></i> Continue Shopping</a></td>
                    <!-- <td colspan="2" class="mt-2">Amount to be paid</td> -->
                    <!-- <td><i class="fa fa-rupee"></i> <?php echo number_format($total,2)?></td> -->
                    <!-- go for payment  -->
                    <td><a href="" class="btn btn-info"><i class="fa fa-credit-card"></i>Pay</a></td>
                    </tr>
                    </tr>
                  </tbody>
            <?php }
              else {
                echo '<tr> <td colspan="5" align="center">No Item in Cart</td></tr>';
               }
            ?>
          </table>
        </div>
        </div>
      </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
