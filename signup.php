<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>User Registeration</title>

<script> 
          
            function checkPassword(form) { 
                if (form.userpassword.value == '') 
                    alert ("Please enter Password"); 
                      
                else if ( form.confirmpassword.value == '') 
                    alert ("Please enter confirm password"); 
                      
                else if (form.userpassword.value != form.confirmpassword.value)
                { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
            } 
        
</script> 
</head>
<body>

<?php
if($_POST["signup"] == 1)
{

?>

<div class="container">
<form onSubmit = "return checkPassword(this)" action="userdb.php" method="POST">

    <table>
        <h2>Signup</h2>
        <tr>
            <td>
                First Name
            </td>
            <td>
            <input type="text" placeholder="First Name" name="firstname" required>
            </td>
        </tr>
        <tr>
            <td>
                Middle Name
            </td>
            <td>
            <input type="text"  placeholder="Middle Name" name="middlename" >
            </td>
        </tr>
        <tr>
            <td>
                Last Name
            </td>
            <td>
            <input type="text"  placeholder="Last Name" name="lastname" required >
            </td>
        </tr>
        <tr>
            <td>
                Email
            </td>
            <td>
            <input type="email"  placeholder="Your email" name = "email" required >
            </td>
        </tr>
        <tr>
            <td>
                Password
            </td>
            <td>
            <input type="password"  placeholder="Your password" name = "userpassword"  required>
            </td>
        </tr>
        <tr>
            <td>
                Confirm Password
            </td>
            <td>
            <input type="password"  placeholder="Confirm password" name = "confirmpassword" required >
            </td>
        </tr>
        <tr>
            <td>
                 Gender
            </td>
            <td>
            <input type="radio" value=1 name = "gender" selected>Male
            <input type="radio" value=2  name = "gender" >Female
            <input type="radio" value=3  name = "gender" >Non Binary
            <input type="radio" value=4  name = "gender" >Prefer Not to Mention
            </td>
        </tr>
        <tr>
            <td>
                Phone Number
            </td>
            <td>
            <input type="text"  name = "phone"  required>
            </td>
        </tr>
        <tr>
            <td>
                Date of Birth
            </td>
            <td>
            <input type="date" name = "dateofbirth" required>
            </td>
        </tr>
        <tr>
            <td>
                Address Line 1
            </td>
            <td>
            <input type="text"  name = "address1" required>
            </td>
        </tr>
        <tr>
            <td>
                Address Line 2
            </td>
            <td>
            <input type="text" name = "address2">
            </td>
        </tr>
        
        <tr>
            <td>
                City
            </td>
            <td>
            <input type="text" name = "city" required>
            </td>
        </tr>
        <tr>
            <td>
                State
            </td>
            <td>
            <input type="text" name = "statename" required>
            </td>
        </tr>
        <tr>
            <td>
                Country
            </td>
            <td>
            <input type="text" name = "country" required>
            </td>
        </tr>
        <tr>
            <td>
                Pin Code
            </td>
            <td>
            <input type="text" name = "pincode" required>
            </td>
        </tr>
        <tr>
            <td>
                Preferred Payment Method
            </td>
            <td>
                <select name="payment">
                    <option value=1>Paytm</option>
                    <option value=2>Cash on Delivery</option>
                    <option value=3>Credit Card</option>
                    <option value=4>Debit Card</option>
                    <option value=5>GPay</option>
                    <option value=6>BHIM UPI</option>
                </select>
            
            </td>
        </tr>
        <tr>
        <td><input type="submit"  value="Signup"></td>
        </tr>
    </table>
    <input  type="hidden" name="s" value=1>

</form>

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
