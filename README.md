# Upload-images-to-database-and-Display-Them-using-PHP-
Use language - HTML, PHP, MYSQL, CSS ||  Frameworks - Bootstrap
<br><br>
***************Important this****************<br>
When you using this, <br>
you have to make a New folder named images<br>
with index.php and config.php files
<br><br>
otherwise it will not working<br>
********************************************
<br><br>
Code Explain
<br><br>

<b>config.php file</b>
<br><br>

    <?php
        $server = "localhost";
        $user  = "root";
        $pass = "";
        $db = "test_image";

        $con = mysqli_connect($server,$user,$pass,$db);

        if(!$con){
            die("Connecting Lost...!".mysqli_connect_error());
        }
    ?>

<br>
According to this above file, <br>
we have to make caonnection with database we have to use <br>
1. Server Name <br>
2. Server User <br>
3. Server Password <br>
4. Database Name <br>

<br><br>
in order to xampp default server Name, User, Password are
<br>
Server --> Localhost<br>
User --> root<br>
<br>
and there is no password<br>

if you using password you have to mention it in password area
<br><br>

