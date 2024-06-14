<?php
//Connect to the MySQL database
require_once('../Database/functions.php');

$conn = DBConnect();
$result = display_data("email");
if (isset($_POST['submit'])) {
  $adults = $_POST['adults'];
  $children = $_POST['children'];
  $destination = $_POST['destination'];
  $price = $_POST['price'];
  $email = getSessionVar('email');
  $redirectTo = $_POST['redirectTo'];

  if (!empty($destination) && !empty($price) && !empty($email)) {
    $query = "INSERT INTO bookdetails (email,destination,adults,children,price) VALUES('$email','$destination','$adults','$children','$price')";
    $result = $conn->query($query);
    // echo $destination;
    if ($destination == "PuneTour" || $destination == "MumbaiTour" || $destination == "DelhiTour") {
      echo "<script>window.location.href='../Payment/payment.php'; </script>";
    }
    if ($result) {
      echo "<script>
        alert('Added to My Bookings!');
        window.location.href='../$redirectTo'; </script>";
    } else {
      echo "<script> alert('Invalid Input');
      window.location.href='../$redirectTo'; </script>";
    }
  } else {
    echo "<script> alert('Invalid');
      window.location.href='../$redirectTo'; </script>";
  }
}

?>