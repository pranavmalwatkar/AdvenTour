<?php

function DBConnect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "admin";
    //Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    //Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function initSession()
{
    session_start();
    return $_SESSION["mySessionObject"];
}

function GetSessionVar(string $varName)
{
    // Start the session if it has not already been started
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $ss = $_SESSION["mySessionObject"];

    if (isset($ss->$varName)) {
        return $ss->$varName;
    } else {
        return null;
    }
}


function display_data(string $email)
{
    global $conn;
    $query = "select * from bookdetails where email='$email'";
    $result = mysqli_query($conn, $query);
    return $result;
}

?>