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

  
