<?php
/**
 * Set up POST variables to connect DB
 * * Sets up DB connection for our from using POST vars
 */

// var_dump($name); //*Dump information about a variable to the view.
// print_r($name); //Essentially the same as dump. It prints infor about a variable, boolean, string, etc.
// die; //*This version of die simply kills the program at the point in the code where you declare it.
// die($name); //This version of die; allows you to kill the program AND print information about the variable.
?>



<?php
    //supergoals are globally scoped by default in PHP
    //$_GET();
    //$_POST();

    //making non-super-global variables globally scoped
    //global $myVar;
    //$myVar = "I am now a global variable";


    $name = $_POST['name'];
    $lastName=$_POST['lastName'];
    $phone=$_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO entries(name, lastName, phone, email, message) VALUES('$name',  '$lastName', '$phone','$email','$message')";
    if(!mysqli_query($con,$sql)){  //If we are not connected to the DB ',' or our fields aren't recognized by our db
        die('Error: ' . mysqli_error($con)); 
    } else {
        mysqli_close($con);
    }
    
    ?>
?>

<!-- 
hw: make a navagation 
figure out if should be in the header
or its own include 
-->