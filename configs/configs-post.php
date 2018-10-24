<?php
/**
 * Set up POST variables to connect DB
 */
?>



<?php
    //supergoals are globally scoped by default in PHP
    //$_GET();
    //$_POST();

    //making non-super-global variables globally scoped
    //global $myVar;
    //$myVar = "I am now a global variable";


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO entries(name, email, message) VALUES('$name', '$email','$message')";

?>

<!-- 
hw: make a navagation 
figure out if should be in the header
or its own include 
-->