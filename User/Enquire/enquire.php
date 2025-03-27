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
      </button>
      <div class="dropdown-content">
        <a href="../Homepage/Profile/profile.php">Profile</a>
        <a href="../Login/login.html">Sign Out</a>
      </div>
      &emsp;&emsp;&emsp;&emsp;&nbsp;
    </div>
  </div>
  <div class="content">
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdId5cUY9TLLCZfoQoDlq6ZLeamGYGy_Cc1m-HfnwMQL_wciw/viewform?usp=header"></iframe>
  </div>
</body>

</html>