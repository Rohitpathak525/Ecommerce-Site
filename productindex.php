<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>    

    <link rel="stylesheet" href="productindex.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Product Index</title>
</head>
<body>

<div class="row">
<div class=col-md-4>
<img src="avatar.png" alt="">
</div>
<div class="col-md-4">
<div class="v1"></div>
</div>
      <div class="col-md-4">       <form action="addproduct.php" method="POST" class="form1">
                <input type="hidden" name="addproduct" value=1>
                <input class="productbutton"type="submit" value="Add Product">
                   </form>
                     <form action="adminviewproduct.php" method="POST" class="form2">
                <input type="hidden" name="viewproduct" value=1>
                <input class="productbutton"type="submit" value="View Products">
                   </form>
                <form action="" method="POST" class="form3">
                <input type="hidden" name="viewproduct" value=1>
                <input class="productbutton"type="submit" value="Delete Products">
    
          </form>
</div>
</div>

</body>