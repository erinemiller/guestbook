<?php include_once './header.php'?>

<?php

    $host = "localhost"; // add SQL server host
    $user = "root"; //SQL username
    $pass = "root"; //SQL password
    $dbname = "guestbook"; //SQL Database Name
    $con = mysqli_connect($host, $user, $pass, $dbname);
    if(mysqli_connect_errno($con)) { //Check to see if we're connected to DB
        echo "<h1> Failed to Connect to MySQL:" . mysql_connect_error() . "</h1>";
    }
?>

<div class="container">
    <div class="row">

        <?php $result = mysqli_query($con,"SELECT name, email, message FROM entries");
        while($row = mysqli_fetch_array($result)) {  ?>
            <?php include "./includes/entries.php" ?>
        <?php   } mysqli_close($con); unset($con); ?>
    </div>

</div>

<?php include_once './footer.php'?>

<!-- //the file will be included just once -->