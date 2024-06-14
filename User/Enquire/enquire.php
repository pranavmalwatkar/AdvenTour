<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Alata" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../Enquire/enquire.css" type="text/css" />
</head>

<body>
  <?php
  session_start();
  $retrievedSessionObject = $_SESSION["mySessionObject"];
  ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="navbar">
      <!-- Invisible buttons-disabled hover -->
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>

      <a href="../Homepage/homepage.php" style="
            position: relative;
            overflow: hidden;
            padding: 0%;
            height: 55px;
            width: 200px;
            background-image: url(../Images/logo813.jpg);
            background-size: cover;
            align-items: center;
            background-repeat: no-repeat;
          "></a>
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
      <a href="" class="hover-underline-animation">News</a>
      <a href="../Homepage/aboutus.php" class="hover-underline-animation">About Us</a>
      <a href="./enquire.php" class="hover-underline-animation">Enquire</a>
      <div class="dropdown">
        <button class="dropbtn">
          <i class="fas fa-user-alt"></i>
          <?php echo $retrievedSessionObject->name; ?>
          </b>
        </button>
        <div class="dropdown-content">
          <a href="../Homepage/Profile/profile.php">Profile</a>
          <a href="../Login/login.html">Sign Out</a>
        </div>
        &emsp;&emsp;&emsp;&emsp;&nbsp;
      </div>
    </div>


    <div class="enquiry">
      <div class="content">
        <h3 style="color:#ff6d12; font-size:6vh ">Send Enquiry:</h3>
        <input type=text name="fname" placeholder="Enter First Name">
        <input type=text name="lname" placeholder="Enter Last Name">
        <input type=email name=email placeholder="Enter Your Email">
        <p><textarea name="message" id="" cols="25" rows="10" placeholder="Message" class=txta></textarea></p>
        <p><button class="btnenq" name=enquire>Enquire</button></p>
      </div>
    </div>
  </form>
</body>

</html>

<?php
if (isset($_POST['enquire'])) {

  $Fname = $_POST['fname'];
  $Lname = $_POST['lname'];
  $Email = $_POST['email'];
  $Message = $_POST['message'];


  //Connect to the MySQL database
  require_once('../Database/functions.php');

  $conn = DBConnect();

  if (!empty($Fname) && !empty($Lname) && !empty($Email) && !empty($Message)) {
    $INSERT = "INSERT Into enquiries(First_name,Last_name,Email,UserComments) values(?,?,?,?)";
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ssss", $Fname, $Lname, $Email, $Message);
    $stmt->execute();

    // $INSERT = "INSERT Into enquiries(Frist_name,Last_name,Email,Message) values('$Fname','$Lname','$Email','$Message')";
    // $result = $conn->query($INSERT);

    echo "<script> alert('Enquiry Sent Successfully.');
    window.location.href='../Enquire/enquire.php';
    </script>";


  } else {
    echo "<script> alert('Please enter all the details.');
            window.location.href='../Enquire/enquire.php';
            </script>";
  }
}
?>