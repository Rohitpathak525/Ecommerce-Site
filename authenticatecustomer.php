<?php

    if ($_POST["login"] == 1)
    {

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

        
        $email = $_POST["email"];
        $loginpassword = $_POST["loginpassword"];

        $sql = "SELECT email, userpassword FROM customers";
        //WHERE email = '".$email."' AND  userpassword = '".$loingpassword."'
        $r = mysqli_query($con, $sql);
        $count = 0;
        while($row = mysqli_fetch_assoc($r))
        {
            if($email == $row["email"] && $loginpassword == $row["userpassword"])
            {
                $count = $count + 1;
            }
        }
        // $result1 = "SELECT userpassword FROM customers WHERE email = '".$email."'";
        // $result2 = "SELECT email FROM customers WHERE userpassword = '".$loginpassword."'";
        // mysqli_query($con, $result1 );
        // mysqli_query($con, $result2 );
        
        if ( $count > 0 ) 
            { 
            ?>

            <form id="proceed" action="customerindex.php" method="POST">
                <input type="hidden" name="loginsuccess" value=1>
            </form>
            <script>
                document.getElementById('proceed').submit();
            </script>

            <?php
            }
            else
            {
                echo'The username or password are incorrect!';
            }




    }

    else
    {
        header("Location: customerlogin.php");
    }

?>