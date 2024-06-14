<?php
function DBConnect1()
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



function display_data1(string $email)
{
    global $conn;
    $query = "select * from bookdetails ";
    $result = mysqli_query($conn, $query);
    return $result;
}
function display_payment()
{
    global $conn;
    $query = "select * from payment ";
    $result = mysqli_query($conn, $query);
    return $result;
}
function display_enquiries()
{
    global $conn;
    $query = "select * from enquiries ";
    $result = mysqli_query($conn, $query);
    return $result;
}


function display_users()
{
    global $conn;
    $query = "select * from users ";
    $result = mysqli_query($conn, $query);
    return $result;
}



?>