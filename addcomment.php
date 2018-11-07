<?php
    //config-db.php
    $host = "localhost"; // add SQL server host
    $user = "root"; //SQL username
    $pass = "root"; //SQL password
    $dbname = "guestbook"; //SQL Database Name
    $con = mysqli_connect($host, $user, $pass, $dbname);
    if(mysqli_connect_errno($con)) { //Check to see if we're connected to DB
        echo "<h1> Failed to Connect to MySQL:" . mysql_connect_error() . "</h1>";
    }
?>


<?php
    //config-post.php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO entries(name, email, message) VALUES('$name', '$email','$message')";
    if(!mysqli_query($con,$sql)){  //If we are not connected to the DB ',' or our fields aren't recognized by our db
        die('Error: ' . mysqli_error($con)); 
    } else {
        mysqli_close($con);
    }   
?>
