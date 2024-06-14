<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="delete.css" type="text/css" />
  <style>
    .navbar {
      overflow: auto;
      background-color: #fcfcfc00;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      margin: 0 auto;
      width: 100%;
      top: 0%;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;

    }

    .navbar a {
      float: left;
      font-size: 16px;
      color: rgb(0, 0, 0);
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-weight: 500;
      font-family: 'Quicksand', sans-serif;
      font-weight: bolder;
      font-size: large;
    }

    /* .navbar a:hover {
      background-color: rgba(0, 0, 0, 0.062);
    } */
  </style>
</head>

<body>
  <div class="navbar">
    <a href="../../Homepage/homepage.php" style="
            position: relative;
            overflow: hidden;
            padding: 1%;
            height: 55px;
            width: 350px;
            background-image: url(../../Images/logo813.jpg);
            background-size: cover;
            align-items: center;
            background-repeat: no-repeat;
          "></a>
  </div><br><br>
  <form method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> '>
    <h1 style="text-align: center">
      <u>Delete Profile</u>
    </h1>
    <p style="text-align: center; font-weight: bold;font-size: larger;">We're sorry to see you go. <br> Once your
      account is deleted,
      all of your content will be permanently gone, including your profile, bookings, and responses.</p>

    <div class="col-25">
      <div class="container">
        <p> <label for="uname" style="font-size: larger;font-weight: bold;">UserName:</label><br>
          <input type="text" name="uname" id="" class="form-field">
        </p>
        <p><label for="p1" style="font-size: larger;font-weight: bold;">Password:</label><br>
          <input type="password" name="p1" id="" class="form-field">
        </p>
        <button type="submit" class="button" name="delete">Confirm Deletion</button>
        <button type="submit" class="button" formaction="../Profile/profile.php">Cancel</button>
      </div>
    </div>

  </form>
</body>

</html>

<?php
if (isset($_POST['delete'])) {

  $username = $_POST['uname'];
  $password = $_POST['p1'];


  //Connect to the MySQL database
  require_once('../../Database/functions.php');

  $conn = DBConnect();

  if (!empty($username) && !empty($password)) {
    // Check if the connection was successful
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Define the SQL query to delete a row from the table
    $sql = "DELETE FROM users WHERE UserName='$username' AND Password='$password'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
      echo "<script>
      alert('Account Deleted successfully');
      window.location.href='../Profile/deleteform.php';
      </script>";
    } else {
      echo "Error deleting row: " . $conn->error;
    }
  } else {
    echo "<script>
    alert('Invalid Input');
    window.location.href='../Profile/deleteform.php';
    </script>";
  }
  // Close the database connection
  $conn->close();
}
?>