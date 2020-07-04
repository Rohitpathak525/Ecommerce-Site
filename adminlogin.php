<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminlogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <title>Admin Login</title>

</head>
<body><form action="authenticateadmin.php"  method="POST">
<table>
<tr>
<td class="email">
Email:
</td>
<td class="emailinput">
<input type="text" placeholder="Admin Name" name="adminname">

</td>
</tr>
<tr>
<td class="password">
Password:
</td>
<td class="passwordinput">

<input type="password" placeholder="Password" name="adminpassword">

</td>
</tr>

<tr>
<td class = "login button"><input class="logininput" type="submit" value="Login As Admin">
<input type="hidden" name="login" value=1>
</td></tr>
</table>


</form>


