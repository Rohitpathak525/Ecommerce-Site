<?php
if($_POST["s"]==1)
{
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $userpassword = $_POST["userpassword"];
    $dateofbirth = $_POST["dateofbirth"];
    $gender = $_POST["gender"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $statename = $_POST["statename"];
    $country = $_POST["country"];
    $pincode = $_POST["pincode"];
    $payment = $_POST["payment"];


    if($gender == "1")
    {
        $gender = "M";
    }
    elseif($gender == "2")
    {
        $gender = "F";
    }

    elseif($gender == "3")
    {
        $gender = "O";
    }
    else{
        $gender = "NA";
    }
    //
    if($payment == "1")
    {
        $payment = "Paytm";
    }
    elseif($payment == "2")
    {
        $payment = "Cash on Delivery";
    }

    elseif($payment == "3")
    {
        $payment = "Credit Card";
    }
    elseif($payment == "4")
    {
        $payment = "Debit Card";
    }
    elseif($payment == "5")
    {
        $payment = "GPay";
    }
    elseif($payment == "6"){
        $payment = "BHIM UPI";
    }
    else {
        $payment = "NA";
    }

}

// connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "bravostore";

// create a connection
$con = mysqli_connect($servername, $username, $password, $database);                 

if(!$con)
{
    echo "Unsuccessful";
}

$sql= "INSERT INTO customers (firstname,middlename,lastname,dateofbirth,gender,phone,email,address1,address2,pincode,city,statename,country,payment,userpassword) VALUES ('$firstname','$middlename','$lastname','$dateofbirth','$gender','$phone','$email','$address1', '$address2','$pincode','$city','$statename','$country','$payment','$userpassword')";



mysqli_query($con,$sql);
echo "data inserted successfully<BR>";
mysqli_close($con);
  
?>


