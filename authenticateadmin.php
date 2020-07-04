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

        $adminname = $_POST["adminname"];
        $loginpassword = $_POST["adminpassword"];

        $sql = "SELECT adminname, adminpassword FROM admin";
        //WHERE email = '".$email."' AND  userpassword = '".$loingpassword."'
        $r = mysqli_query($con, $sql);
        $count = 0;
        while($row = mysqli_fetch_assoc($r))
        {
            if($adminname == $row["adminname"] && $loginpassword == $row["adminpassword"])
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

            <form id="proceed" action="adminindex.php" method="POST">
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
        header("Location: adminlogin.php");
    }

?>